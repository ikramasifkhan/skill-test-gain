<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SegmentRule extends Model
{
    use HasFactory;

    protected $fillable = [
        'segment_id', 'rule_id', 'group'
    ];
}
