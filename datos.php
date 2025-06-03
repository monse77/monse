<?php 
$name= $_POST['nombre'];
$asunto=$_POST['asunto'];
$email=$_POST['email'];
$mess=$_POST['mensaje'];
$fecha=$_POST=time();
if ($email && $mess && $name) {
	$f= fopen("archivo.html", "a");
	fwrite ($f,'<tr><td style="color:red;">'.date("d:m:Y",$fecha).'</td><td>'.$name.'</td><td>'.$email.'</td><td>'.$asunto.'</td><td>'.$mess.'</td></tr>');
	fclose ($f);
	echo"<script type='text/javascript'>alert('Tu mensaje ha sido enviado con exito,lo atenderemos lo antes posible.Gracias');</script>";
	echo "<script>location='contacto.html'</script>";
}
else
{
	echo '<font color="ff0000" size="5">ERROR:</font><B>Tu mensaje no puede enviarse, debes llenas todos los campos:<B>'.'<a href="form.html"><b>Regresar</b></a>';
} ?>