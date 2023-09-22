<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Subject
 *
 * @property int $id
 * @property string $subject_name
 *
 * @package App\Models
 */
class Subject extends Model
{
	protected $connection = 'core';
	protected $table = 'subject';
	public $timestamps = false;

	protected $fillable = [
        'subject_name',
        'speciality_id'
	];

	public function speciality()
	{
		return $this->belongsTo(Speciality::class);
	}

	public function cours()
	{
		return $this->hasMany(Cour::class);
	}

	public function teachers()
	{
		return $this->belongsToMany(Teacher::class, 'teacher_subject')
					->withPivot('id')
					->withTimestamps();
	}
}
