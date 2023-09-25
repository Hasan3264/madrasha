<?php

namespace App\Models\academic_module;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mediumacademic extends Model
{
    use HasFactory;

    protected $guarded = [];

        public function mediumName($id){

        $medium_name =  $this->where('medium_code', $id)->select('medium_name')->get();
        
        if(!empty($medium_name[0]->medium_name)){

            return $medium_name[0]->medium_name;
        }
        else{
            return "Medium not found";
        }
    }

}
