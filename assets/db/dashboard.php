<?php

session_start();
include('security.php');

?>

<h2><?php echo $_SESSION['username']; ?></h2>
<h3><a href="logout.php">Logout</a></h3>