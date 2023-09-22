<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Core;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Communication
 *
 * @property int $id
 * @property int $from_id
 * @property int $to_id
 * @property string $subject
 * @property string $content
 * @property bool $read
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property User $user
 *
 * @package App\Models
 */
class Communication extends Model
{
	protected $connection = 'core';
	protected $table = 'communication';

	protected $casts = [
		'from_id' => 'int',
		'to_id' => 'int',
		'read' => 'bool'
	];

	protected $fillable = [
		'from_id',
		'to_id',
		'subject',
		'content',
		'read'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'to_id');
	}

    public function from()
	{
		return $this->belongsTo(User::class, 'from_id');
	}
}
