<!-----------PHP CODE FOR SENDING FORM ON EMAIL----------------------->

<?php
if (isset($_POST["submit"])) {
    $to = "ranjan@erainfotech.co";
    $name = trim($_POST["name"]);
    $phone = trim($_POST["contact"]);
    $email = trim($_POST["plot"]);
    $services = trim($_POST["area"]);
    $message = trim($_POST["note"]);

    $messages = "Name: " . $name . "<br />\r\n";
    $messages .= "Phone: " . $phone . "<br />\r\n";
    $messages .= "Plot: " . $email . "<br />\r\n";
    $messages .= "Area: " . $services . "<br />\r\n";
    $messages .= "Message: " . $message . "<br />\r\n";

    $subject = "Enquiry From " . $name;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    $headers .= 'From: ' . "$name" . '<' . "$email" . '>' . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $messages, $headers)) {
?>
        <script>
            alert('Your mail has been sent. We will contact you soon. Thank you.');
            window.location.href = 'index.php';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('Mail not sent.');
            window.location.href = 'index.php';
        </script>
<?php
    }
}
?>


<!-----------------CLOSE PHP CODE-------------------->