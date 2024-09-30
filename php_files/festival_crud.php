<?php
include('../php_files/db_connections.php');

// Function to handle file uploads
function uploadImage($file)
{
    $targetDir = "../assets/img/";
    $targetFile = $targetDir . basename($file["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $uploadOk = 1;

    // Check if image file is a actual image or fake image
    $check = getimagesize($file["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size (limit to 2MB)
    if ($file["size"] > 8000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        return null;
    } else {
        // Try to upload file
        if (move_uploaded_file($file["tmp_name"], $targetFile)) {
            return $targetFile;
        } else {
            echo "Sorry, there was an error uploading your file.";
            return null;
        }
    }
}
// Create Festival
if (isset($_POST['create_festival'])) {
    $festival_name = $_POST['festival_name'];
    $festival_description = $_POST['festival_description'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $venue = $_POST['venue'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];

    // Handle image upload
    $image = uploadImage($_FILES['image']);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO festivals (festival_name, festival_description, start_date, end_date, venue, price, image, category_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssdsi", $festival_name, $festival_description, $start_date, $end_date, $venue, $price, $image, $category_id);

    if ($stmt->execute()) {
        echo "New festival created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    header('Location: ../admin/festivals_list.php');
    $stmt->close();
}

// Read Festivals
$sql = "SELECT * FROM festivals";
$result = $conn->query($sql);
$festivalData = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $festivalData[] = $row;
    }
}

// Update Festival
if (isset($_POST['update_festival'])) {
    $festival_id = $_POST['festival_id'];
    $festival_name = $_POST['festival_name'];
    $festival_description = $_POST['festival_description'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $venue = $_POST['venue'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];

    // Handle image upload if a new file is provided
    $image = null;
    if ($_FILES['image']['size'] > 0) {
        $image = uploadImage($_FILES['image']);
    }

    // Prepare the update statement
    if ($image) {
        $stmt = $conn->prepare("UPDATE festivals SET festival_name=?, festival_description=?, start_date=?, end_date=?, venue=?, price=?, image=?, category_id=? WHERE festival_id=?");
        $stmt->bind_param("sssssdssi", $festival_name, $festival_description, $start_date, $end_date, $venue, $price, $image, $category_id, $festival_id);
    } else {
        $stmt = $conn->prepare("UPDATE festivals SET festival_name=?, festival_description=?, start_date=?, end_date=?, venue=?, price=?, category_id=? WHERE festival_id=?");
        $stmt->bind_param("sssssdsi", $festival_name, $festival_description, $start_date, $end_date, $venue, $price, $category_id, $festival_id);
    }

    if ($stmt->execute()) {
        echo "Festival updated successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Delete Festival
if (isset($_GET['delete_festival'])) {
    $festival_id = $_GET['delete_festival'];
    $stmt = $conn->prepare("DELETE FROM festivals WHERE festival_id = ?");
    $stmt->bind_param("i", $festival_id);

    if ($stmt->execute()) {
        // echo "Festival deleted successfully";
        header('Location: ../admin/festivals_list.php');

    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

$conn->close();
?>
