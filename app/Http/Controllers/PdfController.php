<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PdfController extends Controller
{
    public function github (){

    //	$pdf = App::make('snappy.pdf.wrapper');
		//$pdf->loadHTML('<h1>Test</h1>');
		//return $pdf->inline();
 		return \PDF::loadFile('http://epia.app/listaacolhido')->stream('github.pdf');
 		//$data = ('<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation"><div class="container-fluid"><div class="navbar-header"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span>        <span class="icon-bar"></span><span class="icon-bar"></span>        <span class="icon-bar"></span></button>    </div><div class="collapse navbar-collapse animated fadeIn" id="bs-example-navbar-collapse-1">');
 	//	return \PDF::loadView('navprincipal')->download('nav.pdf'); 
 		//$pdf = \PDF::loadView('nav', $data);
    	//return $pdf->download('invoice.pdf');
    //	$snappy = App::make('snappy.pdf');
    //	$snappy->generateFromHtml('<h1>Bill</h1><p>You owe me money, dude.</p>', '/tmp/bill-123.pdf');

    	//\PDF::loadView($data)->setPaper('a4')->setOrientation('landscape')->setOption('margin-bottom', 0)->save('teste4html.pdf');
 	}
}
