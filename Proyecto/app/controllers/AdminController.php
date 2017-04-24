<?php

class AdminController extends BaseController
{
    public function getLogin()
    {
        // quintanilla.peru@gmail.com password: limaperu
        //$password = Hash::make('limaperu');
        //echo $password;exit;
        return View::make('admin.login');
    }
    public function postLogin()
    {
        if (Request::isMethod('post')) {
            $email = Input::get('email');
            $clave = Input::get('clave');
            // validar
            if (Auth::attempt(array('email' => $email, 'password' => $clave))) {
                return Redirect::to('/admin-inicio');
            } else {
                return View::make('admin.login')->with('msg', '¡Datos incorrectos!');
            }
        } else {
            return View::make('admin.login');
        }

    }
    public function getLogout()
    {
        Auth::logout();
        return Redirect::route('login');
    }
    public function getAdminInicio()
    {
        /*$sql = 'SELECT COUNT(DATE(created_at)) AS cantidad, DATE(created_at) AS fecha '
                . 'FROM registro '
                . 'GROUP BY DATE(created_at) '
                . 'ORDER BY 2 DESC '
                . 'LIMIT 7';
        $registrados = DB::select(DB::raw($sql));
        $array = array();
        foreach ($registrados as $registro) {
            $fecha = Funciones::dateFormat($registro->fecha, 1);
            $array[] = array(
                'cantidad' => $registro->cantidad,
                'fecha' => $fecha
            );
        }
        $reporte = json_encode($array);
        return View::make('admin.index')->with('esInicio', 'si')->with('reporte', $reporte);*/
        return View::make('admin.index');
    }
    public function getAdminSliders()
    {
        $sliders = Sliders::all()->sortByDesc('estado')->sortBy('orden');
        return View::make('admin.sliders.index')->with('sliders', $sliders);
    }
    public function getAdminSlidersNuevo()
    {
        return View::make('admin.sliders.nuevo');
    }
    public function postAdminSlidersGrabar()
    {
        if (Request::isMethod('post')) {
            $descripcion = Input::get('descripcion');
            $enlace = Input::get('enlace');
            $orden = Input::get('orden');
            
            $archivoLg = '';
            $archivoSm = '';
            $archivoXs = '';
            $rutaLg = 'images/slider/lg/';
            $rutaSm = 'images/slider/sm/';
            $rutaXs = 'images/slider/xs/';
            if (Input::hasFile('archivo_lg')) {
                $fileLg = md5(Input::file('archivo_lg')->getClientOriginalName().time());
                $extensionLg = Input::file('archivo_lg')->getClientOriginalExtension();
                $archivoLg = $fileLg . '.' . $extensionLg;
                Input::file('archivo_lg')->move($rutaLg, $archivoLg);
                $archivoLg = $rutaLg . $fileLg . '.' . $extensionLg;
            }
            if (Input::hasFile('archivo_sm')) {
                $fileSm = md5(Input::file('archivo_sm')->getClientOriginalName().time());
                $extensionSm = Input::file('archivo_sm')->getClientOriginalExtension();
                $archivoSm = $fileSm . '.' . $extensionSm;
                Input::file('archivo_sm')->move($rutaSm, $archivoSm);
                $archivoSm = $rutaSm . $fileSm . '.' . $extensionSm;
            }
            if (Input::hasFile('archivo_xs')) {
                $fileXs = md5(Input::file('archivo_xs')->getClientOriginalName().time());
                $extensionXs = Input::file('archivo_xs')->getClientOriginalExtension();
                $archivoXs = $fileXs . '.' . $extensionXs;
                Input::file('archivo_xs')->move($rutaXs, $archivoXs);
                $archivoXs = $rutaXs . $fileXs . '.' . $extensionXs;
            }
            
            $sliders = new Sliders;
            $sliders->descripcion = $descripcion;
            $sliders->url = $enlace;
            $sliders->orden = $orden;
            $sliders->archivo_lg = $archivoLg;
            $sliders->archivo_sm = $archivoSm;
            $sliders->archivo_xs = $archivoXs;
            $sliders->save();
        }
        return Redirect::route('admin.sliders');
    }
    
