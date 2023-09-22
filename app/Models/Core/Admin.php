<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Admin
 *
 * @property int $id
 * @property int $user_id
 *
 * @property User $user
 *
 * @package App\Models
 */
class Admin extends Model
{
	protected $connection = 'core';
	protected $table = 'admin';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
