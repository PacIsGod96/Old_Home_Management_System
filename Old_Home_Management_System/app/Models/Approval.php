<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    protected $table = 'approvals';

    protected $primaryKey = 'ApprovalID';

    public $timestamps = false;

    protected $fillable = [
        'UserID',
        'ApprovedBy',
        'ApproveDate',
        'IsApproved'
    ];

    public function userNeedingApproved()
    {
        return $this->belongsTo(User::class, 'UserID', 'UserID');
    }

    public function approver()
    {
        return $this->belongsTo(User::class, 'ApprovedBy', 'RoleID');
    }
}
