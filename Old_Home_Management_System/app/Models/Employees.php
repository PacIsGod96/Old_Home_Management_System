<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'employees';

    protected $primaryKey = 'EmployeeID';

    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
        'EmployeeID',
        'Salary'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'EmployeeID', 'UserID');
    }

    public function appointments() 
    {
        return $this->hasMany(Appointment::class, 'DoctorID', 'EmployeeID');
    }

    public function dailyLogs()
    {
        return $this->hasMany(DailyLog::class, 'CaregiverID', 'EmployeeID');
    }

    public function rosterSupervisor() 
    {
        return $this->hasMany(Roster::class, 'SupervisorID', 'EmployeeID');
    }

    public function rosterDoctor()
    {
        return $this->hasMany(Roster::class, 'DoctorID', 'EmployeeID');
    }

    public function rosterCaregiver() 
    {
        return $this->hasMany(RosterCaregiver::class, 'CaregiverID', 'EmployeeID');
    }
}
