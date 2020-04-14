<?php

  // Step 1: Start the session IF it hasn't already been started
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

  // Step 2: If the user isn't logged in, redirect them with an error message
  //  back to the home page
  
  if (!isset($_SESSION['user'])) 
  {
    $_SESSION['errors'][] = "You must log in";
    header('Location: ./login.php');
    exit;      
  }

  // Step 3: Log out the user (remember how you logged them in...)

  unset($_SESSION['user']);

  // Redirecting with a success message
  $_SESSION['successes'][] = "You have been successfully logged out.";
  header('Location: ./');
  exit;