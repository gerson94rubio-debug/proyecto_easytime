<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VProductosinv
 * 
 * @property int $ID_PRODUCTO
 * @property string $NOM_PROD
 * @property string $DESCRIPCION_PROD
 * @property int $ID_INVENTARIO
 * @property string $NOMBRE_PROD_INVE
 * @property string $NOM_PROV
 * @property int $ID_PROVEDOR
 *
 * @package App\Models
 */
class VProductosinv extends Model
{
	protected $table = 'v_productosinv';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PRODUCTO' => 'int',
		'ID_INVENTARIO' => 'int',
		'ID_PROVEDOR' => 'int'
	];

	protected $fillable = [
		'ID_PRODUCTO',
		'NOM_PROD',
		'DESCRIPCION_PROD',
		'ID_INVENTARIO',
		'NOMBRE_PROD_INVE',
		'NOM_PROV',
		'ID_PROVEDOR'
	];
}
