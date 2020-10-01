<?php
include("database/connection.php");
session_start();
if(!isset($_SESSION ['username'] ))
{
  header("location:login.php");
}

?>