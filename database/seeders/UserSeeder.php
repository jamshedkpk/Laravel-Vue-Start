<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
public function run()
{
User::create([
'name'=>'Jamshed',
'email'=>'admin@gmail.com',
'role_id'=>1,
'password'=>Hash::make('admin'),
]);
User::create([
'name'=>'Samreena',
'email'=>'user@gmail.com',
'role_id'=>2,
'password'=>Hash::make('admin'),
]);
}
}
