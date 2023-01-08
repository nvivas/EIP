<form action='' method='POST' id="formulario" enctype="multipart/form-data">
        <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="correo">
                </div>
        </div>
        <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="contraseña">
                </div>
        </div>
        <div class="row mb-3">
                <label for="imagen" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                        <input type="file" class="form-control" id="imagen" name="imagen">
                </div>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
</form>