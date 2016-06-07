 <?php

 function isAdmin($username) {
  global $conn;
  $stmt = $conn->prepare("SELECT tipomembro FROM membro WHERE nomeUtilizador = ? ");
  $stmt->execute(array($username));
  $resposta = $stmt->fetch()['tipomembro'];
  if($resposta == "Admin"){
    return 1;
  }
  return 0;
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
        return true;
    }
  }
  
  return false;
 }

 function getUsersAux($allUsers) {
  $getBannedUsers = getAllUsersBanned();
  $ret = array();
  
  foreach ($allUsers as &$user) {
    $user['banido'] = isBanned($getBannedUsers, $user['idutilizador']);
    
    if(isAdmin($user['nomeutilizador']) == 1){
      $user['admin'] = true;
    }else{
      $user['admin'] = false;
    }
    
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
 
 function banishUser($banir, $dataFim, $motivo) {
   echo($dataFim);
  global $conn;
  $stmt = $conn->prepare("INSERT INTO membrobanido(idmembrobanido, datafinal, motivo) VALUES (?, ?, ?)");
  $stmt->execute(array($banir['idutilizador'],  $dataFim, $motivo));
  
  return;
 }
 
 function	deleteUser($delete) {
  global $conn;
  $stmt = $conn->prepare("DELETE FROM membro WHERE idutilizador = ?");
  $stmt->execute(array($delete['idutilizador']));
  return;
 }
 
 function getAdmin($beAdmin) {
  global $conn;
  $stmt = $conn->prepare("UPDATE Membro
                          SET tipomembro = 'Admin'
                          WHERE idUtilizador = ?");
  $stmt->execute(array($beAdmin['idutilizador']));
  return;
 }

 function unAdmin($unAdmin) {
  global $conn;
  $stmt = $conn->prepare("UPDATE Membro
                          SET tipomembro = 'Cliente'
                          WHERE idUtilizador = ?");
  $stmt->execute(array($unAdmin['idutilizador']));
  return;
 }
 
 function unBanUser($unBanUser) {
  global $conn;
  $stmt = $conn->prepare("DELETE FROM membrobanido WHERE idmembrobanido = ?");
  $stmt->execute(array($unBanUser['idutilizador']));
  return;
 } 
  
 function deleteAuction($auctionid,$auctionerid) {
  global $conn;
  $query = "DELETE FROM Leilao WHERE idleilao = ? AND idleiloeiro = ?";
	$stmt = $conn->prepare($query);
	$stmt->execute(array($auctionid, $auctionerid));
  return;
 }  
 
 function getAdmins() {
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM membro WHERE tipomembro ='Admin'");
  $stmt->execute();
  return $stmt->fetchAll();
  }

 ?>