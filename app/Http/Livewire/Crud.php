<?php

namespace App\Http\Livewire;


use App\Models\Student;
use Livewire\Component;

class Crud extends Component
{

    public $students, $name, $email, $mobile, $student_id;
    public $isModalOpen = 0;
    
    public function render()
    {
        $this->students = Student::all();
        return view('livewire.crud');
    }
}
