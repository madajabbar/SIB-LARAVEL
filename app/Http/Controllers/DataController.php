<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Exception;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function store(Request $request){
        try{
            $data = Data::create(
                [
                    'value'=> $request->value,
                ]
            );
            return response()->json(
                [
                    'code' => 200,
                    'data'=>$data
                ]
            );
        }
        catch(Exception $e){
            return response()->json(
                [
                    'code' => 400,
                    'message' => $e->getMessage(),
                ]
            );
        }
    }
}
