@extends('layouts.page.default')
@section('content')
    @include('layouts.page.menu-book')

    <section class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="font-weight-bold display-4 text-g-grey-primary">Ayudanos a <span class="text-g-red-dark">Mejorar</span></h1>
{{--                    <h4 class="text-g-grey-light">@lang('join.h1_guia_p')</h4>--}}
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
{{--                    <p class="lead font-weight-normal mt-5">@lang('join.etnia_worker')</p>--}}
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

                    <form action="{{route('encuesta_save_post_path')}}" method="post">
                        @csrf
                        <h5 class="font-weight-bold text-g-red-primary">@lang('join.informacion_general')</h5>
                        <div class="card mb-4">
                            <div class="card-body">
                                @foreach($reserva->encuestas->sortby('pos') as $encuesta)
                                    <input type="hidden" name="encuestas[]" value="{{$encuesta->id}}_{{$encuesta->estado}}">
                                    @if($encuesta->estado=='1')
                                        <div class="form-group">
                                            <label for="txt_nombre_{{$encuesta->id}}" class="font-weight-bold text-g-grey-light">{{$encuesta->pregunta}}</label>
                                            <div class="row btn-group btn-group-toggle w-100 m-0 mb-3" data-toggle="buttons">
                                                @for($i=1;$i<=5;$i++)
                                                    <label class="col-auto btn btn-secondary">
                                                        <input type="radio" name="options_{{$encuesta->id}}" value="{{$i}}" autocomplete="off">
                                                        @for($j=1;$j<=$i;$j++)
                                                            <i class="fa fa-star"></i>
                                                        @endfor
                                                    </label>
                                                @endfor
                                            </div>
                                        </div>
                                    @else
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <input type="hidden" name="reserva_id" value="{{$reserva->id}}">
                                <button type="submit" class="btn btn-primary font-weight-bold btn-block btn-lg">@lang('join.enviar')</button>
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
