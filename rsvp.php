<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['firstName']);
    
    $data = "First Name: $firstName\n";
    
    $file = 'rsvp_data.txt';
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
    
    echo "RSVP received for $firstName.";
} else {
    echo "Error: Invalid request.";
}
?>

