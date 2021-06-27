<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Reuniao;
use Illuminate\Http\Response;


class ReuniaoController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        try{
            $this->checkInternetConnection();
            //
        }catch (Exception $e){
            return $e->getMessage();
        }
        
    }

    public function show($id)
    {
        $this->checkInternetConnection();
        
    }

    public function edit(Request $request)
    {
        $this->checkInternetConnection();
    }

    public function update($id, Request $request)
    {
        $this->checkInternetConnection();
        
    }

    public function destroy($id)
    {
        $this->checkInternetConnection();
        
    }

    public function filterData(Request $request)
    {
        try{
            
        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function checkInternetConnection()
    {
        $connected = @fsockopen("www.google.com", 80);
        if ($connected) {
            fclose($connected);
            return true;
        }
        exit(json_encode([
            'connected' => false,
            'data' => []
        ]));
    }
}
