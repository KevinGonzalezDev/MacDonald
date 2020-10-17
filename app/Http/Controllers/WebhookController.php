<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Mail\DatosIngreso;


class WebhookController extends Controller
{
  public function handle(Request $request)
  {
    $respuesta = json_decode($request->getContent());
  //  $correo = $respuesta->data->email;

    Mail::to("juanario1997@gmail.com")->send(
      new DatosIngreso($request)
    );
  }
}
