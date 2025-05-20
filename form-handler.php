<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  $to = 'kontakt@bellafryzjer.pl';
  $subject = 'Nowa wiadomość z formularza kontaktowego';
  $body = "Imię: $name\nEmail: $email\nWiadomość:\n$message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    header('Location: thankyou.html');
    exit();
  } else {
    echo 'Wystąpił błąd podczas wysyłania wiadomości. Upewnij się, że funkcja mail() działa na serwerze.';
  }
}
?>
