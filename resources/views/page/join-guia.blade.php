@extends('layouts.page.default')
@section('content')
    @include('layouts.page.menu-book')

    <section class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="font-weight-bold display-4 text-g-grey-primary">Únete a nuestro <span class="text-g-red-dark">Equipo</span></h1>
                    <h4 class="text-g-grey-light">Llene el formulario de <span class="font-weight-bold text-g-red-primary">guias</span> y trabaje con nosotros</h4>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p class="lead font-weight-normal mt-5">Hola Etnia Worker,  si vives en una ciudad donde ofrecemos nuestros servicios y sabes ingles eres el indicado, si quieres formar parte de nuestro equipo,dejanos tus datos y nos pondremos en contacto contigo o manda tu cv a etniasworker@mietnias.com</p>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    @if (session('status'))
                        <div class="alert alert-success font-weight-bold mt-3">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <form action="{{route('join_guia_post_path')}}" method="post">
                        @csrf
                        <h5 class="font-weight-bold text-g-red-primary">UBICACIÓN</h5>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="departamento" class="font-weight-bold text-g-grey-light">Departamento</label>
                                            <select class="form-control" name="departamento" id="departamento" onchange="mostrar_provincias($(this).val());">
                                                <option value="0">Escoja una opcion</option>
                                                @foreach ($departamentos as $item)
                                                    <option value="{{ $item->id }}" @if ($item->id==old('departamento'))
                                                    selected
                                                        @endif>{{ $item->departamento }}

                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="provincia" class="font-weight-bold text-g-grey-light">Provicia</label>
                                            <select class="form-control" name="provincia" id="provincia" onchange="mostrar_distritos($(this).val());">
                                                <option value="0">Escoja una opcion</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div id="distrito_id" class="form-group">
                                            <label for="distrito" class="font-weight-bold text-g-grey-light">Distrito</label>
                                            <select class="form-control" name="distrito" id="distrito" onchange="mostrar_comunidades($(this).val(),'0');">
                                                <option value="0">Escoja una opcion</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="font-weight-bold text-g-red-primary">INFORMACIÓN GENERAL</h5>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt_nombre" class="font-weight-bold text-g-grey-light">Nombre</label>
                                    <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" required>
                                </div>
                                <div class="form-group">
                                    <label for="txt_perfil" class="font-weight-bold text-g-grey-light">Perfil linkedin</label>
                                    <input type="text" class="form-control" id="txt_perfil" name="txt_perfil">
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
@push('scripts')
    <script>
        function mostrar_provincias(departamento_id){
            // alert('hola:'+departamento_id);
            console.log('departamento_id:'+departamento_id);
            if(departamento_id>0){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type:'POST',
                    url:'mostrar-provincias',
                    data:{departamento_id:departamento_id},
                    success:function(data){
                        $("select[name='provincia']").html('');
                        $("select[name='provincia']").html(data.options);
                        $("#provincia").focus();
                    }
                });
            }
        }
        function mostrar_distritos(provincia_id){
            // alert('hola:'+departamento_id);
            console.log('departamento_id:'+provincia_id);
            if(provincia_id>0){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type:'POST',
                    url:'mostrar-distritos',
                    data:{provincia_id:provincia_id},
                    success:function(data){
                        $("select[name='distrito']").html('');
                        $("select[name='distrito']").html(data.options);
                        $("#distrito").focus();
                    }
                });
            }
        }
        function mostrar_comunidades(distrito_id,asociacion_id){
            // alert('hola:'+departamento_id);
            console.log('distrito_id:'+distrito_id);
            if(distrito_id>0){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type:'POST',
                    url:'mostrar-comunidades',
                    data:{distrito_id:distrito_id},
                    success:function(data){

                        $("#comunidad_"+asociacion_id).html('');
                        $("#comunidad_"+asociacion_id).html(data.options);

                        $("#comunidad_0").focus();

                    }
                });
            }
        }

    </script>
@endpush
