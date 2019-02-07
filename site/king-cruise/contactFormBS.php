<?php
    if(isset($_POST['submit'])) {
        $myemail = 'neebjustin@gmail.com';
        $name = $_POST['fullName'];
        $bottleAmount = $_POST['bottleAmount'];
        $phone = $_POST['number'];
        $email = $_POST['email'];
        $boothSize = $_POST['boothSize'];
        $comments = $_POST['notes'];
        $subject = "Atreo Bottle Service";
        $message = "Name: $name
Booth Size: $boothSize
Bottle Package: $bottleAmount
Phone: $phone
Email: $email
Notes: $comments";
        mail($myemail, $subject, $message);
        header('Location: formComplete.html');
        exit();
    } else {

    }
?>
