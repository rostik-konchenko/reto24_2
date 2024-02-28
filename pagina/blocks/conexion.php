<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
session_start();
$conn= mysqli_connect("localhost","root","", "purpura");
if(!$conn){
	echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
}else{
	// echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";
}
 			$consulta="SELECT * FROM `producto` ";

 $comprobacion = mysqli_query($conn,$consulta);

if( $comprobacion ){

  // Ahora valida que la consuta haya traido registros
  if( mysqli_num_rows( $comprobacion ) > 0){

    // Mientras mysqli_fetch_array traiga algo, lo agregamos a una variable temporal
    while($fila = mysqli_fetch_array( $comprobacion ) ){

        

		}

	}	
  }
  
?>