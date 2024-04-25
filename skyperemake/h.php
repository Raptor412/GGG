<?php
$subject = $_GET['subject'];

$mails = [
    ['subject' => 'Hello', 'body' => 'Hello, world!'],
    ['subject' => 'Test', 'body' => 'This is a test.'],
    // Add more mails here
];

if ($subject) {
    foreach ($mails as $mail) {
        if ($mail['subject'] === $subject) {
            echo json_encode($mail);
            exit;
        }
    }
} else {
    echo json_encode($mails);
}
?>