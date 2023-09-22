<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Teacher
 *
 * @property int $id
 * @property int $user_id
 *
 * @property User $user
 *
 * @package App\Models
 */
class Teacher extends Model
{
	protected $connection = 'core';
	protected $table = 'teacher';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
        'id',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

    	public function cours()
	{
		return $this->hasMany(Cour::class);
	}

	public function subjects()
	{
		return $this->belongsToMany(Subject::class, 'teacher_subject')
					->withPivot('id')
					->withTimestamps();
    }
}
