<?php
session_start();

// initializing variables
$username = "";
$password    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'insurance');

// REGISTER USER
if (isset($_POST['login_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);

  $password = mysqli_real_escape_string($db, $_POST['password']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }

  if (empty($password)) { array_push($errors, "Password is required"); }




  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM admin WHERE username='$username' OR password='$password' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

     if (!empty($username) && !empty($password)){
       if($user['username'] === $username&&$user['password'] === $password){
         header('location: admingo.php');
     }
     else{

     array_push($errors, "Absolute Username and Password required");
     }

  }


}
