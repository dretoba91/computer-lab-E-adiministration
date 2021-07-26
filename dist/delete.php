<?php 

    session_start();
	include("connect.php");

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($conn, "DELETE FROM user WHERE id = $id");
        $_SESSION['message'] = "user deleted!"; 
        header('location: user.php');
    }

?>