<?php

  // $host = "ads_manha2a.mysql.dbaas.com.br";
  // $host_user = "ads_manha2a";
  // $host_password = "AdS22Manha!";
  // $database_name = "ads_manha2a";

  // $conexao = mysqli_connect($host, $host_user, $host_password, $database_name);

  $host = "...";
  $host_user = "...";
  $host_password = "...";
  $database_name = "...";

  $teste = 'mysql:host=ads_manha2a.mysql.dbaas.com.br;dbname=ads_manha2a';
  $conect = new PDO($teste , $host_user , $host_password);

  $conexao = mysqli_connect($host, $host_user, $host_password, $database_name);
?>
