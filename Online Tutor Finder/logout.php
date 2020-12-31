<?php
session_start();

if(session_destroy()){
    session_destroy();
header("Location: ../Online Tutor Finder/index.php"); 
}
?>