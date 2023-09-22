<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Core;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TeacherSubject
 *
 * @property int $id
 * @property int $teacher_id
 * @property int $subject_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Subject $subject
 * @property Teacher $teacher
 *
 * @package App\Models
 */
class TeacherSubject extends Model
{
	protected $connection = 'core';
	protected $table = 'teacher_subject';

	protected $casts = [
		'teacher_id' => 'int',
		'subject_id' => 'int'
	];

	protected $fillable = [
		'teacher_id',
		'subject_id'
	];

	public function subject()
	{
		return $this->belongsTo(Subject::class);
	}

	public function teacher()
	{
		return $this->belongsTo(Teacher::class);
	}
}
