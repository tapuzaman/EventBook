<?php

/**
 * 
 * Controller class for all pages
 * Handles requests and responses
 * 
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Event;

class PagesController extends Controller
{
     /**
     * 
     * Home page of EventBook
     */
    public function index(){
        $events = 'Welcome!';
        return view('pages.index')->with('events', $events);
    
   
    //return view('pages.index');

   
    
    }
    public function about(){
        $events = 'About Us!';
        return view('pages.about')->with('events', $events);
    }
    public function Services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Hosting Events', 'Participate in an Event','Corporate Training']
        );
        return view('pages.services')->with($data);
}
}