<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Assign roles to users.
     */
    public static function assignRolesToUsers()
    {
        // Asignar el rol de Administrador (asumiendo que existe) al usuario con ID 1
        $user1 = User::find(1);
        $user1->assignRole('admin');

        // Asignar el rol de Profesor al usuario con ID 2
        $user2 = User::find(2);
        $user2->assignRole('professor');

        // Asignar el rol de Secretaria al usuario con ID 3
        $user3 = User::find(3);
        $user3->assignRole('secretary');
    }
    
    // Puedes agregar más métodos y funcionalidades según tus necesidades
}