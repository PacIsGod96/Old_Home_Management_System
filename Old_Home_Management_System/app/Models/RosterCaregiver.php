<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RosterCaregiver extends Model
{
    protected $table = 'roster_caregiver';

    protected $primaryKey = 'RosterCaregiverID';

    public $timestamps = false;

    protected $fillable = [
        'RosterID',
        'CaregiverID',
        'PatientGroup'
    ];

    public function roster()
    {
        return $this->belongsTo(Roster::class, 'RosterID', 'RosterID');
    }

    public function employee()
    {
        return $this->belongsTo(Employees::class, 'CaregiverID', 'EmployeeID');
    }
}
