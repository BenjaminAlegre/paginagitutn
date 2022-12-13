<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class TecnicosController extends Controller
{

    public function __construct()
    {
        $this->middleware('v-alcance')->only(['index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usuario = Auth::user();

        $request->session()->get('nro_telefono');// --> '544475788796' | null
        $request->session()->pull('nro_telefono'); // --> '544475788796
        $request->session()->pull('nro_telefono');

        $tecnicos = DB::select("SELECT * FROM tecnico");

        return view('tecnicos/tecnicos', [
            "tecnicos" => $tecnicos,
            "titulo" => "Listado de Técnicos",
            "usuario" => $usuario
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tecnicos/tecnico');
    }

    private function validar(Request $request)
    {
        return Validator::make($request->post(), [
            'nombre' => ['required', 'alpha'],
            'apellido' => ['required', 'alpha'],
            'legajo' => ['required', 'numeric']
        ])->validate();

        //INTERNACIONALIZACIÓN
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validar($request);
        try {
            DB::transaction(function() use ($request){
                DB::insert('INSERT INTO tecnico (nombre, apellido, legajo, estaOcupado) values (?, ?, ?, ?)', [
                    $request->post("nombre"),
                    $request->post("apellido"),
                    $request->post("legajo"),
                    0
                ]);
            });

            return redirect(route('tecnicos.index'));
        }
        catch (ValidationException $ex) {

        }
        catch (\Exception $exception) {
            echo $exception->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tecnico = DB::selectOne("SELECT * FROM tecnico WHERE id = :id", ['id' => $id]);
        return view('tecnicos/tecnico', [
            'tecnico' => $tecnico
        ]);
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
