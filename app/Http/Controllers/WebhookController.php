<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Mail\DatosIngreso;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;



class WebhookController extends Controller
{
  public function handle(Request $request)
  {
    $respuesta = json_decode($request->getContent());
    $campaña = $respuesta->data->campaign_name;
    $formulario = $respuesta->data->form_name;

  #  if ($campaña == 'La Receta Solidaria' && $formulario == 'Receta Solidaria') {

      $correo = $respuesta->data->email;
      $boleta = $respuesta->data->amount;
      $nombre = $respuesta->data->first_name;
      $apellido = $respuesta->data->last_name;

      switch (intval($boleta)) {
    case 80000:
        $IdBoleta = 1;
        break;
    case 300000:
        $IdBoleta = 2;
        break;
    case 500000:
        $IdBoleta = 3;
        break;
    case 500000:
        $IdBoleta = 4;
        break;
      }



      DB::beginTransaction();
      try {
        DB::table('comprador')
            ->insert([
                'Nombre' => $nombre,
                'Apellido' => $apellido,
                'Email' => $correo,
                'Boleta' => $IdBoleta
            ]);
        DB::commit();

      } catch (\PDOException $exception) {
          error_log("Error - Crear comprador: " . $exception->getMessage());
          throw new \PDOException("Error - Crear comprador: " . $exception->getMessage());
          return response()->json([
          'info'=>0
          ]);
      }



      #$res = $client->request('POST', 'http://www.eventmovil.com/entradas/event-products-register.php', [




    #}


 /*
    Mail::to($correo)->send(
      new DatosIngreso($request)
    );*/
  }
}
