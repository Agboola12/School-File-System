<?php
// session_start();


// $errors = array();

// connect to the database
    // include("../connect.php");


// REGISTER USER

// if (isset($_POST['submit'])) {

  // receive all input values from the form

  // $filetoupload = $_FILES["pix"]["name"];
  // $target_dir = "profile/";
  // $target_file = $target_dir . $filetoupload;
  // $filetouploadsize= $_FILES["pix"]['size'];
  // $filetouploadtype= $_FILES["pix"]['type'];
  // $tmp = $_FILES["pix"]["tmp_name"];

  // first check the database to make sure
       // $pixmove = move_uploaded_file($tmp, $target_file);

 
  // Finally, register user if there are no errors in the form
  // if (count($errors) == 0) {

  //   $query = "INSERT INTO file  ( profile ) VALUES( '$filetoupload' )";
  //   mysqli_query($db, $query);
  //   header('location: ./index.php');
  // }
   
// }
// 
  

// session_start();

$errors = array();

// connect to the database
include("../connect.php");

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $file = $_FILES['file'];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'mp3', 'mp4');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 5000000) { // Limit file size to 5MB
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = 'profile/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);

                $query = "INSERT INTO file (title, file_path) VALUES ('$title', '$fileDestination')";
                if (mysqli_query($db, $query)) {
                    echo "File uploaded successfully.";
    header('location: ./display.php');

                } else {
                    echo "Database error: " . mysqli_error($db);
                }
            } else {
                echo "Your file is too large.";
            }
        } else {
            echo "There was an error uploading your file.";
        }
    } else {
        echo "You cannot upload files of this type.";
    }
}









   ?>
