<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Parent
 *
 * @property int $id
 * @property int $user_id
 * @property int $student_id
 *
 * @property User $user
 *
 * @package App\Models
 */
class Parent extends Model
{
	protected $connection = 'core';
	protected $table = 'parent';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'student_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'student_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

    public function student()
	{
		return $this->belongsTo(Student::class);
	}
}
