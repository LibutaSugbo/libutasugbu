<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Useraccount
 * 
 * @property int $User_Acc_ID
 * @property string $User_Acc_Desc
 * 
 * @property Host $host
 * @property Collection|Traveler[] $travelers
 *
 * @package App\Models
 */
class Useraccount extends Model
{
	protected $table = 'useraccount';
	protected $primaryKey = 'User_Acc_ID';
	public $timestamps = false;

	protected $fillable = [
		'User_Acc_Desc'
	];

	public function host()
	{
		return $this->hasOne(Host::class, 'User_Acc_ID');
	}

	public function travelers()
	{
		return $this->hasMany(Traveler::class, 'User_Acc_ID');
	}
}
