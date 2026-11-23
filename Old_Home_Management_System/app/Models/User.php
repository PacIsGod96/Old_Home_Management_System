<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $primaryKey = 'UserID';

    public $timestamps = false;

    protected $fillable = [
        'FirstName',
        'LastName',
        'Email',
        'Phone',
        'Password',
        'DOB',
        'IsApproved',
        'RoleID'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'RoleID','RoleID');
    }

    public function patient()
    {
        return $this->hasOne(Patient::class, 'PatientID', 'UserID');
    }

    public function employee()
    {
        return $this->hasOne(Employees::class, 'EmployeeID', 'UserID');
    }
}
