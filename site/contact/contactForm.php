<?php
    if(isset($_POST['submit'])) {
        $myemail = 'atreoentertainment@gmail.com';
        $name = $_POST['fullName'];
        $email = $_POST['email'];
        $comments = $_POST['notes'];
        $subject = "Atreo Contact Form";
        $message = "Name: $name
        Email: $email
        Notes: $comments";
        mail($myemail, $subject, $message);
        header('Location: formComplete.html');
        exit();
    } else {

    }
?>
