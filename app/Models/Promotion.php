<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Promotion
 * 
 * @property int $Promo_ID
 * @property Carbon $Promo_StartDate
 * @property Carbon $Promo_EndDate
 * @property int $Host_ID
 * 
 * @property Host $host
 *
 * @package App\Models
 */
class Promotion extends Model
{
	protected $table = 'promotion';
	protected $primaryKey = 'Promo_ID';
	public $timestamps = false;

	protected $casts = [
		'Host_ID' => 'int'
	];

	protected $dates = [
		'Promo_StartDate',
		'Promo_EndDate'
	];

	protected $fillable = [
		'Promo_StartDate',
		'Promo_EndDate',
		'Host_ID'
	];

	public function host()
	{
		return $this->belongsTo(Host::class, 'Host_ID');
	}
}
