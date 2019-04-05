@extends('layouts.page.default')
    @section('content')
        @include('layouts.page.menu')
        @foreach($comunidad as $comunidades)
            @foreach($comunidades->asociaciones as $asociaciones)
                @foreach($asociaciones->actividades as $actividades)
                    @foreach($actividades->disponibilidad as $disponibilidad)
                        @if (isset($disponibilidad))
        <section class="position-relative">
            <div id="home-slider-container" class="detail-slider-container">
                <div id="home-slider">
                    <div class="slider-item">
                        <img src="{{asset('images/sliders/slider-4.jpg')}}"/>
                        {{--<div class="container">--}}
                        {{--<div class="slider-content row align-items-center">--}}
                        {{--<div class="container">--}}
                        {{--<div class="slider-controls"><a class="slider-prev" href="#onceki"> </a><a class="slider-next" href="#sonraki"></a></div>--}}
                        {{--</div>--}}
                        {{--<div class="col">--}}
                        {{--<h2 class="display-4 font-weight-bold text-white">Auf mystischen <span class="d-block">Wegen</span></h2>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
            <div class="bg-header">
                <div class="container">
                    <div class="row align-items-end bg-header-body pb-5">
                        <div class="col text-white">
                            <h1 class="text-white">Comunidad de {{ucwords(strtolower($comunidades->nombre))}}</h1>
                            <p class="lead font-weight-normal"><b>Ubicación:</b> {{ucwords(strtolower($comunidades->distrito->distrito))}}, <b>Altura:</b> {{$comunidades->altura}} msnm, <b>Distancia de la ciudad más cercana:</b> {{$comunidades->distancia}}</p>
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
                                <li>Precio : <sup>$</sup>{{$precio->precio}}<small class="p-0">USD</small></li>
                                @endforeach
                                <li>Duración : {{$actividades->duracion}}</li>
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
                            <div class="row ">
                                <div class="col">
                                    <h6 class="font-weight-bold d-block">Recomendaciones</h6>
                                    @php echo $actividades->recomendaciones; @endphp
                                </div>
                            </div>
                            <div class="row font-poppins">
                                <div class="col d-flex">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="font-weight-bold">Términos y condiciones de la comunidad</h6>
                                            <div class="d-block"><i class="fas fa-check "></i> <b class="text-g-grey-light">Edad mínima:</b> 15 años</div>
                                            <div class="d-block"><i class="fas fa-check "></i> <b class="text-g-grey-light">Dificultad:</b> Fácil</div>
                                            <div class="d-block"><i class="fas fa-check "></i> <b class="text-g-grey-light">Tolerancia máxima:</b> 15 minutos</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col d-flex">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="font-weight-bold">Descripción duración y periodo</h6>
                                            @php echo $actividades->periodo; @endphp
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
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
                                            <a class="venobox" data-gall="myGallery" href="{{asset('images/paquetes/1.jpg')}}"><img src="{{asset('images/paquetes/1.jpg')}}" class="w-100" /></a>
                                        </div>
                                        <div class="col">
                                            <a class="venobox" data-gall="myGallery" href="{{asset('images/paquetes/1.jpg')}}"><img src="{{asset('images/paquetes/1.jpg')}}" class="w-100" /></a>
                                        </div>
                                        <div class="col">
                                            <a class="venobox" data-gall="myGallery" href="{{asset('images/paquetes/1.jpg')}}"><img src="{{asset('images/paquetes/1.jpg')}}" class="w-100" /></a>
                                        </div>
                                        <div class="col">
                                            <a class="venobox" data-gall="myGallery" href="{{asset('images/paquetes/1.jpg')}}"><img src="{{asset('images/paquetes/1.jpg')}}" class="w-100" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
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
                        <div class="col">
                            <form action="{{route('book_path')}}" method="post">
                                @csrf
                                <div class="card">
                                    <div class="card-body text-center">
                                        @foreach($actividades->precios as $precio)
                                            <sup>$</sup><span class="font-weight-bold display-4 h1" id="precio_persona">{{$precio->precio}}</span><small>USD</small>
                                        @endforeach
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group text-left">
                                                    <label for="custom-cells" class="font-weight-bold text-secondary small">Fecha de Viaje</label>
                                                    <input type="text" class="form-control" id="custom-cells-3" placeholder="Escoja su fecha de viaje" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group text-left">
                                                    <label for="exampleFormControlSelect1" class="font-weight-bold text-secondary small">Numero de personas</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" onchange="price_person(this.value)">
                                                        @foreach($precio_actividad as $precio_actividad)
                                                            @if ($precio_actividad->min == 2 AND $precio_actividad->max == 2)
                                                                @php $selected = "selected" @endphp
                                                            @else
                                                                @php $selected = "" @endphp
                                                            @endif
                                                            @if ($precio_actividad->min == $precio_actividad->max)
                                                                <option {{$selected}} value="{{$precio_actividad->id}}-{{$precio_actividad->precio}}">{{$precio_actividad->min}}</option>
                                                            @else
                                                                <option {{$selected}} value="{{$precio_actividad->id}}-{{$precio_actividad->precio}}">{{$precio_actividad->min}} - {{$precio_actividad->max}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                            <button type="submit" class="btn btn-block btn-g-red-dark text-white font-weight-bold mt-3">Reservar Ahora</button>
                                    </div>
                                </div>
                            </form>
                            <div class="card bg-light mt-4">
                                <div class="card-body font-poppins">
                                    <h6 class="font-weight-bold">Incluye</h6>
                                    @php echo $actividades->incluye; @endphp
                                    <hr>
                                    <h6 class="font-weight-bold">No Incluye</h6>
                                    @php echo $actividades->no_incluye; @endphp
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
                        @endif
                    @endforeach
                @endforeach
            @endforeach
        @endforeach
    @endsection


@push('scripts')
    <script>

        // var disabledDates = ['2019.3.1', '2019.3.17', '2019.3.20', '2019.3.23'];
        //
        // $('#dp').datepicker({
        //     language: 'en',
        //     onRenderCell: function(d, type) {
        //         if (type == 'day') {
        //             var disabled = false,
        //                 formatted = getFormattedDate(d);
        //             disabled = disabledDates.filter(function(date){
        //                 return date == formatted;
        //                 //     return {html: '<span class="dp-note"></span>'}
        //             }).length;
        //             return {
        //                 disabled: disabled
        //             }
        //         }
        //     }
        // });
        //
        // function getFormattedDate(date) {
        //     var year = date.getFullYear(),
        //         month = date.getMonth() + 1,
        //         date = date.getDate();
        //     return year + '.' + month + '.' + date;
        // }

        // What dates should be disabled - year.month.date


        // var eventDates = [1, 18, 12, 31],
        // var eventDates = ['2019.3.1', '2019.3.17', '2019.3.20', '2019.4.23'];
        $picker = $('#custom-cells');
            $picker2 = $('#custom-cells-2');
            $picker3 = $('#custom-cells-3');
            $content = $('#custom-cells-events');
            // sentences = [
            //     'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ita prorsus, inquam; Si enim ad populum me vocas, eum. Ita prorsus, inquam; Nonne igitur tibi videntur, inquit, mala? Hunc vos beatum; Idemne, quod iucunde? ',
            //     'Ratio quidem vestra sic cogit. Illi enim inter se dissentiunt. Tu vero, inquam, ducas licet, si sequetur; Non semper, inquam; ',
            //     'Duo Reges: constructio interrete. A mene tu? Ea possunt paria non esse. Est, ut dicis, inquam. Scaevolam M. Quid iudicant sensus? ',
            //     'Poterat autem inpune; Qui est in parvis malis. Prave, nequiter, turpiter cenabat; Ita credo. '
            // ];


        // $picker2.datepicker({
        //     language: 'en',
        //     startDate: new Date('2019.4.1'),
        //     onRenderCell: function (date, cellType) {
        //         var currentDate = date.getDate();
        //         formatted = getFormattedDate(date);
        //         // Add extra element, if `eventDates` contains `currentDate`
        //         if (cellType == 'day' && eventDates.indexOf(formatted) != -1) {
        //             return {
        //                 html: currentDate + '<span class="dp-note"></span>'
        //             }
        //         }else{
        //             return {
        //                 disabled: true
        //             }
        //         }
        //     },
        //     onSelect: function onSelect(fd, date) {
        //         var title = '', content = '';
        //         // If date with event is selected, show it
        //         formatted = getFormattedDate(date);
        //         if (date && eventDates.indexOf(formatted) != -1) {
        //             title = fd;
        //             content = sentences[Math.floor(Math.random() * eventDates.length)];
        //         }
        //         $($picker3).val(title);
        //     }
        // });
        // $picker3.datepicker({
        //     language: 'en',
        //     onRenderCell: function (date, cellType) {
        //         var currentDate = date.getDate();
        //         formatted = getFormattedDate(date);
        //         // Add extra element, if `eventDates` contains `currentDate`
        //         if (cellType == 'day' && eventDates.indexOf(formatted) != -1) {
        //             return {
        //                 html: currentDate + '<span class="dp-note"></span>'
        //             }
        //         }else{
        //             return {
        //                 disabled: true
        //             }
        //         }
        //     },
        //     onSelect: function onSelect(fd, date) {
        //         var title = '', content = '';
        //         // If date with event is selected, show it
        //         formatted = getFormattedDate(date);
        //         if (date && eventDates.indexOf(formatted) != -1) {
        //             title = fd;
        //             content = sentences[Math.floor(Math.random() * eventDates.length)];
        //         }
        //         // $('strong', $content).html(title);
        //         // $('p', $content).html(content);
        //         $($picker3).val(title);
        //     }
        // });

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

                // var currentDate = date.getDate();
                // formatted = getFormattedDate(date);
                // // Add extra element, if `eventDates` contains `currentDate`
                // if (cellType == 'day' && eventDates.indexOf(formatted) != -1) {
                //     return {
                //         html: currentDate + '<span class="dp-note"></span>'
                //     }
                // }else{
                //     return {
                //         disabled: true
                //     }
                // }
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

        function price_person($id) {
            $price = $id.split('-');
            // document.getElementById('precio_persona').value = ("hola");
            document.getElementById('precio_persona').innerHTML = $price[1];
        }
    </script>
@endpush
