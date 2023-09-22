<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Core;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Group
 *
 * @property int $id
 * @property string $group_name
 * @property int $speciality_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Speciality $speciality
 * @property Collection|Enrollement[] $enrollements
 *
 * @package App\Models
 */
class Group extends Model
{
	protected $connection = 'core';
	protected $table = 'group';

	protected $casts = [
		'speciality_id' => 'int'
	];

	protected $fillable = [
		'group_name',
		'speciality_id'
	];

	public function speciality()
	{
		return $this->belongsTo(Speciality::class);
	}

	public function enrollements()
	{
		return $this->hasMany(Enrollement::class);
	}
}
