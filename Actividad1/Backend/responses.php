
<!-- PHP principal -->
<?php

    if(isset($_POST['boton2'])){

        if(isset($_POST['nombreEmpleado']) && !empty($_POST['nombreEmpleado']) &&
        isset($_POST['edadEmpleado']) && !empty($_POST['edadEmpleado']) && isset($_POST['estadoCivilEmpleado']) && !empty($_POST['estadoCivilEmpleado']) && isset($_POST['generoEmpleado']) && !empty($_POST['generoEmpleado']) && isset($_POST['sueldoEmpleado']) &&  !empty($_POST['sueldoEmpleado']) ){

            $nombreEmpleado = $_POST['nombreEmpleado'];
            $edadEmpleado = $_POST["edadEmpleado"];
            $estadoCivilEmpleado = $_POST['estadoCivilEmpleado'];
            $generoEmpleado = $_POST['generoEmpleado'];
            $sueldoEmpleado = $_POST['sueldoEmpleado'];

            $contador = 0; // Cantidad de empleados Femeninas
            $contador2=0; // Cantidad de Hombres Casados que ganan mas de 2500
            $contador3=0; // Total de mujeres viudas que ganan mas de 1000
            $contador4=0; // Cantidad de Hombres

            // Cantidad de Mujeres Registradas
            for($h=0; $h < count($nombreEmpleado); $h++){
                if($generoEmpleado[$h]=="F"){
                    $contador++;
                }
            }

        
    
            // Cantidad de Hombres Casados que ganan mas de 2500 Bs
            for ($i=0; $i <count($nombreEmpleado) ; $i++) { 
                if($generoEmpleado[$i]=="M" && $estadoCivilEmpleado[$i]=="C" && $sueldoEmpleado[$i]=="+2500"){
                    $contador2++;
                }
            }
        
        
        
            // Total de mujeres viudas que ganan mas de 1000 Bs
            for ($j=0; $j <count($nombreEmpleado) ; $j++) { 
                if($generoEmpleado[$j]=="F" && $estadoCivilEmpleado[$j]=="V" && $sueldoEmpleado[$j]=="1000y2500"){
                    $contador3++;
                }
            }

       

            // Edad promedio de los hombres
            $nhombres = array_count_values($generoEmpleado);
            $edadHombre = [];
            for ($k=0; $k <count($nombreEmpleado) ; $k++) { 
                if($generoEmpleado[$k]=="M"){
                    $contador4++;
                    $edadHombre[] = $edadEmpleado[$k];
                    $suma = array_sum($edadHombre);
                    $promedioEdad = $suma/$contador4;
                } 
            }

        

            // Outputs

            echo("<div style= 'height: 100vh; width:100%; background: linear-gradient(to top, #c9c9ff 50%, #9090fa 90%) repeat; background-size:100%; ' >
            <br> <br>  <br> <br> <br> <br> <br> <br> <br> <br> 
            <div style= 'border-radius: 5px;padding: 5px;align-items: center; display:flex;cursor: pointer;border: 3px solid #ddd;color: #4343ff; '> 
            <h2 style='text-align:center; color:black;' >Resultados: </h2> 
            <h4 style='text-align:center; color:black;' >La cantidad total de mujeres registradas es de: $contador  </h4>
            <h4 style='text-align:center; color:black;' >Total de Hombres casados que ganan mas de 2500 Bs: $contador2  </h4>
            <h4 style='text-align:center; color:black;' >Total de mujeres viudas que ganan mas de 1000 Bs: $contador3  </h4>
            <h4 style='text-align:center; color:black;' >La edad Promedio de los empleados hombres es: $promedioEdad  </h4>
            <div/>
            </div>");

            echo("<h2><a href='../Frontend/index.php' style='text-align:center; text-decoration:none;  backface-visibility: hidden;
            background-color: #405cf5;
            border-radius: 6px;
            border-width: 0;
            box-shadow: rgba(50, 50, 93, .1) 0 0 0 1px inset,rgba(50, 50, 93, .1) 0 2px 5px 0,rgba(0, 0, 0, .07) 0 1px 1px 0;
            box-sizing: border-box;
            color: #fff;
            font-size: 100%;
            height: 44px;
            line-height: 1.15;
            margin: 12px 0 0;
            outline: none;
            overflow: hidden;
            padding: 0 25px;
            position: relative;
            text-align: center;
            text-transform: none;
            transform: translateZ(0);
            transition: all .2s,box-shadow .08s ease-in;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            width: 100%;' >Volver</a> <h2/>");
        }
    } else{
        echo ("Datos Invalidos vacios ");
    }

    
?>


