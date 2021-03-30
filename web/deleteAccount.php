<?php 
include "function.php";

$connect = connectdb();
// $url = window.location.href;
if(isset($_GET['uid'])){
	$id = $_GET['uid'];
	$delete = delete('account', $id);
	if($delete){
		// header('Location: index.php');
        header('Location: preview.php');
        die();
	}
}
?>