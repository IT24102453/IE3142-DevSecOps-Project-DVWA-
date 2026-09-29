<?php

if( isset( $_POST[ 'Submit' ] ) ) {

    $target = trim( $_REQUEST[ 'ip' ] );

    $pattern = '/^((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/';

    if ( !preg_match( $pattern, $target ) ) {
        echo "<pre>ERROR: Invalid IP address format.</pre>";
    }
    else {

        $safe_target = escapeshellarg( $target );

        if( stristr( php_uname( 's' ), 'Windows NT' ) ) {
            $cmd = shell_exec( 'ping ' . $safe_target );
        }
        else {
            $cmd = shell_exec( 'ping -c 4 ' . $safe_target );
        }

        echo "<pre>{$cmd}</pre>";
    }
}

?>
