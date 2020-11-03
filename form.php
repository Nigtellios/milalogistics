<?php
  if(isset($_POST['submit'])){
    $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
    $surname = htmlspecialchars(stripslashes(trim($_POST['surname'])));
    $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
    $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
    $message = htmlspecialchars(stripslashes(trim($_POST['message'])));
    if(!preg_match("/^[A-Za-z .'-]+$/", $name)){
      $name_error = 'Niepoprawne, bądź zbyt krótkie imię.';
    }
    if(!preg_match("/^[A-Za-z .'-]+$/", $surname)){
      $surname_error = 'Niepoprawne, bądź zbyt krótkie nazwisko.';
    }
    if(!preg_match("/^[A-Za-z .'-]+$/", $subject)){
      $subject_error = 'Niepoprawny, bądź zbyt krótki temat.';
    }
    if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)){
      $email_error = 'Niepoprawny adres e-mail.';
    }
    if(strlen($message) === 0){
      $message_error = 'Twoja wiadomość nie może być pusta. Napisz coś od siebie!';
    }
  }
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#contact-form" method="POST" class="contact__form-styling">
  <div class="double-label">
    <div>
      <label for="name"></label>
      <input type="text" name="name" placeholder="Imię">
    </div>
    <div>
      <label for="surname"></label>
      <input type="text" name="surname" placeholder="Nazwisko">
    </div>
  </div>
  <div>
    <label for="email"></label>
    <input type="text" name="email" placeholder="Adres e-mail">
  </div>
  <div>
    <label for="subject"></label>
    <input type="text" name="subject" placeholder="Temat wiadomości">
  </div>
  <div>
    <label for="message"></label>
    <textarea name="message" placeholder="Wiadomość"></textarea>
  </div>
  <div>
    <input type="submit" name="submit" value="Wyślij" class="button">
  </div>
    <?php 
    if(isset($name_error)) echo '<div class="contact__error-box"><p>'.$name_error.'</p></div>'; 
    if(isset($surname_error)) echo '<div class="contact__error-box"><p>'.$surname_error.'</p></div>';
    if(isset($email_error)) echo '<div class="contact__error-box"><p>'.$email_error.'</p></div>';
    if(isset($subject_error)) echo '<div class="contact__error-box"><p>'.$subject_error.'</p></div>';
    if(isset($message_error)) echo '<div class="contact__error-box"><p>'.$message_error.'</p></div>';
    ?>
  <?php 
    if(isset($_POST['submit']) && !isset($name_error) && !isset($surname_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)){
      $to = 'shadowinkowal@gmail.com'; // edit here
      $body = "Imię: $name\n Nazwisko: $surname\n E-mail: $email\n Wiadomość:\n $message";
      if(mail($to, $subject, $body)){
        echo '<div class="contact__send-box"><p style="color: green">Wiadomość została wysłana, dziękujemy!</p></div>';
      }else{
        echo '<p>Wystąpił błąd, spróbuj ponownie.</p>';
      }
    }
  ?>

</form>