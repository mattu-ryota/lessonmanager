<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Task extends Model
{
    //
  public function getColor(){
    $today=Carbon::today();

    if ($today >= $this->deadline){
        return 'red';
    }else if($today->addDays('3') >= $this->deadline){
        return "yellow";
    }else{
        return "blue";
    }
  }  
}
