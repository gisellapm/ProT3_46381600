<section class="main-content container-fluid d-flex justify-content-center align-items-center p-3" style="min-height: 70vh;">
    <div class="col-12 col-sm-10 col-md-8 col-lg-4 p-3 p-sm-4 p-md-5 m-2 bg-secondary rounded-3 border border-4 border-secondary-subtle">
        <h2 class="text-center p-2">Registro</h2>

        
        <form>
            <div class="mb-3">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                    <input name="nombre" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <!--error de validacion-->
                <?php if (isset($validation)->getError('nombre')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('nombre') ?>
                    </div>
                <?php endif; ?>
            </div> 

            <div class="mb-3">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Apellido</span>
                    <input name="apellido"type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <!--error de validacion-->
                <?php if (isset($validation)->getError('apellido')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('apellido') ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Usuario</span>
                    <input name="usuario" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <!--error de validacion-->
                <?php if (isset($validation)->getError('usuario')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('usuario') ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Correo</span>
                    <input name="email" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <!--error de validacion-->
                <?php if (isset($validation)->getError('email')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('email') ?>
                    </div>
                <?php endif; ?>
            </div>
            
            <div class="mb-3">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Contraseña</span>
                    <input name="pass" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <!--error de validacion-->
                <?php if (isset($validation)->getError('pass')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('pass') ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Recibir notificaciones en mi correo</label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form> 
    </div>
</section>