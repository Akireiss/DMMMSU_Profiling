<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserRole extends Model
{
    use HasFactory;
    protected $table = 'user_type';
    protected $fillable = [
        'user_type',
        'user_type_status'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'user_role_id');
    }


}
