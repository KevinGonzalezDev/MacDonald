<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Response;
use GuzzleHttp\Client;

class AdminController extends Controller
{
    public function mailing(){
        Return view('mailing');
    }
    public function loginComprador(){
        return view('loginComprador');
    }

    public function login(){
      $this->Validate(request(), [
         'correo' => 'required',
      ]);


      $correo = request()->get('correo');

      $da = DB::SELECT("SELECT "
                . " * "
                . "FROM comprador "
                . "where Email  = '$correo'");

      $da1 = DB::SELECT("SELECT "
                . " * "
                . "FROM invitado "
                . "where Comprador  = ".$da[0]->id);

      if( count($da) > 0 && count($da1) == 0 ){
        $datos = [
            'info'=>$da
        ];
        return view('RegistroInvitados')->with('datos',$datos);
      }else {
          $ErroM = "El usuario no esta registrado";
          $datos = [

            'Error'=>$ErroM
                    ];
          return back()->withErrors($ErroM);
      }

    }

    public function RegistroInvitados(){
        return view('RegistroInvitados');
    }

    public function RegistroEventMovil(){

      $form_id = intval(request()->get('form_id'));
      $comprador = request()->get('comprador');

      $da = DB::SELECT("SELECT "
                . " * "
                . "FROM comprador "
                . "where id  = '$comprador'");
      $datos = [
          'info'=>$da
      ];
        switch ($form_id) {
          case 1:
          $this->Validate(request(), [
             'nombre' => 'required',
             'correo' => 'required',
             'ciudad' => 'required',
          ]);

          if (!$this->ValidaInvitado(request()->get('correo'))) {
            $ErroM = "El usuario ". request()->get('nombre') ." ya esta registrado en el evento";
            $data = [

              'Error'=>$ErroM
                      ];
            return view('RegistroInvitados')->with('datos',$datos)->withErrors($ErroM);
          }

         $this->EnviarPOSTEventMovil(request()->get('nombre'),request()->get('correo'),request()->get('ciudad'),'-');
         $this->InsertarDB(request()->get('nombre'),request()->get('correo'),request()->get('ciudad'),'-',request()->get('comprador'));

          break;
          case 2:
          $this->Validate(request(), [
             'nombre'  => 'required',
             'correo' => 'required',
             'dirección' => 'required',
             'ciudad' => 'required',
          ]);

          if (!$this->ValidaInvitado(request()->get('correo'))) {
            $ErroM = "El usuario ". request()->get('nombre') ." ya esta registrado en el evento";
            $data = [

              'Error'=>$ErroM
                      ];
            return view('RegistroInvitados')->with('datos',$datos)->withErrors($ErroM);
          }

          $this->EnviarPOSTEventMovil(request()->get('nombre'),request()->get('correo'),request()->get('ciudad'),request()->get('dirección'));
          $this->InsertarDB(request()->get('nombre'),request()->get('correo'),request()->get('ciudad'),request()->get('dirección'),request()->get('comprador'));



          break;
          case 3:
          $this->Validate(request(), [
             'correo' => 'required',
             'nombre' => 'required',
             'correo' => 'required',
             'dirección' => 'required',
             'ciudad' => 'required',
             'nombreinvitado1' => 'required',
             'correoinvitado1' => 'required',
             'direccióninvitado1' => 'required',
             'ciudadinvitado1' => 'required',
          ]);

          if (request()->get('correo') == request()->get('correoinvitado1') ) {

            $ErroM = "Cada invitado debe tener un correo distinto";
            $data = [

              'Error'=>$ErroM
                      ];
            return view('RegistroInvitados')->with('datos',$datos)->withErrors($ErroM);
          }

          if (!$this->ValidaInvitado(request()->get('correo'))) {
            $ErroM = "El usuario ". request()->get('nombre') ." ya esta registrado en el evento";
            $data = [

              'Error'=>$ErroM
                      ];
            return view('RegistroInvitados')->with('datos',$datos)->withErrors($ErroM);
          }

          if (!$this->ValidaInvitado(request()->get('correoinvitado1'))) {
            $ErroM = "El usuario ". request()->get('nombreinvitado1') ." ya esta registrado en el evento";
            $data = [

              'Error'=>$ErroM
                      ];
            return view('RegistroInvitados')->with('datos',$datos)->withErrors($ErroM);
          }

          $this->EnviarPOSTEventMovil(request()->get('nombre'),request()->get('correo'),request()->get('ciudad'),request()->get('dirección'));
          $this->InsertarDB(request()->get('nombre'),request()->get('correo'),request()->get('ciudad'),request()->get('dirección'),request()->get('comprador'));

          $this->EnviarPOSTEventMovil(request()->get('nombreinvitado1'),request()->get('correoinvitado1'),request()->get('ciudadinvitado1'),request()->get('direccióninvitado1'));
          $this->InsertarDB(request()->get('nombreinvitado1'),request()->get('correoinvitado1'),request()->get('ciudadinvitado1'),request()->get('direccióninvitado1'),request()->get('comprador'));

          break;
          case 4:
          $this->Validate(request(), [
             'correo' => 'required',
             'nombre' => 'required',
             'correo' => 'required',
             'dirección' => 'required',
             'ciudad' => 'required',
             'nombreinvitado1' => 'required',
             'correoinvitado1' => 'required',
             'direccióninvitado1' => 'required',
             'ciudadinvitado1' => 'required',
             'nombreinvitado2' => 'required',
             'correoinvitado2' => 'required',
             'direccióninvitado2' => 'required',
             'ciudadinvitado2' => 'required',
          ]);

          if (request()->get('correo')==request()->get('correoinvitado1') || request()->get('correo')==request()->get('correoinvitado1')  || request()->get('correoinvitado1')==request()->get('correoinvitado2')) {
            $ErroM = "Cada invitado debe tener un correo distinto";
            $data = [

              'Error'=>$ErroM
                      ];
            return view('RegistroInvitados')->with('datos',$datos)->withErrors($ErroM);
          }

          if (!$this->ValidaInvitado(request()->get('correo'))) {
            $ErroM = "El usuario ". request()->get('nombre') ." ya esta registrado en el evento";
            $data = [

              'Error'=>$ErroM
                      ];
            return view('RegistroInvitados')->with('datos',$datos)->withErrors($ErroM);
          }

          if (!$this->ValidaInvitado(request()->get('correoinvitado1'))) {
            $ErroM = "El usuario ". request()->get('nombreinvitado1') ." ya esta registrado en el evento";
            $data = [

              'Error'=>$ErroM
                      ];
            return view('RegistroInvitados')->with('datos',$datos)->withErrors($ErroM);
          }

          if (!$this->ValidaInvitado(request()->get('correoinvitado2'))) {
            $ErroM = "El usuario ". request()->get('nombreinvitado2') ." ya esta registrado en el evento";
            $data = [

              'Error'=>$ErroM
                      ];
            return view('RegistroInvitados')->with('datos',$datos)->withErrors($ErroM);
          }

          $this->EnviarPOSTEventMovil(request()->get('nombre'),request()->get('correo'),request()->get('ciudad'),request()->get('dirección'));
          $this->InsertarDB(request()->get('nombre'),request()->get('correo'),request()->get('ciudad'),request()->get('dirección'),request()->get('comprador'));

          $this->EnviarPOSTEventMovil(request()->get('nombreinvitado1'),request()->get('correoinvitado1'),request()->get('ciudadinvitado1'),request()->get('direccióninvitado1'));
          $this->InsertarDB(request()->get('nombreinvitado1'),request()->get('correoinvitado1'),request()->get('ciudadinvitado1'),request()->get('direccióninvitado1'),request()->get('comprador'));

          $this->EnviarPOSTEventMovil(request()->get('nombreinvitado2'),request()->get('correoinvitado2'),request()->get('ciudadinvitado2'),request()->get('direccióninvitado2'));
          $this->InsertarDB(request()->get('nombreinvitado2'),request()->get('correoinvitado2'),request()->get('ciudadinvitado2'),request()->get('direccióninvitado2'),request()->get('comprador'));

          break;
        }



    }

