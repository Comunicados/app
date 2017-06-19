<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model {

    /**
     * Generated
     */

    protected $table = 'role_permission';
    protected $fillable = ['id_rol', 'id_permiso', 'id_school', 'consultar', 'agregar', 'editar', 'eliminar'];


    public function role() {
        return $this->belongsTo(\Comunicados\Role::class, 'id_rol', 'id');
    }

    public function permission() {
        return $this->belongsTo(\Comunicados\Permission::class, 'id_permiso', 'id');
    }

    public function school() {
        return $this->belongsTo(\Comunicados\School::class, 'id_school', 'id');
    }


}
