<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class IngredientModel extends Model
{
    public function getIngredients()
    {
        $results = DB::select('select * from ingredient');
        return $results;
    }

    public function deleteById($id)
    {
        $result = DB::delete('delete from ingredient where id = ' . $id);
    }

    public function setActive($id, $isActived) {
        $result = DB::table('ingredient')->where('id', $id)->update(
            array(
                'isActived'     =>   $isActived, 
            )
       );

        return $result;
    }
    
    public function updateIngredient($insertData)
    {
        if (isset($insertData['id'])) {
            $result = DB::table('ingredient')->where('id', $insertData['id'])->update(
                array(
                    'sku'=>$insertData['sku'],
                    'picture'=>$insertData['picture'],
                    'name'=>$insertData['name'],
                    'type'=>$insertData['type'],
                    'stock'=>$insertData['stock'],
                    'unit'=>$insertData['unit'],
                    'cost'=>$insertData['cost'],
                    'recipe'=>$insertData['recipe'],
                )
            );
            
        } else {
            $result = DB::table('ingredient')->insert(
                array(
                    'sku'     =>   $insertData['sku'], 
                    'picture'   =>   $insertData['picture'],
                    'name'     =>   $insertData['name'], 
                    'type'     =>   $insertData['type'], 
                    'stock'     =>   $insertData['stock'], 
                    'unit'     =>   $insertData['unit'], 
                    'cost'     =>   $insertData['cost'], 
                    'recipe'     =>   $insertData['recipe']
                )
           );
        }

        return $result;
    }

}
