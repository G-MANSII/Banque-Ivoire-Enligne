<?php 

	function post($name){
		return isset($_POST[$name]) ? $_POST[$name] : " ";
	}



 ?>