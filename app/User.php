<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    /**
     * Generated
     */

    protected $table = 'users';
    protected $fillable = ['dni', 'nombre', 'apellido', 'sexo', 'email', 'password', 'fecha_nacimiento', 'telefono', 'celular', 'direccion', 'localidad', 'provincia', 'foto_url', 'tipo', 'remember_token'];


    public function messages() {
        return $this->belongsToMany(\Comunicados\Message::class, 'message_recipient', 'recibe_dni', 'mensaje_id');
    }

    public function messageRecipients() {
        return $this->hasMany(\Comunicados\MessageRecipient::class, 'recibe_dni', 'dni');
    }

    public function messages() {
        return $this->hasMany(\Comunicados\Message::class, 'user_envia', 'dni');
    }

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
