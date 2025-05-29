<section class="container-fluid d-flex justify-content-center p-5">
    <div class="col-6 p-2 m-2 bg-secondary rounded-3 border border-4 border-secondary-subtle" style="width:40%;">
        <h2 class="text-center p-2">Contacto</h2>
        <div class="input-group p-3">
                <input type="text" class="form-control" placeholder="Usuario" aria-label="Username">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" placeholder="Dirección" aria-label="Server">
        </div>
        <div class="input-group p-3">
                <span class="input-group-text">Mensaje</span>
                <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
        <div class="form-floating p-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected>País</option>
                <option value="1">Argentina</option>
                <option value="2">Chile</option>
                <option value="3">Uruguay</option>
                <option value="4">Paraguay</option>
                <option value="5">Brasil</option>
            </select>
        </div>

        <button type="button" class="btn btn-light p-1 w-auto d-flex mx-auto">Enviar</button>
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                    <img src="..." class="rounded me-2" alt="...">
                    <strong class="me-auto">Mensaje enviado</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                    El mensaje fue enviado correctamente. Gracias por contactarnos.
            </div>
        </div>
    </div>
</section>