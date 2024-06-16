<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $patronymic = $_POST['patronymic'];
    $gender = $_POST['gender'];
    $bloodGroup = $_POST['bloodGroup'];
    $phone = $_POST['phone'];
    $nationality = $_POST['nationality'];
    $dob = $_POST['dob'];
    $expiryDate = $_POST['expiryDate'];
    $personalNo = $_POST['personalNo'];
    $cardNo = $_POST['cardNo'];
    $address = $_POST['address'];
    
    $passportFace = $_FILES['passportFace']['name'];
    $passportBack = $_FILES['passportBack']['name'];
    $passportFaceName = 'front_'. time() . '.jpg';
    $passportBackName = 'back_'. time() . '.jpg';
    move_uploaded_file($_FILES['passportFace']['tmp_name'], "uploads/" . $passportFaceName);
    move_uploaded_file($_FILES['passportFace']['tmp_name'], "uploads/" . $passportBackName); 
    
    $to = "cavid.kazimov.98@bk.ru";
    $subject = "New Client Registration";
    $message = "Here is all registration details:\n
    Name: $name\n
    Surname: $surname\n
    Patronymic: $patronymic\n
    Gender: $gender\n
    Blood Group: $bloodGroup\n
    Phone: $phone\n
    Nationality: $nationality\n
    Date of Birth: $dob\n
    Passport Expiry Date: $expiryDate\n
    Personal No: $personalNo\n
    Card No: $cardNo\n
    Address: $address\n
    Passport Face: uploads/$passportFace\n
    Passport Back: uploads/$passportBack\n";
    
    $headers = "From: noreply@example.com";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Registration successful, email sent.";
    } else {
        echo "Failed to send email.";
    }
}

