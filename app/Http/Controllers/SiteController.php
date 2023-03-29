<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('index');
    }
    public function services(){
        $response = Http::get('http://localhost:3001/services');
        $services = $response ->object();
        
        return view('services', compact('services'));
    }
    public function contact(){
        return view('contact');
    }
    public function serviceById($id){
        $response = Http::get('http://localhost:3001/services/'.$id);
        $service = $response ->object();
        return view('about', compact('service'));
    }
    public function createMessage(Request $request){
        $input= $request->all();
        $response = Http::post('http://localhost:3001/contact/', [
            'firstname' => $input['firstname'],
            'lastname' => $input['lastname'],
            'email' => $input['email'],
            'subject' => $input['subject'],
            'message' => $input['message'],
        ]);
         
        return redirect()->route('contact')->with('info', 'Message sent successfully!');
        
    
    }

    // public function post_detail($id){
    //     $post_id=$id;
    //     return view('blogs_details', compact('post_id'));
    // }
    
    // public function post_list(){
        
    //     //$posts= $response ->object();

    //     //return view ('post_list', compact('posts'));
    // }
}
