@extends('layouts.page.default')
@section('content')
    @include('layouts.page.menu-book')

    <section class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="font-weight-bold display-4 text-g-grey-primary">Únete a nuestro <span class="text-g-red-dark">Equipo</span></h1>
                    <h4 class="text-g-grey-light">Llene el formulario de <span class="font-weight-bold text-g-red-primary">comunidad</span> y trabaje con nosotros</h4>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="{{route('join_comunidad_post_path')}}" method="post">
                        <h5 class="font-weight-bold text-g-red-primary">INFORMACIÓN GENERAL</h5>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt_nombre" class="font-weight-bold text-g-grey-light">Nombre de la comunidad</label>
                                    <input type="text" class="form-control" name="txt_nombre" id="txt_nombre" required>
                                </div>
                                <div class="form-group">
                                    <label for="txt_representante" class="font-weight-bold text-g-grey-light">Nombre del representante</label>
                                    <input type="text" class="form-control" name="txt_representante" id="txt_representante">
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="txt_telefono" class="font-weight-bold text-g-grey-light">Teléfono contacto</label>
                                            <input type="text" class="form-control" name="txt_telefono" id="txt_telefono">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="txt_ubicacion" class="font-weight-bold text-g-grey-light">Ubicación</label>
                                            <input type="text" class="form-control" name="txt_ubicacion" id="txt_ubicacion">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="txt_distancia" class="font-weight-bold text-g-grey-light">Distancia desde la población urbana más cercana</label>
                                    <input type="text" class="form-control" name="txt_distancia" id="txt_distancia">
                                </div>
                                <div class="form-group">
                                    {{--<label class="font-weight-bold text-g-grey-light">Transporte y costo para acceder a la comunidad</label>--}}
                                    <div class="row">
                                        <div class="col">
                                            <label class="font-weight-bold text-info d-block">Transporte</label>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="trans_si" name="rdo_transporte" value="1" class="custom-control-input" checked>
                                                <label class="custom-control-label" for="trans_si">Si</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="trans_no" name="rdo_transporte" value="1" class="custom-control-input">
                                                <label class="custom-control-label" for="trans_no">No</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="font-weight-bold text-info">Costo para acceder a la comunidad</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">S/.</span>
                                                </div>
                                                <input type="text" class="form-control" name="costo_acceder" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="font-weight-bold text-g-red-primary">HOSPEDAJE</h5>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="txt_nombre" class="font-weight-bold text-g-grey-light">Cantidad de viviendas  para recibir turistas </label>
                                            <input type="number" class="form-control" name="txt_cantidad_viviendas" id="txt_cantidad_viviendas">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="slc_operador" class="font-weight-bold text-g-grey-light">¿ Que operador móvil tiene mejor cobertura?</label>
                                            <select class="form-control" id="slc_operador" name="operador">
                                                <option value="">Seleccione</option>
                                                <option value="Claro">Claro</option>
                                                <option value="Movistar">Movistar</option>
                                                <option value="Entel">Entel</option>
                                                <option value="Bitel">Bitel</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label class="font-weight-bold text-g-grey-light">¿Tiene cuartos individuales?</label>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="cuartos_i_si" name="rdo_cuartos_i" value="1" class="custom-control-input" checked>
                                                <label class="custom-control-label" for="cuartos_i_si">Si</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="cuartos_no" name="rdo_cuartos_i" value="1" class="custom-control-input">
                                                <label class="custom-control-label" for="cuartos_no">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="txt_nombre" class="font-weight-bold text-g-grey-light">¿cuantas habitaciones?</label>
                                            <input type="number" class="form-control" name="txt_habitaciones" id="txt_habitaciones">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label class="font-weight-bold text-g-grey-light">¿Tiene cuartos comunales?</label>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="cuartos_si" name="rdo_cuartos" value="1" class="custom-control-input" checked>
                                                <label class="custom-control-label" for="cuartos_si">Si</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="cuartos_no" name="rdo_cuartos" value="1" class="custom-control-input">
                                                <label class="custom-control-label" for="cuartos_no">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="txt_nombre" class="font-weight-bold text-g-grey-light">¿cuantas camas?</label>
                                            <input type="number" class="form-control" name="txt_camas" id="txt_camas">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="txt_nombre" class="font-weight-bold text-g-grey-light d-block">¿ Todas las casas cuentan con servicios básicos?(Electricidad, agua, desague)</label>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="servicios_si" name="rdo_servicios" value="1" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="servicios_si">Si</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="servicios_no" name="rdo_servicios" value="1" class="custom-control-input">
                                        <label class="custom-control-label" for="servicios_no">No</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="txt_nombre" class="font-weight-bold text-g-grey-light d-block">¿Cuentan con acceso a internet?</label>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="internet_si" name="rdo_internet" value="1" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="internet_si">Si</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="internet_no" name="rdo_internet" value="1" class="custom-control-input">
                                        <label class="custom-control-label" for="internet_no">No</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <h5 class="font-weight-bold text-g-red-primary">SERVICIOS QUE OFRECE</h5>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="font-weight-bold text-g-grey-light d-block">Enseñanza para hacer Artesania </label>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="artesania_si" name="rdo_artesania" value="1" class="custom-control-input" checked>
                                                <label class="custom-control-label" for="artesania_si">Si</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="artesania_no" name="rdo_artesania" value="1" class="custom-control-input">
                                                <label class="custom-control-label" for="artesania_no">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="txt_nombre" class="font-weight-bold text-g-grey-light d-block">Alimentación (desayuno, almuerzo, cena)</label>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="alimentacion_si" name="rdo_alimentacion" value="1" class="custom-control-input" checked>
                                                <label class="custom-control-label" for="alimentacion_si">Si</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="alimentacion_no" name="rdo_alimentacion" value="1" class="custom-control-input">
                                                <label class="custom-control-label" for="alimentacion_no">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="txt_nombre" class="font-weight-bold text-g-grey-light d-block">Enseñanza enTextileria</label>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="textil_si" name="rdo_textil" value="1" class="custom-control-input" checked>
                                                <label class="custom-control-label" for="textil_si">Si</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="textil_no" name="rdo_textil" value="1" class="custom-control-input">
                                                <label class="custom-control-label" for="textil_no">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="txt_nombre" class="font-weight-bold text-g-grey-light d-block">Yachaywasi(Enseñanza para niños: canto, etc)</label>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="yachay_si" name="rdo_yachay" value="1" class="custom-control-input" checked>
                                                <label class="custom-control-label" for="yachay_si">Si</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="yachay_no" name="rdo_yachay" value="1" class="custom-control-input">
                                                <label class="custom-control-label" for="yachay_no">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="txt_nombre" class="font-weight-bold text-g-grey-light d-block">Yanapacuy</label>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="yana_si" name="rdo_yana" value="1" class="custom-control-input" checked>
                                                <label class="custom-control-label" for="yana_si">Si</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="yana_no" name="rdo_yana" value="1" class="custom-control-input">
                                                <label class="custom-control-label" for="yana_no">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="txt_nombre" class="font-weight-bold text-g-grey-light d-block">Chasqui</label>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="chaski_si" name="rdo_chaski" value="1" class="custom-control-input" checked>
                                                <label class="custom-control-label" for="chaski_si">Si</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="chaski_no" name="rdo_chaski" value="1" class="custom-control-input">
                                                <label class="custom-control-label" for="chaski_no">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="txt_nombre" class="font-weight-bold text-g-grey-light">Otros</label>
                                    <input type="text" class="form-control" name="txt_otros" id="txt_otros">
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary font-weight-bold btn-block btn-lg">Enviar Solicitud</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
