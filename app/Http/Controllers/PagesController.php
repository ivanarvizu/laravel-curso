<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    //
    public function home()
    {
        return view('home');
    }
    //------------------------------------------------------------------------------------------------------------------
    public function saludos($nombre = "Invitado")
    {
        $consolas = array(
            'PS4', "Xbox One", "Wii U"
        );

        return view('saludo', compact('nombre', 'consolas'));
    }
    //------------------------------------------------------------------------------------------------------------------
    public function contactos()
    {
        return view('contacto');
    }
    //------------------------------------------------------------------------------------------------------------------q
    public function do_contactos()
    {
        $data = $this->request->all();

        return redirect()->route('contactos')->with('info', "Se ha guardado tu coso prro");
    }
}
