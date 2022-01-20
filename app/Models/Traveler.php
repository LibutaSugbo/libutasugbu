<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
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
 *
 * @package App\Models
 */
class Traveler extends Model
{
	use Notifiable;
	protected $guard = 'traveler';
	protected $table = 'traveler';
	protected $primaryKey = 'Traveler_ID';
	public $timestamps = false;

	protected $casts = [
		'Traveler_Contact' => 'int'
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
		'Password'
	];
	public function getAuthPassword(){
		return $this->Password;
		}
}
