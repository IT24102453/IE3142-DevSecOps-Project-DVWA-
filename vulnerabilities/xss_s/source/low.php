<?php

if( isset( $_POST[ 'btnSign' ] ) ) {
 $message = trim( $_POST[ 'mtxMessage' ] );
 $name    = trim( $_POST[ 'txtName' ] );

 $message = stripslashes( $message );
 $message = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $message );
 $message = htmlspecialchars( $message, ENT_QUOTES, 'UTF-8' );

 $name = stripslashes( $name );
 $name = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $name );
 $name = htmlspecialchars( $name, ENT_QUOTES, 'UTF-8' );

 $insert = "INSERT INTO guestbook ( comment, name ) VALUES ( '$message', '$name' );";
 $result = mysqli_query($GLOBALS["___mysqli_ston"], $insert ) or die( '<pre>' . ((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : ((($___mysqli_res = mysqli_connect_error()) !== false) ? $___mysqli_res : false)) . '</pre>' );
}

?>
