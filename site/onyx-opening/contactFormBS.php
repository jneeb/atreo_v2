<?php
    if(isset($_POST['submit'])) {
        $myemail = 'atreoentertainment@gmail.com';
        $name = $_POST['fullName'];
        $bottleAmount = $_POST['bottleAmount'];
        $promoter = $_POST['promoter'];
        $phone = $_POST['number'];
        $email = $_POST['email'];
        $boothSize = $_POST['boothSize'];
        $comments = $_POST['notes'];
        $subject = "Atreo Bottle Service";
        $message = "Name: $name
Booth Size: $boothSize
Bottle Package: $bottleAmount
Promoter: $promoter
Phone: $phone
Email: $email
Notes: $comments";
        mail($myemail, $subject, $message);
        header('Location: formComplete.html');
        exit();
    } else {

    }
?>
