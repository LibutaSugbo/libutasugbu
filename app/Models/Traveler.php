<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Traveler
 * 
 * @property int $Traveler_ID
 * @property string $Traveler_LName
 * @property string $Traveler_FName
 * @property Carbon $Traveler_BirthDate
 * @property int $Traveler_Contact
 * @property string $Traveler_Email
 * @property string $Traveler_Address
 * @property string $Login_Name
 * @property string $Password
 * @property int $User_Acc_ID
 * 
 * @property Useraccount $useraccount
 *
 * @package App\Models
 */
class Traveler extends Model
{
	protected $table = 'traveler';
	protected $primaryKey = 'Traveler_ID';
	public $timestamps = false;

	protected $casts = [
		'Traveler_Contact' => 'int',
		'User_Acc_ID' => 'int'
	];

	protected $dates = [
		'Traveler_BirthDate'
	];

	protected $fillable = [
		'Traveler_LName',
		'Traveler_FName',
		'Traveler_BirthDate',
		'Traveler_Contact',
		'Traveler_Email',
		'Traveler_Address',
		'Login_Name',
		'Password',
		'User_Acc_ID'
	];

	public function useraccount()
	{
		return $this->belongsTo(Useraccount::class, 'User_Acc_ID');
	}
}
