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

// Create Event
if (isset($_POST['create_event'])) {
    $event_name = $_POST['event_name'];
    $event_description = $_POST['event_description'];
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    $venue = $_POST['venue'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];

    // Handle image upload
    $image = uploadImage($_FILES['image']);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO events (event_name, event_description, event_date, event_time, venue, price, image, category_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssdsd", $event_name, $event_description, $event_date, $event_time, $venue, $price, $image, $category_id);

    if ($stmt->execute()) {
        echo "New event created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    header('Location: ../admin/events_list.php');
    $stmt->close();
}

// Read Events
$sql = "SELECT * FROM events";
$result = $conn->query($sql);
$eventData = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $eventData[] = $row;
    }
}

// Update Event
if (isset($_POST['update_event'])) {
    $event_id = $_POST['event_id'];
    $event_name = $_POST['event_name'];
    $event_description = $_POST['event_description'];
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
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
        $stmt = $conn->prepare("UPDATE events SET event_name=?, event_description=?, event_date=?, event_time=?, venue=?, price=?, image=?, category_id=? WHERE event_id=?");
        $stmt->bind_param("sssssdsdi", $event_name, $event_description, $event_date, $event_time, $venue, $price, $image, $category_id, $event_id);
    } else {
        $stmt = $conn->prepare("UPDATE events SET event_name=?, event_description=?, event_date=?, event_time=?, venue=?, price=?, category_id=? WHERE event_id=?");
        $stmt->bind_param("sssssddi", $event_name, $event_description, $event_date, $event_time, $venue, $price, $category_id, $event_id);
    }

    if ($stmt->execute()) {
        echo "Event updated successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Delete Event
if (isset($_GET['delete_event'])) {
    $event_id = $_GET['delete_event'];
    $stmt = $conn->prepare("DELETE FROM events WHERE event_id = ?");
    $stmt->bind_param("i", $event_id);

    if ($stmt->execute()) {
        // echo "Event deleted successfully";
        header('Location: ../admin/events_list.php');

    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

$conn->close();
?>
