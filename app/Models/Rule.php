<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $fillable = ['logic_field_id', 'logic_id', 'description'];

    public function logic_field(){
        return $this->belongsTo(LogicField::class, 'logic_field_id', 'id');
    }

    public function logic(){
        return $this->belongsTo(Logic::class, 'logic_id', 'id');
    }

    public function segments(){
        return $this->belongsToMany(Segment::class, 'segment_rules')->withPivot('group');
    }
}
