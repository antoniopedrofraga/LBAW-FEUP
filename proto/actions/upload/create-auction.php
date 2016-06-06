<?php

$BASE_DIR = '/opt/lbaw/lbaw1512/public_html/proto/';

ini_set('post_max_size', '5M');
ini_set('upload_max_filesize', '5M');

// upload.php
// 'images' refers to your file input name attribute
if (empty($_FILES['images'])) {
    echo json_encode(['error'=>'No files found for upload.']); 
    // or you can throw an exception 
    return; // terminate
}

// get the files posted
$images = $_FILES['images'];

// get user name posted
$username = empty($_POST['username']) ? '' : $_POST['username'];

// a flag to see if everything is ok
$success = null;

// file paths to store
$paths= [];

// get file names
$filenames = $images['name'];

// loop and process files
for($i=0; $i < count($filenames); $i++){
    $ext = explode('.', basename($filenames[$i]));
    $target =  ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "uploads" . DIRECTORY_SEPARATOR . md5(uniqid()) . "." . array_pop($ext);
    if(move_uploaded_file($images['tmp_name'][$i], $target)) {
        $success = true;
        $paths[] = $target;
    } else {
        $success = false;
        switch( $_FILES['images']['error'][$i]) {
            case UPLOAD_ERR_OK:
            $message = false;;
            break;
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
            $message .= ' - file too large (limit of bytes).';
            break;
            case UPLOAD_ERR_PARTIAL:
            $message .= ' - file upload was not completed.';
            break;
            case UPLOAD_ERR_NO_FILE:
            $message .= ' - zero-length file uploaded.';
            break;
            default:
            $message .= ' - internal error #'. $_FILES['images']['error'][$i];
            break;
        }
        break;
    }
}

// check and process based on successful status 
if ($success === true) {
    // call the function to save all data to database
    // code for the following function `save_data` is not 
    // mentioned in this example
    save_data($username, $paths);

    // store a successful response (default at least an empty array). You
    // could return any additional response info you need to the plugin for
    // advanced implementations.
    $output = [];
    // for example you can get the list of files uploaded this way
    // $output = ['uploaded' => $paths];
} else if ($success === false) {
    echo $message;
    $error = 'Error while uploading images. Contact the system administrator ';

    if(!is_writable(dirname($target))) { 
        $error = $error . " error in dir :" . $target; 
    } else {
        $error = $error . " but it's possible to write in the dir: " . $target;
    }

    $output = ['error'=> $error];
    // delete any uploaded files
    foreach ($paths as $file) {
        unlink($file);
    }
} else {
    $output = ['error'=>'No files were processed.'];
}

// return a json encoded response for plugin to process successfully
echo json_encode($output);
?>