    public function InsertarDB($nombre,$email,$ciudad,$direccion,$comprador){
      DB::beginTransaction();
      try {
        DB::table('invitado')
            ->insert([
                'Nombre' => $nombre,
                'Email' => $email,
                'Ciudad' => $ciudad,
                'Direccion' => $direccion,
                'Comprador' => $comprador
            ]);
        DB::commit();

      } catch (\PDOException $exception) {
          error_log("Error - Crear comprador: " . $exception->getMessage());
          throw new \PDOException("Error - Crear comprador: " . $exception->getMessage());
          return response()->json([
          'info'=>0
          ]);
      }
    }

    public function EnviarPOSTEventMovil($nombre,$email,$ciudad,$direccion){
        $client = new Client();
        $res = $client->request('POST', 'https://webhook.site/a5161dae-8340-416c-8e71-34fb528515ca', [
          'form_params' => [
              'first_name' => $nombre,
              'last_name' => $nombre,
              'email' => $email,
              'event_id' => '261',
          ]
       ]);

    }


    public function ValidaInvitado($correoInvitado){
      $da = DB::SELECT("SELECT "
                . " * "
                . "FROM invitado "
                . "where Email  = '$correoInvitado'");

    if( count($da) == 0 ){
      return true;
    }else {
        return false;
    }
  }


}
