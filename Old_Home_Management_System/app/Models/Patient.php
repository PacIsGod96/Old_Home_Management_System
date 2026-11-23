<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';

    protected $primaryKey = 'PatientID';

    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
        'PatientID',
        'FamilyCode',
        'EmergencyContact',
        'EmergencyContactName',
        'RelationContact',
        'PatientGroup',
        'AdmissionDate'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'PatientID', 'UserID');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'PatientID', 'PatientID');
    }

    public function dailyLogs()
    {
        return $this->hasMany(DailyLog::class, 'PatientID', 'PatientID');
    }

    public function patientBalance() {
        return $this->hasOne(PatientBalance::class, 'PatientID', 'PatientID');
    }

    public function payments() {
        return $this->hasMany(Payment::class, 'PatientID', 'PatientID');
    }
}
