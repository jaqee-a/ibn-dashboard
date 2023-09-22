<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Core;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cour
 *
 * @property int $id
 * @property string $cours_name
 * @property int $subject_id
 * @property int $teacher_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Subject $subject
 * @property Teacher $teacher
 *
 * @package App\Models
 */
class Cour extends Model
{
	protected $connection = 'core';
	protected $table = 'cours';

	protected $casts = [
		'subject_id' => 'int',
		'teacher_id' => 'int'
	];

	protected $fillable = [
		'cours_name',
		'subject_id',
		'teacher_id'
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
