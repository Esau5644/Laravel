<form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
@csrf
<h3>FORMULARIO DE CREACION EMPLEADO</h3>
<div class="mb-3">
  <label for="Nombre" class="form-label">Nombre</label>
  <input type="text"
    class="form-control" name="Nombre" id="Nombre" aria-describedby="helpId" placeholder="Nombre">
</div>
<div class="mb-3">
  <label for="Apellido Paterno" class="form-label">Apellido Paterno</label>
  <input type="text"
    class="form-control" name="Apellido Paterno" id="Apellido Paterno" aria-describedby="helpId" placeholder="Apellido Patermo">
</div>
<div class="mb-3">
  <label for="Apellido Materno" class="form-label">Apellido Materno</label>
  <input type="text"
    class="form-control" name="Apellido Materno" id="Apellido Materno" aria-describedby="helpId" placeholder="Apellido Materno">
<div class="mb-3">
  <label for="Email" class="form-label">Email</label>
  <input type="text"
    class="form-control" name="Email" id="Email" aria-describedby="helpId" placeholder="Email">
</div>
<div class="mb-3">
  <label for="Foto" class="form-label">Foto</label>
  <input type="file" class="form-control" name="Foto" id="Foto" placeholder="" aria-describedby="fileHelpId">
  <div id="fileHelpId" class="form-text">Help text</div>
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
 