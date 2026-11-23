<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyLog extends Model
{
    protected $table = 'daily_logs';

    protected $primaryKey = 'LogID';

    public $timestamps = false;

    protected $fillable = [
        'PatientID',
        'CaregiverID',
        'LogDate',
        'MorningMedTaken',
        'AfternoonMedTaken',
        'NightMedTaken',
        'Breakfast',
        'Lunch',
        'Dinner'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'PatientID', 'PatientID');
    }

    public function caregiver()
    {
        return $this->belongsTo(Employees::class, 'CaregiverID', 'EmployeeID');
    }
}
