<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

  if (!$_POST['name'] || !$_POST['username'] || !$_POST['password'] || !$_POST['email'] || !$_POST['birthday']) {
    $_SESSION['error_messages'][] = 'All fields are mandatory';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL");
    exit;
  }

  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $birthday = $_POST['birthday'];

  try {
    createUser($name, $username, $email, $password, $birthday);
  } catch (PDOException $e) {
  
    if (strpos($e->getMessage(), 'membro_nomeutilizador_key') !== false) {
      $_SESSION['error_messages'][] = 'Duplicate username';
      $_SESSION['field_errors']['username'] = 'Username already exists';
    } else if (strpos($e->getMessage(), 'membro_email_key')) {
      $_SESSION['error_messages'][] = 'Duplicated email!';
      $_SESSION['field_errors']['username'] = 'Email already exists';
    } else $_SESSION['error_messages'][] = 'Error creating user: ' . $e->getMessage();

    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL");
    exit;
  }
  $_SESSION['success_messages'][] = 'User registered successfully';  
  $_SESSION['username'] = $username;
  header("Location: $BASE_URL");
?>
