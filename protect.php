<?php
if(!isset($_SESSION)){ 
    session_start();
}

if(!isset($_SESSION['id'])){
    die("Primeiro voce deve fazer o seu <a href = \"index.php\">Login</a>");
}

?>