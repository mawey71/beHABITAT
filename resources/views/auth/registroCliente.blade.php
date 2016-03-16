@extends('layout.master')

@section('titulo', 'Nuevo cliente')

@section('contenido')
<div class="container">
    <div class="row">
        <hr >
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Soy un nuevo cliente</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/registroCliente') }}">
                        {!! csrf_field() !!}
                        <input type="hidden" name="rol" value="cliente">
                        @include('auth.partials.formRegistro')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
