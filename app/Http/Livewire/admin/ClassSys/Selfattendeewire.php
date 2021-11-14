<?php

namespace App\Http\Livewire\Admin\ClassSys;

use App\Models\sessionactive;
use App\Models\StudentAbsence;
use App\Models\StudentAbsencesReport;
use App\Models\StudentTb;
use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class Selfattendeewire extends Component
{

    public $studenttb;
    // public $cookiegrade;
    // public $cookiegradeclass;
    public $studentclassname;
    public $cookieall;
    public $StudentTb;
     public $studentname;
    public $canresetname;
    public $sessionactive;
    public $sessionactiveclassname;
    public $studentid;
    public $studentidcookie;
    public $savehide;
    public $can1;
    public $classname;
    // public $classname;
    // public $classname;
    // public $classname;
    // public $savehide;
   public function mount()
    {
        try {
            //code...

                // $this->sessionactive = sessionactive::where('id',1)->get();
        // $this->sessionactiveclassname= $this->sessionactive->first()->classname;
//    $classname= Cookie::get('classname');
        if (Cookie::get('classname')) {
            # code...

        $this->classname== Cookie::get('classname');
        // $this->cookiegrade = Cookie::get('grade');
        // $this->cookiegradeclass = Cookie::get('gradeclass');
        $this->studentid = Cookie::get('id');
        $this->studentidcookie = Cookie::get('id');

        
        }

        $this->StudentAbsencesReport=StudentAbsencesReport::where('date','2021-11-07')
        ->where('period_code','13')->first();
        $this->can1=$this->StudentAbsencesReport->can1;
        $this->classname=$this->StudentAbsencesReport->class_name;
// dd($this->StudentAbsencesReport);

        if ($this->studentid) {

                  $this->StudentTb = StudentTb::where('id',$this->studentid)->get();  
                   $this->studentname = $this->StudentTb->first()->name;
        } else {
            $this->StudentTb = StudentTb::where('class_name',$this->classname)->get();  

        }
        


        // dd($this->classname,$this->StudentTb);
        // $this->studentname = Cookie::get('name');
 


    } catch (\Exception $e) {
        //throw $th;
        dd($e);
    }
        
    } 
    
     public function canreg()
    {
        $this->StudentAbsencesReport=StudentAbsencesReport::where('date','2021-11-07')
        ->where('period_code','13')->first();
        $this->can1=$this->StudentAbsencesReport->can1;
    }
       public function gradeclassviewnames()
    {
        $this->studentclassname      = Cookie::get('classname');
        // $this->cookiegradeclass = Cookie::get('gradeclass');
        
        $this->StudentTb      =         StudentTb::where('class_name',$this->studentclassname)->get();
         $this->cookieall =request()->cookie();
        //  dd($this->cookiegrade,$this->cookiegradeclass,$this->StudentTb );
}  
      public function gradeclassview()
    {
        $this->classname      = Cookie::get('classname');
        // $this->cookiegradeclass = Cookie::get('gradeclass');
         
         $this->cookieall =request()->cookie();
        //  dd($this->cookiegrade,$this->cookiegradeclass,$this->cookieall);
} 
     public function gradeclassnameset()
    {
        
        try {
        Cookie::queue('id', $this->studentid, 10000);
        $this->studentname      =         StudentTb::where('id',$this->studentid)->first()->name;
        Cookie::queue('classname', $this->studentname, 10000);
// dd($this->studentname);
        // $cookie = Cookie::make('grade', $grade, 120);
    } catch (\Exception $e) {
        //throw $th;
         dd($e);
        return;
    }
    $this->savehide=1;
     
} 
   public function cancel1()
    {
           $this->savehide=0;
} 
        
    public function classname($classname)
    {
        $this->studentclassname =  Cookie::queue('classname', $classname, 10000);
        // $cookie = Cookie::make('grade', $grade, 120);
         
     
}
public function registerattendance()
{
    // $this->studentclassname =  Cookie::queue('classname', $this->classname, 10000);
    // $cookie = Cookie::make('grade', $grade, 120);absence_report_id
    // $this->classname;
    $this->StudentTb = StudentTb::where('id',$this->studentid)->get();  
    // SELECT `id`, `quarter`, `week`, `date`, `day_number`, `period`, `period_code`, `period_double`, `period_order`, `subject`, `title`, `unit`, `lesson`, `class_name`, `teacher_name`, `teacher_id`, `Positives`, `challenges`, `programs`, `activeforselfattend`, `activeforquestion`, `notes`, `created_at`, `updated_at` FROM `student_absences_reports` WHERE 1
    // SELECT `id`, `classname`, `subject`, `can1`, `can2`, `notes1`, `notes2`, `notes3`, `notes4`, `notes5`, `date` FROM `sessionactives` WHERE 1
    // SELECT `id`, `classname`, `subject`, `can1`, `can2`, `notes1`, `notes2`, `notes3`, `notes4`, `notes5`, `date` FROM `sessionactives` WHERE 1
    // SELECT `id`, `quarter`, `week`, `date`, `day_number`, `period`, `period_code`, `period_double`, `period_order`, `subject`, `title`, `unit`, `lesson`, `class_name`, `teacher_name`, `teacher_id`, `Positives`, `challenges`, `programs`, `activeforselfattend`, `activeforquestion`, `notes`,
    //  `can1`, `can2`, `can3`, `can4`, `notes1`, `created_at`, `updated_at` FROM `student_absences_reports` WHERE 1
    $StudentAbsencesReportid=StudentAbsencesReport::where('date','2021-11-07')
                        ->where('period_code','13')->first()->id;
                        // dd( $StudentAbsencesReportid,$this->StudentTb,$this->classname,$this->studentid);
                        // SELECT `id`, `absence_report_id`, `student_id`, `student_idN`, `class_name`, `subject`, `present`, `behavior`, `participation`, `classwork`, `homework`, `quiz`, `project`, `delay_minutes`, `active`, `mark`, `mark_extra`, `level`, `level_percent`, `notes`, `lastaccesstime`, `cansolve`, `canregattend`, `created_at`, `updated_at` FROM `student_absences` WHERE 1
                 $StudentAbsencereg=       StudentAbsence::where('absence_report_id',$StudentAbsencesReportid)
                                        ->where('student_id',$this->studentid)->first()->present ;

try {
    $StudentAbsencereg1=       StudentAbsence::where('absence_report_id',$StudentAbsencesReportid)
    ->where('student_id',$this->studentid)->update(
        [
            'present'=>1
        ]
    ) ;
} catch (\Exception $e) {
  
    dd('err');
    return;
}
$this->msuc('You are attendee');
// dd('done');



                                        // dd($StudentAbsencereg);
                    }

                    
public function msuc($txt)
{
    $this->alert('success', $txt, [
        'position' =>  'top', 
        'timer' =>  '2000', 
        'toast' =>  true, 
        'text' =>  '', 
        'confirmButtonText' =>  'Ok', 
        'cancelButtonText' =>  'ca', 
        'showCancelButton' =>  false, 
        'showConfirmButton' =>  false, 
  ]);
}

// public function gradeclass($gradeclass)
// {
//     $this->cookiegradeclass = Cookie::queue('gradeclass', $gradeclass, 12000);
     
 
// }

public function gradeclassdel()
{
    // $this->cookiegradeclass = Cookie::queue('gradeclass', $gradeclass, 12000);
    $cookie =  Cookie::forget('grade');
    $cookie = Cookie::forget('gradeclass');
     $this->cookiegrade      ="";
     $this->cookiegradeclass ="";
           StudentTb::where('id',$this->studentid)->update(
        [
            'canresetname'=> 0,
        ]
     );

    // Cookie::forget('grade');
    // Cookie::forget('gradeclass');
    // $cookie = Cookie::forget('cookieName');

}


    public function render()
    {
        return view('livewire.admin.class-sys.selfattendeewire');
    }
}
