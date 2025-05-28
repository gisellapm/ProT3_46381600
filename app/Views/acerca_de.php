<section id="contacto" class="container-fluid d-flex justify-content-center p-5">
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
        </div>
        <div class="col-6 p-2 m-2 bg-secondary rounded-3 border border-4 border-secondary-subtle"
            style="height: 400px; overflow-y: auto;">
            <div>
                <nav id="navbar-example2" class="navbar bg-secondary px-3 mb-3">
                    <a class="navbar-brand">Próximos proyectos</a>
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link" href="#scrollspyHeading1">25 de Abril, 2025</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#scrollspyHeading2">30 de Mayo, 2025</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#scrollspyHeading3">2 de Junio, 2025</a></li>
                                <li><a class="dropdown-item" href="#scrollspyHeading4">19 de Junio, 2025</a></li>
                                <li><a class="dropdown-item" href="#scrollspyHeading5">5 de Julio, 2025</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%"
                    data-bs-smooth-scroll="true" class="scrollspy-example bg-secondary p-3 rounded-2" tabindex="0">
                    <h4 id="scrollspyHeading1">First heading</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi unde asperiores laudantium ipsam
                        tenetur rerum. Dolore suscipit doloribus labore perspiciatis, facilis id harum a molestias,
                        dolorem tempore neque deleniti deserunt.</p>
                    <h4 id="scrollspyHeading2">Second heading</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi error hic quo. Corrupti
                        delectus mollitia temporibus aliquid odio voluptates consectetur sunt obcaecati tempore dolorum
                        placeat beatae, perferendis ut id magni!</p>
                    <h4 id="scrollspyHeading3">Third heading</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias molestias in repellendus quibusdam
                        vitae ipsam necessitatibus! Culpa dignissimos similique beatae vel molestiae facilis sequi, quas
                        modi explicabo molestias esse at!</p>
                    <h4 id="scrollspyHeading3">Third heading</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias molestias in repellendus quibusdam
                        vitae ipsam necessitatibus! Culpa dignissimos similique beatae vel molestiae facilis sequi, quas
                        modi explicabo molestias esse at!</p>
                    <h4 id="scrollspyHeading4">Fourth heading</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias molestias in repellendus quibusdam
                        vitae ipsam necessitatibus! Culpa dignissimos similique beatae vel molestiae facilis sequi, quas
                        modi explicabo molestias esse at!</p>
                    <h4 id="scrollspyHeading5">Fifht heading</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias molestias in repellendus quibusdam
                        vitae ipsam necessitatibus! Culpa dignissimos similique beatae vel molestiae facilis sequi, quas
                        modi explicabo molestias esse at!</p>
                </div>
            </div>
        </div>

    </section>