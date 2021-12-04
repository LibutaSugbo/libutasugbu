<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Messaging
 * 
 * @property int $Message_ID
 * @property string $Message_Sender
 * @property string $Message_Recipient
 * @property string $Message_Content
 * @property Carbon $Message_TimeStamp
 * @property int $Traveler_ID
 * @property int $Host_ID
 *
 * @package App\Models
 */
class Messaging extends Model
{
	protected $table = 'messaging';
	protected $primaryKey = 'Message_ID';
	public $timestamps = false;

	protected $casts = [
		'Traveler_ID' => 'int',
		'Host_ID' => 'int'
	];

	protected $dates = [
		'Message_TimeStamp'
	];

	protected $fillable = [
		'Message_Sender',
		'Message_Recipient',
		'Message_Content',
		'Message_TimeStamp',
		'Traveler_ID',
		'Host_ID'
	];
}
