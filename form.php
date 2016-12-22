<?php

 if ( $_POST['submit'] ){
     
    $name=trim( strip_tags( $_POST['name'] ) );
    echo $name;
 }

 
?>