<?php

namespace Escuela\Http\Controllers;

use Illuminate\Http\Request;
use Escuela\Models\Student;
use Escuela\Models\User;
use Escuela\Models\State;
use Escuela\Models\Municipality;
use Escuela\Models\Group;
use Escuela\Models\Course;
use Escuela\Models\Schedule;
use Carbon\Carbon;
use Yajra\Datatables\Datatables;
use Escuela\Http\Controllers\Api\ApiController;

class AdminController extends ApiController
{
    protected $day;
    public function __construct() 
    {
        $this->day='';
    }
    public function students()
    {
    	return view('admin.Alumnos.students');
    }

    public function anyData()
	{
	    //return Datatables::of(Student::query())->make(true);

	    $students = Student::select(['id', 
	    			'nombre', 'apellidoPaterno', 'apellidoMaterno',
	    			'fechaNacimiento', 'telefonoCasa', 
                    'telefonoMovil', 'correo']);

        return Datatables::of($students)
            ->addColumn('action', function ($student) {
                return '<a href="showStudent/'.$student->id.'" 
                class="btn btn-xs btn-primary editStudent btn-block">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 Editar</a>
                <a href="#" value="'.$student->id.'" 
                class="btn btn-xs btn-danger deleteStudent btn-block">
                <i class="fa fa-minus" aria-hidden="true"></i>
                 Eliminar</a>
                <a href="#" value="'.$student->id.'" 
                class="btn btn-xs btn-success viewStudent btn-block">
                <i class="fa fa-search" aria-hidden="true"></i>
                 Ver</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->make(true);
	}

	public function createStudent()
	{
        $states= State::all();
        $courses = Course::all();
        $groups = Group::all();
        $schedules = Schedule::all();
		return view('admin.Alumnos.createEditStudent', compact( 
            'states', 'courses', 'groups', 'schedules'));
	}

	public function storeStudent(Request $request)
	{
		$validator=$this->validate($request, [
            'nombre' 			=> 'required',
			'apellidoPaterno'	=> 'required',
			'apellidoMaterno'	=> 'required',
            'fechaNacimiento'   => 'required',
            'sexo'              => 'required',
            'calle'             => 'required',
            'numero'            => 'required',
            'municipality_id'   => 'required|numeric|min:1',
            'codigoPostal'      => 'required|numeric',
            'correo'            => 'required|email|unique:students',

        ]);
        $student = new Student;
        $student->nombre=$request->nombre;
        $student->apellidoPaterno=$request->appellidoPaterno;
        $student->apellidoMaterno=$request->appellidoMaterno;
        $student->fechaNacimiento=$request->fechaNacimiento;
        $student->sexo=$request->sexo;
        $student->calle=$request->calle;
        $student->numero=$request->numero;
        $student->municipality_id=$request->municipality_id;
        $student->codigoPostal=$request->codigoPostal;
        $student->correo=$request->correo;
		$student->save();
		return $this->Success('created_student');
	}

    public function showStudent(Student $student)
    {
        $states= State::all();
        $courses = Course::all();
        $groups = Group::all();
        $schedules = Schedule::all();

        return view('admin.Alumnos.createEditStudent', compact('student', 
            'states', 'courses', 'groups', 'schedules'));
    }

    public function updateStudent(Student $student,Request $request)
    {

        $validator=$this->validate($request, [
            'nombre'            => 'required',
            'apellidoPaterno'   => 'required',
            'apellidoMaterno'   => 'required',

        ]);
        $student->fill($request->all());
        $student->save();
        return $this->Success('updated_student', '/admin/alumnos', $request->all());

    }
    public function destroyStudent(Student $student)
    {
        $student->delete();
        return $this->Success('deleted_student');
    }

    public function uploadImageStudent(Request $request)
    {
        $file = $request->file('file');
        $date = Carbon::now();
        $this->day  = $date->day.$date->month.$date->year;
        $fileName = $this->day.$file->getClientOriginalName();
        //$file->move($path, $fileName);
        \Storage::disk('students')->put($fileName, \File::get($file));
    }   

    public function deleteImageStudent($fileName)
    {
        $date = Carbon::now();
        $this->day  = $date->day.$date->month.$date->year;
        $name=$this->day.$fileName;
        \Storage::disk('students')->delete($name);
        return $this->Success('El archivo '.$fileName.' se ha removido exitosamente', $fileName);
    }

    public function getMunicipalities(State $state)
    {
        $municipalities=Municipality::where('state_id', '=', $state->id)->get();
        return response()->json($municipalities);
    }
}
