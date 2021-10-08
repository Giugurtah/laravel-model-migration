<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Models\Transport;

class homeController extends Controller
{
    public function index() {
        $travels = Travel::all();
        // In modo rudimentale (non avendo visto Join in laravel) collego ai viaggi il mezzo di trasporto utilizzato
        $transports = Transport::all();
        foreach ($travels as $travel) {
            foreach ($transports as $transport) {
                if ($travel->transport_id == $transport->id) {
                    $travel->mean_of_transport = $transport->mean_of_transport;
                }
            }
        }
        return view('home', compact('travels'));
    }
}
