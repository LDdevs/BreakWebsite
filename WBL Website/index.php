 <?php

 $name = $_POST["name"];
 $email = $_POST["email"];
 $subject = $_POST["subject"];
 $message = $_POST["message"];

 if (isset($_POST['submit'])) {
    $to = $_POST['email']; 
    $subject = $_POST['name'];
    $message = getRequestURI();
    $from = "lisadownie5@gmail.com";
    $headers = "From:" . $from;

    if (mail($to, $subject, $message, $headers)) {
        echo "Mail Sent.";
    }
    else {
        echo "failed";
    }
}

?>