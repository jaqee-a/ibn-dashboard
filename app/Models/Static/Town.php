<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Static;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Town
 *
 * @property int $id
 * @property int $city_id
 * @property string $name_ar
 * @property string $name_en
 * @property string $name_fr
 *
 * @property City $city
 *
 * @package App\Models
 */
class Town extends Model
{
	protected $connection = 'static';
	protected $table = 'town';
	public $timestamps = false;

	protected $casts = [
		'city_id' => 'int'
	];

	protected $fillable = [
		'city_id',
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

	public function city()
	{
		return $this->belongsTo(City::class);
	}
}
