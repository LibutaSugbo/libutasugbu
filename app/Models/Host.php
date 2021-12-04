<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Host
 * 
 * @property int $Host_ID
 * @property string $Host_BName
 * @property string $Host_LName
 * @property string $Host_FName
 * @property string $Host_MName
 * @property string $Host_ExtName
 * @property string $Host_City_Muni
 * @property string $Host_Brgy
 * @property string $Host_Street
 * @property int $Host_ZIP
 * @property int $Host_ContactNum
 * @property string $Host_Direction
 * @property string $Host_Email
 * @property string $Host_Password
 * @property string $Host_Type
 * @property int $User_Acc_ID
 * @property string $Host_Website
 * 
 * @property Useraccount $useraccount
 * @property Collection|Promotion[] $promotions
 * @property Collection|Subscription[] $subscriptions
 *
 * @package App\Models
 */
class Host extends Model
{
	protected $table = 'host';
	protected $primaryKey = 'Host_ID';
	public $timestamps = false;

	protected $casts = [
		'Host_ZIP' => 'int',
		'Host_ContactNum' => 'int',
		'User_Acc_ID' => 'int'
	];

	protected $fillable = [
		'Host_BName',
		'Host_LName',
		'Host_FName',
		'Host_MName',
		'Host_ExtName',
		'Host_City_Muni',
		'Host_Brgy',
		'Host_Street',
		'Host_ZIP',
		'Host_ContactNum',
		'Host_Direction',
		'Host_Email',
		'Host_Password',
		'Host_Type',
		'User_Acc_ID',
		'Host_Website'
	];

	public function useraccount()
	{
		return $this->belongsTo(Useraccount::class, 'User_Acc_ID');
	}

	public function promotions()
	{
		return $this->hasMany(Promotion::class, 'Host_ID');
	}

	public function subscriptions()
	{
		return $this->hasMany(Subscription::class, 'Host_ID');
	}
}
