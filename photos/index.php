<?php

//Include phpFlickr
require_once("phpFlickr/phpFlickr.php");

$error=0;
$f = null;
if($_POST){
    /* Check if both name and file are filled in */
    if(!$_POST['name'] || !$_FILES["file"]["name"]){
        $error=1;
    }else{
        /* Check if there is no file upload error */
        if ($_FILES["file"]["error"] > 0){
            echo "Error: " . $_FILES["file"]["error"] . "<br />";
        }else if($_FILES["file"]["type"] != "image/jpg" && $_FILES["file"]["type"] != "image/jpeg" && $_FILES["file"]["type"] != "image/png" && $_FILES["file"]["type"] != "image/gif"){
            /* Filter all bad file types */
            $error = 3;
        }else if(intval($_FILES["file"]["size"]) > 5250000){
            /* Filter all files greater than 512 KB */
            $error = 4;
        }else{
            $dir= dirname($_FILES["file"]["tmp_name"]);
            $newpath=$dir."/".$_FILES["file"]["name"];
            rename($_FILES["file"]["tmp_name"],$newpath);
            /* Call uploadPhoto on success to upload photo to flickr */
            $status = uploadPhoto($newpath, $_POST["name"]);
            if(!$status) {
                $error = 2;
            }
         }
     }
} 

function uploadPhoto($path, $title) {
    $apiKey = "b933fa98769f3fba635740eaf07f9e36";
    $apiSecret = "e1b8182a3705b2e3";
    $permissions  = "write";
    $token        = "72157669468615973-56552982c929a524";

    $f = new phpFlickr($apiKey, $apiSecret, true);
    $f->setToken($token);
    return $f->async_upload($path, $title);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Green Knight&apos;s Test page </title>
        <meta charset="utf-8">

  <link rel="stylesheet" href="styles_photo.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"> </script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
         .error {color: #FF0000;}
        </style>
    </head>
<body>
<!-- <div id="doc" class="yui-t7">
   <div id="hd" role="banner"><h1>Photo Uploader Using Flickr</h1></div>
   <div id="bd" role="main">
   <div id="mainbar" class="yui-b">	 -->  

<?php
if (isset($_POST['name']) && $error==0) {
        echo "  <h4>Your file has been uploaded to <a href='https://www.flickr.com/photos/142975746@N06' target='_blank'> Grassroots Flickr</a></h4>";
       echo "  <h4>Click here to upload more photos <a href='http://grassroots.net16.net/photos/'> More Photos</a></h4>";
}else {
    if($error == 1){
        echo "  <font color='red'>Please provide both name and a file</font>";
    }else if($error == 2) {
        echo "  <font color='red'>Unable to upload your photo, please try again</font>";
    }else if($error == 3){
        echo "  <font color='red'>Please upload JPG, JPEG, PNG or GIF image ONLY</font>";
    }else if($error == 4){
        echo "  <font color='red'>Image size greater than 512KB, Please upload an image under 512KB</font>";
    }
?>

<div class="smart-wrap">
            <div class="smart-forms smart-container wrap-2">
              <div class="form-header header-primary"><h4><i class="fa fa-pencil-square"></i>Photos</h4></div>
  <form  method="post" class="wpcf7-form" accept-charset="utf-8" enctype='multipart/form-data' >
    <div class="smart-forms">
      <div class="form-body">
   
            
            <div class="spacer-b30">
                <div class="tagline"><span>Upload Pictures</span></div><!-- .tagline -->
            </div>

              <div class="section colm colm6">
                <input type="text" class="gui-input" name="name" placeholder="Location">
              </div>
    

              <div class="section colm colm6">
                 <input type="file" class = "inputfile" name="file" />
            </div>


                <div class="section colm colm6">
                    <button type="submit"  class="button btn-primary"> Upload</button>
                </div><!-- end .form-footer section -->
    </div>
  </div>
  </div>
</div>
  </form>
  <?php
}
?>
<!-- 	    </div>
    </div>
    <div id="ft"><p></p></div>
</div> -->
</body>
</html>
			