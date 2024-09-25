<?php
include('db_connections.php');
// Create Booking
if (isset($_POST['create_booking'])) {
    $full_name = $_POST['fname'] . ' ' . $_POST['lname'];
    $email = $_POST['email'];
    $mobile_no = $_POST['number'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $quantity = $_POST['quantity'];
    $ticket_price = $_POST['total_price'];
    $booking_date = date('Y-m-d H:i:s');
    $event_id = isset($_POST['event_id']) ? $_POST['event_id'] : NULL;
    $festival_id = isset($_POST['festival_id']) ? $_POST['festival_id'] : NULL;

    if ($event_id !== NULL) {
        $festival_id = NULL;
    } else if ($festival_id !== NULL) {
        $event_id = NULL;
    }

    // SQL query with proper handling of NULL values
    $sql = "INSERT INTO booking (full_name, email, mobile_no, address, city, event_id, festival_id, ticket_price, quantity, booking_date)
            VALUES ('$full_name', '$email', '$mobile_no', '$address', '$city', 
            " . ($event_id !== NULL ? $event_id : 'NULL') . ", 
            " . ($festival_id !== NULL ? $festival_id : 'NULL') . ", 
            '$ticket_price', $quantity, '$booking_date')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Booking successful!";
    } else {
        $_SESSION['error'] = "Error: " . $sql . "<br>" . $conn->error;
    }

    if ($event_id !== NULL){
        header('Location: ../events.php');
    } else {
        header('Location: ../festivals.php');
    }
    
    exit();
}

// Update Booking
if (isset($_POST['update_booking'])) {
    $booking_id = $_POST['booking_id'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobile_no'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $quantity = $_POST['quantity'];
    $ticket_price = $_POST['ticket_price'];
    $booking_type = $_POST['booking_type'];

    // Determine IDs based on booking type
    if ($booking_type === 'event') {
        $event_id = $_POST['event_id'];
        $festival_id = NULL; // No festival ID
    } else {
        $festival_id = $_POST['festival_id'];
        $event_id = NULL; // No event ID
    }

    $sql = "UPDATE booking SET 
            full_name = '$full_name', 
            email = '$email', 
            mobile_no = '$mobile_no', 
            address = '$address', 
            city = '$city', 
            event_id = $event_id, 
            festival_id = $festival_id, 
            ticket_price = '$ticket_price', 
            quantity = '$quantity' 
            WHERE booking_id = $booking_id";

    if ($conn->query($sql) === TRUE) {
        echo "Booking updated successfully!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    header('Location: booking_form.php');
    exit();
}

// Delete Booking
if (isset($_GET['delete_booking'])) {
    $booking_id = $_GET['delete_booking'];
    $sql = "DELETE FROM booking WHERE booking_id = $booking_id";

    if ($conn->query($sql) === TRUE) {
        echo "Booking deleted successfully!";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    header('Location: booking_form.php');
    exit();
}

$conn->close();
?>
