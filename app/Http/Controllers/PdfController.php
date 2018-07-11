<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipos;
use PDF;
class PdfController extends Controller
{
    public function index($id){
        $equipo= new equipos;
        $equipos = $equipo-> where('codigo',$id)->get();
        $pdf = PDF::loadView('pdf', compact('equipos'));
        return $pdf-> download('myPDF.pdf');
    }
}
