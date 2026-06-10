<?php
include ("../php/conexion.php");

$descrip = $_POST["desccat"];
$estado = $_POST["estadocat"];
$var1 = $_GET['variable'];
$stmt = mysqli_prepare($conexion, "INSERT INTO categoria_producto(descrip_categ, estado_categ) VALUES (?, ?)");
mysqli_stmt_bind_param($stmt, "ss", $descrip, $estado);
$resultado = mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
if($resultado) {
    echo "<script>alert('Se ha registrado el pedido');
    window.location='/Proyecto-Sistema/categorias/categorias.php?variable=<?php echo $var1; ?>'</script>"; 
   //se deja el / cuando se sube a internet, en servidor
} else {
    echo "<script>alert('No se pudo registrar')";
}