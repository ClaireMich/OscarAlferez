<?php

namespace Escuela\Http\Controllers;

use Illuminate\Http\Request;
use Escuela\Models\Student;
use Escuela\Models\User;
use Yajra\Datatables\Datatables;
use Escuela\Http\Controllers\Api\ApiController;

class AdminController extends ApiController
{
    public function students()
    {
    	return view('admin.Alumnos.students');
    }

    public function anyData()
	{
	    //return Datatables::of(Student::query())->make(true);

	    $students = Student::select(['id', 
	    			'nombre', 'apellidoPaterno', 'apellidoMaterno',
	    			'direccion']);

        return Datatables::of($students)
            ->addColumn('action', function ($student) {
                return '<a href="showStudent/'.$student->id.'" 
                class="btn btn-xs btn-primary editStudent btn-block">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 Editar</a>
                <a href="#" value="'.$student->id.'" 
                class="btn btn-xs btn-danger deleteStudent btn-block">
                <i class="fa fa-minus" aria-hidden="true"></i>
                 Eliminar</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->make(true);
	}

	public function createStudent()
	{
		return view('admin.Alumnos.createEditStudent');
	}

	public function storeStudent(Request $request)
	{
		$validator=$this->validate($request, [
            'nombre' 			=> 'required',
			'apellidoPaterno'	=> 'required',
			'apellidoMaterno'	=> 'required',
			'direccion'			=> 'required',

        ]);

		Student::create($request->all());
		return $this->Success('created_student');
	}

    public function showStudent(Student $student)
    {
        return view('admin.Alumnos.createEditStudent', compact('student'));
    }

    public function updateStudent(Student $student,Request $request)
    {
        $validator=$this->validate($request, [
            'nombre'            => 'required',
            'apellidoPaterno'   => 'required',
            'apellidoMaterno'   => 'required',
            'direccion'         => 'required',

        ]);
        $student->fill($request->all());
        $student->save();
        return $this->Success('updated_student', '/admin/alumnos');

    }
    public function destroyStudent(Student $student)
    {
        $student->delete();
        return $this->Success('deleted_student');
    }

    public function uploadImageStudent(Request $request)
    {
        $file = $request->file('file');
        $path = public_path().'/images/Students/';
        $fileName = $file->getClientOriginalName();
        $file->move($path, $fileName);
    }
}
