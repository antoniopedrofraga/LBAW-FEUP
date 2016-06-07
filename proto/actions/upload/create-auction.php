<?php

$BASE_DIR = '/opt/lbaw/lbaw1512/public_html/proto/';

include_once($BASE_DIR . 'config/init.php');
// upload.php
// 'images' refers to your file input name attribute
if (empty($_FILES['images'])) {
    echo json_encode(['error'=>'No files found for upload.']); 
    // or you can throw an exception 
    return; // terminate
}

include_once($BASE_DIR . 'database/auctions.php');
include_once($BASE_DIR . 'database/users.php');

// get the files posted
$images = $_FILES['images'];

if (empty($_POST['nome']) || empty($_POST['licitacaoBase']) || empty($_POST['descricaobreve']) ||  empty($_POST['descricaocompleta']) || empty($_POST['brand']) || empty($_POST['enddate'])) {
    $_SESSION['error_messages'][] = 'Alguns campos necessários para criar um leilão não foram enviados.';
    exit;
}

// get user name posted
$username = $_SESSION['username'];
$nome = empty($_POST['nome']) ? '' :  htmlentities($_POST['nome']);
$descricaobreve = empty($_POST['descricaobreve']) ? '' :  htmlentities($_POST['descricaobreve']);
$descricaocompleta = empty($_POST['descricaocompleta']) ? '' :  htmlentities($_POST['descricaocompleta']);
$licitacaobase = empty($_POST['licitacaoBase']) ? '' : $_POST['licitacaoBase'];
$marca = empty($_POST['brand']) ? '' : $_POST['brand'];
$datafinal = empty($_POST['enddate']) ? '' : $_POST['enddate'];


$user = getMemberByName($username);

if (userIsBanned($user['idutilizador'])) {
    $_SESSION['error_messages'][] = 'Estás banido, portanto não podes criar um leilão.';
    exit;
}

// a flag to see if everything is ok
$success = null;

// file paths to store
$paths= [];

// get file names
$filenames = $images['name'];

// loop and process files
for($i=0; $i < count($filenames); $i++){
    $ext = explode('.', basename($filenames[$i]));
    $imagename = md5(uniqid()) . "." . array_pop($ext);
    $target =  $BASE_DIR . "uploads" . DIRECTORY_SEPARATOR . $imagename;
    if(move_uploaded_file($images['tmp_name'][$i], $target)) {
        $success = true;
        $paths[] = "https://gnomo.fe.up.pt/~lbaw1512/proto/uploads/" . $imagename;
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
    createAuction($username, $nome, $descricaobreve, $descricaocompleta, $licitacaobase, $marca, $datafinal, $paths);

    // store a successful response (default at least an empty array). You
    // could return any additional response info you need to the plugin for
    // advanced implementations.
    $_SESSION['success_messages'][] = 'Leilão criado com sucesso';
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
    $_SESSION['error_messages'][] = $error . ' - ' .  $message;
} else {
    $output = ['error'=>'No files were processed.'];
}

// return a json encoded response for plugin to process successfully
echo json_encode($output);
?>


