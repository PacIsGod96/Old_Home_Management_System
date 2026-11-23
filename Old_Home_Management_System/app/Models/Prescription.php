<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $table = 'prescriptions';

    protected $primaryKey = 'PrescriptionID';

    public $timestamps = false;

    protected $fillable = [
        'PrescriptionID',
        'AppointmentID',
        'Date',
        'Comment',
        'MorningMed',
        'AfternoonMed',
        'NightMed'
    ];


}
