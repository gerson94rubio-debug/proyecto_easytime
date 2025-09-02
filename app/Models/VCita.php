<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VCita
 * 
 * @property string $NOM_SERV
 * @property string $DESCP_SERV
 * @property int $ID_SERVICIO
 * @property int $ID_CITA
 * @property int $EST_CITA
 * @property Carbon $FECHA_CITA
 * @property string $NOM_USER
 * @property string $APE_USER
 * @property int $NUMERO_DOC
 * @property string $ROL_USER
 *
 * @package App\Models
 */
class VCita extends Model
{
	protected $table = 'v_citas';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_SERVICIO' => 'int',
		'ID_CITA' => 'int',
		'EST_CITA' => 'int',
		'FECHA_CITA' => 'datetime',
		'NUMERO_DOC' => 'int'
	];

	protected $fillable = [
		'NOM_SERV',
		'DESCP_SERV',
		'ID_SERVICIO',
		'ID_CITA',
		'EST_CITA',
		'FECHA_CITA',
		'NOM_USER',
		'APE_USER',
		'NUMERO_DOC',
		'ROL_USER'
	];
}
