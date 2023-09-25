<?php

namespace App\Http\Livewire;

use App\Models\admintheme;
use App\Models\institute as ModelsInstitute;
use Livewire\Component;

class Institute extends Component
{
  public $facebook;
  public $youtube;
  public $selectedValue;
  public $selectedwebsiteTheme;
    public function render()
    {
        $adminthemes = admintheme::all();
        return view('livewire.institute',[
            'adminthemes' => $adminthemes,
        ]);
    }
    public function instituteSubmit(){
       dd($this->selectedValue, $this -> selectedwebsiteTheme);
    }
}
