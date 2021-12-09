<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bucketlist
 * 
 * @property int $Bucketlist_ID
 * @property string $Host_Info
 * @property int $Traveler_ID
 * @property int $Host_ID
 *
 * @package App\Models
 */
class Bucketlist extends Model
{
	protected $table = 'bucketlist';
	protected $primaryKey = 'Bucketlist_ID';
	public $timestamps = false;

	protected $casts = [
		'Traveler_ID' => 'int',
		'Host_ID' => 'int'
	];

	protected $fillable = [
		'Host_Info',
		'Traveler_ID',
		'Host_ID'
	];
}
