<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservation
 * 
 * @property int $Reservation_ID
 * @property Carbon $Reservation_Date
 * @property int $Quantity
 * @property int $Guest_Adult
 * @property int $Guest_Children
 * @property Carbon $Check_In
 * @property Carbon $Check_Out
 * @property int $Traveler_ID
 * @property int $Host_ID
 * @property int $R_Accmm_ID
 * @property int $BB_Accmm_ID
 * @property int $Vehicle_ID
 *
 * @package App\Models
 */
class Reservation extends Model
{
	protected $table = 'reservation';
	protected $primaryKey = 'Reservation_ID';
	public $timestamps = false;

	protected $casts = [
		'Quantity' => 'int',
		'Guest_Adult' => 'int',
		'Guest_Children' => 'int',
		'Traveler_ID' => 'int',
		'Host_ID' => 'int',
		'R_Accmm_ID' => 'int',
		'BB_Accmm_ID' => 'int',
		'Vehicle_ID' => 'int'
	];

	protected $dates = [
		'Reservation_Date',
		'Check_In',
		'Check_Out'
	];

	protected $fillable = [
		'Reservation_Date',
		'Quantity',
		'Guest_Adult',
		'Guest_Children',
		'Check_In',
		'Check_Out',
		'Traveler_ID',
		'Host_ID',
		'R_Accmm_ID',
		'BB_Accmm_ID',
		'Vehicle_ID'
	];
}
