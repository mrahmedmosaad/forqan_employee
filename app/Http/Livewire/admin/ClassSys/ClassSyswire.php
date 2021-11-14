<?php

namespace App\Http\Livewire\Admin\ClassSys;

use toastr;
use Livewire\Component;
use App\Models\Schedule;
use App\Models\StudentTb;
use App\Models\TimePeriod;
use App\Models\QuarterDate;
use Livewire\WithFileUploads;
use App\Models\StudentAbsence;
use App\Models\Classteachersubject;
use App\Models\StudentAbsencesReport;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ClassSyswire extends Component
{
    use WithFileUploads;
    // _______________________________________________________
    // Time_Period
    public $periodtimes, $start, $end, $period_lenght, $period_code;
    public $schedules, $classteachersubjects, $teacher_name = "Ahmed Mosaad";
    public $date, $day, $week, $quarter, $day_today, $today_only = 1;
    public $idarrays;
    public $test;
    public $showtimetable = 1;
    public $datereport;
    public $StudentTb, $class_name, $present;
    public $StudentAbsencesReport, $StudentAbsence, $StudentAbsence_all, $StudentAbsence_allall,$student_tb_all, $absence_report_id;

    // public $starnumber ;
    public $name;
    public $participationtotal ;
    public $StudentAbsencetotal       ;      
    public $StudentAbsencetotal_Absent;  
    public $StudentAbsencetotal_present;  
    public $textreadonly;
    public $my_class_list;
    public $my_grade_list;
    // public $showzoomlink;
    public $studentnamename;
    public $caneditstudentname;
    public $allSchedules;
     public $iperiodnow;
       public   $persentleft;
       public   $photo;
       public   $imgscr;
       public $student_id;
       public $reloadimgnow;
       public $txtsearch;
       public $txtsearchresult;
        public $StudentAbsenceall;
        public $subject='Math';
  public $QuarterDatesall;
    public $currentweek;
 public $daynumber;

    public  $thisperiodstart;
    public  $thisperiodend  ;
  public  $startwiththisletter  ;
public  $yy  ;
public  $thisperiodorder  ;
public  $studentsidarray=array();
public  $studentsidarrayrand  ;
public  $studentsidarraycurrent ;






     public function daychange($daynumset)
        {
            // dd($daynumset);
$this->daynumber=$daynumset;
        }




     public function ww()
        {
if ($this->yy==1) {
    $this->yy=0;

} else {
   $this->yy=1;
}

        }

     public function changeweek($weeknum)
        {


            $this->dispatchBrowserEvent('alert', 
            ['type' => 'success',  'message' => 'User Created Successfully!']);
            $this->dispatchBrowserEvent('alert', 
            ['type' => 'info',  'message' => 'Going Well!']);

            $this->dispatchBrowserEvent('alert', 
            ['type' => 'error',  'message' => 'Something is Wrong!']);

            // toastr()->info('Are you the 6 fingered man?');
            // toastr()->info('Are you the 6 fingered man?');
            // toastr()->error('An error has occurred please try again later.');
$this->week=$weeknum;
        }
     public function txtsearchfun()
        {

 if ($this->txtsearch=="") {
     # code...
     $this->txtsearchresult="";
     return;
 }
  if ($this->txtsearch==" ") {
     # code...
     $this->txtsearchresult="";
     return;
 }
 
if ($this->startwiththisletter==1) {
    # code...

        $this->txtsearchresult=StudentTb::where('name','like',$this->txtsearch.'%' )->
        orWhere ('full_name_en','like',$this->txtsearch.'%' )->
        orWhere('full_name_ar','like',$this->txtsearch.'%' )->
        orWhere('class_name','=',$this->txtsearch )->
        orWhere('idN','=',$this->txtsearch )->
        get();
} else {
    # code...
               $this->txtsearchresult=StudentTb::where('name','like','%' .$this->txtsearch.'%' )->
           orWhere ('full_name_en','like','%' .$this->txtsearch.'%' )->
           orWhere('full_name_ar','like','%' .$this->txtsearch.'%' )->
           orWhere('class_name','=',$this->txtsearch )->
           get();
}

           $this->StudentAbsenceall=StudentAbsence::all();
        //    $this->txtsearchresult=StudentTb::where('name','like','%' .$this->txtsearch.'%' )->get();
//   dd($this->txtsearch,$this->txtsearchresult);
        }

    //             $StudentAbsencesReport=StudentAbsencesReport::all()->where('week','=',$this->week)->where('quarter','=',$this->quarter)->where('class_name','=',$class_name)->where('period_code','=',$period_code)->first() ;
    //     if ($StudentAbsencesReport) {
    //        # code...
    //        $this->datereport=$StudentAbsencesReport->first()->date;
    //     } else {
    //        # code...
    //                   $this->datereport="not found";

    //     }
       
       
        
    //     // dd( $class_name,$period_code,        $this->datereport,$StudentAbsencesReport);

    // }
       public function reloadimg()
    { 
        if (!empty($this->reloadimgnow)) {
            $this->reloadimgnow='';
        }else{
             $this->reloadimgnow=".".strtotime(now());
        }
       
        // $this->reloadimgnow='';
    }
    public function delimgavatar($idst)
    {


Storage::delete('/storage/photos/'.$idst.'.jpg');
    }
    public function saveme($formData)
    {
        // dd($formData['student_id']);
        // dd($this->student_id);
        // student_id/storage
        // Storage::delete('/photos/'.$formData['student_id'].'/avatar.png');
    // dd($formData['student_id']);
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);
        // $this->photo->storeAs('photos/'.$this->student_id.'/', 'avatar.png');
        // $this->photo->store('photos');
        // $this->photo->store( '/photos');
        $this->photo->storePubliclyAs('photos/', $formData['student_idN'].'.png');
        // $this->imgscr = $this->photo->temporaryUrl();
        //   $this->imgscr = "";
        //   $this->imgscr = '/storage/photos/'.$this->student_id. '/avatar.png';
        //  $this->imgscr ={{ asset('/storage/img/wvzonline_logo.png') }};
    }
     



 public function periodnownumber()
{  
// dd('ok');
    $timenow=date("Y-m-d H:i:s");
     foreach ($this->periodtimes as $item){



         if ($timenow>date("Y-m-d ".$item->start) && $timenow<date("Y-m-d ".$item->end ))
         
         $this->iperiodnow=$item->period;
         
         
         
        }
}
public function timdiffinminuts()
{

    // Any procedural way should be avoided. Use OOP method for date time difference:

        // $datetime1 = new DateTime('2016-11-30 03:55:06');//start time
        // $datetime2 = new DateTime('2016-11-30 11:55:06');//end time
        // $interval = $datetime1->diff($datetime2);
        // echo $interval->format('%Y years %m months %d days %H hours %i minutes %s seconds');//00 years 0 months 0 days 08 hours 0 minutes 0 seconds
}
    
