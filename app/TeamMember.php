<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamMember extends Model
{
    protected $fillable = ['meeting_room', 'agenda','booked_for','booked_by','date','start_time','end_time','status'];
   
    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
