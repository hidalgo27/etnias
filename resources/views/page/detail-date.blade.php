@extends('layouts.page.default')
@section('content')
    @include('layouts.page.menu')
    @foreach($comunidad as $comunidades)
        @foreach($comunidades->asociaciones as $asociaciones)
            @foreach($asociaciones->actividades as $actividades)

                <section class="position-relative">
                    <div id="home-slider-container" class="detail-slider-container">
                        <div id="home-slider">
                            @foreach($actividades->fotos->where('estado',1)->take(1) as $fotos)
                                <div class="slider-item">
                                    <img src="http://admin.mietnia.com/admin/mostar/imagen/{{$fotos->imagen}}/actividades"/>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="bg-header">
                        <div class="container">
                            <div class="row align-items-end bg-header-body pb-5">
                                <div class="col text-white">
                                    <h1 class="text-white">Comunidad de {{ucwords(strtolower($comunidades->nombre))}}</h1>
                                    <p class="lead font-weight-normal"><b>Ubicación:</b> {{ucwords(strtolower($comunidades->distrito->distrito))}}, <b>Altura:</b> {{$comunidades->altura}}, <b>Distancia de la ciudad más cercana:</b> {{$comunidades->distancia}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-header-menu bg-g-green-light text-white">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <ul>
                                        <li>Comunidad: {{ucwords(strtolower($comunidades->nombre))}}</li>
                                        @foreach($actividades->precios as $precio)
                                            <li>Precio : <sup>$</sup>{{round($precio->precio+($precio->precio*$asociaciones->comision)/100)}}<small class="p-0">USD</small></li>
                                        @endforeach
                                        <li class="text-truncate" data-toggle="tooltip" data-placement="top" title="{{$actividades->duracion}}">Duración : {{$actividades->duracion}}</li>
                                        <li class="btn-book">
                                            <a href="">Reservar Ahora</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-light">
                    <div class="container container-shadow">

                        <section class="py-5">
                            <div class="row">
                                <div class="col-8">
                                    <div class="row">
                                        <div class="col">
                                            <h2 class="font-weight-bold h1 text-g-grey-primary">{{ucwords(strtolower($actividades->titulo))}}
                                                {{--<span class="text-warning text-15">--}}
                                                {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                                {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                                {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                                {{--<i class="fa fa-star" aria-hidden="true"></i>--}}
                                                {{--<i class="fa fa-star-half-o" aria-hidden="true"></i>--}}
                                                {{--</span>--}}
                                                {{--<span class="text-15 badge badge-g-red-primary">4.5</span>--}}
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col font-poppins text-g-grey-primary">
                                            <h5 class="font-weight-bold pb-2">DESCRIPCIÓN:</h5>
                                            @php echo $actividades->descripcion; @endphp
                                        </div>
                                    </div>
                                    <div class="row font-poppins mt-3">
                                        <div class="col d-flex">
                                            <div class="card w-100">
                                                <div class="card-body">
                                                    <h6 class="font-weight-bold">Términos y condiciones de la comunidad</h6>
                                                    <div class="d-block"><i class="fas fa-check "></i> <b class="text-g-grey-light">Edad mínima:</b> {{ucwords(strtolower($actividades->edad_minima))}}</div>
                                                    <div class="d-block"><i class="fas fa-check "></i> <b class="text-g-grey-light">Dificultad:</b> {{ucwords(strtolower($actividades->dificultad))}}</div>
                                                    <div class="d-block"><i class="fas fa-check "></i> <b class="text-g-grey-light">Tolerancia máxima:</b> {{ucwords(strtolower($actividades->tolerancia))}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col d-flex">
                                            <div class="card w-100">
                                                <div class="card-body">
                                                    <h6 class="font-weight-bold">Descripción duración y periodo</h6>
                                                    <div class="d-block"><i class="fas fa-check "></i> <b class="text-g-grey-light">Periodo:</b> {{ucwords(strtolower($actividades->periodo))}}</div>
                                                    <div class="d-block"><i class="fas fa-check "></i> <b class="text-g-grey-light">Duración:</b> {{ucwords(strtolower($actividades->duracion))}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col">
                                            <div class="font-poppins text-g-grey-primary">
                                                <h5 class="font-weight-bold">Incluye</h5>
                                                @php echo $actividades->incluye; @endphp

                                                <h5 class="font-weight-bold">No Incluye</h5>
                                                @php echo $actividades->no_incluye; @endphp
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col font-poppins">
                                            <h5 class="font-weight-bold pb-3">Disponibilidad:</h5>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <div  id="custom-cells"></div>
                                        </div>
                                        {{--<div class="col">--}}
                                        {{--<div  id="custom-cells-2"></div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-12 mt-2">--}}
                                        {{--<div id="custom-cells-events">--}}
                                        {{--<strong></strong>--}}
                                        {{--<p></p>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col font-poppins">
                                            <h5 class="font-weight-bold pb-3">Galeria de imagenes:</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row slider-huilloq mx-4">
                                                <div class="col">
                                                    @foreach($actividades->fotos->where('estado',0) as $galeria)
                                                        <a class="venobox" data-gall="myGallery" href="http://admin.mietnia.com/admin/mostar/imagen/{{$galeria->imagen}}/actividades"><img src="http://admin.mietnia.com/admin/mostar/imagen/{{$galeria->imagen}}/actividades" class="w-100" /></a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5 d-none">
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="font-poppins">
                                                        <h5 class="font-weight-bold pb-2">Califique este paquete</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, eos voluptatibus? Itaque iure laudantium minus.</p>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="row btn-group btn-group-toggle w-100 m-0 mb-3" data-toggle="buttons">
                                                                <label class="col-auto btn btn-secondary">
                                                                    <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                                                    <i class="fa fa-star"></i>
                                                                </label>
                                                                <label class="col-auto btn btn-secondary">
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </label>
                                                                <label class="col-auto btn btn-secondary">
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </label>
                                                                <label class="col-auto btn btn-secondary">
                                                                    <input type="radio" name="options" id="option2" autocomplete="off">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </label>
                                                                <label class="col-auto btn btn-secondary active">
                                                                    <input type="radio" name="options" id="option3" autocomplete="off">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="text" class="form-control" placeholder="Nombre">
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="text" class="form-control" placeholder="Email">
                                                        </div>
                                                        <div class="col-12 my-3">
                                                            <textarea class="form-control" placeholder="Comentario"></textarea>
                                                        </div>
                                                        <div class="col-12 mb-4 text-center">
                                                            <button class="btn btn-g-red-dark">Enviar</button>
                                                        </div>
                                                    </div>


                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="row align-items-center">
                                                                <div class="col-4">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-auto">
                                                                            <img src="{{asset('images/paquetes/1.jpg')}}" alt="" class="rounded-circle" width="50" height="50">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col text-center">
                                                                            <h5 class="m-0 mt-3 font-weight-bold text-g-grey-dark">Hidalgo Ponce</h5>
                                                                            <p class="text-g-grey-light font-weight-bold small">19 enero, 2017</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                    <span class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                                    <div class="d-block font-poppins pt-3">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi aspernatur aut consequuntur dolorem dolorum eaque esse exercitationem fugit hic iusto obcaecati officia pariatur quaerat, quod repellat similique ullam voluptatibus!</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <form action="{{route('book_path')}}" method="post" enctype="multipart/form-data" id="form_detail">
                                        @csrf
                                        <input type="hidden" name="id_actividad" value="{{$actividades->id}}">
                                        {{--<input type="hidden" name="txt_comision" value="{{$asociaciones->comision}}">--}}
                                        <div class="card">
                                            <div class="card-body text-center">
                                                @foreach($actividades->precios as $precio)
                                                    <sup>$</sup><span class="font-weight-bold display-4 h1" id="precio_persona">{{round($precio->precio+($precio->precio*$asociaciones->comision)/100)}}</span><small>USD</small>
                                                    <small class="d-block text-muted">Precio por persona</small>
                                                @endforeach
                                                <hr>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group text-left">
                                                            <label for="custom-cells" class="font-weight-bold text-secondary small">Fecha de Viaje</label>
                                                            <input type="text" class="form-control" id="custom-cells-3" name="fecha_viaje" placeholder="Escoja su fecha de viaje" required value="{{$fecha}}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group text-left">
                                                            <label for="exampleFormControlSelect1" class="font-weight-bold text-secondary small">Numero de personas</label>
                                                            <input class="form-control" id="txt_personas" name="txt_personas" onchange="price_person()" required value="{{$rango_min}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                {{--<div class="row">--}}
                                                {{--<div class="col">--}}
                                                {{--<div class="form-group text-left">--}}
                                                {{--<label for="custom-cells" class="font-weight-bold text-secondary small">Pais</label>--}}
                                                {{--<input type="text" class="form-control" id="txt_pais" name="txt_pais" placeholder="Escoja su pais" required>--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                                <button type="submit" class="btn btn-block btn-g-red-dark text-white font-weight-bold mt-3">Reservar Ahora</button>
                                                @if (session('status'))
                                                    <div class="alert alert-warning font-weight-bold mt-3">
                                                        {{ session('status') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                    <div class="card bg-light mt-4">
                                        <div class="card-body font-poppins">
                                            <h6 class="font-weight-bold d-block">Recomendaciones</h6>
                                            @php echo $actividades->recomendaciones; @endphp
                                            <hr>
                                            <h6 class="font-weight-bold">Guia Disponible:</h6>
                                            @php echo $actividades->disponible; @endphp
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </section>

            @endforeach
        @endforeach
    @endforeach
@endsection


@push('scripts')
    <script>

        $picker = $('#custom-cells');
        $picker3 = $('#custom-cells-3');

        $content = $('#custom-cells-events');

        var eventDates = new Array();

        @foreach($disponibilidad_a as $disponibilidades_a)
        eventDates.push('{{$disponibilidades_a->fecha}}');
        @endforeach

        $picker.datepicker({
            language: 'en',
            inline: true,
            onRenderCell: function (date, cellType) {
                console.log('recorrido onRenderCell:'+date);
                var currentDate = date.getDate();
                var mes=date.getMonth()+1;
                mes=mes < 10 ? '0'+mes : mes;
                var dia=date.getDate();
                dia=dia < 10 ? '0'+dia : dia;
                var fecha=date.getFullYear()+'-'+mes+'-'+dia;
                // Add extra element, if `eventDates` contains `currentDate`
                if (cellType == 'day' && eventDates.indexOf(fecha) != -1) {
                    return {
                        // html: '<span class="dp-note">'+currentDate+'</span>'
                        html: currentDate + '<span class="dp-note"></span>'
                    }
                }else{
                    return {
                        disabled: true
                    }
                }

            },
            onSelect: function onSelect(fd, date) {
                var mes=date.getMonth()+1;
                mes=mes < 10 ? '0'+mes : mes;
                var dia=date.getDate();
                dia=dia < 10 ? '0'+dia : dia;
                var fecha=dia+'/'+mes+'/'+date.getFullYear();
                $('#custom-cells-3').val(fecha);
            }
        });

        $picker3.datepicker({
            language: 'en',
            onRenderCell: function (date, cellType) {
                console.log('recorrido onRenderCell:'+date);
                var currentDate = date.getDate();
                var mes=date.getMonth()+1;
                mes=mes < 10 ? '0'+mes : mes;
                var dia=date.getDate();
                dia=dia < 10 ? '0'+dia : dia;
                var fecha=date.getFullYear()+'-'+mes+'-'+dia;
                // Add extra element, if `eventDates` contains `currentDate`
                if (cellType == 'day' && eventDates.indexOf(fecha) != -1) {
                    return {
                        // html: '<span class="dp-note">'+currentDate+'</span>'
                        html: currentDate + '<span class="dp-note"></span>'
                    }
                }else{
                    return {
                        disabled: true
                    }
                }

            },
            onSelect: function onSelect(fd, date) {
                var mes=date.getMonth()+1;
                mes=mes < 10 ? '0'+mes : mes;
                var dia=date.getDate();
                dia=dia < 10 ? '0'+dia : dia;
                var fecha=dia+'/'+mes+'/'+date.getFullYear();
                $('#custom-cells-3').val(fecha);
            }
        });

        function price_person() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('[name="_token"]').val()
                }
            });

            var dataString = $('#form_detail').serialize();

            // alert('Datos serializados: '+dataString);

            $.ajax({
                type: "POST",
                url: "../detail/update_price",
                data: dataString,
                success: function(data) {
                    document.getElementById('precio_persona').innerHTML = data;
                }
            });
            // alert($precio+'-'+$comision+'-'+$idactividad);

            {{--@foreach($precio_actividad->where('min','>',$personas)->where('max','<',$personas) as $precio_actividad)--}}
            {{--console.log('{{$precio_actividad->id}}');--}}
            {{--@endforeach--}}

            // $price = $precio.split('-');
            // $price = parseFloat($price[1]);
            // $total = $price+( $comision * $price)/100;
            // console.log($price+'+('+$comision+'*'+$price+')/'+100);
            // // document.getElementById('precio_persona').value = ("hola");
            // document.getElementById('precio_persona').innerHTML = Math.round($total.toFixed(2));
        }

        // function price_person() {
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('[name="_token"]').val()
        //         }
        //     });
        //
        //     var dataString = $('#form_detail').serialize();
        //
        //     // alert('Datos serializados: '+dataString);
        //
        //     $.ajax({
        //         type: "POST",
        //         url: "../detail/update_price",
        //         data: dataString,
        //         success: function(data) {
        //             document.getElementById('precio_persona').innerHTML = data;
        //         }
        //     });
        //
        // }
    </script>
@endpush