public function timeline()
{
      $periodtimes=TimePeriod::orderBy('start', 'asc')->get(); 
//    $periodtimes=date("Y-m-d 15:30:00");//desc
    // $periodtimes=TimePeriod::all()->where('period','break');
    // dd(   $periodtimes);
// dd($periodtimes,date("Y-m-d H:i:s"));
  $periods_array = array(1,2,3,'break',4,5,6,7,8);
$timenow=date("Y-m-d 17:30:00");
foreach ($periodtimes as $key => $value) {
    # code...
    // $value->start;
    if ($timenow<date("Y-m-d ".$value->start)) {
        # code...
        dd("now:".$value->period."____".$value->start);
    } else {
        # code...
        
    }
    
}
dd('not found'.date("Y-m-d ".$value->start));

if ($periodtimes>date("Y-m-d H:i:s")) {
   
    dd('>');
} else {
    dd('< not');
    # code...
}

    // $this->studentnamename="ccccccc";


}
    
public function studentname()
{
    $this->studentnamename="ccccccc";


}
// public function showlink()
// {
// //    ($this->textreadonly=="readonly") ? "" : "readonly" ;
//     // $retVal =  $this->textreadonly="readonly";
//     if ($this->showzoomlink==0) {
//         # code...
//         $this->showzoomlink=1;
//     } else {
//         # code...
//         $this->showzoomlink=0;
//     }
    
