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
                            <th>id Inventario</th>
                            <th>cantidades</th>
                            <th>id pedido</th>
                            <th>id suministro</th>
                            <th>tipo suministro</th>
                            <th>peso suministro</th>
                            <th>fecha vencimiento</th>
                            <!--<th>disponible</th>-->
                            <th>unidades</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < count($datosInv); $i++)
                            <tr>
                                <td>{{ $datosInv[$i]->id }}</td>
                                <td>{{ $datosInv[$i]->cantidades }}</td>
                                <td>{{ $datosInv[$i]->id_pedido }}</td>
                                <td>{{ $datosSumi[$i]->id }}</td>
                                <td>{{ $datosSumi[$i]->tipo_suministro }}</td>
                                <td>{{ $datosSumi[$i]->peso }}</td>
                                <td>{{ $datosSumi[$i]->fecha_vencimiento }}</td>
                                <!--<td>{{ $datosSumi[$i]->disponible }}</td>-->
                                <td>{{ $datosSumi[$i]->unidades }}</td>
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
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-1">Ingrese los datos para el producto que desea retirar</h3>
                                </div>
                                <div class="card-body">
                                    <form method="GET" action="{{route('retiroCompleto')}}">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" name="inputIdInven" id="inputIdInven"
                                            min="1" max="7"  placeholder="Id Inventario">
                                            <label for="inputIdInven">Id Inventario</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="inputCantidades" id="inputCantidades" type="text"
                                                placeholder="cantidades" />
                                            <label for="inputCantidades">Cantidad del producto</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <input type="submit" class="btn btn-primary" value="Confirmar">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
