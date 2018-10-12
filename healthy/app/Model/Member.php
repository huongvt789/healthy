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
        'id_branch',
        'age',
        'certificate',
        'is_deleted',
        'branch'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    const IS_PERMISSION = 1;
    const IS_ACTIVE = 0;

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

    protected function search($paramSearch  = null){
        if($paramSearch == null){
            return $this::where('is_deleted', Member::IS_ACTIVE)->orderBy('id', 'desc')->paginate(5);//
        }
        else{
            return $this::where('member_name', 'LIKE', '%'.$paramSearch['name'].'%')
                ->orWhere('email', 'LIKE', $paramSearch['name'].'%')
                ->where('is_deleted', Member::IS_ACTIVE)->orderBy('id', 'desc')->paginate(5);
        }
    }
}
