@extends('layout')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Registro de cantidades de cacao</h1>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-1">Ingrese cantidad cacao en KG</h3>
                        </div>
                        <div class="card-body">
                            <form method="GET" action="{{ route('ingresoCantidadCacao') }}">
                                @csrf 
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" name="inputCantidadCacao" id="inputCantidadCacao"
                                        min="1" placeholder="Cantidad de Cacao">
                                    <label for="inputCantidadCacao">Cantidad de Cacao</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3 mb-0">
                                    <input type="submit" class="btn btn-primary" value="Ingresar">
                                    <a type="button" class="btn btn-secondary" value="Cancelar" href={{url('cantidadesCacao')}}>Cancelar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
