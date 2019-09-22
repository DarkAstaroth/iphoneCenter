
	<?php if (isset($_GET['action'])): ?>

		<?php if ($_GET['action'] =='okusu'): ?>
			<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
			<script type="text/javascript">
				 swal("Buen Trabajo!", "Se ha registrado el usuario correctamente!", "success");
			</script>
		<?php endif ?>

	<?php endif ?>

	<?php if (isset($_GET['action'])): ?>

		<?php if ($_GET['action'] =='no'): ?>
			<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
			<script type="text/javascript">
				 swal("Error!", "Se ha producido un error intenta nuevamente", "error");
			</script>
		<?php endif ?>

	<?php endif ?>

	<?php if (isset($_GET['action'])): ?>

		<?php if ($_GET['action'] =='errormail'): ?>
			<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
			<script type="text/javascript">
				 swal("Error!", "La cuenta de correo ya fue registrada", "error");
			</script>
		<?php endif ?>

	<?php endif ?>

	<?php if (isset($_GET['action'])): ?>

		<?php if ($_GET['action'] =='erroru'): ?>
			<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
			<script type="text/javascript">
				 swal("Error!", "Se produjo un error inesperado vuelve a intertar mas tarde", "error");
			</script>
		<?php endif ?>

	<?php endif ?>


              <div class="content-wrapper">
                <section class="content-header">
                  <h1>
                    Usuarios
                  </h1>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="iconsmind-Library"></i></a></li>
                    <li class="breadcrumb-item active">Todos los usuario</li>
                  </ol>
                </section>
                <section class="content">
                  <!-- sample modal content -->
                  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          					<div class="modal-dialog">
          						<div class="modal-content">
          							<div class="modal-header">
          								<h4 class="modal-title" id="myModalLabel"><i class="fa fa-user-plus fa-lg"> </i>  Crear nuevo usuario</h4>
          								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          							</div>
          							<div class="modal-body">
                        <ul class="nav nav-tabs" role="tablist">
                          <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"><i class="ion-home"></i></span> <span class="hidden-xs-down">Cliente</span></a> </li>
                          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span class="hidden-sm-up"><i class="ion-person"></i></span> <span class="hidden-xs-down">Personal</span></a> </li>

                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabcontent-border">
                          <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="pad">

                                <form method="post">
                                  <?php
                                    $registro = new MvcController();
                                    $registro-> registroUsuarioController();
                                  ?>
                                <div class="form-group">
                                  <label for="">Email</label>
                                  <div class="controls">
                                    <input type="email" name="email" class="form-control" required data-validation-required-message="Este campo es requerido">
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="">Nombres</label>
                                  <div class="controls">
                                    <input type="text" name="nombres" class="form-control" required data-validation-required-message="Este campo es requerido">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="">Paterno</label>
                                      <div class="controls">
                                        <input type="text" name="paterno" class="form-control" required data-validation-required-message="Este campo es requerido">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="">Materno</label>
                                      <div class="controls">
                                        <input type="text" name="materno" class="form-control"  data-validation-required-message="Este campo es requerido">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="">CI</label>
                                        <input type="number" name="ci" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="">Telefono</label>
                                      <input type="number" name="telefono" class="form-control"  data-validation-required-message="Este campo es requerido" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="">Dirección</label>
                                    <div class="controls">
                                      <textarea name="dir" id="textarea" class="form-control"  placeholder="Textarea text"> </textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cerrar</button>
                                  <button type="submit" class="btn btn-success waves-effect">Registrar </button>
                                </div>
                              </form>
                            </div>
                          </div>

                          <div class="tab-pane pad" id="profile" role="tabpanel">
                          <div class="pad">
                                <form class="" action="index.html" method="post">
                                <div class="form-group">
                                  <label for="">Email</label>
                                  <div class="controls">
                                    <input type="email" name="email" class="form-control" required data-validation-required-message="Este campo es requerido">
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="">Nombres</label>
                                  <div class="controls">
                                    <input type="text" name="nombres" class="form-control" required data-validation-required-message="Este campo es requerido">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="">Paterno</label>
                                      <div class="controls">
                                        <input type="text" name="paterno" class="form-control" required data-validation-required-message="Este campo es requerido">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="">Materno</label>
                                      <div class="controls">
                                        <input type="text" name="materno" class="form-control" required data-validation-required-message="Este campo es requerido">
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="">CI</label>
                                        <input type="text" name="fecnac" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="">Telefono</label>
                                      <input type="number" name="telefono" class="form-control" required data-validation-required-message="Este campo es requerido" max="11">
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="">Dirección</label>
                                    <div class="controls">
                                      <textarea name="dir" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                  <label for="">Rol</label>
                                  <div class="controls">
                                    <fieldset>
                                      <input name="role" type="radio" id="radio1" value="Yes" required>
                                      <label for="radio1">Administrador</label>
                                    </fieldset>
                                    <fieldset>
                                      <input name="role" type="radio" id="radio2" value="No">
                                      <label for="radio2">Empleado</label>
                                    </fieldset>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cerrar</button>
                                  <button type="submit" class="btn btn-success waves-effect" data-dismiss="modal">Registrar </button>
                                </div>
                              </form>
                            </div>
                          </div>

                        </div>
          							</div>

          						</div>
          						<!-- /.modal-content -->
          					</div>
          					<!-- /.modal-dialog -->
          				</div>

                  <div class="row mb-5">
                    <div class="col">
                      <button type="button" class="btn btn-success mb-5" alt="default" data-toggle="modal" data-target="#myModal" class="model_img img-fluid">
                        <i class="fa fa-plus"> </i>
                          Nuevo Usuario</button>
                    </div>
                  </div>
                    <div class="row">
                      <div class="col">
                        <div class="box">
                          <div class="box-header with-border">
                  				  <h4>Todos los usuarios</h4>
                  				</div>
                          <div class="box-body">
                            <div class="table-responsive">
															<table id="example1"class="table table-bordered table-striped">
																<thead>
																	<tr>
																		<tr>
	                      							<th width="5%">Codigo</th>
																			<th width="5%">CI</th>
	                      							<th width="15%">Email</th>
	                      							<th>Nombres</th>
	                      							<th>Tipo</th>
	                      							<th>Estado </th>
	                                    <th>Acciones </th>
	                      						</tr>
																	</tr>
																</thead>
																<tbody>
																	<?php
																	  $registro = new MvcController();
																	  $registro-> listaUsuarioController();
																   ?>
																</tbody>
															</table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
            	   </section>
              </div>
