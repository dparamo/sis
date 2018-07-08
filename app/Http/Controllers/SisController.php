<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\documento;
use Symfony\Component\HttpFoundation;



class SisController extends Controller
{
    //
	public function index()
	{   

		return view('nuevo');
	}

	protected function validator(array $data)
    {
        return Validator::make($data, [
            'tipo_documento' => 'required|string|max:120',
            'numero_documento' => 'required|string|max:120',
            'nombres' => 'required|string|max:120',
            'apellidos' => 'required|string|max:120',
            'departamento' => 'required|string|max:120',
            'ciudad' => 'required|string|max:120',
            'direccion' => 'required|string|max:120',
            'celular' => 'required|string|max:120',
            'correo' => 'required|string|max:120',
            'nombre_in' => 'required|string|max:120',
            'departamento_in' => 'required|string|max:120',
            'ciudad_in' => 'required|string|max:120',
            'vereda_in' => 'required|string|max:120',
            'matricula_in' => 'nullable|',
            'Ciudad_registro_in' => 'required|string|max:120',
            'hechos' => 'nullable|',
            'abogado' => 'required|string|max:120',
        ]);
    }

    public function save(Request $request)
{		
        
         documento::create([
        		'tipo_documento' => $request->input('tipo_documento'),
        		'numero_documento' => $request->input('numero_documento'),
        		'nombres' => $request->input('nombres'),
        		'apellidos' => $request->input('apellidos'),
        		'departamento' => $request->input('departamento'),
        		'ciudad' => $request->input('ciudad'),
        		'direccion' => $request->input('direccion'),
        		'celular' => $request->input('celular'),
        		'correo' => $request->input('correo'),
        		'nombre_in' => $request->input('nombre_in'),
                'departamento_in' => $request->input('departamento_in'),
                'ciudad_in' => $request->input('ciudad_in'),
        		'vereda_in' => $request->input('vereda_in'),
                'matricula_in' => $request->input('matricula_in'),
        		'Ciudad_registro_in' => $request->input('Ciudad_registro_in'),
                'hechos' => $request->input('hechos'),
                'abogado' => $request->input('abogado'),
            ]);

                    $ciudad=$request->input('ciudad');
                    $phpWord = new \PhpOffice\PhpWord\PhpWord();

                    $tipo_documento = $request->input('tipo_documento');
                    $numero_documento = $request->input('numero_documento');
                    $nombres = $request->input('nombres');
                    $apellidos = $request->input('apellidos');
                    $departamento = $request->input('departamento');
                    $ciudad = $request->input('ciudad');
                    $direccion = $request->input('direccion');
                    $celular = $request->input('celular');
                    $correo = $request->input('correo');
                    $nombre_in = $request->input('nombre_in');
                    $departamento_in = $request->input('departamento_in');
                    $ciudad_in = $request->input('ciudad_in');
                    $vereda_in = $request->input('vereda_in');
                    $matricula_in = $request->input('matricula_in');
                    $Ciudad_registro_in = $request->input('Ciudad_registro_in');
                    $hechos = $request->input('hechos');
                    $abogado = $request->input('abogado');
                    

                    $documento = $phpWord->addSection();
                    $reg = $phpWord->addSection();
                    $phpWord->addFontStyle('titulos',
                      array('name'=>'Arial', 'size'=>12,'Bold'=>true));
                    $phpWord->addFontStyle('cuerpo',
                      array('name'=>'Arial', 'size'=>12,'Bold'=>false));
                    $phpWord->addParagraphStyle('centro', array(
                    'alignment' =>'center'));
                    $phpWord->addParagraphStyle('just', array(
                    'alignment' =>'both'));
                    
                    $documento->addText('Señor','titulos');
                    $spacio=$documento->addText('','titulos');
                    $documento1 = $documento->addText('Registrador de instrumentos públicos de '.$Ciudad_registro_in.' (Boyacá)','titulos');
                     $documento2 = $documento->addText($ciudad_in,'titulos');
                     $spacio2=$documento->addText('','titulos');
                     $documento3 = $documento->addText('Derecho de petición de interés personal art 23 de la C.N.C.','titulos');
                     $spacio3=$documento->addText('','titulos');
                     $documento4=$documento->addText($nombres.' '.$apellidos.', mayor de edad, vecino y residente en el municipio de '.$ciudad.' (Boyacá), identificado como aparece al pie de mi firma, a usted señor registrador de instrumentos públicos, respetuosamente me dirijo con el fin de manifestarle, que por medio del presente escrito solicito ante su despacho elevar derecho de petición de interés personal de acuerdo al Art 23 de la C.N.C. y los Art 5 Y 9 del C.C.A., y subsiguientes en los siguientes términos:','cuerpo','just');
                    $spacio4=$documento->addText('','titulos');
                    $documento5=$documento->addText('HECHOS','titulos','centro');
                    $spacio5=$documento->addText('','titulos');
                    $documento6=$documento->addText('Tengo la posesión del inmueble rural denominado así:','cuerpo');
                    $documento7=$documento->addText('El inmueble rural denominado “'.$nombre_in.'” ubicado en la vereda de la '.$vereda_in.', jurisdicción del municipio de '.$Ciudad_registro_in.', el inmueble rural que mi representado a adquirido por prescripción extraordinaria se encuentra alinderado actualmente de la siguiente manera: ','cuerpo','just');
                    $documento8=$documento->addText($hechos,'centro');
                    $documento9=$documento->addText($matricula_in,'cuerpo','just');
                    $spacio6=$documento->addText('','titulos');
                    $documento10=$documento->addText('PRETENSIONES','titulos','centro');
                    $spacio7=$documento->addText('','titulos');
                    $documento11=$documento->addText('Solicito se me certifique de acuerdo al ART 1 del Decreto Ley No 0578 de marzo de 2018, del predio antes mencionado en los hechos del presente derecho de petición.','titulos','just');
                    $spacio8=$documento->addText('','titulos');
                    $documento22=$documento->addText('DERECHO','titulos','centro');
                    $spacio9=$documento->addText('','titulos');
                    $documento12=$documento->addText('Invoco las siguientes disposiciones de derecho, los Art 23 C.N., Art 5 y 9 del código contencioso administrativo y demás normas concordantes.','cuerpo','just');
                    $spacio10=$documento->addText('','titulos');
                    $documento13=$documento->addText('TRAMITE Y COMPETENCIA','titulos','centro');
                    $spacio11=$documento->addText('','titulos');
                    $documento14=$documento->addText('Es usted señor registrador de instrumentos públicos el competente por la ubicación del inmueble. Y de acuerdo al Decreto Ley No 0578 de 27 marzo de 2018.','cuerpo','just');
                    $spacio12=$documento->addText('','titulos');
                    $documento15=$documento->addText('Artículo 1° Modificar el numeral 6 del artículo 27 del Decreto 2723 de 2014, el cual quedará así: “6. Verificar las matrículas inmobiliarias que identifican registralmente los predios rurales y proponer las acciones a que haya lugar; entre ellas, la expedición de actos administrativos tendientes a identificar, a petición de parte, la cadena de tradición de dominio, los actos de tradición y de falsa tradición, y la existencia de titulares de eventuales derechos reales sobre predios rurales que no superen el rango mínimo de la Unidad Agrícola Familiar UAF J para determinar si, a través de las inscripciones en el folio de matrícula inmobiliaria, con anterioridad al 5 de agosto de 1974 , se le ha dado tratamiento público de propiedad privada al bien, siempre y cuando los antecedentes registra les provengan de falsa tradición, que dichos títulos se encuentren debidamente inscritos de acuerdo a lo señalado en el artículo 665 del Código Civil y que su precaria tradición no sea producto de violencia, usurpación desplazamiento forzado, engaño o testaferrato.','cuerpo','just');
                    $spacio13=$documento->addText('','titulos');
                    $documento16=$documento->addText('NOTIFICACIONES','titulos','centro');
                    $spacio14=$documento->addText('','titulos');
                    $documento17=$documento->addText('pendiente.','cuerpo','just');
                    $spacio=$documento->addText('','titulos');
                    $documento18=$documento->addText('Del Señor registrador de instrumentos públicos.','cuerpo');
                    $spacio15=$documento->addText('','titulos');
                    $spacio16=$documento->addText('','titulos');
                    $documento19=$documento->addText('Atentamente,','cuerpo');
                    $spacio17=$documento->addText('','titulos');
                    $spacio18=$documento->addText('','titulos');
                    $spacio19=$documento->addText('','titulos');
                    $documento20=$documento->addText($nombres.' '.$apellidos,'titulos');
                    $documento21=$documento->addText($tipo_documento.' '.$numero_documento,'titulos');
                    // $fontStyle = new \PhpOffice\PhpWord\Style\Font();
                    // $fontStyle->setBold(true);
                    // $fontStyle->setName('Verdana');
                    // $fontStyle->setSize(22);
                    $myTextElement = $documento21;//->addText('Hello World!');
                    //$myTextElement->setFontStyle($fontStyle);
                    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
                    $nombrear = 'Derecho de peticion.docx';
                    $objWriter->save($nombrear);
                    //redirect()->action('SisController@index');

                    //return redirect('test');
                    return redirect()->action('SisController@index')->with('status',$nombrear);
	
}
                 
}
