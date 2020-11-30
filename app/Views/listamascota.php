<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Crud mascota</title>
  </head>
  <body>

    <div class="container">
      <h1 class="table-info"><center>Crud codeigniter mascotas</center></h1>
      <div class="row">
        <div class="col-sm-12">
          <form method="POST" action="<?php  echo base_url().'/crear' ?>">
          <label for="nombre"  class="font-weight-bold">Nombre mascota</label>
          <input type="text" name="nombre" id="nombre" class="form-control">
          <label for="tipo"  class="font-weight-bold">Tipo mascota</label>
          <input type="text" name="tipo" id="tipo" class="form-control">
          <label for="nombrep"  class="font-weight-bold">Nombre del dueño</label>
          <input type="text" name="nombrep" id="nombrep" class="form-control">
          <br>
          <button class="btn btn-warning" >Registrar</button>
          </form>
        </div>
      </div>
      <hr>
      <h2 class="table-info"><center>Lista de mascotas y dueños</center></h2>

      <div class="row">
        <div class="col-sm-12">
          <div class="table table-responsive">
            <table class="col">
              <tr>
                <th>Nombre mascota</th>
                <th>Tipo  mascota</th>
                <th>Nombre del dueño</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
              <?php foreach ($datos as $key): ?>
              <tr>
                <td><?php echo $key->nombre ?></td>
                <td><?php echo $key->tipo ?></td>
                <td><?php echo $key->nombrep ?></td>
                <td>
                  <a href="<?php echo base_url().'/obtenerMascota/'.$key->id_mascota ?>" class="btn btn-warning btn-sm">Editar</a>
                </td>
                <td>
                  <a href="<?php echo base_url().'/eliminar/'.$key->id_mascota ?>" class="btn btn-danger btn-sm">Eliminar</a>
                </td>
              </tr>
              <?php  endforeach; ?>
            </table>
           </div>
        </div>
      </div>
    </div>
    

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
      let mensaje = '<?php echo $mensaje ?>';

      if (mensaje == '1') {
        swal(':D','Se agrego el dato','success');

      }else if (mensaje =='0') {
        swal(':(','No se agrago dato','error');
        //alert("No se agrego el dato");
      }else if (mensaje =='2') {
        swal(':D','Se ha actualizado el dato!!','success');
        
      }else if (mensaje =='3') {
        swal(':(','No se actualizo el dato','error');
        
      }else if (mensaje =='4') {
        swal('):','Se elimino el dato','success');
        
      }else if (mensaje =='5') {
        swal(':(','No se elimino el dato','error');
        //alert("No se agrego el dato");
      }
    </script>
  </body>
</html>