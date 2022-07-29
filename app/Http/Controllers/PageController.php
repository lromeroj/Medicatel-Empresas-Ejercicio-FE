<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home(Request $request)
    {
        return redirect('login');
    }

    public function login(Request $request)
    {
        return view('login');
    }

    public function iniciar_sesion(Request $request)
    {

        $email = $request->input('email');
        $password = $request->input('password');

        try {
            $response = 
            Http::withBasicAuth('api-Test', 'Holamundo')
                  ->post('https://apiservices.medicatel.red/ApiTest/login', [
                'user'      => $email,
                'password'  => $password,
            ]);
            if($response){
                //return view('empresa.dashboard', compact('response','email','password'));
                Cookie::queue('usuario', $response, 5);
                return redirect('dashboard');
            }
        } catch (\Throwable $th) {
            return redirect('login');
        }
    }

    public function dashboard(Request $request)
    {
        $response = json_decode(Cookie::get('usuario'));
        return view('empresa.dashboard', compact('response'));
    }
    
    public function colaboradores(Request $request)
    {
        try {
            $response = json_decode(Cookie::get('usuario'));
            $colaboradores = 
            Http::withBasicAuth('api-Test', 'Holamundo')
                  ->get('https://apiservices.medicatel.red/ApiTest/colaboradores');
                    //dd($colaboradores);

            $c = json_decode($colaboradores->body());
            
            // return view('empresa.colaboradores', compact('response', 'colaboradores'));
            return view('empresa.colaboradores', [
                "response" =>$response,
                "colaboradores"=> $c,
            ]);
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
