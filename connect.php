<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$comments = filter_input(INPUT_POST, 'comments');
if(!isset($_POST['news_letter'])){
  $news_letter =0;
    }
else {
  $news_letter =1;
    }
$host = "localhost";
$dbusername = "root";
$dbpassword  = "";
$dbname = "soaib";
//create conection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
//check conncecion
if ($conn-> connect_error)  {

  die("connection_failed; ". $conn-> connect_error);
}
else {
  $sql = "INSERT INTO user_soaib (name, email, comments, news_letter)
  VALUES ('$name', '$email','$comments','$news_letter')";
}

if ($conn->query($sql) === TRUE) {

  echo "New Record Created Successfully";
}
else {
echo "Error:" . $sql. "<br>" . $conn-> error;
}
$conn-> close();
 ?>
