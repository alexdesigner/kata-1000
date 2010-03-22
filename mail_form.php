<?php
	error_reporting (0);
	$email='joaosteing@gmail.com';
	$assunto=$_POST['assunto'];
	$mensagem=$_POST['mensagem'];

	if (mail ($email, $assunto, $mensagem)):

?>

<p>deu certo!!! sucesso!!!! ok!!!</p>
<?php else:  ?>
<p>errou</p>
<?php endif;  ?>