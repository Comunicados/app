<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    /**
     * Generated
     */

    protected $table = 'users';
    protected $fillable = ['dni', 'nombre', 'apellido', 'sexo', 'email', 'password', 'fecha_nacimiento', 'telefono', 'celular', 'direccion', 'localidad', 'provincia', 'foto_url', 'alumno?', 'padre?', 'personal?', 'remember_token'];


    public function parent() {
        return $this->hasOne(\Comunicados\Parent::class, 'dni', 'dni');
    }

    public function schoolStaff() {
        return $this->hasOne(\Comunicados\SchoolStaff::class, 'dni', 'dni');
    }

    public function student() {
        return $this->hasOne(\Comunicados\Student::class, 'dni', 'dni');
    }


}
