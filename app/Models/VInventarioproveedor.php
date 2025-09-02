<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VInventarioproveedor
 * 
 * @property int $ID_INVENTARIO
 * @property string $NOMBRE_PROD_INVE
 * @property int|null $PROVEEDOR_ID_PROVEDOR
 * @property string $NOM_PROV
 * @property int $EST_PROV
 *
 * @package App\Models
 */
class VInventarioproveedor extends Model
{
	protected $table = 'v_inventarioproveedor';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_INVENTARIO' => 'int',
		'PROVEEDOR_ID_PROVEDOR' => 'int',
		'EST_PROV' => 'int'
	];

	protected $fillable = [
		'ID_INVENTARIO',
		'NOMBRE_PROD_INVE',
		'PROVEEDOR_ID_PROVEDOR',
		'NOM_PROV',
		'EST_PROV'
	];
}
