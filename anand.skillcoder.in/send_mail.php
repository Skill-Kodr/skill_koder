		<!-----------PHP CODE FOR SENDING FORM ON EMAIL----------------------->

		<?php
        if (isset($_POST["submit"])) {
            $to = "info@patnaorthocenter.com";
            $name = trim($_POST["name"]);
            $phone = trim($_POST["phone"]);
            $email = trim($_POST["email"]);
            $department = trim($_POST["department"]);
            $message = trim($_POST["message"]);

            $messages = "Name: " . $name . "<br />\r\n";
            $messages .= "Phone: " . $phone . "<br />\r\n";
            $messages .= "Email: " . $email . "<br />\r\n";
            $messages .= "Department: " . $department . "<br />\r\n";
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