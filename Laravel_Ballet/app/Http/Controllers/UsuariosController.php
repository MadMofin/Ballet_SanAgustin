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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
                        "fecha-inscripcion" => date('d-m-y')
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
            $nuevafecha = date ( 'd-m-y' , $nuevafecha );

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
                        "fecha-inscripcion" => date('d-m-y')
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
            $nuevafecha = date ( 'd-m-y' , $nuevafecha );


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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $clases = clase::all();
        return view('admin')->with('clases',$clases);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
