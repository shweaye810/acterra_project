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
                <div class="form-header header-primary"><h4><i class="fa fa-pencil-square"></i>Grassroots</h4></div><!-- end .form-header section -->
                <?php
                 $login_path = "grassroots/checkLogin";
                 echo form_open($login_path,
                                array('id' => 'new_post',
                                      'class' => 'wpcf7-form',
                                      'enctype' => 'multipart/form-data',
                                      'name' => 'new_post')
                );
                ?>
                <div class="form-body">
                    <div class="spacer-b30">
                        <div class="tagline"><span>Volunteer Login</span></div><!-- .tagline -->
                    </div>


                    <div class="section colm colm6">
                        <input type="text" name="username" id="username" class="gui-input " placeholder="Username">
                    </div><!-- end section -->

                    <div class="section colm colm6">
                        <input type="password" name="password" id="password" class="gui-input " placeholder="Password">
                    </div><!-- end section -->

                    <div class="section colm colm6">
                        <?php echo validation_errors(); ?>
                    </div><!-- end section -->


                </div><!-- end .form-body section -->

                <div class="form-footer" align = "right">
                    <button type="submit"  class="button btn-primary"> Log in </button>

                </div><!-- end .form-footer section -->

            </div><!-- end .smart-forms section -->
        </div><!-- end .smart-wrap section -->
    </body>
</html>
