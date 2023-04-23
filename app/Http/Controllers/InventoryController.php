<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Factory as Auth;

use App\Models\IngredientModel;

class InventoryController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(Auth $auth)
    {
        
    }

    public function ingredients(Request $request)
    {
        // $user = $request->cookie('lockUser');

        // $provider = $this->guard->getProvider();

        // $model = $provider->createModel()->find($user);
        $ingredients = new IngredientModel;
        $data = $ingredients->getIngredients();

        return view('ingredients', [
            'data' => $data
        ]);
    }
}