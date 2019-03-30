@extends('layouts.page.default')
@section('content')
    @include('layouts.page.menu-book')
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-3">
                @include('layouts.client.menu')
            </div>
            <div class="col-9">
                <div class="card">
                    <div class="card-header bg-g-red-primary text-white">
                        Detalle de pedido
                    </div>
                    <div class="card-body">
                        <table class="w-100 table">
                            <tbody class="">
                            <tr>
                                <td class="font-weight-bold">Nombre de Servicio:</td>
                                <td class="e_h1">Tours chacra y alrededores</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Duración:</td>
                                <td class="e_h1">5 horas</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Precio:</td>
                                <td class="e_h1">$1250</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Fecha de llegada</td>
                                <td class="e_h1">12 jul 2019</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Numero de Personas</td>
                                <td>3 Adultos, 2 niños</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Estado de pago</td>
                                <td><span class="badge badge-success">Pagado</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush
