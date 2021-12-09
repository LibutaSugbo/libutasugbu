<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RestoCafeMenu
 * 
 * @property int $RC_ID
 * @property boolean $RC_Image
 * @property string $RC_Type
 * @property string $RC_Name
 * @property string $RC_Description
 * @property float $RC_Price
 * @property string $RC_Info
 *
 * @package App\Models
 */
class RestoCafeMenu extends Model
{
	protected $table = 'resto_cafe_menu';
	protected $primaryKey = 'RC_ID';
	public $timestamps = false;

	protected $casts = [
		'RC_Image' => 'boolean',
		'RC_Price' => 'float'
	];

	protected $fillable = [
		'RC_Image',
		'RC_Type',
		'RC_Name',
		'RC_Description',
		'RC_Price',
		'RC_Info'
	];
}
