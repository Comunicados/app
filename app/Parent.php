<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class Parent extends Model {

    /**
     * Generated
     */

    protected $table = 'parents';
    protected $fillable = ['dni', 'llave_publica'];


    public function user() {
        return $this->belongsTo(\Comunicados\User::class, 'dni', 'dni');
    }

    public function messages() {
        return $this->belongsToMany(\Comunicados\Message::class, 'parent_message', 'padre_id', 'mensaje_id');
    }

    public function students() {
        return $this->belongsToMany(\Comunicados\Student::class, 'student_parent', 'padre_id', 'alumno_id');
    }

    public function messages() {
        return $this->hasMany(\Comunicados\Message::class, 'padre_envia', 'dni');
    }

    public function parentMessages() {
        return $this->hasMany(\Comunicados\ParentMessage::class, 'padre_id', 'dni');
    }

    public function studentParents() {
        return $this->hasMany(\Comunicados\StudentParent::class, 'padre_id', 'dni');
    }


}
