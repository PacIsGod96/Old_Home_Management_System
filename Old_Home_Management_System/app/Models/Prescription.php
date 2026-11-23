<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $table = 'prescriptions';

    protected $primaryKey = 'PrescriptionID';

    public $timestamps = false;

    protected $fillable = [
        'AppointmentID',
        'Date',
        'Comment',
        'MorningMed',
        'AfternoonMed',
        'NightMed'
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class, 'AppointmentID', 'AppointmentID');
    }
}
