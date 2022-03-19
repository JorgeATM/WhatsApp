<table class="table table-striped" id="tb">
    <thead>
        <tr>
        <th scope="col">em</th>
		  <th scope="col">re</th>
		  <th scope="col">texto</th>
		  <th scope="col">fecha</th>
		  <th scope="col">estado</th>
    </thead>
    <tbody>
        <?php
        include("../conexion/conexion.php"); //importar la conexion
        $sentencia = "SELECT em,re,texto,fecha,estado FROM servidor ";

        $resultado = mysqli_query($conexion, $sentencia);
        if($resultado){
            while($ver = mysqli_fetch_assoc($resultado)){
                echo"
                <tr>
                    <td>".$ver["em"]."</td>
                    <td>".$ver["re"]."</td>
                    <td>".$ver["texto"]."</td>
                    <td>".$ver["fecha"]."</td>
                    <td>".$ver["estado"]."</td>
                    
                    
                </tr>";
            } 
        }
        
        mysqli_close($conexion); 
        ?>
    </tbody>
</table>