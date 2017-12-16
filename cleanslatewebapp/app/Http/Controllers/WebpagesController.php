<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebpagesController extends Controller
{
    public  $werknemerNaam = "Tijl";


    public function home(){
        //return view('Webpages.home', compact('werknemerNaam'));
        return view('Webpages.home')->with('werknemerNaam', $this->werknemerNaam);
    }

    public function trainingen(){
        return view('Webpages.trainingen')->with('werknemerNaam', $this->werknemerNaam);
    }

    public function inschrijven(){
        return view('Webpages.inschrijven')->with('werknemerNaam', $this->werknemerNaam);
    }

    public function boeken(){
        $boekData = array(
            'werknemerNaam' => $this->werknemerNaam,
            'lijstkop' => 'Lijst met Boeken',
            'boekenlijst' => ['Harry Potter', 'Lord of the Rings', 'Da Vinci Code']
        );
        return view('Webpages.boeken')->with($boekData);
    }
}
