<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RelatoriosController extends Controller
{
     public function invoice() 
    {
        $data = $this->getData();
        $date = date('d/m/Y H:i');
        $titulo = "Relatório teste";
        $view =  \View::make('pdf.invoice', compact('data', 'date', 'titulo'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');
    }
 
    public function getData() 
    {
        $data =  [
            'quantity'      => '1' ,
            'description'   => 'cliente beto',
            'price'   => '500',
            'total'     => '500'
        ];
        return $data;
    }
}
