<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show($id)
        {
            // Mencari data event berdasarkan ID yang diklik
            $event = \App\Models\Event::findOrFail($id);
            
            // Mengirim data $event tersebut ke halaman event-detail
            return view('event-detail', compact('event'));
        }

    public function checkout()
    {
        return view('checkout');
    }

    public function ticket()
    {
        return view('ticket');
    }

    public function indexAdmin()
    {
        return view('admin/events');
    }

    
}