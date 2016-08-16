<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Green Knight&apos;s Test page </title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/styles.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"> </script>
    <!-- Latest compiled and minified CSS -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script>
     $( function() {
         $( "#datepicker" ).datepicker();
     } );
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php echo validation_errors(); ?>
<!-- multistep form -->
<form id = "msform" >
    <!-- progressbar -->
    <ul id="progressbar">
        <li class="active"></li>
        <li></li>
        <li></li>
    </ul>
</form>

<form method="post" id="new_post" name="new_post"  action="" class="wpcf7-form" enctype="multipart/form-data">
    <!-- fieldsets -->
    <fieldset class = "wpcf7-form">

        <div class="smart-forms">
            <br>
            <div class="spacer-b30">
                <div class="tagline"><span>Required Fields</span></div><!-- .tagline -->
            </div>

            <!--DATEPICKER            -->
            <div class="section colm colm6">
               <input type="text" id="datepicker" name="date"  placeholder="Date" readonly = "true">
            </div><!-- end section -->


            <!--LOCATION SELECION           -->
            <div class="section ">
                <label class="field select">
                    <?php
                    if(!empty($location)) {
                        $select = '<select id="location" name="location">';
                        $select.='<option value="">Select Location</option>';
                        foreach($location as $object) {
                            $select.='<option value="'.
                                $object->Name.
                                '">'.
                                $object->Name.
                                '</option>';
                        }
                    }
                    $select.='</select>';
                    echo $select;
                    ?>
                    <i class="arrow double"></i>
                </label>
            </div><!-- end section -->


            <!--EVENT TYPE SELECION           -->
            <div class="section">
                <label class="field select">
                    <?php
                    if(!empty($eventType)){
                        $select = '<select id="event_type" name="event_type">';
                        $select.='<option value="">Select Event Type</option>';
                        foreach($eventType as $object){
                            $select.='<option value="'.
                                $object->Name.
                                '">'.
                                $object->Name.
                                '</option>';
                        }
                    }
                    $select.='</select>';
                    echo $select;
                    ?>
                    <i class="arrow double"></i>
                </label>
            </div><!-- end section -->

            <!--EVENT NAME          -->
            <div class="section colm colm6">
                <input type="text" name="event_name" id="event_name" class="gui-input " placeholder="Event Name">
            </div><!-- end section -->

            <div class="section colm colm6">
                <input type="text" name="organization_name" id="organization_name" class="gui-input " placeholder="Name of School/Organization">
            </div><!-- end section -->


        </div>
        <input  type="button" name="next" class="next action-button" value="Next" />

    </fieldset>



    <fieldset class = "wow">
        <div class="smart-forms">
            <br>
            <div class="spacer-b30">
                <div class="tagline"><span>Optional Fields</span></div><!-- .tagline -->
            </div>

            <div class="section colm colm6">
                <input type="text" name="duration" id="duration" class="gui-input " placeholder="Duration(hrs)">
            </div><!-- end section -->


            <div class="section colm colm6">
                <input type="number" name="youth" id="youth_volunteer" class="gui-input " placeholder="# Youth Volunteers">
            </div><!-- end section -->

            <div class="section colm colm6">
                <input type="number" name="adult" id="adult_volunteer" class="gui-input " placeholder="# Adult Volunteers">
            </div><!-- end section -->

            <div class="section colm colm6">
                <input type="number" name="plants_installed" id="plants_installed" class="gui-input " placeholder="# Plants Installed">
            </div><!-- end section -->

            <div class="section colm colm6">
                <input type="number" name="area_weeded" id="area_weeded" class="gui-input " placeholder="Area weeded (sq feet)">
            </div><!-- end section -->

            <div class="section colm colm6">
                <input type="number" name="creek_cleared" id="creek_length_cleared" class="gui-input " placeholder="Creek cleared (feet)">
            </div><!-- end section -->


        </div>

        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>

    <fieldset class = "wow">

        <div class="smart-forms">
            <br>
            <div class="spacer-b30">
                <div class="tagline"><span>Optional Fields</span></div><!-- .tagline -->
            </div>

            <div class="frm-row">

                <div class="section colm colm6">
                    <input type="number" name="trash_removed" id="amt_trash_removed" class="gui-input " placeholder="Trash removed (lbs)">
                </div><!-- end section -->

                <div class="section colm colm6">
                    <input type="number" name="recycled" id="amt_recycling_removed" class="gui-input " placeholder="Recycled (lbs)">
                </div><!-- end section -->

            </div><!-- end .frm-row section -->


            <div class="section">
                <label for="file1" class="field file">
                    <span class="button btn-primary btn-sm"> Upload Image </span>
                    <input type="file" class="gui-file" name="upload1" id="file1" multiple onChange="document.getElementById('uploader1').value = this.value;">
                    <input type="text" class="gui-input" id="uploader1" placeholder="" readonly>
                </label>
            </div>

            <div class="section">
                <label for="comment" class="field prepend-icon">
                    <textarea class="gui-textarea" id="comment" name="commens" placeholder="Your comment"></textarea>
                    <label for="comment" class="field-icon"><i class="fa fa-comments"></i></label>
                                        <span class="input-hint">
                                            <strong>HINT:</strong> Add any other details ...
                                        </span>
                </label>
            </div><!-- end section -->
        </div>

        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" name="submit" class="submit action-button" value="Submit" />
    </fieldset>

</form>

<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
<script>
    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function(){
        if(animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50)+"%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'transform': 'scale('+scale+')'});
                next_fs.css({'left': left, 'opacity': opacity});
            },
            duration: 800,
            complete: function(){
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".previous").click(function(){
        if(animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1-now) * 50)+"%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'left': left});
                previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
            },
            duration: 800,
            complete: function(){
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

</script>
</body>
</html>
