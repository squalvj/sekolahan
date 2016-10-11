<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class siswa extends Model
{
	protected $table = "siswa";
	protected $primaryKey = 'id';
}
