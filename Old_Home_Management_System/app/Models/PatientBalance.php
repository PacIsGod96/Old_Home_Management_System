<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientBalance extends Model
{
    protected $table = 'patient_balance';

    protected $primaryKey = 'PatientID';

    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
        'PatientID',
        'TotalDue',
        'LastUpdated'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'PatientID', 'PatientID');
    }
}
