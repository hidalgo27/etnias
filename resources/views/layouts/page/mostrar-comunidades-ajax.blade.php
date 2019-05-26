<option>Escoja un opcion</option>
@if(!empty($comunidades))
  @foreach($comunidades as $value)
    <option value="{{ $value->id }}">{{ $value->nombre }}</option>
  @endforeach
@endif
<option value="0" onclick="otros()">Otros</option>
