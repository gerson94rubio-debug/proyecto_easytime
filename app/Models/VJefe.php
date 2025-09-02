<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VJefe
 * 
 * @property int $ID_USER
 * @property int $NUMERO_DOC
 * @property string $TIPO_DOC
 * @property string $NOM_USER
 * @property string $APE_USER
 * @property string $TEL_USER
 * @property string $CORREO_USER
 * @property string $ROL_USER
 * @property int $EST_USER
 * @property Carbon $CREATED_AT
 * @property Carbon $UPDATE_AT
 * @property int|null $ID_ROL_USER
 * @property int $ID_ROL
 * @property string $NOM_ROL
 *
 * @package App\Models
 */
class VJefe extends Model
{
	protected $table = 'v_jefes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_USER' => 'int',
		'NUMERO_DOC' => 'int',
		'EST_USER' => 'int',
		'CREATED_AT' => 'datetime',
		'UPDATE_AT' => 'datetime',
		'ID_ROL_USER' => 'int',
		'ID_ROL' => 'int'
	];

	protected $fillable = [
		'ID_USER',
		'NUMERO_DOC',
		'TIPO_DOC',
		'NOM_USER',
		'APE_USER',
		'TEL_USER',
		'CORREO_USER',
		'ROL_USER',
		'EST_USER',
		'CREATED_AT',
		'UPDATE_AT',
		'ID_ROL_USER',
		'ID_ROL',
		'NOM_ROL'
	];
}
