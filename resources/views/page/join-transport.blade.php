@extends('layouts.page.default')
@section('content')
    @include('layouts.page.menu-book')

    <section class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="font-weight-bold display-4 text-g-grey-primary">Únete a nuestro <span class="text-g-red-dark">Equipo</span></h1>
                    <h4 class="text-g-grey-light">Llene el formulario de <span class="font-weight-bold text-g-red-primary">transportistas</span> y trabaje con nosotros</h4>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p class="lead font-weight-normal mt-5">Hola Etnia Worker,  si vives en una ciudad donde ofrecemos nuestros servicios y tienes un vehiculo propio eres el indicado, si quieres formar parte de nuestro equipo,dejanos tus datos y nos pondremos en contacto contigo.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form>
                        <h5 class="font-weight-bold text-g-red-primary">INFORMACIÓN GENERAL</h5>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt_nombre" class="font-weight-bold text-g-grey-light">Nombre</label>
                                    <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" required>
                                </div>
                                <div class="form-group">
                                    <label for="txt_email" class="font-weight-bold text-g-grey-light">Email</label>
                                    <input type="text" class="form-control" id="txt_email" name="txt_email">
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="txt_telefono" class="font-weight-bold text-g-grey-light">Teléfono contacto</label>
                                            <input type="text" class="form-control" id="txt_telefono" name="txt_telefono">
                                        </div>
                                    </div>
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
