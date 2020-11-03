<?php
  if(isset($_POST['submit'])){
    $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
    $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
    $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
    $message = htmlspecialchars(stripslashes(trim($_POST['message'])));
    if(!preg_match("/^[A-Za-z .'-]+$/", $name)){
      $name_error = 'Niepoprawne imię.';
    }
    if(!preg_match("/^[A-Za-z .'-]+$/", $subject)){
      $subject_error = 'Niepoprawny temat.';
    }
    if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)){
      $email_error = 'Niepoprawny adres e-mail.';
    }
    if(strlen($message) === 0){
      $message_error = 'Twoja wiadomość nie może być pusta.';
    }
  }
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
  <label for="name">Name:</label><br>
  <input type="text" name="name">
  <p><?php if(isset($name_error)) echo $name_error; ?></p>
  <label for="subject">Subject:</label><br>
  <input type="text" name="subject">
  <p><?php if(isset($subject_error)) echo $subject_error; ?></p>
  <label for="email">Email:</label><br>
  <input type="text" name="email">
  <p><?php if(isset($email_error)) echo $email_error; ?></p>
  <label for="message">Message:</label><br>
  <textarea name="message"></textarea>
  <p><?php if(isset($message_error)) echo $message_error; ?></p>
  <input type="submit" name="submit" value="Submit">
  <?php 
    if(isset($_POST['submit']) && !isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)){
      $to = 'shadowinkowal@gmail.com'; // edit here
      $body = " Name: $name\n E-mail: $email\n Message:\n $message";
      if(mail($to, $subject, $body)){
        echo '<p style="color: green">Wiadomość została wysłana, dziękujemy!</p>';
      }else{
        echo '<p>Wystąpił błąd, spróbuj ponownie.</p>';
      }
    }
  ?>
</form>

<form class="contact__form-styling">
  <div class="double-label">
    <label for="name">
      <input type="text" id="name" name="user_name" placeholder="Imię" class="half-width">
      <abbr title="required" aria-label="required"></abbr>
    </label>
    <label for="surname">
      <input type="text" id="surname" name="user_surname" placeholder="Nazwisko" class="half-width">
    </label>
  </div>
  <div>
    <label for="mail">
      <input type="mail" id="mail" name="user_mail" placeholder="Adres e-mail" class="full-width">
      <abbr title="required" aria-label="required"></abbr>
    </label>
  </div>
  <div>
    <label for="message">
      <input type="text" id="message" name="user_message" placeholder="Wiadomość" class="full-width">
    </label>
  </div>
  <div class="form-rodo">
    <input type="checkbox" id="rodo1" name="rodo" class="form-rodo__checkbox">
    <label for="rodo">Zgadzam się na przetwarzanie moich danych osobowych zgodnie z <strong>polityką
        prywatności.</strong></label>
  </div>
  <div>
    <input type="button" value="WYŚLIJ" class="button">
  </div>
</form> <!-- End of Contact Form -->
