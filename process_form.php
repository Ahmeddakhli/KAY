<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Perform validation (optional)
    if (empty($name) || empty($email) || empty($phone)) {
        // Handle validation errors (e.g., display an error message)
    } else {

        $data = "Name: $name\nEmail: $email\nPhone: $phone\n";
        file_put_contents("form_data.txt", $data, FILE_APPEND);    }
}
?>