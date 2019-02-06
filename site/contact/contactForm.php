<?php
    if(isset($_POST['submit'])) {
        $myemail = 'neebjustin@gmail.com';
        $option = $_POST['option'];
        $name = $_POST['fullName'];
        $email = $_POST['email'];
        $comments = $_POST['notes'];
        $subject = "Atreo Contact - $option";
        $message = "
        Name: $name
        Email: $email
        Notes: $comments";
        mail($myemail, $subject, $message);
        header('Location: formComplete.html');
        exit();
    } else {

    }
?>