// }
    
public function edittext()
{
//    ($this->textreadonly=="readonly") ? "" : "readonly" ;
    // $retVal =  $this->textreadonly="readonly";
    if ($this->textreadonly=="readonly") {
        # code...
        $this->textreadonly="";
    } else {
        # code...
        $this->textreadonly="readonly";
    }
    
}
    
//__________setstar_______________________________________________
public function setstar( $istar,$student_id)
{

if ($istar==0) {
    $this->merr('you have no stars');
    // $this->dispatchBrowserEvent('alert', 
    // ['type' => 'error',  'message' => 'you have no stars']);
} else {
    # code...



    $this->msuc('you have '.$istar.' star');
    // $this->dispatchBrowserEvent('alert', 
    // ['type' => 'success',  'message' => 'you have '.$istar.' star']);
}
    $this->loading=1;
    //   dd($istar,$student_id);
//     if ($present==0) {
//         $this->starnumber=0 ;
//         StudentAbsence::where('student_id',$student_id)->where('absence_report_id',$this->absence_report_id)->update([
            
//             'participation'=> 0,
//             'updated_at'=> now()
//     ]);
// return;
//         }
    // $this->starnumber=$istar ;
    $mark_extra=$istar*5;
    StudentAbsence::where('student_id',$student_id)->where('absence_report_id',$this->absence_report_id)->update([
            
        'mark_extra'=> $mark_extra,
        'updated_at'=> now()
]);


$this->participationtotal= StudentAbsence::where('student_id',$student_id)->where('present','1')->sum('participation') ;
// $this->StudentAbsence_all=StudentAbsence::all()->where('absence_report_id','=',$this->absence_report_id);

$this->StudentAbsence_all      =StudentAbsence::where('absence_report_id',$this->absence_report_id)->orderBy('mark_extra', 'desc')->get(); 
// dd($this->StudentAbsence_all );
        // SELECT `id`, `idN`, `stage`, `grade`, `full_name_ar`, `full_name_en`, `name`, `class_name`,
        //  `notes`, `created_at`, `updated_at` FROM `student_tbs` WHERE 1
    
    $this->student_tb_all=StudentTb::all()->where('active',1);
    // $this->loading=0;
//     public  $studentsidarray  ;
// public  $studentsidarrayrand  ;
// public  $studentsidarraycurrent ;

// dd($this->starnumber);
} //_____end________setstar____________________________________________

