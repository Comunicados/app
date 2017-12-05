<?php

namespace Comunicados\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Comunicados\SchoolStaff;
use Comunicados\Role;
use Comunicados\User;
use Comunicados\StaffRole;
use Comunicados\RolePermission;
use Comunicados\Permission;
use Session;
use Redirect;
use Auth;
use DB;
use Carbon\Carbon;

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
                ->select('school_staff.n_legajo','users.dni','users.nombre','users.apellido','school_staff.estado', 'roles.cargo','schools.nombre as escuela','security_admins.dni as admin')
                ->where('security_admins.dni',Auth::user()->dni)
                ->get();

        return view ('admins/personal', compact('staff'));
    }

    public function editStaff($dni)
    {
        $staff=SchoolStaff::find($dni);
        return view ('admins/editarPersonal',compact('staff'));
    }

    public function updateStaff($dni, Request $request)
    {
        $staff=SchoolStaff::find($dni);
        $staff->n_legajo=$request->input('legajo');
        $staff->save();

        return Redirect::to('admin/personal');
    }

    public function changeStateStaff($dni)
    {
        $staff=SchoolStaff::find($dni);
        if($staff->estado==1){
          $staff->estado=0;
          $staff->deleted_at=Carbon::now();
        }
        else{
          $staff->estado=1;
          $staff->updated_at=Carbon::now();
        }
        $staff->save();
        return Redirect::to('admin/personal');
    }

    public function createPersonal(){
      $role= Role::all();
      return view('admins/crearPersonal',compact('role'));
    }

    public function createPersonalForm(Request $request){

       $rol= $request->input("rol");
       $user=new User;
       $user->dni=$request->input("dni");
       $user->nombre=$request->input("nombre");
       $user->apellido=$request->input("apellido");
       $user->sexo=$request->input("sexo");
       $user->email=$request->input("email");
       $user->password=Hash::make($request->input("password"));
       $user->fecha_nacimiento=$request->input("nacimiento");
       $user->telefono=$request->input("tel");
       $user->celular=$request->input("movil");
       $user->direccion=$request->input("direccion");
       $user->localidad=$request->input("localidad");
       $user->provincia=$request->input("provincia");
       $user->foto_url=$request->input("foto_url");
       $user->tipo="personal";
       $user->save();

       $dni=$user->dni;

       $schoolStaff= new SchoolStaff;
       $schoolStaff->dni=$dni;
       $schoolStaff->n_legajo=11111;
       $schoolStaff->fecha_alta=Carbon::now();
       $schoolStaff->estado=1;
       $schoolStaff->save();

       $staff = new StaffRole;
       $staff->dni=$dni;
       $staff->rol_id=$rol;
       $staff->save

       $s= new StaffSchoolCourse;
       $s->dni=$dni;
       $

       return redirect('admin/personal');

    }

    public function setearPermisos(){
      $roles=Role::all();
      $permisos=Permission::all();
      return view ('admins/rolesypermisos',['roles'=>$roles,'permisos'=>$permisos]);
    }

    public function actualizarPermisos(Request $request){
      $rol= $request->input("rol"); //llega el id del rol al que le asignamos permisos
      $permisos=Permission::all(); //tomo la lista d elos permisos
      /*
      foreach ($permisos as $permiso){
        echo $permiso->nombre . $request->input($permiso->id);
        echo "<br>";
      }
      echo $rol;
      /////////////////*/
      foreach ($permisos as $permiso){
       if($request->input($permiso->id)==1)
        {
          $rolePermission = new RolePermission;
          $rolePermission->id_rol=$rol;
          $rolePermission->id_permiso=$permiso->id;
          $rolePermission->admin_asigna=Auth::user()->dni;
          $rolePermission->consultar=1;
          $rolePermission->agregar=1;
          $rolePermission->editar=1;
          $rolePermission->eliminar=1;
          $rolePermission->save();
        }
      }
      return redirect('admin/rolesypermisos');
      }



      public function consultarPermisos(){
        $roles=Role::all();
        $permisos=Permission::all();
        $rp = RolePermission::where('admin_asigna',Auth::user()->dni)->get();
      //  $rp = DB::table('Role_permission')->where('admin_asigna',Auth::user()->dni)->get();
        //$rol=2;
        //$permiso=1;
      //  echo var_dump($rp[0]['id_rol']);
      //  echo var_dump($rp[0]['id_permiso']);
      //  echo var_dump($rp[0]['consultar']);
        return view ('admins/consultarPermisos',['roles'=>$roles,'permisos'=>$permisos, 'rp'=>$rp]);
      }
      public function showAlumnos()
      {

          $alumnos =DB::table('users')
                  ->join('school_staff', 'users.dni', '=', 'school_staff.dni')
                  ->join('staff_role', 'school_staff.dni', '=', 'staff_role.dni')
                  ->join('roles', 'staff_role.rol_id', '=', 'roles.id')
                  ->join('staff_school_courses', 'school_staff.dni', '=', 'staff_school_courses.dni')
                  ->join('schools', 'staff_school_courses.escuela_id', '=', 'schools.id')
                  ->join('security_admins','schools.id','security_admins.escuela_id')
                  ->select('school_staff.n_legajo','users.dni','users.nombre','users.apellido','school_staff.estado', 'roles.cargo','schools.nombre as escuela','security_admins.dni as admin')
                  ->where('security_admins.dni',Auth::user()->dni)
                  ->get();

          return view ('admins/personal', compact('staff'));
      }

}//fin
