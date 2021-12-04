<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Subscription
 * 
 * @property int $Sub_ID
 * @property float $Sub_Payment
 * @property Carbon $Sub_StartDate
 * @property Carbon $Sub_EndDate
 * @property string $Sub_Email
 * @property int $Host_ID
 * 
 * @property Host $host
 *
 * @package App\Models
 */
class Subscription extends Model
{
	protected $table = 'subscription';
	protected $primaryKey = 'Sub_ID';
	public $timestamps = false;

	protected $casts = [
		'Sub_Payment' => 'float',
		'Host_ID' => 'int'
	];

	protected $dates = [
		'Sub_StartDate',
		'Sub_EndDate'
	];

	protected $fillable = [
		'Sub_Payment',
		'Sub_StartDate',
		'Sub_EndDate',
		'Sub_Email',
		'Host_ID'
	];

	public function host()
	{
		return $this->belongsTo(Host::class, 'Host_ID');
	}
}
