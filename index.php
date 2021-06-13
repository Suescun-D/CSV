<!-- en este sacamos el numero de empleados -->


<?php include("conexion.php") ?>

<?php 

$i = 0;

foreach($arraycsv as $value){

    if($value[2] == "No"){
        
        $i = $i + 1;

       
    }

    $num = 105 - $i;
}

 print $num;

?>

<!-- en este sacare los mayores a 25 años -->

<?php 

foreach ($arraycsv as $value) {
    
// $date = new DateTime($value[1]);
// echo $date->format('Y-m-d H:i:s');
echo $value[1];

}

?>