public function merr($txt)
{
    $this->alert('error', $txt, [
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




    public function update_attend($student_id,$present)
    {
         
        if ($present==1) {
           $present=0;
            $participation=0;
            // $this->dispatchBrowserEvent('alert', 
            // ['type' => 'error',  'message' => 'Absent']);
            $this->merr('Absent' );
        } elseif ($present==0) {
             $present=1;
             $participation=20;
             $this->msuc('you are Attendee');
            //  $this->dispatchBrowserEvent('alert', 
            //  ['type' => 'success',  'message' => 'you are Attendee']);
        }
        // dd($present1,$present,$student_id);

          try{
            StudentAbsence::where('student_id',$student_id)->update([ 
               'present'		=> $present       , 
               'participation'		=> $participation       , 
              
               
               'updated_at'=> now()   
     
            ]);
         } catch(\Exception $e){
              Session::flash('error', $e->getMessage());
          }
          Session::flash('success', 'updated');
    
          $this->StudentAbsence_all=StudentAbsence::all()->where('absence_report_id','=',$this->absence_report_id);

        //   $this->present=StudentAbsence::where('student_id',$student_id)->first()->present;
        //   $this->StudentAbsence_all      =StudentAbsence::where('absence_report_id',$this->absence_report_id)->get(); 
        // _______________________________________________
        $this->StudentAbsence=StudentAbsence::all()->where('absence_report_id','=',$this->absence_report_id);
$this->StudentAbsencetotal=$this->StudentAbsence->count();
$this->StudentAbsencetotal_Absent=$this->StudentAbsence->where('present','=',0)->count();
$this->StudentAbsencetotal_present=$this->StudentAbsence->where('present','=',1)->count();

    
    
    }




 public function creat_period($class_name,$period_code,$perorder)
    {
           $this->thisperiodorder=$perorder;
   $daynum=str_split($period_code   , 1);
   $this->daynumber=$daynum[0];
//    dd($this->daynumber);
  $datethisday= QuarterDate::where('week',$this->week)
   ->where('day_number',$daynum[0])->first()->date;
    // dd($daynum[0],  $datethisday);
        $this->class_name=$class_name;
        // dd($this->class_name);
        $this->period_code=$period_code;
        $this->StudentTb=StudentTb::where('class_name','=',$class_name)->where('active',1)->orderBy('full_name_en', 'asc')->get();//'asc'
        //  dd($this->StudentTb);
        $this->StudentAbsencesReport      =StudentAbsencesReport::all()->where('week','=',$this->week)
        ->where('quarter','=',$this->quarter)
        ->where('period_code','=',$period_code)
        ->where('class_name','=',$class_name)->first();
        //  dd($this->StudentAbsencesReport);
// dd($period_code );
        if ($this->StudentAbsencesReport) {
        //    dd('found');
         $this->absence_report_id = $this->StudentAbsencesReport->id;
        } else {
            # code...
            //  dd('not found');
            try {
             $data = [
                // 'shopOwner'=>$request->get('date'),
                "quarter"           => $this->quarter,
                "teacher_name"      => $this->teacher_name,
                "subject"      => $this->subject,
                "week"              => $this->week,
                  "date"              => $datethisday,
                // "day_number"        => $day_number,
                "period_code"       => $period_code,
                "class_name"        => $this->class_name,
                // "subject"           => $this->subject,
                'created_at'        => now()
            ];
            $StudentAbsencesReport_new=  StudentAbsencesReport::create($data);
            $this->absence_report_id=$StudentAbsencesReport_new->id;

            $this->flashmessagestatus="success";
            session()->flash('message', "Done 222 ");
                // session()->flash('alert-success', 'Done ok');
                } catch (\Exception $e) {
            dd($e);
            
                    $this->flashmessagestatus="danger";
                    session()->flash('message', "failed 222 ".report($e));
            
                    // session()->flash('alert-danger', 'failed');
                };
            //   dd($StudentAbsencesReport_new);
        }

    $StudentAbsence=StudentAbsence::all()->where('absence_report_id','=',$this->absence_report_id);
    //   dd($StudentAbsence);
    $students_data  =StudentTb::all()->where('class_name','=',$class_name)->where('active',1);





    if ($StudentAbsence->count()>1) {

        } else {


        foreach ($students_data as $student){
         StudentAbsence::create([
                                                           'absence_report_id' => $this->absence_report_id,
                                                           'student_id'        => $student->id,
                                                           "class_name"      => $this->class_name,
                                                           "subject"      => $this->subject,
                                                           'created_at'        => now()
                                                       ]);     
                               }






                            }
        $StudentAbsence=StudentAbsence::all()->where('absence_report_id','=',$this->absence_report_id);
        $this->class_name=$class_name;
        //  dd($this->absence_report_id);

        $this->StudentTb=StudentTb::where('class_name','=',$class_name)->where('active',1)->orderBy('full_name_en', 'asc')->get();









        $this->StudentAbsence_all      =StudentAbsence::where('absence_report_id',$this->absence_report_id)->orderBy('mark_extra', 'desc')->get(); 
//  dd($this->StudentAbsence_all );
        // SELECT `id`, `idN`, `stage`, `grade`, `full_name_ar`, `full_name_en`, `name`, `class_name`,
        //  `notes`, `created_at`, `updated_at` FROM `student_tbs` WHERE 1
    
    $this->student_tb_all=StudentTb::all();



$studentsidarray1 = array();
    
foreach ($this->student_tb_all as    $value) {
    # code...
    // $value->id;
    array_push($studentsidarray1, $value->id);

}
$this->studentsidarray =$studentsidarray1;

// ____________________________________________________
$this->StudentAbsence=StudentAbsence::all()->where('absence_report_id','=',$this->absence_report_id);
$this->StudentAbsencetotal=$this->StudentAbsence->count();
$this->StudentAbsencetotal_Absent=$this->StudentAbsence->where('present','=',0)->count();
$this->StudentAbsencetotal_present=$this->StudentAbsence->where('present','=',1)->count();
$periodnumber=substr($period_code , -1, 1);
$this->thisperiodstart=TimePeriod::where('period',$periodnumber)->first()->start;
$this->thisperiodend  =TimePeriod::all()->where('period',$periodnumber)->first()->end;
// dd(
//     $this->thisperiodstart,
// $this->thisperiodend  ,
// $periodnumber
 


// );
    }//creat_period________________________________________________________________________________________________
     
    public function mystudentlist($class_name){
            $this->class_name=$class_name;
            $this->StudentTb=StudentTb::where('class_name','=',$class_name)->orderBy('full_name_en', 'asc')->get();
            //    dd($this->StudentTb);
           
        
        
        }

    

      public function autorefresh(){
        $this->StudentAbsence=StudentAbsence::all()->where('absence_report_id','=',$this->absence_report_id);
$this->StudentAbsencetotal=$this->StudentAbsence->count();
$this->StudentAbsencetotal_Absent=$this->StudentAbsence->where('present','=',0)->count();
$this->StudentAbsencetotal_present=$this->StudentAbsence->where('present','=',1)->count();
// $this->period=substr( $this->period_code, 0, 1) ;

// dd($this->period_code);
//   $string =$this->period_code;
//   $this->period=$string[0]; 
//   substr('abcdef', -1, 1);
  
  
  //   $this->test=rand(10,99);
      }
//    _________________mount_____________________________________________________
    public function mount(){
        $this->StudentAbsence_allall=StudentAbsence::all();
    // $this->txtsearch;
    //   $periodtimes=TimePeriod::orderBy('start', 'asc')->get(); 

    // $this->periodtimes=TimePeriod::all();
        $this->periodtimes=TimePeriod::orderBy('start', 'asc')->get(); 

    $this->classteachersubjects=Classteachersubject::all()->where('teacher_name',$this->teacher_name);
    $my_class_list=array();
    $my_grade_list=array();
    
    foreach ($this->classteachersubjects  as  $value) {
        // $value->class_name;
        array_push($my_class_list,$value->class_name);
        array_push($my_grade_list,substr($value->class_name,0,1) );
        
    }
     $this->my_grade_list=array_unique($my_grade_list);

        // dd( $my_grade_list);
    $this->my_class_list=$my_class_list;
    // dd( $this->my_class_list);

    $this->schedules=Schedule::whereIn('class_name',$my_class_list)->orderBy('period_code', 'asc')->get();
    $this->allSchedules=Schedule::all();
 
    // dd($this->schedules);
    $this->week=QuarterDate::all()->where('date',date('Y-m-d', strtotime(now())))->first()->week;
    $this->currentweek=QuarterDate::all()->where('date',date('Y-m-d', strtotime(now())))->first()->week;
    $this->quarter=QuarterDate::all()->where('date',date('Y-m-d', strtotime(now())))->first()->quarter;
    $this->QuarterDatesall= QuarterDate::where('week','<=',$this->week)->get();
   
    //   dd($this->quarter,$this->QuarterDatesall);
    // $this->day_today=1;
    $this->day_today=QuarterDate::all()->where('date',date('Y-m-d', strtotime(now())))->first()->day_number;
// dd($this->day_today);

    $this->StudentAbsencesReport      =StudentAbsencesReport::all()->where('week','=',$this->week)->where('quarter','=',$this->quarter)->where('teacher_name','=',$this->teacher_name);
    $this->StudentAbsence=StudentAbsence::all()->where('absence_report_id','=',$this->absence_report_id);
    $this->iperiodnow;
    
}
   
//    _________________mount_____________________________________________________
   
   
    public function render()
    {
        return view('livewire.admin.class-sys.class-syswire');
    }
}
