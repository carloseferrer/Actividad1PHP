<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Administrativo</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>
<body>

    <h2 style="text-align:center ; padding-top: 20px;">Bienvenidos al sistema Administrativo</h2> <br> <br>
    
    <!-- Mostrar los Formularios que deberan ser ingresados -->
    <?php
            $contador=0;
            for($i = 0; $i<5;$i++){?>
            <?php $contador++; ?>
<div class="container center">
    <div class="row">
        <div class="offset-md-2 col-lg-5 col-md-3 offset-lg-4 offset-md-3">
            <div class="panel border bg-white">
                <div class="panel-heading">
                    <h3 class="pt-3 font-weight-bold">Ingrese los datos de Empleado# <?php echo($contador);?></h3>
                </div>
                <div class="panel-body p-3">
                    <form action="../Backend/responses.php" method="post">
                        <div class="form-group py-2">
                            <div class="input-field"> <span class="far fa-user p-2"></span> <input  name="nombreEmpleado[]" type="text" placeholder="Nombre y Apellido" required > </div>
                        </div>
                        <div class="form-group py-2">
                            <div class="form-outline">
                                <input type="number" name="edadEmpleado[]" class="form-control" required="true" max=100 placeholder="Ingrese su edad" />
                            </div>
                        </div>
                        <div class="form-group py-2">
                            <div class="form-outline">
                                <select name="estadoCivilEmpleado[]" class="input-field form-control" aria-label="Default select example" required>
                                    <option value="C">Casad@</option>
                                    <option value="S">Solter@</option>
                                    <option value="V">Viud@</option>
                                </select>
                            </div>      
                        </div>
                        <div class="form-group py-2">
                            <div class="form-outline">
                                <select name="generoEmpleado[]" class="input-field form-control" aria-label="Default select example" required="true">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>      
                        </div>
                        <div class="form-group py-2">
                            <div class="form-outline">
                                <select  name="sueldoEmpleado[]" class="input-field form-control" aria-label="Default select example" required>
                                    <option value="-1000">Menos de 1000 Bs</option>
                                    <option value="1000y2500">Entre 1000 y 2500 Bs</option>
                                    <option value="+2500">Mas de 2500 Bs</option>
                                </select>
                            </div>      
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
            
            <?php
            
        }
        
        
        ?>
         <input class="btn btn-primary" type="submit" name="boton2" value="Enviar Datos"> <br> <br> 
        </form>
           
</body>
</html>