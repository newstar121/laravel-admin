<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Factory as Auth;

use App\Models\IngredientModel;
use Log;

class InventoryController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function __construct(Auth $auth)
    {
        
    }

    public function ingredients(Request $request)
    {
        $ingredients = new IngredientModel;
        $data = $ingredients->getIngredients();

        Log::error('abc');
        Log::error($data);
        return view('ingredients', [
            'data' => $data
        ]);
    }

    public function addIngredient(Request $request) {
        
        $input = $request->all();
        Log::error($input);

        $ingredients = new IngredientModel;
        $data = $ingredients->updateIngredient($input);
        return response()->json(['success'=>$data]);
    }

    public function setActive(Request $request) {
        $input = $request->all();
        $ingredients = new IngredientModel;
        $data = $ingredients->setActive($input['id'], $input['isActived']);
        return response()->json(['success'=>$data]);
    }
}