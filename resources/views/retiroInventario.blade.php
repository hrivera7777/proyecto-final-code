@extends('layout')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Retiro de suministros del inventario</h1>
        
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>cantidades</th>
                            <th>id pedido</th>
                            <th>id suministro</th>
                            <th>tipo suministro</th>
                            <th>peso suministro</th>
                            <th>fecha vencimiento</th>
                            <th>disponible</th>
                            <th>unidades</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < count($datosInv); $i++)
                            <tr>
                                <td>{{$datosInv[$i]->id}}</td>
                                <td>{{$datosInv[$i]->cantidades}}</td>
                                <td>{{$datosInv[$i]->id_pedido}}</td>
                                <td>{{$datosSumi[$i]->id}}</td>
                                <td>{{$datosSumi[$i]->tipo_suministro}}</td>
                                <td>{{$datosSumi[$i]->peso}}</td>
                                <td>{{$datosSumi[$i]->fecha_vencimiento}}</td>
                                <td>{{$datosSumi[$i]->disponible}}</td>
                                <td>{{$datosSumi[$i]->unidades}}</td>
                            </tr>
                            
                        @endfor
                        {{-- @foreach ($datosInv as $inventario)
                        @endforeach
                        @foreach ($datosSumi as $sumi)
                        <tr>
                        </tr>
                        @endforeach --}}
                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
