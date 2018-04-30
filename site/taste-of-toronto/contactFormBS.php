<?php
    if(isset($_POST['submit'])) {
        $myemail = 'mail@neebmedia.com';
        $name = $_POST['fullName'];
        $bottleAmount = $_POST['bottleAmount'];
        $phone = $_POST['number'];
        $email = $_POST['email'];
        $comments = $_POST['notes'];
        $subject = "Atreo Bottle Service";
        $message = "Name: $name
        Bottle Amount: $bottleAmount
        Phone: $phone
        Email: $email
        Notes: $comments";
        mail($myemail, $subject, $message);
        header('Location: formComplete.html');
        exit();
    } else {

    }
?>
