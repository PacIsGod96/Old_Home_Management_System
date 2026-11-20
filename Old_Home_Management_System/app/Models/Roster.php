<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    protected $table = 'roster';

    protected $primaryKey = 'RosterID';

    public $timestamps = false;

    protected $fillable = [
        'RosterID',
        'SupervisorID',
        'DoctorID',
        'RosterID',
        'RosterDate'
    ];


}
