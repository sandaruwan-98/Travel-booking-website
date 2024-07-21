<?php include_once('inc/connection.php');     ?>
<?php
//chEcking the form is submited
if(isset($_POST['submit'])){

    $fullname = $_POST['Name'];
    $email = $_POST['Email'];
    $contactno = $_POST['Contact'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

    $to = 'sritravelsa@gmail.com';
    $email_subject = 'SRITRAVELS contact-us';
    $email_body = "Messsage from the contact us page of SRITRAVELS website <br>";
    $email_body .= "<b>From:</b>{$fullname}<br>";
    $email_body .= "<b>Subject:</b>{$subject}<br>";
    $email_body .= "<b>Contact No:</b>{$contactno}<br>";
    $email_body .= '<b>Message:</b><br>'.nl2br(strip_tags($message));

    $header = "From:{$email}\r\nContent-Type: text/html;";

    mail($to, $email_subject, $email_body, $header);
}

?>
<?php
    $fullname = $_POST['Name'];
    $email = $_POST['Email'];
    $contactno = $_POST['Contact'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

    if (!empty($fullname) || !empty($email) || !empty($contactno) || !empty( $subject) || !empty($message)) {
        //inserting valus to the database
        $INSERT = "INSERT into contact (contact_name, contact_email, contact_no, Message_subject, Message_body) values(?, ?, ?, ?, ?)";

        //prepare statement
        $stmt = $connection->prepare($INSERT);
        $stmt->bind_param("sssss", $fullname, $email, $contactno, $subject, $message);
        $stmt->execute();

        $quary = "UPDATE contact SET Date=NOW()";
        $quary .= "WHERE contact_email='{$email}'  LIMIT 1";

        $result_set = mysqli_query($connection, $quary);

        //echo("New record added sucessfully!");
        header('location:index.php');

    }


?>
