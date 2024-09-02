<?php
//protege o calendario para que so possar ser acessado apos o login ter sido feito
if(!isset($_SESSION)){ 
    session_start();
}

if(!isset($_SESSION['id'])){
    die("Primeiro voce deve fazer o seu <a href = \"index.php\">Login</a>");
}

?>