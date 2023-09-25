<?php

namespace App\Models\academic_module;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllShift extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function getMediumName($id){
        $medium_name =  mediumacademic::where('medium_code', $id)->select('medium_name')->get();
       return $medium_name[0]->medium_name;
    }

}
