<?php
include('conexionv.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Lista Empresas</title>
</head>
<body>
  <!-------------------CABECERA----------------------------------->
    <div>
      <header class="enca">
       <div class="wrap">
        <div class="logos">
        <H1>Lista de Empresas Registradas (CEMPRE)</H1>
        </div>
        <Nav>
        <a href= "RegistroEmpresa.html">Atras</a>
          
    
        </Nav>

       </div>

      </header>
    <!-------------------Mostrar Datos----------------------------------->
       <div class="espacio-tabla">
       <table class="table table-danger table-striped">
  <thead>
    <tr>
      <th scope="col">NIT</th>
      <th scope="col">NombreEmpresa</th>
      <th scope="col">Direccion</th>
      <th scope="col">Pais</th>
      <th scope="col">Departamento</th>
      <th scope="col">Ciudad</th>
      <th scope="col">RazonSocial</th>
      <th scope="col">Acciones</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
      $sql="SELECT * FROM empresa";
      $result =  mysqli_query($mysqli,$sql);

      while($mostrar =  mysqli_fetch_array($result)){


      
    ?>



    <tr>
      <th><?php  echo $mostrar['NIT'] ?></th>
      <th><?php  echo $mostrar['NombreEmpresa'] ?></th>
      <th><?php  echo $mostrar['Direccion'] ?></th>
      <th><?php  echo $mostrar['Pais'] ?></th>
      <th><?php  echo $mostrar['Departamento'] ?></th>
      <th><?php  echo $mostrar['Ciudad'] ?></th>
      <th><?php  echo $mostrar['RazonSocial'] ?></th>
      <td>
       <!-------eliminar-------->
       <form action="eliminarEmpresa.php" method="post">
        <input type="text" value="<?php echo $mostrar['NIT']?>" name="txtNIT" reandonly>
        <td><input class="btn btn-danger" type="submit" value="Eliminar" name="btnEliminar"></td>
       </form>
     </td>
     <td>

      

    </tr>

   <?php
 }
   ?>

  </tbody>
</table>

<div class="reportes">
                    <a class="btn btn-warning" href="reportesEmpresas.php">Imprimir Reportes</a>
                </div>

        
      </body>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>