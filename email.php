<?php

if (isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $subject = "Contact form email";
    $mailFrom = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    $error = "";

    if (empty($mailFrom)) {
        $error = "emailEmpty";
        header("Location: contact.php?failsend=" . $error);
        exit;
    } else if (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
        $error = "emailInvalid";
        header("Location: contact.php?failsend=" . $error);
        exit;
    }

    if (empty($name)) {
        $errors = "nameEmpty";
        header("Location: contact.php?failsend=" . $error);
        exit;
    }

    if (empty($message)) {
        $errors = "messageEmpty";
        header("Location: contact.php?failsend=" . $error);
        exit;
    }

    $mailTo = "kyliecrookers@kylie.crookers.com";
    $headers = "From: " . $mailFrom;
    $txt = "You have received an e-mail from " . $name . ".\n\n" . $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.php?mailsend");
    exit;
}

?>