<?php
include ("../php/conexion.php");

$descrip = $_POST["desccat"];
$estado = $_POST["estadocat"];
$var1 = $_GET['variable'];
$insertar = "INSERT INTO categoria_producto(descrip_categ, estado_categ) VALUES ('$descrip', '$estado')";

$resultado = mysqli_query($conexion, $insertar);
if($resultado) {
    echo "<script>alert('Se ha registrado el pedido');
    window.location='/Proyecto-Sistema/categorias/categorias.php?variable=<?php echo $var1; ?>'</script>"; 
   //se deja el / cuando se sube a internet, en servidor
} else {
    echo "<script>alert('No se pudo registrar')";
}