<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Связи
     */
    public function UserCart()
    {
        return $this->hasOne(UserCart::class, 'user_id');
    }

    public function WhomToGive()
    {
        return $this->hasOne(User::class, 'id', 'whom_to_give');
    }
}
