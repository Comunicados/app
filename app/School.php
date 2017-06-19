<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class School extends Model {

    /**
     * Generated
     */

    protected $table = 'schools';
    protected $fillable = ['id', 'modalidad', 'nivel', 'numero', 'nombre', 'direccion', 'localidad', 'provincia', 'telefono', 'fax', 'email', 'pagina_web'];


    public function rolePermissions() {
        return $this->hasMany(\Comunicados\RolePermission::class, 'id_school', 'id');
    }

    public function staffSchoolCourses() {
        return $this->hasMany(\Comunicados\StaffSchoolCourse::class, 'escuela_id', 'id');
    }


}
