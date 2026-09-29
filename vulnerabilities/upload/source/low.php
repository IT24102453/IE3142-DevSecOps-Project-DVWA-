<?php

if( isset( $_POST[ 'Upload' ] ) ) {

    $target_path = DVWA_WEB_PAGE_TO_ROOT . 'hackable/uploads/';
    $target_path .= basename( $_FILES[ 'uploaded' ][ 'name' ] );

    $uploaded_name = $_FILES[ 'uploaded' ][ 'name' ];
    $uploaded_ext = strtolower( pathinfo( $uploaded_name, PATHINFO_EXTENSION ) );
    $uploaded_size = $_FILES[ 'uploaded' ][ 'size' ];
    $uploaded_tmp = $_FILES[ 'uploaded' ][ 'tmp_name' ];

    $allowed_extensions = [ 'jpg', 'jpeg', 'png', 'gif' ];
    $allowed_mime_types = [ 'image/jpeg', 'image/png', 'image/gif' ];

    $file_mime = mime_content_type( $uploaded_tmp );

    if ( !in_array( $uploaded_ext, $allowed_extensions ) || !in_array( $file_mime, $allowed_mime_types ) ) {
        $html .= "<pre>Your image was not uploaded. Only .jpg, .jpeg, .png, and .gif are allowed.</pre>";
    }
    elseif ( $uploaded_size > 100000 ) {
        $html .= '<pre>Your image is too large.</pre>';
    }
    else {

        if( !move_uploaded_file( $uploaded_tmp, $target_path ) ) {
            $html .= '<pre>Your image was not uploaded.</pre>';
        }
        else {
            $html .= "<pre>{$target_path} succesfully uploaded!</pre>";
        }
    }
}

?>
