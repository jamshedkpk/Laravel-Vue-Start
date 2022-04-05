<?php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Role;

class User extends Authenticatable
{
use HasApiTokens, HasFactory, Notifiable;

protected $fillable =
[
'name',
'email',
'password',
'role_id',
];

protected $hidden =
[
'password',
'remember_token',
];
protected $casts =
[
'email_verified_at' => 'datetime',
];

// Each user a has a specific role
public function role()
{
return $this->belongsTo(Role::class);
}

// Verify if user is admin
public function isAdmin()
{
$roles=User::join('roles','roles.id','=','users.role_id')
->where(['users.id'=>$this->id])
->where(['roles.id'=>$this->role_id])
->get();
foreach($roles as $role)
{
return $role->name;
}
}

}
