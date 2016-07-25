<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>  
<html>
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="/acterra_project/css/styles.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"> </script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <title> Green Knight&apos;s Test page </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
         .error {color: #FF0000;}
        </style>
    </head>
    <body>
        <div class="smart-wrap">
            <div class="smart-forms smart-container wrap-2">
                <div class="form-header header-primary">
                    <h4><i class="fa fa-pencil-square"></i>Event Details</h4></div><!-- end .form-header section -->
                    <form method="post" id="new_post" name="new_post"  action="" class="wpcf7-form" enctype="multipart/form-data">
                        <div class="form-body">
                            <div class="spacer-b30">
                                <div class="tagline"><span>Please Fill All Fields</span></div><!-- .tagline -->
                            </div>
                            <div class="section">
                                <label class="field select">
                                    <?php if(!empty($location)){
                                        $select = '<select id="location" name="location">';
                                        $select.='<option value="">Select Location</option>';
                                        foreach($location as $object){
                                            $select.='<option value="'.$object->ID.'">'.$object->Name.'</option>';
                                        }
                                    }
                                    $select.='</select>';
                                    echo $select;
                                        ?>
                                    <i class="arrow double"></i>
                                </label>
                            </div><!-- end section -->

                            <div class="section">
                                <label class="field select">
                                    <?php if(!empty($eventType)){
                                        $select = '<select id="event_type" name="event_type">';
                                        $select.='<option value="">Select Event Type</option>';
                                        foreach($eventType as $object){
                                            $select.='<option value="'.$object->typeID.'">'.$object->Name.'</option>';
                                        }
                                    }
                                    $select.='</select>';
                                    echo $select;
                                    ?>

                                    <i class="arrow double"></i>
                                </label>
                            </div><!-- end section -->

                            <div class="section colm colm6">
                                <input type="text" name="event_name" id="event_name" class="gui-input " placeholder="Event Name">
                            </div><!-- end section -->


                            <div class="section colm colm6">
                                <input type="text" name="organization_name" id="organization_name" class="gui-input " placeholder="Name of Company/School/Organization">
                            </div><!-- end section -->

                            <div class="frm-row">

                                <div class="section colm colm6">
                                    <input type="number" name="youth_volunteer" id="youth_volunteer" class="gui-input " placeholder="# Youth Volunteers">
                                </div><!-- end section -->

                                <div class="section colm colm6">
                                    <input type="number" name="adult_volunteer" id="adult_volunteer" class="gui-input " placeholder="# Adult Volunteers">
                                </div><!-- end section -->

                            </div><!-- end .frm-row section -->

                            <div class="frm-row">

                                <div class="section colm colm6">
                                    <input type="number" name="duration" id="duration" class="gui-input " placeholder="Duration (hours)">
                                </div><!-- end section -->

                                <!--                                <div class="section colm colm6">-->
                                <!--                                    <input type="number" name="plants_installed" id="plants_installed" class="gui-input " placeholder="# Plants Installed">-->
                                <!--                                </div><!-- end section -->

                            </div><!-- end .frm-row section -->


                            <div class="section">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title" align = "center">
                                            <a data-toggle="collapse" href="#collapse1">Expand Optional Details</a>
                                        </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse">
                                        <div class="frm-row">

                                            <br>
                                            <div class="section colm colm6">
                                                <input type="number" name="area_weeded" id="area_weeded" class="gui-input " placeholder="Area weeded (sq feet)">
                                            </div><!-- end section -->

                                            <div class="section colm colm6">
                                                <input type="number" name="creek_length_cleared" id="creek_length_cleared" class="gui-input " placeholder="Creek cleared (feet)">
                                            </div><!-- end section -->

                                        </div><!-- end .frm-row section -->

                                        <div class="frm-row">

                                            <div class="section colm colm6">
                                                <input type="number" name="amt_trash_removed" id="amt_trash_removed" class="gui-input " placeholder="Trash removed (lbs)">
                                            </div><!-- end section -->

                                            <div class="section colm colm6">
                                                <input type="number" name="amt_recycling_removed" id="amt_recycling_removed" class="gui-input " placeholder="Recycled (lbs)">
                                            </div><!-- end section -->

                                        </div><!-- end .frm-row section -->

                                        <div class="section">
                                            <label for="comment" class="field prepend-icon">
                                                <textarea class="gui-textarea" id="comment" name="comment" placeholder="Your comment"></textarea>
                                                <label for="comment" class="field-icon"><i class="fa fa-comments"></i></label>
                                        <span class="input-hint">
                                            <strong>HINT:</strong> Add any other details ...
                                        </span>
                                            </label>
                                        </div><!-- end section -->
                                    </div>
                                </div>
                            </div>

                            <div class="section">
                                <label for="file1" class="field file">
                                    <span class="button btn-primary btn-sm"> Upload Image </span>
                                    <input type="file" class="gui-file" name="upload1" id="file1" multiple onChange="document.getElementById('uploader1').value = this.value;">
                                    <input type="text" class="gui-input" id="uploader1" placeholder="" readonly>
                                </label>
                            </div>







                        </div><!-- end .form-body section -->
                        <div class="form-footer" align = "right">
                            <button type="reset" class="button"> Cancel </button>
                            <button type="submit" class="button btn-primary"> Validate </button>
                        </div><!-- end .form-footer section -->
                    </form>

            </div><!-- end .smart-forms section -->
        </div><!-- end .smart-wrap section -->
    </body>
</html>
