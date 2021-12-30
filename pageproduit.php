<?php 

require("controllers/produitController.php");

$id = intval($_GET['id']);

showProduct($id);

?>