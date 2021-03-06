
<!-- Modal -->
<div class="modal left fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body pb-0">
                <div class="row">
                    <div class="col">
                        <img src="{{asset('images/logo-etnias-2.png')}}" alt="" class="w-100">
                    </div>
                    <div class="col-auto">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <hr class="my-4">
                <div class="row">
                    <div class="col text-right">
                        <a href="{{route('comunidad_path')}}" class="font-weight-bold h5 d-block text-g-grey-dark">@lang('home.comunidades')</a>
                        <a href="{{route('actividades_path')}}" class="font-weight-bold h5 d-block text-g-grey-dark">@lang('home.actividades')</a>
                        <a href="https://blog.mietnia.com" class="font-weight-bold h5 d-block text-g-grey-dark">Blog</a>
{{--                        <a href="{{route('packages_path')}}" class="font-weight-bold h5 d-block text-g-grey-dark">Paquetes</a>--}}
                        <a href="{{route('about_path')}}" class="font-weight-bold h5 d-block text-g-grey-dark">@lang('home.nosotros')</a>
{{--                        <a href="{{route('blog_path')}}" class="font-weight-bold h5 d-block text-g-grey-dark">Nuestro Blog</a>--}}
                        <a href="{{route('contact_path')}}" class="font-weight-bold h5 d-block text-g-grey-dark">@lang('home.contactenos')</a>
                        <hr>
                        <a href="{{ route('login') }}" class="font-weight-bold h5 d-block text-primary m-0">@lang('home.inicio_sesion') <i class="fas fa-sign-in-alt"></i></a>
                        <hr>
                        <a href="{{ route('join_path') }}" class="font-weight-bold h5 d-block text-info m-0">@lang('home.trabaja_con_nosotros')</a>
                    </div>
                </div>
                <hr class="my-3">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="row">
                            <div class="col text-center">
                                <a href="https://www.facebook.com/Mietnia/" target="_blank"><i class="fab fa-facebook fa-2x text-primary"></i></a>
                            </div>
{{--                            <div class="col">--}}
{{--                                <i class="fab fa-twitter fa-2x text-info"></i>--}}
{{--                            </div>--}}
                            <div class="col text-center">
                                <a href="https://www.instagram.com/mietnia/" target="_blank"><i class="fab fa-instagram fa-2x text-g-grey-light"></i></a>
                            </div>

                            <div class="col text-center">
                                <a href="https://api.whatsapp.com/send?phone=51917474233" target="_blank"><i class="fab fa-whatsapp fa-2x text-g-grey-light"></i></a>
                            </div>

{{--                            <div class="col">--}}
{{--                                <i class="fab fa-youtube fa-2x text-danger"></i>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row mt-4">
                    <div class="col text-center">
                        @if (App::isLocale('en'))
                            <a href="{{asset('doc/terms-and-conditions.pdf')}}" target="_blank" class="font-weight-normal h6 d-block text-g-grey-light">@lang('home.terminos')</a>
                        @else
                            <a href="{{asset('doc/terminos-y-condiciones.pdf')}}" target="_blank" class="font-weight-normal h6 d-block text-g-grey-light">@lang('home.terminos')</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
