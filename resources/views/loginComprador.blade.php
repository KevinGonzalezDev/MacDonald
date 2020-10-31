@extends('layout.general')

@section('content')

<div class="login-comprador-container">
    <form id="ingresoForm" action="{{url('login')}}" method="post">
        @csrf

          <h2>Bienvenido</h2>
          <p>Inicie sesión para registrar a sus invitados</p>

          <label>*Obligatorio</label>

          <div class="inputs-container-one">

            <input type="text" name="correo" id="correo" placeholder="Email*">

            <input type="submit" value="Iniciar sesión" id="iniciar-sesion">

          </div>

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
</div>


@endsection
