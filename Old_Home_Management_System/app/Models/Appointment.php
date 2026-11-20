<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';

    protected $primaryKey = 'AppointmentID';

    public $timestamps = false;

    protected $fillable = [
        'AppointmentID',
        'PatientID',
        'DoctoreID',
        'AppointmentDate'
    ];


}
