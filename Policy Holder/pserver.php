<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'insurance');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
    $pcode = mysqli_real_escape_string($db, $_POST['pincode']);
  $fname = mysqli_real_escape_string($db, $_POST['name']);
  $lname= mysqli_real_escape_string($db, $_POST['last']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['cpassword']);
    $dob= mysqli_real_escape_string($db, $_POST['dob']);
  $sex = mysqli_real_escape_string($db, $_POST['sex']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $house = mysqli_real_escape_string($db, $_POST['house']);
  $street= mysqli_real_escape_string($db, $_POST['street']);
    $city = mysqli_real_escape_string($db, $_POST['city']);
  $state = mysqli_real_escape_string($db, $_POST['state']);
  $cname= mysqli_real_escape_string($db, $_POST['nomi_name']);
    $cphone = mysqli_real_escape_string($db, $_POST['nphone']);
  $cdob = mysqli_real_escape_string($db, $_POST['ndob']);
  $csex = mysqli_real_escape_string($db, $_POST['nsex']);
    $relation = mysqli_real_escape_string($db, $_POST['nrelation']);
  $bname = mysqli_real_escape_string($db, $_POST['bankname']);
  $acno = mysqli_real_escape_string($db, $_POST['accountnum']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($pcode)) { array_push($errors, "pin code is required"); }
  if (empty($fname)) { array_push($errors, "first name is required"); }
   if (empty($lname)) { array_push($errors, "last name is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }

  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

   if (empty($dob)) { array_push($errors, "dob is required"); }
  if (empty($sex)) { array_push($errors, "sex name is required"); }
   if (empty($email)) { array_push($errors, "email name is required"); }
    if (empty($phone)) { array_push($errors, "phone number is required"); }
  if (empty($house)) { array_push($errors, "house is required"); }
   if (empty($street)) { array_push($errors, "street is required"); }
    if (empty($city)) { array_push($errors, "city is required"); }
  if (empty($state)) { array_push($errors, "state is required"); }
   if (empty($cname)) { array_push($errors, "claimant name is required"); }
    if (empty($cphone)) { array_push($errors, "claimant phone is required"); }
  if (empty($cdob)) { array_push($errors, "claimant dob is required"); }
   if (empty($csex)) { array_push($errors, "claimant sex is required"); }
    if (empty($relation)) { array_push($errors, "relation is required"); }
  if (empty($bname)) { array_push($errors, "bank name is required"); }
   if (empty($acno)) { array_push($errors, "account number is required"); }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM policy holder WHERE pin code='$pcode' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['pcode'] === $pcode) {
      array_push($errors, "Pin Code already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO policy holder (pin code, first name, last name,password,dob,sex,email,phone,house,street,city,state,claimant name,claimant phone,claimant dob,claimant sex,relation,bank name,account no)
  			  VALUES('$pcode', '$fname', '$lname','$password','$dob','$sex','$email','$phone','$house','$street','$city''$state','$cname','$cphone','$cdob''$csex','$relation','$bname','$acno')";
  	mysqli_query($db, $query);
  	$_SESSION['pcode'] = $pcode;
  	$_SESSION['success'] = "You are now logged in";

  }
}

// ...
