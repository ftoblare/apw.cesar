<?php
switch($_SERVER['REQUEST_METHOD'])
{
    case 'GET':
        $nombre = $_GET['nombre'];
        $fNacimiento = $_GET['nacimiento'];
        $sexo = $_GET['sexo'];
        break;
    case 'POST':
        $nombre = $_POST['nombre'];
        $fNacimiento = $_POST['nacimiento'];
        $sexo = $_POST['sexo'];
        break;
}


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
