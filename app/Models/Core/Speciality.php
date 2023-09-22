<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Speciality
 *
 * @property int $id
 * @property string $speciality_name
 *
 * @property Collection|Enrollement[] $enrollements
 * @property Collection|Group[] $groups
 *
 * @package App\Models
 */
class Speciality extends Model
{
	protected $connection = 'core';
	protected $table = 'speciality';
	public $timestamps = false;

	protected $fillable = [
		'speciality_name'
	];

	public function enrollements()
	{
		return $this->hasMany(Enrollement::class);
	}

	public function groups()
	{
		return $this->hasMany(Group::class);
	}
}
