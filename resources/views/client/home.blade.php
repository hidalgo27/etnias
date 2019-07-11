@extends('layouts.page.default')
@section('content')
    @include('layouts.page.menu-book')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-3">
            @include('layouts.client.menu')
        </div>
        <div class="col-12 col-md-9">
            <div class="row">
                <div class="col-12">
                    @if (session('status'))
                        <div class="alert alert-warning font-weight-bold mt-3">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-g-red-primary text-white">
                    @lang('client.historial_pedido')
                </div>
                <div class="card-body">
                    <table id="myTable" class="w-100 table-responsive">
                        <tbody class="small font-weight-bold text-secondary">
                            <tr class="h6 font-weight-bold text-g-grey-primary">
                                <th class="py-3">#</th>
                                <th>@lang('client.nombre_actividad')</th>
                                <th class="e_h1">@lang('client.fecha_llegada')</th>
                                <th class="e_h1">@lang('client.pasajeros')</th>
                                <th class="e_h1">@lang('client.pago')</th>
                                <th></th>
                            </tr>
                            @php $i = 1; @endphp
                            @foreach($reserva as $reservas)
                                @foreach($reservas->actividades as $actividades)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td><a href="{{route('client_order_path', $reservas->id)}}">{{$actividades->titulo}}</a></td>
                                        <td class="e_h1">{{$reservas->fecha_llegada}}</td>
                                        <td>{{$reservas->nro_pax}}</td>
                                        <td class="text-info"><sup>$</sup>{{$reservas->importe}}<small>USD</small></td>
                                        <td>
                                            <form action="{{route('client_cancel_path')}}">
                                                <button type="button" class="btn btn-danger btn-sm m-2" data-toggle="modal" data-target="#modal_cancel_{{$reservas->id}}">@lang('client.cancelar_reserva')</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @php $i++; @endphp
                                    <!-- Modal -->
                                    <div class="modal fade" id="modal_cancel_{{$reservas->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">@lang('client.cancelar_reserva')</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>@lang('client.desea_cancelar_actividad')</p>
                                                    <p>@lang('client.se_cancelara_todos_servicios')</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{route('client_cancel_path')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" value="{{$reservas->id}}" name="id_reserva">
                                                        <button type="submit" class="btn btn-danger">@lang('client.cancelar_reserva')</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
