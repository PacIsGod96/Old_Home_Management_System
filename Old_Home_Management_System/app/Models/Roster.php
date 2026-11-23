<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    protected $table = 'roster';

    protected $primaryKey = 'RosterID';

    public $timestamps = false;

    protected $fillable = [
        'SupervisorID',
        'DoctorID',
        'RosterDate'
    ];

    public function employeeSupervisor()
    {
        return $this->belongsTo(Employees::class, 'SupervisorID', 'EmployeeID');
    }

    public function employeeDoctor()
    {
        return $this->belongsTo(Employees::class, 'DoctorID', 'EmployeeID');
    }

    public function rosterCaregivers() 
    {
        return $this->hasMany(RosterCaregiver::class, 'RosterID', 'RosterID');
    }
}
