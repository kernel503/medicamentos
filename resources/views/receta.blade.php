<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <h1 class="mt-1">Receta</h1>
    <div class="container">
      <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombre del Médico</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nombre_medico">          
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Establecimiento</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="establecimiento">          
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombre del paciente</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nombre_paciente">          
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Fecha</label>
          <input type="date" class="form-control" id="exampleInputEmail1" name="fecha">          
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Código</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="codigo">          
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Edad</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="edad">          
        </div>
        <div class="col-auto mt-3" onclick="repeat()">
          <button type="button" class="btn btn-success"> Agregar</button>
        </div>
        <div class="row" id="repeat">
          <div class="col-md-4 mt-1">
            <label for="exampleInputEmail1" class="form-label">Cantidad</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="cantidad[]">   
          </div>
          <div class="col-md-4 mt-1">
            <label for="exampleInputEmail1" class="form-label">Medicamento</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="medicamento[]">   
          </div>
          <div class="col-md-4 mt-1">    
            <label for="exampleInputEmail1" class="form-label">Dosis</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="dosis[]">   
          </div>   
          <div class="col-md-12 mt-1">    
            <label for="exampleInputEmail1" class="form-label">Indicaciones</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="indicaciones[]">   
          </div>  
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </div>

  <script>
    const selector = document.querySelector('#repeat')
    const inner = selector.innerHTML
    function repeat(){
      selector.insertAdjacentHTML('beforeend',inner)
    }
  </script>
</body>

</html>