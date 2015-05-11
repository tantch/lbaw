<?php

function getUserProjects($userid){
  global $conn;
  $stmt = $conn->prepare("SELECT nomeproj,funcaoproj FROM papel JOIN projeto USING(idprojeto) WHERE iduser = ?");
  $stmt->execute(array($userid));
  return $stmt->fetchAll();
}
?>