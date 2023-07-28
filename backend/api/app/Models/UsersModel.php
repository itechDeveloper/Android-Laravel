<?php

namespace App\Models;

use App\Interfaces\IUsers;
use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    protected $table = IUsers::TABLE_NAME;

    private $id;
    private $email;
    private $password;
    private $updated_at;

    protected $fillable = [
        IUsers::ID,
        IUsers::EMAIL,
        IUsers::PASSWORD,
        IUsers::UPDATED_AT,
    ];
}
