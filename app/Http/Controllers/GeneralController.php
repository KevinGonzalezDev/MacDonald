<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Mail\DatosIngreso;

class GeneralController extends Controller
{
  public function enviocorreo(){
      $respuesta = request()->get('email');



      Mail::to($respuesta)->send(
        new DatosIngreso('hola')
      );

    }
}
