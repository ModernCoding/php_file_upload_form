<?php

  $targetDir = "./uploads/";
  $targetFile = $targetDir . basename($_FILES["file"]["name"]);
  $uploadOk = TRUE;
  $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));


  // Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["file"]["tmp_name"]);

  if($check) {

    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = TRUE;
  
  } else {

    echo "File is not an image.";
    $uploadOk = FALSE;

  }

  
  // Check if file already exists
  if (file_exists($targetFile)) {
    echo "Sorry, file already exists.";
    $uploadOk = FALSE;
  }


  // Check file size
  // if ($_FILES["file"]["size"] > 500000) {
  //   echo "Sorry, your file is too large.";
  //   $uploadOk = FALSE;
  // }


  // Allow certain file formats
  if (
    $imageFileType != "jpg" &&
    $imageFileType != "png" &&
    $imageFileType != "jpeg" &&
    $imageFileType != "gif" 
  ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = FALSE;
  }


  // if file is ok for uploading
  if ($uploadOk) {

    // creating the target directory if it does not exist yet
    echo is_dir($targetDir);
    if(!is_dir($targetDir))
    {
      mkdir($targetDir);
    }

    // uploading file
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
      echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
    
    } else {
      echo "Sorry, there was an error uploading your file: " . $_FILES["file"]["error"];

    }


  // (file is not ok for uploading)
  } else {
    echo "Sorry, your file cannot be uploaded.";
    
  }

?>