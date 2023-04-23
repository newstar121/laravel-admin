<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class IngredientModel extends Model
{
    // $tableName = 'ingredient';

    public function getIngredients()
    {
        $results = DB::select('select * from ingredient');
        return $results;
    }

    public function deleteById($id)
    {
        $result = DB::delete('delete from ingredient where id = ' . $id);
    }

    public function updateIngredient($insertData)
    {
        if ($insertData['id']) {
            $results = DB::insert('insert into ingredients (sku, picture, name, type, stock, unit, cost, recipe, isAcitved) values (?, ?, ?, ?, ?, ?, ?, ?, ?)',
                array($insertData['sku'], $insertData['picture'], $insertData['name'], $insertData['type'], $insertData['stock'], $insertData['unit'], $insertData['recipe'], $insertData['isAcitived']));
        } else {
            $results = DB::insert('insert into ingredients (sku, picture, name, type, stock, unit, cost, recipe, isAcitved) values (?, ?, ?, ?, ?, ?, ?, ?, ?)',
                array($insertData['sku'], $insertData['picture'], $insertData['name'], $insertData['type'], $insertData['stock'], $insertData['unit'], $insertData['recipe'], $insertData['isAcitived']));
        }

        return $results;
    }

}
