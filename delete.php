<?php 

	include 'model.php';
	$model = new Model();
	$id = $_REQUEST['id'];
	$delete = $model->delete($id);

	if ($delete) {
		echo "alert('delete successfully')";
		header('location:records.php');
	}

 ?>