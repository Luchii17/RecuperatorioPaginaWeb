

<!-- Agregar usuario -->
<div class="content-box" id="add-user">
  <div class="content-header">
    <h2 class="title">Agregar Usuario</h2>
  </div>

  <div class="content-body">
    <form action="./public/add-user.php" method="post" name="add-user">
      <div class="row content-form">

        <h3>Usuario</h3><br>

        <div class="col-xs-12 col-sm-4 form-group">
          <label for="nombre">Nombre</label>
          <input class="form-control" type="text" name="nombre" id="nombre" maxlength="255" required>
        </div>

        <div class="col-xs-12 col-sm-4 form-group">
          <label for="apellido">Apellido</label>
          <input class="form-control" type="text" name="apellido" id="apellido" maxlength="255" required>
        </div>

        <div class="col-xs-12 col-sm-4 form-group">
          <label for="telefono">Telefono</label>
          <input class="form-control" type="integer" name="telefono" id="telefono" minlength="10" maxlength="10" required>
        </div>

        <div class="col-xs-12 col-sm-4 form-group">
          <label for="tipodocumento">Tipo de documento</label>
          <input class="form-control" type="text" name="tipodocumento" id="tipodocumento" maxlength="255" required>
        </div>

        <div class="col-xs-12 col-sm-4 form-group">
          <label for="numerodocumento">Numero de documento</label>
          <input class="form-control" type="number" name="numerodocumento" id="numerodocumento" maxlength="9" required>
        </div>

        <div class="col-xs-12 col-sm-4 form-group">
          <label for="email">Email</label>
          <input class="form-control" type="email" name="email" id="email" maxlength="255" required>
        </div>

        <div class="col-xs-12 col-sm-4 form-group">
          <label for="fechanacimiento">Fecha de nacimiento</label>
          <input class="form-control" type="date" name="nacimiento" id="nacimiento" required>
        </div>

        <div class="col-xs-12 form-group">
          <button class="btn btn-block" name="submit">Agregar Usuario</button>
        </div>
      </div>
    </form>
  </div>
</div>