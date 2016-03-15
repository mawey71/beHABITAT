                    <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label" id="etiqueta-nombre">nombre</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">

                             @if ($errors->has('nombre'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('primer_apellido') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">primer apellido</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="primer_apellido" value="{{ old('primer_apellido') }}">

                             @if ($errors->has('primer_apellido'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('primer_apellido') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('segundo_apellido') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">segundo apellido</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="segundo_apellido" value="{{ old('segundo_apellido') }}">

                             @if ($errors->has('segundo_apellido'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('segundo_apellido') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('nif') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label" id="etiqueta-nif">nif</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="nif" value="{{ old('nif') }}">

                             @if ($errors->has('nif'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nif') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">nombre usuario</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="username" value="{{ old('username') }}">

                            @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">e-mail</label>

                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">confirmación password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password_confirmation">

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group{{ $errors->has('localidad') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">dirección</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="direccion" value="{{ old('direccion') }}">

                             @if ($errors->has('direccion'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('direccion') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>                            
                    <div class="form-group{{ $errors->has('localidad') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">localidad</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="localidad" value="{{ old('localidad') }}">

                             @if ($errors->has('localidad'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('localidad') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>    
                    <div class="form-group{{ $errors->has('codigo_postal') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">código postal</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="codigo_postal" value="{{ old('codigo_postal') }}">

                             @if ($errors->has('codigo_postal'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('codigo_postal') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>                                
                    <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">teléfono</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="telefono" value="{{ old('telefono') }}">

                             @if ($errors->has('telefono'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('telefono') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>    
                    <div class="form-group{{ $errors->has('telefono_movil') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">teléfono móvil</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="telefono_movil" value="{{ old('telefono_movil') }}">

                             @if ($errors->has('telefono_movil'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('telefono_movil') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>                                
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-user"></i> Registrar
                            </button>
                        </div>
                    </div>