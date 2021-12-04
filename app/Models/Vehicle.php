<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehicle
 * 
 * @property int $Vehicle_ID
 * @property boolean $Vehicle_Image
 * @property string $Vehicle_Type
 * @property string $Vehicle_With
 * @property string $Vehicle_Allow
 * @property float $Vehicle_RentPrice
 * @property int $Vehicle_MaxCap
 * @property int $Vehicle_Quantity
 * @property string $Vehicle_Info
 *
 * @package App\Models
 */
class Vehicle extends Model
{
	protected $table = 'vehicle';
	protected $primaryKey = 'Vehicle_ID';
	public $timestamps = false;

	protected $casts = [
		'Vehicle_Image' => 'boolean',
		'Vehicle_RentPrice' => 'float',
		'Vehicle_MaxCap' => 'int',
		'Vehicle_Quantity' => 'int'
	];

	protected $fillable = [
		'Vehicle_Image',
		'Vehicle_Type',
		'Vehicle_With',
		'Vehicle_Allow',
		'Vehicle_RentPrice',
		'Vehicle_MaxCap',
		'Vehicle_Quantity',
		'Vehicle_Info'
	];
}
