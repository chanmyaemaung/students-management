<?php

namespace App\Http\Controllers;

class StudentController extends Controller
{
    public function index(): \Inertia\Response
    {
        $students = \App\Http\Resources\StudentResource::collection(\App\Models\Student::paginate(10));

        return inertia('Students/Index', [
            'students' => $students,
        ]);
    }
}
