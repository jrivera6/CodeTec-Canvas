<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $fullname = $request->get('lis_person_name_full');
        $firstname = $request->get('lis_person_name_given');
        $nombre = explode(" ",$firstname);
        $nom = $nombre[0];
        $request->session()->put('fullname', $nom);

        
        return view('home', ['fullname' => $fullname,'nombre' => $nom]);
        
    }

    public function ejercicio1(Request $request)
    {
        
        // $firstname = $request->get('lis_person_name_given');
        
        $nom = $request->session()->get('fullname');
        
        return view('eje1', ['nombre' => $nom]);
    }
    
    public function ejercicio2()
    {
        return view('eje2');
    }
}
