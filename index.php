<?php
$nombre = $_REQUEST['nombre'];
$fNacimiento = $_REQUEST['nacimiento'];
$sexo = $_REQUEST['sexo'];

echo "<h3>Retorno para el formulario del ejercicio 19</h3>";
echo "Nombre: ".$nombre."<br/>";
echo "Fecha de nacimiento: ".$fNacimiento."<br/>";
echo "Sexo: ".$sexo."<br/>";
?>
<hr/>
<hr/>
<?php
echo "Elementos del formulario con formato... &lt;valor de name&gt; = &lt;valor dado al control&gt;<br/>";
echo "<ul>";
foreach($_REQUEST as $v => $valor){
    echo "<li>".$v." = ".$valor." </li>" ;
}
echo "</ul>";

?>
