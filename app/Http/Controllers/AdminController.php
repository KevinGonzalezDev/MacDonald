<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class AdminController extends Controller
{
    public function mailing(){
        Return view('mailing');
    }
    public function loginComprador(){
        return view('loginComprador');
    }

    public function login(){
      $this->validate(request(), [
         'correo' => 'required',
      ]);


      $correo = request()->get('correo');

      $da = DB::SELECT("SELECT "
                . " * "
                . "FROM comprador "
                . "where Email  = '$correo'");

      if( count($da) > 0 ){
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

    }
}
