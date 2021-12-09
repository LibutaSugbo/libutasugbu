<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Touristattraction
 * 
 * @property int $TA_ID
 * @property boolean $TA_Image
 * @property string $TA_Activity
 * @property string $TA_Grouping
 * @property Carbon $TA_DateAvailable
 * @property float $TA_Fee
 * @property string $TA_Info
 *
 * @package App\Models
 */
class Touristattraction extends Model
{
	protected $table = 'touristattraction';
	protected $primaryKey = 'TA_ID';
	public $timestamps = false;

	protected $casts = [
		'TA_Image' => 'boolean',
		'TA_Fee' => 'float'
	];

	protected $dates = [
		'TA_DateAvailable'
	];

	protected $fillable = [
		'TA_Image',
		'TA_Activity',
		'TA_Grouping',
		'TA_DateAvailable',
		'TA_Fee',
		'TA_Info'
	];
}
