<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return 'halaman contact us';
    }

    public function create(){
        return view('contact-us');
    }

    public function store(request $request){
        $result=[
            'nama' => $request['nama'],
            'nomor' => $request['nomor']
        ];
        return view('comment',['comment' =>(object)$result]);
    }
    public function show($id){
        
    }

    public function edit($id){
        
    }

    public function update(request $request, $id){
        
    }

    public function destroy($id){
        
    }
}
