<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Core;

use App\Models\Static\City;
use App\Models\Static\Town;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;

/**
 * Class User
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $first_name
 * @property string $last_name
 * @property Carbon $birthday
 * @property int $city_id
 * @property int $town_id
 * @property string|null $address
 * @property string $email
 * @property string $phone_number
 * @property bool $active
 * @property Carbon|null $last_online
 * @property Carbon|null $last_request
 * @property int $role_id
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Role $role
 * @property Collection|Admin[] $admins
 * @property Collection|Parent[] $parents
 * @property Collection|Student[] $students
 * @property Collection|Teacher[] $teachers
 *
 * @package App\Models
 */
class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory;
	protected $connection = 'core';
	protected $table = 'users';

	protected $casts = [
		'birthday' => 'datetime',
		'city_id' => 'int',
		'town_id' => 'int',
		'active' => 'bool',
		'last_online' => 'datetime',
		'last_request' => 'datetime',
		'role_id' => 'int'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'username',
		'password',
		'first_name',
		'last_name',
		'birthday',
		'city_id',
		'town_id',
		'address',
		'email',
		'phone_number',
		'active',
		'last_online',
		'last_request',
		'role_id',
		'remember_token'
	];

    protected $appends = [
        'city',
        'town'
    ];

    protected $with = [
        'role'
    ];

    public function getCityAttribute()
    {
        return $this->belongsTo(City::class, 'city_id')->first();
    }

    public function getTownAttribute()
    {
        return $this->belongsTo(Town::class, 'town_id')->first();
    }

	public function role()
	{
		return $this->belongsTo(Role::class);
	}

	public function admins()
	{
		return $this->hasMany(Admin::class);
	}

	public function parents()
	{
		return $this->hasMany(Parent::class);
	}

	public function students()
	{
		return $this->hasMany(Student::class);
	}

	public function teachers()
	{
		return $this->hasMany(Teacher::class);
	}


    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
