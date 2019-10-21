<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Famdirksen\Roles\Traits\HasRoleAndPermission;

class User extends Model
{
    use HasRoleAndPermission;
}
