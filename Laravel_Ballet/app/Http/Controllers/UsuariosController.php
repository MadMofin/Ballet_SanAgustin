<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\tutor;
use App\clase;
use App\usucla;
use App\usuade;

class UsuariosController extends Controller
{
    
    public function index()
    {   


        $dia = date('d');
        $mes = date('m');
        $anno = date('y');
        $pagos = usuade::where([
                    [function($query)use ($dia, $mes, $anno){
                        $query->where('fecha','<=',$anno.'-'.$mes.'-'.$dia);
                    }],
                    ['pagado','=',0]
                ])->get();



        $cumple = user::whereMonth('birthday', '=', $mes)->get();
        $ninas = user::orderBy('appat-user', 'asc')->paginate(10);
        $clases = clase::all();

        $arreglo = compact(
            ['ninas',$ninas],
            ['clases',$clases],
            ['cumple',$cumple],
            ['pagos',$pagos]
        );

        return view('admin')->with($arreglo);
    }

    public function store(Request $request)
    {

        $nombrenina = $request->get('nombrenina');
        $apnina = $request->get('apnina');
        $amnina = $request->get('amnina');
        $birth = $request->get('birth');
        $nombretutor = $request->get('nombretutor');
        $aptutor = $request->get('aptutor');
        $amtutor = $request->get('amtutor');
        $direc = $request->get('directutor');
        $telefono = $request->get('telefono');
        $clases = $request->get('clasesArray');
        $pago = $request->get('pago');
        $fechahoy = date('y-m-d');

        if(date('d') == 29 && date('m') == 2){
            $fechahoy = date('y').'-'.date('m').'-28';
        }

        $verificaciontutor = tutor::where([
            ['nombre-tutor','=',$nombretutor],
            ['appat-tutor','=',$aptutor],
            ['apmat-tutor','=',$amtutor],
            ['direccion-tutor','=',$direc]
        ])->first();

        if($verificaciontutor == NULL){

            $tutor = new tutor(array(
                        "nombre-tutor" => $nombretutor,
                        "appat-tutor" => $aptutor,
                        "apmat-tutor" => $amtutor,
                        "direccion-tutor" => $direc,
                        "telefono" => $telefono
            ));

            $tutor->save();

            $traertutores = tutor::all();
            $idultimotutor = $traertutores->last();

            $nina = new user(array(
                        "nombre-user" => $nombrenina,
                        "appat-user" => $apnina,
                        "apmat-user" => $amnina,
                        "id-tutor" => $idultimotutor->{'id-tutor'},
                        "id-administrador" => '1',
                        "pago" => $pago,
                        "birthday" => $birth,
                        "fecha-inscripcion" =>  $fechahoy
            ));

            $nina->save();

            $traerninas = user::all();
            $idultimanina = $traerninas->last();

            for($x = 0; $x<count($clases);$x++){
                $clasesnina = new usucla(array(
                        "id-user" => $idultimanina->{'id-user'},
                        "id-clase" => $clases[$x]
                ));

                $clasesnina->save();
            }

            $fecha = $idultimanina->{'fecha-inscripcion'};
            $nuevafecha = strtotime ( '+1 month' , strtotime ( $fecha ) ) ;
            $nuevafecha = date ( 'y-m-d' , $nuevafecha );

            $ninapago = new usuade(array(
                        "id-user" => $idultimanina->{'id-user'},
                        "adeudo" => $idultimanina->{'pago'},
                        "fecha"  => $nuevafecha,
                        "pagado" => 0
            ));

            $ninapago->save();

        }else{

            $nina = new user(array(
                        "nombre-user" => $nombrenina,
                        "appat-user" => $apnina,
                        "apmat-user" => $amnina,
                        "id-tutor" => $verificaciontutor->{'id-tutor'},
                        "id-administrador" => '1',
                        "pago" => $pago,
                        "birthday" => $birth,
                        "fecha-inscripcion" =>  $fechahoy
            ));

            $nina->save();

            $traerninas = user::all();
            $idultimanina = $traerninas->last();

            for($x = 0; $x<count($clases);$x++){
                $clasesnina = new usucla(array(
                        "id-user" => $idultimanina->{'id-user'},
                        "id-clase" => $clases[$x]
                ));

                $clasesnina->save();
            }



            $fecha = $idultimanina->{'fecha-inscripcion'};
            $nuevafecha = strtotime ( '+1 month' , strtotime ( $fecha ) ) ;
            $nuevafecha = date ( 'y-m-d' , $nuevafecha );



            $ninapago = new usuade(array(
                        "id-user" => $idultimanina->{'id-user'},
                        "adeudo" => $idultimanina->{'pago'},
                        "fecha"  => $nuevafecha,
                        "pagado" => 0
            ));

            $ninapago->save();

        }
        return redirect('/administracion');
    }

    public function show(Request $request)
    {
            $tipo = $request->get('type');
            $termino = $request->get('termino');

            switch ($tipo) {
                case '1':
                    $ninas = user::where('nombre-user','like','%'.$termino.'%')->paginate(10);
                break;
                case '2':
                    $ninas = user::where('appat-user','like','%'.$termino.'%')->paginate(10);
                break;
                case '3':
                    $ninas = user::where('apmat-user','like','%'.$termino.'%')->paginate(10);
                break;
                case '4':
                     $ninas = user::orderBy('appat-user', 'asc')->paginate(10);
                break;
            }

        $dia = date('d');
        $mes = date('m');
        $anno = date('y');
        $pagos = usuade::where([
                    [function($query)use ($dia, $mes, $anno){
                        $query->where('fecha','<=',$anno.'-'.$mes.'-'.$dia);
                    }],
                    ['pagado','=',0]
                ])->get();



        $cumple = user::whereMonth('birthday', '=', $mes)->get();
        $clases = clase::all();

        $arreglo = compact(
            ['ninas',$ninas],
            ['clases',$clases],
            ['cumple',$cumple],
            ['pagos',$pagos]
        );

        return view('admin')->with($arreglo);

    }

    public function ModifyPay(Request $request, $id){
            user::where('id-user', '=' , $id)->update(['pago' => $request->get('newpago')]);

            return back();
    }

    public function Pay($id)
    {
        
        $ultimafecha = usuade::where('id-user', '=' , $id
            )->orderby('fecha','DESC')->first();
        usuade::where('id-user', '=' , $id
            )->orderby('fecha','DESC')->first()->update(['pagado' => 1]);

        $nina = user::find($id);

        $fecha = $ultimafecha->{'fecha'};
        $nuevafecha = strtotime ( '+1 month' , strtotime ( $fecha ) ) ;
        $nuevafecha = date ( 'y-m-d' , $nuevafecha );


        $nuevopago = new usuade(array(
                        "id-user" => $id,
                        "adeudo" => $nina->{'pago'},
                        "fecha"  => $nuevafecha,
                        "pagado" => 0
            ));
        $nuevopago->save();
        return back();
    }

    public function destroy($id)
    {
        user::where('id-user','=',$id)->delete();
        usucla::where('id-user','=',$id)->delete();
        usuade::where('id-user','=',$id)->delete();
        return back();
    }
}
