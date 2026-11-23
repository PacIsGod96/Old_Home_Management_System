<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $primaryKey = 'PaymentID';

    public $timestamps = false;

    protected $fillable = [
        'PatientID',
        'AmountPaid',
        'PaymentDate'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'PatientID', 'PatientID');
    }
}
