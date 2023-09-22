<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 *
 * @property int $id
 * @property int $user_id
 * @property string $reference
 *
 * @property User $user
 *
 * @package App\Models
 */
class Student extends Model
{
	protected $connection = 'core';
	protected $table = 'student';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
        'reference',
        'image_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

    public function image()
	{
		return $this->belongsTo(Image::class);
	}
}
