<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RolHasUsuario
 * 
 * @property int $ROL_ID_ROL
 * @property int $USUARIO_ID_USUARIO
 * 
 * @property Rol $rol
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class RolHasUsuario extends Model
{
	protected $table = 'rol_has_usuario';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ROL_ID_ROL' => 'int',
		'USUARIO_ID_USUARIO' => 'int'
	];

	protected $fillable = [
		'ROL_ID_ROL',
		'USUARIO_ID_USUARIO'
	];

	public function rol()
	{
		return $this->belongsTo(Rol::class, 'ROL_ID_ROL');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'USUARIO_ID_USUARIO');
	}
}
