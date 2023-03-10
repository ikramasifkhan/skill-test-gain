<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogicField extends Model
{
    use HasFactory;

    public function rules(){
        return $this->hasMany(Rule::class, 'logic_field_id', 'id');
    }
}
