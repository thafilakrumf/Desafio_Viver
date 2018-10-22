<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }
  
    public function create()
    {
        return view('clients.create');
    }
  
    public function store(Request $request)
    {
        // dd($request);
        Client::create($request->all());
        return redirect()->route('client.index')->with('message', 'Cliente cadastrado com sucesso!');
    }
  
    public function show($id)
    {
        //
    }
  
    public function edit($id)
    {
       
     
    }
  
    public function update(ProductRequest $request, $id)
    {

    }
  
    public function destroy($id)
    {
      
    }

  

}
