<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Image
 *
 * @property int $id
 * @property int|null $platform_id
 * @property string $hash
 * @property string $name
 *
 * @property Collection|Student[] $students
 *
 * @package App\Models
 */
class Image extends Model
{
	protected $connection = 'core';
	protected $table = 'image';
	public $timestamps = false;

	protected $fillable = [
		'hash',
		'name'
	];
}
