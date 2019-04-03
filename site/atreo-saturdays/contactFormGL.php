<?php
    if(isset($_POST['submit'])) {
        $myemail = 'atreoentertainment@gmail.com ';
        $name = $_POST['fullName'];
        $guests = $_POST['guestAmount'];
        $promoter = $_POST['promoter'];
        $phone = $_POST['number'];
        $email = $_POST['email'];
        $comments = $_POST['notes'];
        $subject = "Atreo Guest List";
        $message = "Name: $name
Guest Amount: $guests
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
