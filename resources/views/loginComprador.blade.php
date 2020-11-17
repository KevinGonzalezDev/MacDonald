@extends('layout.general')

@section('content')

<div class="login-comprador-container">
    <form id="ingresoForm" action="{{url('login')}}" method="post">
        @csrf

          <h2>¡Tu compra ha sido exitosa!</h2>
          <p>Inicia sesión con el correo que la realizaste para registrarte a ti y a tus invitados.</p>

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
