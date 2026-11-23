<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RosterCaregiver extends Model
{
    protected $table = 'roster_cargiver';

    protected $primaryKey = 'RosterCaregiverID';

    public $timestamps = false;

    protected $fillable = [
        'RosterCaregiverID',
        'RosterID',
        'CaregiverID',
        'PatientGroup'
    ];

    
}
