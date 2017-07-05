<?php

namespace Comunicados\Http\Controllers;

use Illuminate\Http\Request;
use Comunicados\SchoolStaff;
use Session;
use Redirect;
use Auth;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view ('admins/estadisticas');
    }


    public function showStaff()
    {
        
        $staff =DB::table('users')
                ->join('school_staff', 'users.dni', '=', 'school_staff.dni')
                ->join('staff_role', 'school_staff.dni', '=', 'staff_role.dni')
                ->join('roles', 'staff_role.rol_id', '=', 'roles.id')
                ->join('staff_school_courses', 'school_staff.dni', '=', 'staff_school_courses.dni')
                ->join('schools', 'staff_school_courses.escuela_id', '=', 'schools.id')
                ->join('security_admins','schools.id','security_admins.escuela_id')
                ->select('users.dni','users.nombre','users.apellido','school_staff.estado', 'roles.cargo','schools.nombre as escuela','security_admins.dni as admin')
                ->where('security_admins.dni',Auth::user()->dni)
                ->get();

        return view ('admins/personal', compact('staff'));
    }

    public function editStaff($dni)
    {
        $staff=SchoolStaff::find($dni);
        return view ('admins/editarPersonal', compact('staff'));
    }

    public function updateStaff($dni, Request $request)
    {
        $staff=SchoolStaff::find($dni);
        $staff->n_legajo=$request->input('legajo');
        $staff->save();

        return Redirect::to('admin/personal');
    }

    public function deleteStaff($dni)
    {
        SchoolStaff::destroy($dni);

        return Redirect::to('admin/personal');
    }



}
