<?php
$nombre = $_REQUEST['nombre'];
$fNacimiento = $_REQUEST['nacimiento'];
$sexo = $_REQUEST['sexo'];

echo "Nombre: ".$nombre."<br/>";
echo "Fecha de nacimiento: ".$fNacimiento."<br/>";
echo "Sexo: ".$sexo."<br/>";
?>
<hr/>

<?php
echo "Ficha del Sr./Sra " . $nombre . " (sexo:" . $sexo . ") nacido el " . $fNacimiento . ".<br/>" 
?>

<hr/>
<?php
foreach($_REQUEST as $v => $valor){
    echo "Elemento del formulario con valor de su atributo name ( ".$v." = ".$valor." )<br/>" ;
}
?>
