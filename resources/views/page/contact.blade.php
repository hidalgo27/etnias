@extends('layouts.page.default')
    @section('content')
        @include('layouts.page.menu')
        <section class="position-relative">
            <div class="form-header-bg h-25">
                <div class="container">
                    <div class="row justify-content-center align-items-center h-100vh">
                        <div class="col-12 text-center text-truncate">
                            <h1 class="font-weight-bold display-4 text-white">@lang('contact.contactenos')</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div id="home-slider-container">
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
                    <div class="slider-item">
                        <img src="{{asset('images/sliders/slider-7.jpg')}}"/>
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
        </section>

        <section class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="font-weight-bold display-4 text-g-red-dark">MI ETNIA</h1>
                        <div class="title-line">
                            <div class="tl-1"></div>
                            <div class="tl-2"></div>
                            <div class="tl-3"></div>
                        </div>
                        <p class="lead font-weight-normal text-g-grey-light  my-4">
                            @lang('contact.h1_p')
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-secondary h5"><strong>Contact form:</strong></h2>
                        <form class="card bg-light mb-4" id="c_form" role="form">
                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm col-md-12 col-lg-6">
                                        <div class="row">
                                            <div class="col">
                                                <h2 class="text-secondary h5"><strong>NAME <span class="text-primary">*</span></strong></h2>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="input-group input-group-lg">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="c_name" name="c_name" placeholder="FULL NAME" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4 mt-sm-0 col-sm col-md-12 mt-md-4 col-lg-6 mt-lg-0">
                                        <div class="row">
                                            <div class="col">
                                                <h2 class="text-secondary h5"><strong>EMAIL <span class="text-primary">*</span></strong></h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="input-group input-group-lg">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                                    </div>
                                                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="Email address" aria-label="Phone" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row mt-4">
                                    <div class="col-12 col-sm col-md-12 col-lg-6">
                                        <div class="row">
                                            <div class="col">
                                                <h2 class="text-secondary h5"><strong>PHONE</strong></h2>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="input-group input-group-lg">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                                    </div>
                                                    <input type="tel" class="form-control" id="c_phone" name="c_phone" placeholder="PHONE NUMBER" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4 mt-sm-0 col-sm col-md-12 mt-md-4 col-lg-6 mt-lg-0">

                                        <div class="row">
                                            <div class="col">
                                                <h2 class="text-secondary h5"><strong>CITY</strong></h2>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="input-group input-group-lg">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-location-arrow"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="c_city" name="c_city" placeholder="CITY" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group mt-4">
                                    <h2 class="text-secondary h5"><strong>WRITE YOUR MESSAGE</strong></h2>
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-comment"></i></span>
                                        </div>
                                        <textarea class="form-control" id="c_comment" name="c_comment" aria-label="With textarea"></textarea>
                                    </div>
                                </div>

                                <div class="row justify-content-center py-4">
                                    <div class="col-6 text-center">
                                        <button type="button" class="btn btn-primary btn-block btn-lg" onclick="contactus()" id="c_submit">Send</button>
                                        <i class="fas fa-spinner fa-pulse fa-2x text-primary d-none" id="c_load"></i>

                                    </div>
                                </div>
                                <div class="row mt-3 justify-content-center d-none" id="c_alert">
                                    <div class="col-10">
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <b><strong>THANK YOU</strong> for contacting us, a <strong>MiEtnia</strong></b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="contact-map map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1987868.4034060312!2d-73.28427844863587!3d-13.315685432385974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916c52f4fed09ecd%3A0x623b0247474a0643!2zQ3V6Y28sIFBlcsO6!5e0!3m2!1ses-419!2sin!4v1552495016009" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row font-poppins">
                    <div class="col">
                        <h4 class="font-weight-bold text-g-grey-light">Mi Etnia</h4>
                        <p>@lang('contact.somos_una')</p>
                    </div>
                    <div class="col">
                        <h4 class="font-weight-bold text-g-grey-light">@lang('contact.direccion')</h4>
                        <p>AHH Pillcohuasi F-17 Ollantaytambo – cusco</p>
                    </div>
                    <div class="col">
                        <h4 class="font-weight-bold text-g-grey-light">@lang('contact.contacto'):</h4>
                        <a href="tel://51978365487" class="d-block">@lang('contact.contacto'): +51978365487</a>
                        <a href="tel://0099999999" class="d-block">@lang('contact.atención_cliente'): +51949586825</a>
                        <a href="mailto:mytestmail@gmail.com" class="d-block">Email: misreservas@mietnia.com</a>
                        <a href="mailto:mytestmail@gmail.com" class="d-block">Email: atencionalcliente@mietnia.com</a>
                    </div>
                    <div class="col">
                        <h4 class="font-weight-bold text-g-grey-light">Website</h4>
                        <a href="#" class="d-block">Website: www.mietnia.com</a>
                        <a href="https://www.facebook.com/Mietnia/" target="_blank" class="d-block">Facebook: https://www.facebook.com/Mietnia/</a>
                        <a href="https://www.instagram.com/mietnia/" target="_blank" class="d-block">Instagram: https://www.instagram.com/mietnia/</a>
                    </div>
                </div>
            </div>
        </section>
    @endsection
@push('scripts')
    <script>
        //formulario design
        function contactus(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('[name="_token"]').val()
                }
            });
            $("#c_submit").attr("disabled", true);
            var filter=/^[A-Za-z][A-Za-z0-9_.]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;
            var s_name = $("#c_name").val();
            var s_email = $("#c_email").val();
            if (filter.test(s_email)){
                sendMail = "true";
            } else{
                $('#c_email').css("border-bottom", "2px solid #FF0000");
                sendMail = "false";
            }
            if (s_name.length == 0 ){
                $('#c_name').css("border-bottom", "2px solid #FF0000");
                var sendMail = "false";
            }
            if(sendMail == "true"){
                var dataString = $('#c_form').serialize();
                $.ajax({
                    data:  dataString,
                    url:   "{{route('contact_s_path')}}",
                    type:  'post',
                    beforeSend: function () {
                        // $('#de_send').removeClass('show');
                        $("#c_submit").addClass('d-none');
                        $("#c_load").removeClass('d-none');
                    },
                    success:  function (response) {
                        $('#c_form')[0].reset();
                        $('#c_submit').removeClass('d-none');
                        $("#c_load").addClass('d-none');
                        $('#c_alert').removeClass('d-none');
                        // $("#h_alert b").html(response);
                        $("#c_alert").fadeIn('slow');
                        $("#c_submit").removeAttr("disabled");
                    }
                });
            } else{
                $("#c_submit").removeAttr("disabled");
            }
        }
    </script>
@endpush
