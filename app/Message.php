<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

    /**
     * Generated
     */

    protected $table = 'messages';
    protected $fillable = ['id', 'detalle', 'padre_envia', 'mensaje_tipo_id', 'personal_colegio_envia'];


    public function parent() {
        return $this->belongsTo(\Comunicados\Parent::class, 'padre_envia', 'dni');
    }

    public function schoolStaff() {
        return $this->belongsTo(\Comunicados\SchoolStaff::class, 'personal_colegio_envia', 'dni');
    }

    public function messagesType() {
        return $this->belongsTo(\Comunicados\MessagesType::class, 'mensaje_tipo_id', 'id');
    }

    public function parents() {
        return $this->belongsToMany(\Comunicados\Parent::class, 'parent_message', 'mensaje_id', 'padre_id');
    }

    public function students() {
        return $this->belongsToMany(\Comunicados\Student::class, 'student_message', 'mensaje_id', 'alumno_id');
    }

    public function parentMessages() {
        return $this->hasMany(\Comunicados\ParentMessage::class, 'mensaje_id', 'id');
    }

    public function studentMessages() {
        return $this->hasMany(\Comunicados\StudentMessage::class, 'mensaje_id', 'id');
    }


}
