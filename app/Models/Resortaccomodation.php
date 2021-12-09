<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Resortaccomodation
 * 
 * @property int $R_Accmm_ID
 * @property int $R_Accmm_Image
 * @property boolean $R_Accmm_Type
 * @property float $R_Accmm_Price
 * @property string $R_Accmm_Info
 * @property string|null $R_Room_Type
 * @property int|null $R_Room_Quantity
 * @property int|null $R_Room_MaxCap
 * @property int|null $R_Cot_Quantity
 * @property int|null $R_Cot_Max
 * @property int|null $R_Tab_Quantity
 * @property int|null $R_Tab_MaxCap
 * @property string|null $R_Act_Type
 *
 * @package App\Models
 */
class Resortaccomodation extends Model
{
	protected $table = 'resortaccomodation';
	protected $primaryKey = 'R_Accmm_ID';
	public $timestamps = false;

	protected $casts = [
		'R_Accmm_Image' => 'int',
		'R_Accmm_Type' => 'boolean',
		'R_Accmm_Price' => 'float',
		'R_Room_Quantity' => 'int',
		'R_Room_MaxCap' => 'int',
		'R_Cot_Quantity' => 'int',
		'R_Cot_Max' => 'int',
		'R_Tab_Quantity' => 'int',
		'R_Tab_MaxCap' => 'int'
	];

	protected $fillable = [
		'R_Accmm_Image',
		'R_Accmm_Type',
		'R_Accmm_Price',
		'R_Accmm_Info',
		'R_Room_Type',
		'R_Room_Quantity',
		'R_Room_MaxCap',
		'R_Cot_Quantity',
		'R_Cot_Max',
		'R_Tab_Quantity',
		'R_Tab_MaxCap',
		'R_Act_Type'
	];
}
