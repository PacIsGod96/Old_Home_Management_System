<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    protected $table = 'appointments';

    protected $primaryKey = 'AppointmentID';

    public $timestamps = false;

    protected $fillable = [
        'PatientID',
        'DoctorID',
        'AppointmentDate'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'PatientID', 'PatientID');
    }

    public function employee()
    {
        return $this->belongsTo(Employees::class, 'DoctorID', 'EmployeeID');
    }

    public function prescription()
    {
        return $this->hasOne(Prescription::class, 'AppointmentID', 'AppointmentID');
    }
}
