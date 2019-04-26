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
                    Historial de Pedido
                </div>
                <div class="card-body">
                    <table id="myTable" class="w-100">
                        <tbody class="small font-weight-bold text-secondary">
                            <tr class="h6 font-weight-bold text-g-grey-primary">
                                <th class="py-3">#</th>
                                <th>Nombre Actividad</th>
                                <th class="e_h1">Fecha de llegada</th>
                                <th class="e_h1">Pago</th>
                            </tr>
                            @foreach($reserva as $reservas)
                                @foreach($reservas->actividades as $actividades)
                            <tr>
                                <td>1</td>
                                <td><a href="{{route('client_order_path', 1)}}">{{$actividades->titulo}}</a></td>
                                <td class="e_h1">{{$reservas->fecha_llegada}}</td>
                                <td class="text-info"><sup>$</sup>{{$actividades->precio}}<small>USD</small></td>
                            </tr>
                                @endforeach
                            @endforeach
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
