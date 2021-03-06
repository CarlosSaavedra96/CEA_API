<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AtletasEntrenadorCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $data=array();
        foreach($this->collection as $row){
            $data = array_merge($data, array([
                'nombre'=>$row->nombrecompleto,
            ]));
        }
        return $data;
    }
}
