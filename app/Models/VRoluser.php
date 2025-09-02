<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VRoluser
 * 
 * @property int $ID_USER
 * @property int $NUMERO_DOC
 * @property string $TIPO_DOC
 * @property string $NOM_USER
 * @property string $APE_USER
 * @property int $EST_USER
 * @property string $NOM_ROL
 * @property string $DESCRIPCION
 *
 * @package App\Models
 */
class VRoluser extends Model
{
	protected $table = 'v_roluser';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_USER' => 'int',
		'NUMERO_DOC' => 'int',
		'EST_USER' => 'int'
	];

	protected $fillable = [
		'ID_USER',
		'NUMERO_DOC',
		'TIPO_DOC',
		'NOM_USER',
		'APE_USER',
		'EST_USER',
		'NOM_ROL',
		'DESCRIPCION'
	];
}
