@extends('layout')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Registro de Chocolate producido</h1>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-1">Ingrese cantidad cacao en Kg.</h3>
                        </div>
                        <div class="card-body">
                            <form method="GET" action="{{ route('ingresoChocolateProd') }}">
                                @csrf 
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" name="inputChocolateProd" id="inputChocolateProd"
                                        min="0" placeholder="Cantidad de Cacao">
                                    <label for="inputChocolateProd">Chocolate Producido</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3 mb-0">
                                    <input type="submit" class="btn btn-primary" value="Ingresar">
                                    <a type="button" class="btn btn-secondary" value="Cancelar" href={{url('chocolateProduc')}}>Cancelar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
