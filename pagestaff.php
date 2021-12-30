<?php 

require("controllers/contactController.php");

$id = (int)$_GET['id'];

oneContact($id);

?>