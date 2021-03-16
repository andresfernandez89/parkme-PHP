
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Editar Proveedor</h1>
            <div class="card">
                <div class="card-body">
                    <div class="row mt-5">
                        <div class="col-12 col-md-10 offset-md-1">
                            <form method="post" name="edit" action="/Bootcamp-PHP/proyecto-final-parkme/index.php" enctype="multipart/form-data">
                                <input type="hidden" name="controller" value="vendors">
                                <input type="hidden" name="action" value="edit">
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="id" class="col-form-label">Codigo</label>
                                        <input type="number" class="form-control" id="id" name="id" value='<?=$object->id?>' readonly='readonly' />
                                    </div>
                                    <div class="form-group offset-1 col-md-6">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
                                        <label for="picture" class="col-form-label">Imagen</label>
                                        <input type="file" class="form-control" id="picture" name="picture" />
                                    </div>
                                    <img class="img_user offset-1" src="<?=$object->picture?>">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="name" class="col-form-label">Nombre</label>
                                        <input type="text" class="form-control" id="name" name="name" tabindex="2" value="<?=$object->name?>" required />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="lastname" class="col-form-label">Apellido</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname" value=<?="$object->lastname"?> required />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="dni" class="col-form-label">DNI</label>
                                        <input type="number" class="form-control" id="dni" name="dni" value=<?="$object->dni"?> required />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="address" class="col-form-label">Direccion</label>
                                        <input type="text" class="form-control" id="address" name="address" value=<?="$object->address"?> required />
                                    </div>
                                    <div>
                                        <label for="cel" class="col-form-label">Celular</label>
                                        <input type="number" class="form-control" id="cel" name="cel" value=<?="$object->cel"?> required />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="city" class="col-form-label">Ciudad</label>
                                        <input type="text" class="form-control" id="city" name="city" value=<?="$object->city"?> required />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="email" class="col-form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value=<?="$object->email"?> required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="parkingName" class="col-form-label">Nombre de Estacionamiento</label>
                                        <input type="text" class="form-control" id="parkingName" name="parkingName" value=<?="$object->parkingName"?> required />
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="comision" class="col-form-label">comision</label>
                                        <input type="number" class="form-control" id="comision" name="comision" value=<?="$object->comision"?> readonly='readonly'/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <div class="col-12 col-sm-12">
                                            <a href="/Bootcamp-PHP/proyecto-final-parkme/index.php"><input type="button" id='btn_cancel' class='btn btn-danger btn-md' value="Cancelar" /></a> 
                                            <input type="submit" id='btn_add' class='btn btn-success btn-md' value="Enviar" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
</div> <!-- container -->
