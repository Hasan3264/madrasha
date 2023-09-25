<?php

namespace App\Models\academic_module;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllClass extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function getClassName($id){
        $class_name =  $this->where('class_code', $id)->select('class_name')->get();
        if(!empty($class_name[0]->class_name)){
            return $class_name[0]->class_name;
        }
        else{
            return "Class not found";
        }
    }

    public function getMediumName($id){
        $medium_name =  $this->where('id', $id)->select('medium_name')->get();
        if(!empty($medium_name[0]->medium_name)){
            return $medium_name[0]->medium_name;
        }
        else{
            return "Medium not found";
        }
    }
    public function mediumName($id){

        $medium_name =  $this->where('class_code', $id)->select('medium_name')->get();
        if(!empty($medium_name[0]->medium_name)){

            return $medium_name[0]->medium_name;
        }
        else{
            return "Medium not found";
        }
    }

}
