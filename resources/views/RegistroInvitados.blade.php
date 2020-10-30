@extends('layout.general')

@section('content')


@if ($datos['info'][0]->Boleta == 1)
<form id="ingresoForm" action="" method="post">
              @csrf
                <h2>Ticket sencillo</h2>
                <p>Ingresa tus datos</p>

                <label>*Obligatorio</label>
                <input type="text" name="correo" id="correo" placeholder="Tu nombre completo:*">
                <input type="text" name="correo" id="correo" placeholder="Tu nombre completo:*">
                <input type="submit" value="Iniciar sesión" id="iniciar-sesion">

                @if(count($errors))
                    <div class="form-group">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
</form>
@elseif ($datos['info'][0]->Boleta == 2)
<form id="ingresoForm" action="" method="post">
              @csrf
                <h2>Bienvenido2</h2>
                <p>Inicie sesión para registrar a sus invitados</p>

                <label>*Obligatorio</label>
                <input type="text" name="correo" id="correo" placeholder="Email*">

                <input type="submit" value="Iniciar sesión" id="iniciar-sesion">

                @if(count($errors))
                    <div class="form-group">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
</form>
@elseif ($datos['info'][0]->Boleta == 3)
<form id="ingresoForm" action="" method="post">
              @csrf
                <h2>Bienvenido3</h2>
                <p>Inicie sesión para registrar a sus invitados</p>

                <label>*Obligatorio</label>
                <input type="text" name="correo" id="correo" placeholder="Email*">

                <input type="submit" value="Iniciar sesión" id="iniciar-sesion">

                @if(count($errors))
                    <div class="form-group">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
</form>
@elseif ($datos['info'][0]->Boleta == 4)
<form id="ingresoForm" action="" method="post">
              @csrf
                <h2>Bienvenido4</h2>
                <p>Inicie sesión para registrar a sus invitados</p>

                <label>*Obligatorio</label>
                <input type="text" name="correo" id="correo" placeholder="Email*">

                <input type="submit" value="Iniciar sesión" id="iniciar-sesion">

                @if(count($errors))
                    <div class="form-group">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
</form>
@endif



@endsection
