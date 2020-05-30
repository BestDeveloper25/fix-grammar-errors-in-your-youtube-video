<?php
session_start();

// initializing variables
$email = "";
$errors = array(); 
$errorsolduser = array(); 

// connect to the database

 $db= mysqli_connect('localhost','hedtella_417mark','43__17DonZy','hedtella_bluad');
// REGISTER USER
if (isset($_POST['newuser']))
{
  // receive all input values from the form
   $email = test_input($_POST['email']);
   $title = test_input($_POST['title']);
   $description = test_input($_POST['description']);
    

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { array_push($errors, "<span style='background-color:white;color:red;'>please input a correct email address</span>"); }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) 
      {
//  	$password = md5($password_1);//encrypt the password before saving in the database

       //$query =  "INSERT INTO `charts`(`id`, `email`, `password`,`timestamp`) VALUES (NULL,'$email','$password',NULL)";
      $query =  "INSERT INTO `charts`(`title`,`description`,`email`) VALUES ('$title','$description','$email')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "";
        
          $to = "email@neckline.space"; 
$subject = "a youtuber needs us"; 
$message = "user email: ".$email."    video title: ".$title."     video description: ".$description; 
$headers = "From: fsecond722@gmail.com"; 
$sent = mail($to, $subject, $message, $headers) ; 
        
echo '<h2>Sent successfully. We will email you in less than 10 minutes time</h2>';

  }
  
}//end if
//close the database
 mysqli_close($db);

    function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}//end test_input

