@extends('layout.general')

@section('content')


@if ($datos['info'][0]->Boleta == 1)
<form id="ingresoForm1" action="{{url('RegistroEventMovil')}}" method="post">
              @csrf
                <h2>Ticket sencillo</h2>
                <p>Ingresa tus datos</p>

                <label>*Obligatorio</label>
                <input type="text" name="nombre" id="nombre" placeholder="Tu nombre completo:*">
                <input type="text" name="correo" id="correo" placeholder="Tu correo electrónico:*">
                <input type="text" name="ciudad" id="ciudad" placeholder="Tu ciudad:*">
                <input type="hidden" name="event_id" value="261">
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
<form id="ingresoForm2" action="{{url('RegistroEventMovil')}}" method="post">
              @csrf
                <h2>Ticket 1</h2>
                <p>Inicie sesión para registrar a sus invitados</p>

                <label>*Obligatorio</label>
                <input type="text" name="nombre" id="nombre" placeholder="Tu nombre completo:*">
                <input type="text" name="correo" id="correo" placeholder="Tu correo electrónico:*">
                <input type="text" name="dirección" id="dirección" placeholder="Tu dirección:*">
                <input type="text" name="ciudad" id="ciudad" placeholder="Tu ciudad:*">
                <input type="hidden" name="event_id" value="261">
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
<form id="ingresoForm3" action="{{url('RegistroEventMovil')}}" method="post">
              @csrf
                <h2>Ticket 2</h2>
                <p>Inicie sesión para registrar a sus invitados</p>

                <label>*Obligatorio</label>
                <input type="text" name="nombre" id="nombre" placeholder="Tu nombre completo:*">
                <input type="text" name="correo" id="correo" placeholder="Tu correo electrónico:*">
                <input type="text" name="dirección" id="dirección" placeholder="Tu dirección:*">
                <input type="text" name="ciudad" id="ciudad" placeholder="Tu ciudad:*">

                <input type="text" name="nombreinvitado1" id="nombreinvitado1" placeholder="Nombre completo invitado:*">
                <input type="text" name="correoinvitado1" id="correoinvitado1" placeholder="Correo electrónico invitado:*">
                <input type="text" name="direccióninvitado1" id="direccióninvitado1" placeholder="Dirección invitado:*">
                <input type="text" name="ciudadinvitado1" id="ciudadinvitado1" placeholder="Ciudad invitado:*">


                <input type="hidden" name="event_id" value="261">

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
<form id="ingresoForm4" action="{{url('RegistroEventMovil')}}" method="post">
              @csrf
                <h2>Ticket 3</h2>
                <p>Inicie sesión para registrar a sus invitados</p>

                <label>*Obligatorio</label>
                <input type="text" name="nombre" id="nombre" placeholder="Tu nombre completo:*">
                <input type="text" name="correo" id="correo" placeholder="Tu correo electrónico:*">
                <input type="text" name="dirección" id="dirección" placeholder="Tu dirección:*">
                <input type="text" name="ciudad" id="ciudad" placeholder="Tu ciudad:*">

                <input type="text" name="nombreinvitado1" id="nombreinvitado1" placeholder="Nombre completo invitado 1:*">
                <input type="text" name="correoinvitado1" id="correoinvitado1" placeholder="Correo electrónico invitado 1:*">
                <input type="text" name="direccióninvitado1" id="direccióninvitado1" placeholder="Dirección invitado 1:*">
                <input type="text" name="ciudadinvitado1" id="ciudadinvitado1" placeholder="Ciudad invitado 1:*">

                <input type="text" name="nombreinvitado2" id="nombreinvitado2" placeholder="Nombre completo invitado 2:*">
                <input type="text" name="correoinvitado2" id="correoinvitado2" placeholder="Correo electrónico invitado 2:*">
                <input type="text" name="direccióninvitado2" id="direccióninvitado2" placeholder="Dirección invitado 2:*">
                <input type="text" name="ciudadinvitado2" id="ciudadinvitado2" placeholder="Ciudad invitado 2:*">

                <input type="hidden" name="event_id" value="261">
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
