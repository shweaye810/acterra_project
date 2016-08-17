<?php
     /* Last updated with phpFlickr 1.4
      *
      * If you need your app to always login with the same user (to see your private
      * photos or photosets, for example), you can use this file to login and get a
      * token assigned so that you can hard code the token to be used.  To use this
      * use the phpFlickr::setToken() function whenever you create an instance of
      * the class.
      */

     require_once("phpFlickr.php");

     $apiKey = "b933fa98769f3fba635740eaf07f9e36";
     $secret = "e1b8182a3705b2e3";
     $perms = "write";

     $f = new phpFlickr($apiKey, $secret);

     //Redirect to flickr for authorization
     if(!$_GET['frob']){
         $f->auth($perms);
     }else {
         //If authorized, print the token
         $tokenArgs = $f->auth_getToken($_GET['frob']);
         echo "<pre>"; var_dump($tokenArgs); echo "</pre>";
     }
?>