    public function getRegistrados()
    {
        $sql = 'SELECT MIN(DATE(created_at)) AS inicio, MAX(DATE(created_at)) as fin FROM registro';
        $fechas = DB::select(DB::raw($sql));
        return View::make('admin.registrados')->with('fechaInicio', Funciones::dateFormat($fechas[0]->inicio))->with('fechaFin', Funciones::dateFormat($fechas[0]->fin));
    }
    public function postRegistrados()
    {
        $fecha = Funciones::fechaToMySQL(Input::get('fecha'));
        $registrados = Registro::whereDate('created_at', '=', $fecha)->get()->toArray();
        $rows = count($registrados);
        $respuesta = array(
            'registros' => $rows
        );
        return Response::json($respuesta, 200);
    }
    public function postRegistradosRango()
    {
        $fechaInicio = Funciones::fechaToMySQL(Input::get('fechaInicio'));
        $fechaFin = Funciones::fechaToMySQL(Input::get('fechaFin'));
        $participantes = Participante::whereDate('created_at', '>=', $fechaInicio)->whereDate('created_at', '<=', $fechaFin)->get()->toArray();
        $rows = count($participantes);
        return $rows;
    }
    public function getReporte($dia, $mes, $anio, $ganadores = '0')
    {
        $archivo = ($ganadores == '1') ? 'registro' : 'registro';
        $fecha = $anio . '-' . $mes . '-' . $dia;
        $sql = "SELECT r.id, r.nombres, r.apellidos, r.dni, r.celular, r.telefono, r.email, r.informacion, ud.distrito, r.direccion, r.como, r.horario, r.ip "
                . 'FROM registro r, ubigeo_distrito ud '
                . 'WHERE r.distrito = ud.id '
                . "AND DATE(r.created_at) = '$fecha' ";
        $registros = DB::select(DB::raw($sql));
        Excel::create($archivo, function($excel) use($registros) {
            $excel->sheet('datos', function($sheet) use($registros) {
                // primera fila, nombres de columnas
                $sheet->appendRow(array(
                    'nombres',
                    'apellidos',
                    'dni',
                    'celular',
                    'telefono',
                    'email',
                    'informacion',
                    'distrito',
                    'direccion',
                    'como',
                    'horario',
                    'ip'
                ));
                foreach($registros as $registro) {
                    $sheet->appendRow(array(
                        $registro->nombres,
                        $registro->apellidos,
                        $registro->dni,
                        $registro->celular,
                        $registro->telefono,
                        $registro->email,
                        $registro->informacion,
                        $registro->distrito,
                        $registro->direccion,
                        $registro->como,
                        $registro->horario,
                        $registro->ip
                    ));
                }
            });
        })->download('xlsx');
    }
    public function getReporteRango($diaI, $mesI, $anioI, $diaF, $mesF, $anioF)
    {
        $fechaInicio = $anioI . '-' . $mesI . '-' . $diaI;
        $fechaFin = $anioF . '-' . $mesF . '-' . $diaF;
        $participantes = Participante::whereDate('created_at', '>=', $fechaInicio)->whereDate('created_at', '<=', $fechaFin)->orderBy('created_at')->get()->toArray();
        Excel::create('participantes', function($excel) use($participantes) {
            $excel->sheet('datos', function($sheet) use($participantes) {
                // primera fila, nombres de columnas
                $sheet->appendRow(array(
                    'nombre',
                    'correo',
                    'numdocumento',
                    'cliente',
                    'telefono',
                    'fecha'
                ));
                foreach($participantes as $participante) {
                    $sheet->appendRow(array(
                        $participante['nombre'],
                        $participante['correo'],
                        $participante['numdocumento'],
                        ($participante['flagcliente'] == 1 ? 'si' : 'no'),
                        $participante['telefono'],
                        Funciones::dateFormat($participante['created_at'])
                    ));
                }
            });
        })->download('xlsx');
    }
    public function postGrabar()
    {
        $ids = explode(',', Input::get('ids'));
        $fecha = Input::get('fecha');
        $sorteo = new Sorteo;
        $sorteo->fechasorteo = $fecha;
        $sorteo->save();
        $idSorteo = $sorteo->idsorteo;
        $i = 0;
        foreach($ids as $id) {
            if ($id != '') {
                $ganadorRetos = new Ganadoresretos;
                $ganadorRetos->idsorteo = $idSorteo;
                $ganadorRetos->idparticipante = $id;
                if ($i <= 8) {
                    $ganadorRetos->estado = 'G';
                } else {
                    $ganadorRetos->estado = 'S';
                }
                $ganadorRetos->save();
            }
            $i++;
        }
        echo 'ok';
    }
    public function descarga($idsorteo)
    {
        //$sorteo = Sorteo::find($idsorteo);
        $sql = 'SELECT p.nombres, p.apellidos, p.apellidopaterno, p.apellidomaterno, '
                    . 'p.correo, p.tipodocumento, p.numdocumento, p.telefono, '
                    . 'p.flagcliente, p.fechanacimiento, o.numopciones '
                . 'FROM participante p, opciones o, participantexsorteo ps, alternativaxpregunta ap '
                . 'WHERE p.idparticipante = o.idparticipante AND '
                . '		 p.idparticipante = ps.idparticipante AND '
                . '		 ps.idalternativaxpregunta = ap.idalternativaxpregunta AND '
                . '		 p.idparticipante IN (SELECT idparticipante FROM participantexsorteo WHERE idsorteo = 1) AND '
                . '		 ap.flagcorrecto = "1"';
        $participantes = DB::select(DB::raw($sql));
        Excel::create('sorteo', function($excel) use($participantes) {
            $excel->sheet('participantes', function($sheet) use($participantes) {
                // primera fila, nombres de columnas
                $sheet->appendRow(array(
                            'nombres', 
                            'apellidos', 
                            'apellidopaterno', 
                            'apellidomaterno',
                            'correo',
                            'tipodocumento',
                            'numdocumento',
                            'telefono',
                            'flagcliente',
                            'fechanacimiento',
                            'numopciones'
                        ));
                foreach($participantes as $participante) {
                    for($i=1;$i<=$participante->numopciones;$i++) {
                        $sheet->appendRow(array(
                            $participante->nombres, 
                            $participante->apellidos, 
                            $participante->apellidopaterno, 
                            $participante->apellidomaterno,
                            $participante->correo,
                            $participante->tipodocumento,
                            $participante->numdocumento,
                            $participante->telefono,
                            $participante->flagcliente,
                            $participante->fechanacimiento,
                            $participante->numopciones
                        ));
                    }
                }
            });
        })->download('xlsx');
    }
}
