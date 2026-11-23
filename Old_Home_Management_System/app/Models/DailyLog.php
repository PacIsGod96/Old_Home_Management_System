<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyLog extends Model
{
    protected $table = 'daily_logs';

    protected $primaryKey = 'LogID';

    public $timestamps = false;

    protected $fillable = [
        'LogID',
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

    
}
