<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BbAccomodation
 * 
 * @property int $BB_Accmm_ID
 * @property boolean $BB_Accmm_Image
 * @property string $BB_Room_Type
 * @property int $BB_Quantity
 * @property float $BB_Price
 * @property string $BB_Info
 *
 * @package App\Models
 */
class BbAccomodation extends Model
{
	protected $table = 'bb_accomodation';
	protected $primaryKey = 'BB_Accmm_ID';
	public $timestamps = false;

	protected $casts = [
		'BB_Accmm_Image' => 'boolean',
		'BB_Quantity' => 'int',
		'BB_Price' => 'float'
	];

	protected $fillable = [
		'BB_Accmm_Image',
		'BB_Room_Type',
		'BB_Quantity',
		'BB_Price',
		'BB_Info'
	];
}
