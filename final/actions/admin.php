 <?php

 function isAdmin($username) {
  global $conn;
  $stmt = $conn->prepare("SELECT tipomembro FROM membro WHERE nomeUtilizador = ? ");
  $stmt->execute(array($username));
  return ($stmt->fetch()['tipomembro'] == "Admin");
 }
 
 function getAllUsers() {
  global $conn;
  $stmt = $conn->prepare("SELECT idutilizador, nomeutilizador FROM membro ORDER BY nomeutilizador ");
  $stmt->execute();
  return $stmt->fetchAll();
 }
 function getSpecificUsers($query) {
  global $conn;
  $stmt = $conn->prepare("SELECT idutilizador, nomeutilizador FROM membro WHERE LOWER(nomeutilizador) LIKE LOWER('%" . $query . "%')  ORDER BY nomeutilizador LIMIT 5");
  $stmt->execute();
  return $stmt->fetchAll();
 }
  
 
 function getAllUsersBanned() {
  global $conn;
  $stmt = $conn->prepare("SELECT idmembrobanido FROM membrobanido");
  $stmt->execute();
  return $stmt->fetchAll();
 }

 function isBanned($getBannedUsers, $idUtilizador) {
  
  foreach ($getBannedUsers as &$banned) {
    if( $banned['idmembrobanido'] == $idUtilizador ){
        return "true";
    }
  }
  
  return "false";
 }

 function getUsersAux($allUsers) {
  $getBannedUsers = getAllUsersBanned();
  $ret = array();
  
  foreach ($allUsers as &$user) {
    $user['banned'] = isBanned($getBannedUsers, $user['idutilizador']);
    
    if(!isset($ret[ strtoupper ( $user['nomeutilizador'][0] ) ])){
        $ret[ strtoupper ( $user['nomeutilizador'][0] ) ] ['letter'] = strtoupper ( $user['nomeutilizador'][0] );
        $ret[ strtoupper ( $user['nomeutilizador'][0] ) ] ['users'] = array();
    }
    
    array_push($ret[ strtoupper ( $user['nomeutilizador'][0]) ]['users'], $user);
  }

  //print_r($ret);
  return $ret;
 }

 function getUsers() {
  $allUsers = getAllUsers();
 
  return getUsersAux($allUsers);
 }
 
 function getSpecUsers($text) {
  $users = getSpecificUsers($text);
 
  return getUsersAux($users);
 }
 
 function banishUser($banish) {
  return;
 }
 
 ?>