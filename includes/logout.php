<?php
session_start();
if ($_SESSION["login"]=="YES" || $_SESSION["login"]=="COMP") {
	session_destroy();
	header("Location: ../index.php");
}

?>