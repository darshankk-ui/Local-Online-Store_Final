  <?php
  session_start();
  $email_id_return=$_SESSION['email'];
  echo $_SESSION['email'];

  function return_email()
  {
    return $email_id_return;
  }

  session_destroy();
  ?>