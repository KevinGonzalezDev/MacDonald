@extends('layout.general')

@section('content')
<form id="ingresoForm" action="{{url('login')}}" method="post">
              @csrf
                <h2>Bienvenido</h2>
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
@endsection
