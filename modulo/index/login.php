<?php
include_once '../../bootstrap.php';

sleep(2);

echo 'Ola: ';

//print_r($_POST);



if($_POST['usuario'] == 'marcio' or $_POST['usuario'] == 'clay'){
	echo "<script>
			window.document.location.href = '../portaria';		
		  </script>";
//	header('location: /sgp/modulo/portaria');
}else{
	
	echo 'Seu usuario esta incorreto!';
}

?>