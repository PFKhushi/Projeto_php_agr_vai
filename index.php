<?php
if(session_id() == '')
{
    session_start();
}

include_once("topo.php");

if(empty($_SERVER["QUERY_STRING"])){
    $var = "inicio.php";
    include_once("$var");

}else {
    $pg = $_GET['pg'];
    include_once("$pg.php");
}


include_once("rodape.php");
?>