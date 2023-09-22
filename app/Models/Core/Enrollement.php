<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Core;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Enrollement
 *
 * @property int $id
 * @property int $student_id
 * @property int $speciality_id
 * @property int $year
 * @property int $group_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Group $group
 * @property Speciality $speciality
 * @property Student $student
 *
 * @package App\Models
 */
class Enrollement extends Model
{
	protected $connection = 'core';
	protected $table = 'enrollement';

	protected $casts = [
		'student_id' => 'int',
		'speciality_id' => 'int',
		'year' => 'int',
		'group_id' => 'int'
	];

	protected $fillable = [
		'student_id',
		'speciality_id',
		'year',
		'group_id'
	];

	public function group()
	{
		return $this->belongsTo(Group::class);
	}

	public function speciality()
	{
		return $this->belongsTo(Speciality::class);
	}

	public function student()
	{
		return $this->belongsTo(Student::class);
	}
}
