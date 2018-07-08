@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ingreso de Cliente') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        descargue su archivo en el siguiente link <a href="{{ session('status') }}">
                            {{ session('status') }}   
                        </a>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    @endif
                    <form method="POST" action="/sis/create" >
                        @csrf
                      <div class="form-group row">
                            <label for="tipo_documento" class="col-md-4 col-form-label text-md-right">{{ __('Tipo Documento') }}</label>

                            <div class="col-md-6">
                                <select id="tipo_documento" type="text" class="form-control{{ $errors->has('tipo_documento') ? ' is-invalid' : '' }}" name="tipo_documento" value="{{ old('tipo_documento') }}" required autofocus>
                                <option value="CC">CC</option>
                                <option value="CE">CE</option>
                                </select>
                                @if ($errors->has('tipo_documento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tipo_documento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="numero_documento" class="col-md-4 col-form-label text-md-right">{{ __('Numero de Documento') }}</label>

                            <div class="col-md-6">
                                <input id="numero_documento" type="text" class="form-control{{ $errors->has('numero_documento') ? ' is-invalid' : '' }}" name="numero_documento" value="{{ old('numero_documento') }}" required autofocus>

                                @if ($errors->has('numero_documento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('numero_documento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nombres" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>

                            <div class="col-md-6">
                                <input id="nombres" type="text" class="form-control{{ $errors->has('nombres') ? ' is-invalid' : '' }}" name="nombres" value="{{ old('nombres') }}" required autofocus>

                                @if ($errors->has('nombres'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombres') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellidos" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>

                            <div class="col-md-6">
                                <input id="apellidos" type="text" class="form-control{{ $errors->has('apellidos') ? ' is-invalid' : '' }}" name="apellidos" value="{{ old('apellidos') }}" required autofocus>

                                @if ($errors->has('apellidos'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('apellidos') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="departamento" class="col-md-4 col-form-label text-md-right">{{ __('Departamento') }}</label>

                            <div class="col-md-6">
                                <input id="departamento" type="text" class="form-control{{ $errors->has('departamento') ? ' is-invalid' : '' }}" name="departamento" value="{{ old('departamento') }}" required autofocus>

                                @if ($errors->has('departamento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('departamento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ciudad" class="col-md-4 col-form-label text-md-right">{{ __('Ciudad') }}</label>

                         <div class="col-md-6">
                                <input id="ciudad" type="text" class="form-control{{ $errors->has('ciudad') ? ' is-invalid' : '' }}" name="ciudad" value="{{ old('ciudad') }}" required autofocus>

                                @if ($errors->has('ciudad'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ciudad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>

                            <div class="col-md-6">
                                <div class='input-group' >
                                <input id="direccion" type="text" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" value="{{ old('direccion') }}" required autofocus>
                                
                                </div>
                            </div>
                                @if ($errors->has('direccion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group row">
                            <label for="celular" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                            <div class="col-md-6">
                                <div class='input-group' >
                                <input id="celular" type="text" class="form-control{{ $errors->has('celular') ? ' is-invalid' : '' }}" name="celular" value="{{ old('celular') }}" required autofocus>
                                
                                </div>
                            </div>
                                @if ($errors->has('celular'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('celular') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group row">
                            <label for="correo" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <div class='input-group' >
                                <input id="correo" type="text" class="form-control{{ $errors->has('correo') ? ' is-invalid' : '' }}" name="correo" value="{{ old('correo') }}" required autofocus>
                                
                                </div>
                            </div>
                                @if ($errors->has('correo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('correo') }}</strong>
                                    </span>
                                @endif
                            </div>
                  </div>
                  </div>
                  <br>

                  <div class="card">
                    <div class="card-header">{{ __('Información Adicional - Datos Inmueble') }}</div> 
                      <div class="card-body">                     
                            <div class="form-group row">
                            <label for="nombre_in" class="col-md-4 col-form-label text-md-right">{{ __('Nombre Inmueble') }}</label>

                            <div class="col-md-6">
                                <div class='input-group' >
                                <input id="nombre_in" type="text" class="form-control{{ $errors->has('nombre_in') ? ' is-invalid' : '' }}" name="nombre_in" value="{{ old('nombre_in') }}" required autofocus>
                                
                                </div>
                            </div>
                                @if ($errors->has('nombre_in'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre_in') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group row">
                            <label for="departamento_in" class="col-md-4 col-form-label text-md-right">{{ __('Departamento Inmueble') }}</label>

                            <div class="col-md-6">
                                <div class='input-group' >
                                <input id="departamento_in" type="text" class="form-control{{ $errors->has('departamento_in') ? ' is-invalid' : '' }}" name="departamento_in" value="{{ old('departamento_in') }}" required autofocus>
                                
                                </div>
                            </div>
                                @if ($errors->has('departamento_in'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('departamento_in') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group row">
                            <label for="ciudad_in" class="col-md-4 col-form-label text-md-right">{{ __('Ciudad Inmueble') }}</label>

                            <div class="col-md-6">
                                <div class='input-group' >
                                <input id="ciudad_in" type="text" class="form-control{{ $errors->has('ciudad_in') ? ' is-invalid' : '' }}" name="ciudad_in" value="{{ old('ciudad_in') }}" required autofocus>
                                
                                </div>
                            </div>
                                @if ($errors->has('ciudad_in'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ciudad_in') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group row">
                            <label for="vereda_in" class="col-md-4 col-form-label text-md-right">{{ __('Vereda Inmueble') }}</label>

                            <div class="col-md-6">
                                <div class='input-group' >
                                <input id="vereda_in" type="text" class="form-control{{ $errors->has('vereda_in') ? ' is-invalid' : '' }}" name="vereda_in" value="{{ old('vereda_in') }}" required autofocus>
                                
                                </div>
                            </div>
                                @if ($errors->has('vereda_in'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('vereda_in') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group row">
                            <label for="matricula_in" class="col-md-4 col-form-label text-md-right">{{ __('Matricula Inmueble') }}</label>

                            <div class="col-md-6">
                                <div class='input-group' >
                                <input id="matricula_in" type="text" class="form-control{{ $errors->has('matricula_in') ? ' is-invalid' : '' }}" name="matricula_in" value="{{ old('matricula_in') }}"  autofocus>
                                
                                </div>
                            </div>
                                @if ($errors->has('matricula_in'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('matricula_in') }}</strong>
                                    </span>
                                @endif
                            </div>
                          <div class="form-group row">
                            <label for="Ciudad_registro_in" class="col-md-4 col-form-label text-md-right">{{ __('Ciudad de Registro') }}</label>

                            <div class="col-md-6">
                                <div class='input-group' >
                                <select id="Ciudad_registro_in" type="text" class="form-control{{ $errors->has('Ciudad_registro_in') ? ' is-invalid' : '' }}" name="Ciudad_registro_in" value="{{ old('Ciudad_registro_in') }}" required autofocus>
                                    <option value="Chiquinquira">Chiquinquira</option>
                                    <option value="Duitama">Duitama</option>
                                    <option value="El Cocuy">El Cocuy</option>
                                    <option value="Garagoa">Garagoa</option>
                                    <option value="Guateque">Guateque</option>
                                    <option value="Miraflores">Miraflores</option>
                                    <option value="Moniquira">Moniquira</option>
                                    <option value="Puerto Boyaca">Puerto Boyaca</option>
                                    <option value="Ramiriqui">Ramiriqui</option>
                                    <option value="Santa Rosa de Viterbo">Santa Rosa de Viterbo</option>
                                    <option value="Soata">Soata</option>
                                    <option value="Socha">Socha</option>
                                    <option value="Sogamoso">Sogamoso</option>
                                    <option value="Tunja">Tunja</option>
                                </select>
                                </div>
                            </div>
                                @if ($errors->has('Ciudad_registro_in'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Ciudad_registro_in') }}</strong>
                                    </span>
                                @endif
                            </div>
                        <div class="form-group row">
                            <label for="matricula_in" class="col-md-4 col-form-label text-md-right">{{ __('hechos') }}</label>

                            <div class="col-md-6">
                                <div class='input-group' >
                                <textarea id="hechos" rows="6" class="form-control{{ $errors->has('hechos') ? ' is-invalid' : '' }}" name="hechos" value="{{ old('hechos') }}"  autofocus>
                                </textarea>
                                </div>
                            </div>
                                @if ($errors->has('hechos'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hechos') }}</strong>
                                    </span>
                                @endif
                            </div>
                          <div class="form-group row">
                            <label for="abogado" class="col-md-4 col-form-label text-md-right">{{ __('Nombre Abogado Encargado') }}</label>

                            <div class="col-md-6">
                                <div class='input-group' >
                                <input id="abogado" type="text" class="form-control{{ $errors->has('abogado') ? ' is-invalid' : '' }}" name="abogado" value="{{ old('abogado') }}" required autofocus>
                                
                                </div>
                            </div>
                                @if ($errors->has('abogado'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('abogado') }}</strong>
                                    </span>
                                @endif
                            </div>
                         <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary"">
                                    {{ __('Generar Archivo') }}
                                </button>
                                <input type="reset" class="btn btn-danger "value="Limpiar Formulario">
                            </div>
                        </div>
                      </div>
                      </div>
                      </div>    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function()
    {        
        $('#datetimepicker1').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $('#datetimepicker2').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $('#datetimepicker3').datetimepicker({
            format: 'YYYY-MM-DD'
        });

        $('#id_departamento').change(function(){

            // var drop_Ciudad = $('#id_ciudad option');
            // $.each(drop_Ciudad,function(a,item){
            //     this.remove();
            // });

            $.get('/test/' + this.value,
                function(data){
                    $('#id_ciudad').removeAttr('disabled');
                    $('#id_ciudad').html("");
                for (var i = 0; i < data.length; i++) {
                    $("#id_ciudad").append('<option value="'+data[i].id_ciudad+'">'+data[i].nombre+'</option>');

                }
            });
        });
    });
</script>

</head>

@endsection
