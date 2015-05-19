<?php
session_start();
if(session_destroy()){ // Destroying All Sessions
	header("Location: registrarse.php"); // Redirecting To Home Page
}
?>