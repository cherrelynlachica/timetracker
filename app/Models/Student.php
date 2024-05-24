<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Student;

class StudentController extends Controller
{
    public function show($id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        $attendances = $student->attendances;

        return response()->json($attendances);
    }
}
