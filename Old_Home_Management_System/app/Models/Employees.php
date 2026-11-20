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
}
