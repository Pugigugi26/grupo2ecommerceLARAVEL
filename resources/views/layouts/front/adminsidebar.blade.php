<nav class="col-12 col-md-3 col-xl-2 bg-dark mt-3 vh-100 pt-5 navAdmin px-0">
  <h4 class="letrablanca p-3"> Hola Admin! </h4>
    <div id="accordionPages">
  <div class="card letrablanca">
    <div class="card-header letrablanca" id="headingPages">
        <a class="d-flex row mb-0" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <div class="col-2">
              <i class="fas fa-edit"></i>
          </div>
          <div class="col-10 pl-0 titleHeaderAdmin">
            Páginas
          </div>
        </a>
    </div>

    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionPages">
      <div class="card-body">
        <ul>
          <li class="py-1 pl-3"> <a href="editHome.php">Home </a> </li>
          <li  class="py-1 pl-3"> <a href="editNosotros.php"> Nosotros </a> </li>
          <li  class="py-1 pl-3"> <a href="editContacto.php"> Contacto </a> </li>
          <li  class="py-1 pl-3"> <a href="editFAQS.php"> FAQ'S </a> </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="card letrablanca">
    <div class="card-header letrablanca" id="headingProductfamilies">
        <a class="d-flex row mb-0" data-toggle="collapse" data-target="#collapseProductfamilies" aria-expanded="true" aria-controls="collapseProductfamilies">
          <div class="col-2">
              <i class="fas fa-bars "></i>
          </div>
          <div class="col-10 pl-0 titleHeaderAdmin">
            Familias de producto
          </div>
        </a>
    </div>

    <div id="collapseProductfamilies" class="collapse" aria-labelledby="headingFamilies" data-parent="#accordionFamilies">
          <div id="accordionFamilies">
              <div class="card letrablanca">
                <div class="card-header subtitleheaderAdmin " id="headingFamilies">
                    <a class="d-flex row mb-0" data-toggle="collapse" data-target="#collapseFamilies" aria-expanded="true" aria-controls="collapseFamilies">
                      <div class="col-2">
                      </div>
                      <div class="col-10 pl-0 letrablanca d-flex justify-content-between">
                          <div class="">
                              Familias
                          </div>
                          <i class="fas fa-caret-down"> </i>

                      </div>
                    </a>
                </div>

                <div id="collapseFamilies" class="collapse" aria-labelledby="headingFamilies" data-parent="#accordionFamilies">
                    <ul>
                      <li class="py-1 pl-4 f100"> <a href="tdecolorAgregar.php"> Agregar </a></li>
                      <li  class="py-1 pl-4 f100"> <a href="tdecolorBorrar.php"> Borrar </a> </li>
                      <li  class="py-1 pl-4 f100"> <a href="tdecolorEditar.php"> Editar </a> </li>
                      <li  class="py-1 pl-4 f100"> <a href="tdecolorListar.php"> Listar </a> </li>
                    </ul>
                </div>
              </div>
            </div>
            </div>

  <div class="card letrablanca">
    <div class="card-header letrablanca" id="headingTwo">
        <a class="d-flex row mb-0" data-toggle="collapse" data-target="#collapseComponents" aria-expanded="true" aria-controls="collapseComponents">
          <div class="col-2">
              <i class="fas fa-bars "></i>
          </div>
          <div class="col-10 pl-0 titleHeaderAdmin">
            Componentes / Atributos
          </div>
        </a>
    </div>

    <div id="collapseComponents" class="collapse" aria-labelledby="headingLED" data-parent="#accordionLED">
          <div id="accordionLED">
              <div class="card letrablanca">
                <div class="card-header subtitleheaderAdmin " id="headingLED">
                    <a class="d-flex row mb-0" data-toggle="collapse" data-target="#collapseLED" aria-expanded="true" aria-controls="collapseLED">
                      <div class="col-2">
                      </div>
                      <div class="col-10 pl-0 letrablanca d-flex justify-content-between">
                          <div class="">
                              LED
                          </div>
                          <i class="fas fa-caret-down"> </i>

                      </div>
                    </a>
                </div>

                <div id="collapseLED" class="collapse" aria-labelledby="headingLEDd" data-parent="#accordionLED">
                    <ul>
                      <li class="py-1 pl-4 f100"> <a href="tdecolorAgregar.php"> Agregar </a></li>
                      <li  class="py-1 pl-4 f100"> <a href="tdecolorBorrar.php"> Borrar </a> </li>
                      <li  class="py-1 pl-4 f100"> <a href="tdecolorEditar.php"> Editar </a> </li>
                      <li  class="py-1 pl-4 f100"> <a href="tdecolorListar.php"> Listar </a> </li>
                    </ul>
                </div>
              </div>


          </div>
          <div id="accordionLens">
              <div class="card letrablanca">
                <div class="card-header subtitleheaderAdmin" id="headingLens">
                    <a class="d-flex row mb-0" data-toggle="collapse" data-target="#collapseLens" aria-expanded="true" aria-controls="collapseLens">
                      <div class="col-2">
                      </div>
                      <div class="col-10 pl-0 letrablanca d-flex justify-content-between">
                          <div class="">
                              Lentes
                          </div>
                          <i class="fas fa-caret-down"> </i>

                      </div>
                    </a>
                </div>

                <div id="collapseLens" class="collapse" aria-labelledby="headingLens" data-parent="#accordionLens">
                    <ul>
                      <li class="py-1 pl-4 f100"> <a href="aperturasAgregar.php"> Agregar </a></li>
                      <li  class="py-1 pl-4 f100"> <a href="aperturasBorrar.php"> Borrar </a> </li>
                      <li  class="py-1 pl-4 f100"> <a href="aperturasEditar.php"> Editar </a> </li>
                      <li  class="py-1 pl-4 f100"> <a href="aperturasListar.php"> Listar </a> </li>
                    </ul>
                </div>
              </div>


          </div>
          <div id="accordionDrivers">
              <div class="card letrablanca">
                <div class="card-header subtitleheaderAdmin" id="headingDrivers">
                    <a class="d-flex row mb-0" data-toggle="collapse" data-target="#collapseDrivers" aria-expanded="true" aria-controls="collapseDrivers">
                      <div class="col-2">
                      </div>
                      <div class="col-10 pl-0 letrablanca d-flex justify-content-between">
                          <div class="">
                              Drivers
                          </div>
                          <i class="fas fa-caret-down"> </i>

                      </div>
                    </a>
                </div>

                <div id="collapseDrivers" class="collapse" aria-labelledby="headingDrivers" data-parent="#accordionDrivers">
                    <ul>
                      <li class="py-1 pl-4 f100"> <a href="nucleosAgregar.php"> Agregar </a></li>
                      <li  class="py-1 pl-4 f100"> <a href="nucleosBorrar.php"> Borrar </a> </li>
                      <li  class="py-1 pl-4 f100"> <a href="nucleosEditar.php"> Editar </a> </li>
                      <li  class="py-1 pl-4 f100"> <a href="nucleosListar.php"> Listar </a> </li>
                    </ul>
                </div>
              </div>
          </div>
          <div id="accordionFrames">
              <div class="card letrablanca">
                <div class="card-header subtitleheaderAdmin" id="heading7">
                    <a class="d-flex row mb-0" data-toggle="collapse" data-target="#collapseFrames" aria-expanded="true" aria-controls="collapseFrames">
                      <div class="col-2">
                      </div>
                      <div class="col-10 pl-0 letrablanca d-flex justify-content-between">
                          <div class="">
                              Marcos
                          </div>
                          <i class="fas fa-caret-down"> </i>

                      </div>
                    </a>
                </div>
                <div id="collapseFrames" class="collapse" aria-labelledby="headingFrames" data-parent="#accordionFrames">
                    <ul>
                      <li class="py-1 pl-4 f100"> <a href="marcoAgregar.php"> Agregar </a></li>
                      <li  class="py-1 pl-4 f100"> <a href="marcoBorrar.php"> Borrar </a> </li>
                      <li  class="py-1 pl-4 f100"> <a href="marcoEditar.php"> Editar </a> </li>
                      <li  class="py-1 pl-4 f100"> <a href="marcoListar.php"> Listar </a> </li>
                    </ul>
                </div>
              </div>
          </div>

          <div id="accordionColors">
              <div class="card letrablanca">
                <div class="card-header subtitleheaderAdmin" id="headingColors">
                    <a class="d-flex row mb-0" data-toggle="collapse" data-target="#collapseColors" aria-expanded="true" aria-controls="collapsColors">
                      <div class="col-2">
                      </div>
                      <div class="col-10 pl-0 letrablanca d-flex justify-content-between">
                          <div class="">
                              Colores
                          </div>
                          <i class="fas fa-caret-down"> </i>

                      </div>
                    </a>
                </div>
                <div id="collapseColors" class="collapse" aria-labelledby="headingColors" data-parent="#accordionColors">
                    <ul>
                      <li class="py-1 pl-4 f100"> <a href="marcoAgregar.php"> Agregar </a></li>
                      <li  class="py-1 pl-4 f100"> <a href="marcoBorrar.php"> Borrar </a> </li>
                      <li  class="py-1 pl-4 f100"> <a href="marcoEditar.php"> Editar </a> </li>
                      <li  class="py-1 pl-4 f100"> <a href="marcoListar.php"> Listar </a> </li>
                    </ul>
                </div>
              </div>
          </div>
      </div>
    </div>


        </div>
      </div>
  </div>
</nav>
