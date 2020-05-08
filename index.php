<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Well Technology parte 3</h1>
    </header>
    
    <?php
        $conexion=new mysqli("localhost","root","","internetclientes");
        if($conexion->connect_errno){
            echo "Falló la conexión " . $conexion->connect_errno;
        }
        //mysqli_set_charset($conexion, "utf8"); forma procedimental
        $conexion->set_charset("utf8");
        $sql="SELECT * FROM PRODUCTOS"
        //$resulatdos=mysqli_query($conexion, $sql);
        //$resultados=$conexion->query($sql);
       // if($conexion->errno){
        //    die($conexion->errno);
      //  }
       
    ?>
</body>
</html>