<?php
$target_dir= "uploads/";
$target_file = $target_dir .basename($_FILES["file"]["name"]);
// die($target_file);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST['save'])){
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check!==false){
        echo "File is an image - " . $check["mime"] . ".";
    }else{
        echo "File is not a image";
    }
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
}
else{
  if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
    echo '.<br/> <img src='.$target_file.'>';
  }else{
    echo "Sorry, there was an error uploading your file.";
  }
}

$url = $target_file;
$filename=basename($url);
if(file_put_contents($filename, file_get_contents($url))){
  echo "File downloaded successfully";
}else{
  echo "File is not downloaded";
}
 
?>