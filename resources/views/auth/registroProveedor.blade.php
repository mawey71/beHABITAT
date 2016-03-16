@extends('layout.master')

@section('titulo', 'Nuevo proveedor')

@section('contenido')
<div class="container">
    <div class="row">
        <hr >
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Soy un nuevo proveedor</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/registroProveedor') }}">
                        {!! csrf_field() !!}
                        <input type="hidden" name="rol" value="proveedor">
                        <div class="form-group{{ $errors->has('razon_social') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" id="etiqueta-nombre">razón social</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="razon_social" value="{{ old('razon_social') }}">

                                 @if ($errors->has('razon_social'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('razon_social') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('cif') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" id="etiqueta-nif">cif</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="cif" value="{{ old('cif') }}">

                                 @if ($errors->has('cif'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cif') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @include('auth.partials.formRegistro')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
