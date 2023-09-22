<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Static;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 *
 * @property int $id
 * @property string $name_ar
 * @property string $name_en
 * @property string $name_fr
 *
 * @property Collection|Town[] $towns
 *
 * @package App\Models
 */
class City extends Model
{
	protected $connection = 'static';
	protected $table = 'city';
	public $timestamps = false;

	protected $fillable = [
		'name_ar',
		'name_en',
		'name_fr'
	];

    protected $hidden = [
		'name_ar',
		'name_en',
		'name_fr'
    ];

    protected $appends = [
        'name',
    ];

    public function getNameAttribute() {
        return $this->name_fr;
    }

	public function towns()
	{
		return $this->hasMany(Town::class);
	}
}
