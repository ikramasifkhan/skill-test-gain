<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    use HasFactory;

    protected $fillable = ['segment_name'];

    public function rules(){
        return $this->belongsToMany(Rule::class, 'segment_rules')->withPivot('group');
    }
}
