<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Member extends Model
{
    protected $table = 'members';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'member_name',
        'member_phone',
        'email',
        'password',
        'remember_token',
        'member_permission',
        'is_deleted',
        'branch'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    const IS_APPROVE_PERMISSION = 1;

    public function createAccount($request)
    {
        $member = new Member();
        $member->member_name = $request->member_name;
        $member->member_phone = $request->member_phone;
        $member->email = $request->email;
        $member->password = Hash::make($request['password']);
        $member->remember_token = Hash::make($request['remember_token']);
        $member->branch = $request->branch;
        $createMember = $member->save();
        return $createMember;
    }
}
