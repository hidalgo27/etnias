@extends('layouts.page.default')
    @section('content')
        @include('layouts.page.menu')
        <section class="position-relative">
            <div class="form-header-bg h-25">
                <div class="container">
                    <div class="row justify-content-center align-items-center h-100vh">
                        <div class="col text-center">
                            <h1 class="font-weight-bold display-4 text-white">Comunidad de Huilloq</h1>
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

        <section class="bg-light">
            <div class="container container-shadow">
                <div class="row pt-5">
                    <div class="col-9">
                        <div class="row" id="explore">
                            <div class="col">
                                <h1 class="font-weight-bold display-4 text-g-grey-primary"><span class="text-g-red-dark">Huiloq</span></h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dolor excepturi illum mollitia placeat porro sapiente sequi? Aspernatur natus nihil non, repellendus sunt tempora ut vero. Illum nulla sunt voluptates.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid assumenda commodi dolore doloremque dolores error facilis illo, ipsam magnam nulla numquam omnis, quisquam repellat reprehenderit similique vitae voluptas. Quidem, recusandae.</p>
                                <div class="row align-items-center mt-4">
                                    <div class="col">
                                        <h5 class="font-weight-bold">Comunidad Huiloq titulo</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dolor excepturi illum mollitia placeat porro sapiente sequi? Aspernatur natus nihil non, repellendus sunt tempora ut vero. Illum nulla sunt voluptates.</p>
                                    </div>
                                    <div class="col text-center">
                                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=5HmBmdEiG0k&list=RD5HmBmdEiG0k&start_radio=1">
                                            <img src="{{asset('images/queuna.jpg')}}" alt="" class="w-100 position-relative rounded shadow">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4" id="actividades">
                            <div class="col">
                                <h4 class="font-weight-bold text-g-grey-primary mt-5 mb-4">Elija una actividad en Huiloq</h4>
                                <div class="row">
                                    <div class="col-4 mb-4">
                                        <div class="row">
                                            <div class="col">
                                                <div class="header-img-actividades">
                                                    <img src="{{asset('images/taucca/thumbnail/t5.jpg')}}" alt="" class="w-100">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer-box-actividades row m-0">
                                            <div class="col">
                                                <h6><a href="{{route('detail_path')}}" class="text-g-grey-primary font-weight-bold stretched-link">ACTIVIDAD 1 <small class="text-g-green-light">(Luciernagas)</small></a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 mb-4">
                                        <div class="row">
                                            <div class="col">
                                                <div class="header-img-actividades">
                                                    <img src="{{asset('images/taucca/thumbnail/t5.jpg')}}" alt="" class="w-100">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer-box-actividades row m-0">
                                            <div class="col">
                                                <h6><a href="{{route('detail_path')}}" class="text-g-grey-primary font-weight-bold">ACTIVIDAD 1 <small class="text-g-green-light">(Luciernagas)</small></a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 mb-4">
                                        <div class="row">
                                            <div class="col">
                                                <div class="header-img-actividades">
                                                    <img src="{{asset('images/taucca/thumbnail/t5.jpg')}}" alt="" class="w-100">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer-box-actividades row m-0">
                                            <div class="col">
                                                <h6><a href="{{route('detail_path')}}" class="text-g-grey-primary font-weight-bold">ACTIVIDAD 1 <small class="text-g-green-light">(Luciernagas)</small></a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 mb-4">
                                        <div class="row">
                                            <div class="col">
                                                <div class="header-img-actividades">
                                                    <img src="{{asset('images/taucca/thumbnail/t5.jpg')}}" alt="" class="w-100">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer-box-actividades row m-0">
                                            <div class="col">
                                                <h6><a href="{{route('detail_path')}}" class="text-g-grey-primary font-weight-bold">ACTIVIDAD 1 <small class="text-g-green-light">(Luciernagas)</small></a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 mb-4">
                                        <div class="row">
                                            <div class="col">
                                                <div class="header-img-actividades">
                                                    <img src="{{asset('images/taucca/thumbnail/t5.jpg')}}" alt="" class="w-100">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer-box-actividades row m-0">
                                            <div class="col">
                                                <h6><a href="{{route('detail_path')}}" class="text-g-grey-primary font-weight-bold">ACTIVIDAD 1 <small class="text-g-green-light">(Luciernagas)</small></a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 mb-4">
                                        <div class="row">
                                            <div class="col">
                                                <div class="header-img-actividades">
                                                    <img src="{{asset('images/taucca/thumbnail/t5.jpg')}}" alt="" class="w-100">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer-box-actividades row m-0">
                                            <div class="col">
                                                <h6><a href="{{route('detail_path')}}" class="text-g-grey-primary font-weight-bold">ACTIVIDAD 1 <small class="text-g-green-light">(Luciernagas)</small></a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row mb-4" id="asociaciones">
                            <div class="col">
                                <h4 class="font-weight-bold text-g-grey-primary  mb-4">Asociaciones en la comunidad</h4>
                                <div class="row">
                                    <div class="col-4 text-center">
                                        <img src="{{asset('images/taucca3.jpg')}}" alt="" width="150" height="150" class="rounded-circle shadow">
                                        <h6 class="d-block my-2 font-weight-bold text-g-grey-primary cursor-pointer stretched-link" data-toggle="modal" data-target="#comunidad-hormiguitas">Asociacion las Hormiguitas</h6>
                                        <!-- Modal -->
                                        <div class="modal fade" id="comunidad-hormiguitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <img src="{{asset('images/taucca3.jpg')}}" alt="" width="150" height="150" class="rounded-circle shadow">
                                        <h6 class="d-block my-2 font-weight-bold text-g-grey-primary cursor-pointer stretched-link" data-toggle="modal" data-target="#comunidad-hormiguitas">Asociacion las Hormiguitas</h6>
                                        <!-- Modal -->
                                        <div class="modal fade" id="comunidad-hormiguitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <img src="{{asset('images/taucca3.jpg')}}" alt="" width="150" height="150" class="rounded-circle shadow">
                                        <h6 class="d-block my-2 font-weight-bold text-g-grey-primary cursor-pointer stretched-link" data-toggle="modal" data-target="#comunidad-hormiguitas">Asociacion las Hormiguitas</h6>
                                        <!-- Modal -->
                                        <div class="modal fade" id="comunidad-hormiguitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-5" id="historia">
                            <div class="col">
                                <h4 class="font-weight-bold text-g-grey-primary  mb-4">Historia</h4>
                                <div class="row">
                                    <div class="col">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi exercitationem facere in iusto maiores nesciunt, quam. At consectetur corporis laudantium maiores modi nihil obcaecati quam, quas reprehenderit repudiandae sunt.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <nav id="navbar-scroll" class="navbar navbar-light bg-light sticky-top">
                            <nav class="nav nav-pills flex-column">
                                <a class="nav-link font-weight-bold" href="#explore">Explore la comunidad de Huiloq</a>
                                <a class="nav-link font-weight-bold" href="#actividades">Elija una actividad en Huiloq</a>
                                <a class="nav-link font-weight-bold" href="#asociaciones">Asociaciones en la comunidad</a>
                                <a class="nav-link font-weight-bold" href="#historia">Historia</a>
                            </nav>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    @endsection
