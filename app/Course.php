<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

    /**
     * Generated
     */

    protected $table = 'courses';
    protected $fillable = ['id', 'aula', 'dias_cursada', 'turno_id'];


    public function schedule() {
        return $this->belongsTo(\Comunicados\Schedule::class, 'turno_id', 'id');
    }

    public function staffSchoolCourses() {
        return $this->hasMany(\Comunicados\StaffSchoolCourse::class, 'curso_id', 'id');
    }

    public function studentCourseSubjects() {
        return $this->hasMany(\Comunicados\StudentCourseSubject::class, 'curso_id', 'id');
    }


}
