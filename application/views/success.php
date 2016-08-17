<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <title> Green Knight&apos;s Test page </title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="<?php
    echo base_url();
    ?>css/styles.css">
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


<div class="smart-wrap">
    <div class="smart-forms smart-container wrap-2">

        <div class="form-body">
            <div class="spacer-b30">
                <br>
                <br>
                <br>
                <h3><div class="tagline"><span>Done!</span></div></h3><!-- .tagline -->
                <br>
                <br>
                <br>
                            <h5><div class="tagline"><span>Would you like to upload images?</span></div></h5><!-- .tagline -->
                <br>
                <br>

                <center>
                <div class="section colm colm6">
                    <a href = "http://grassroots.net16.net/photos/">
                        <input type = "button" class = "button btn-primary btn-sm" value = "Upload Images" />
                    </a>
                </div><!-- end section -->
                </center>
            </div>
            
    </div><!-- end .smart-forms section -->
</div><!-- end .smart-wrap section -->
    
</body>
</html>
