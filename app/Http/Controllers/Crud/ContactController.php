<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lib\Crud\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function store(Request $request){
        try{
            $data = $request->all();
            // dd($data);
            $result = Contact::get($data);
            return redirect('contact');
        }catch(\Exception $e){

        }
    }
}
