<?php

namespace App\Http\Livewire;


use App\Models\datajob;
use App\Models\datamain;
use App\Models\dataqualify;
use App\Models\listall;
use App\Models\User;
// use Facade\FlareClient\Stacktrace\File;
use Illuminate\Contracts\Session\Session;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;
use Livewire\WithFileUploads;
// use Brian2694\Toastr\Facades\Toastr;
// use Yoeunes\Toastr\Facades\Toastr as FacadesToastr;

class Employeenewwire extends Component
{
    use WithFileUploads;
   
    // use Storage;
        public $newrecord;
        public $data1,$found, $selected_id;
        public $updateMode = false;   
        public $listall;
             public $photo1;   
             public $photo2;   
             public $photo3;   
             public $photo4;   
             public $photo5;   
             public $photo6;   
             public $photo7;   
             public $photo8;   
             public $photo9;   
  public $photosize;   
  public $imgname;
       public $photosrc;

    // public $first_name,$name,$email,$body;
//  ==================================================================

// public $user_id;
// public $name_ar;
// public $name_en;
// public $gender;
// public $nationality;
// public $type;
// public $nationalid;
// public $birth_date;
// public $birth_place;
// public $stay_place;
// public $address_current;
// public $mobile1;
// public $mobile2;
// public $mobile_whats;
// public $job_start_date;
// public $address_home;
// public $passport_number;
// public $passport_name_arabic;
// public $passport_name_english;
// public $passport_job;
// public $passport_address;
// public $passport_start_date;
// public $passport_end_date;
// public $stay_number;
// public $stay_job;
// public $stay_job_owner;
// public $stay_start_date;
// public $stay_end_date;
// public $relative_phone;
// public $relative_mobile;
// public $relative_type;
// public $notesmaindata;
// public $chekme; 
// public $notesqualify;
// public $notesgraduat;
// public $rating_me;
// public $graduation_year;
// public $job_owner;
// public $specialization;
// public $college ;
// public $university;
// public $qualification;
// public $stage;
// public $school;
// public $year;
// public $job;
public $chekme; 
public $NationalIDcheck;
public $searchresultscount;
public $counter=1;
public $saving=0;
public $savingnew=0;
public $done=0;
public $loading=0;
public $filepersonalimg;
// public $specialization;
// public $specialization;
// public $specialization;
// public $specialization;
// public $specialization;
//  ==================================================================

public $name,	$email,$lang,$acount_type		;
public $user_id,	$jobname,	$job_division,	$jobyear,	$school,$job_status ,$jobactive=1 ,$stage, $jobstartdate , $jobfinishdate,	$notesjob;
public $name_ar,	$name_en,	$gender,	$nationality,	$type,	$nationalid,	$birth_date,	$birth_place,	$stay_place,	$address_current,	$mobile1,	$mobile2,	$mobile_whats,	$job_start_date,	$address_home,	$passport_number,	$passport_name_arabic,	$passport_name_english,	$passport_job,	$passport_address,	$passport_start_date,	$passport_end_date,	$stay_number,	$stay_job,	$stay_job_owner,$job_owner,	$stay_start_date,	$stay_end_date,	$relative_phone,	$relative_mobile,	$relative_type,	$notesmain,	$notesmaindata;
public $qualification,	$university,	$college,	$specialization,	$percentage,	$graduation_year,	$rate,$rating_me,	$notesqualify;
public $userid;
public $flashmessagestatus;
public $hideMeAfter5Seconds;
public $datajob;
public $datajoball;
public $img1;
public $jobeditmood=0;
public $jobid;
// public $listall;
// public $jobeditmood;
// public $jobeditmood;
// public $jobeditmood;
// public $jobeditmood;
// $hideMeAfter5Seconds
// protected $rules = [
//     // 'name' => 'required|min:6',
//     'email' => 'required|email|unique:users',
// ];


// ===============================================
// ===============================================
public $query;
public $contacts;
public $highlightIndex;
public $type1=0;
public $test1=0;
public $jobidthis;
 

// ===============================================
// ===============================================

// public $ottPlatform = '';
 
//     public $webseries = [
//         'Wanda Vision',
//         'Money Heist',
//         'Lucifer',
//         'Stranger Things'
//     ];  

// ===============================================
// ===============================================
 
// ===============================================
// ===============================================





public function mount()
{
    $this->reset1();
    $this->type1;
    $this->listall=listall::all();
    if ($this->userid!="") {
        # code...
        $this->datajob=datajob::where('user_id','=',$this->userid)->get()->toArray();
         dd('datajob',$this->datajob);
        $this->datajoball=datajob::where('user_id','=',$this->userid)->get();
 dd($this->datajoball);
      }
   
    // $post->comments()->get()->toArray();
    // SELECT `id`, `user_id`, `job`, `job_division`, `year`, `school`, `stage`, `status`, `jobactive`, `jobstartdate`, `jobfinishdate`, `notes`,
    //  `created_at`, `updated_at` FROM `datajobs` WHERE 1
}

public function reset1()
{
    $this->query = '';
    $this->contacts = [];
    $this->highlightIndex = 0;
}

public function incrementHighlight()
{
    if ($this->highlightIndex === count($this->contacts) - 1) {
        $this->highlightIndex = 0;
        return;
    }
    $this->highlightIndex++;
}

public function decrementHighlight()
{
    if ($this->highlightIndex === 0) {
        $this->highlightIndex = count($this->contacts) - 1;
        return;
    }
    $this->highlightIndex--;
}

public function selectContact()
{
    $contact = $this->contacts[$this->highlightIndex] ?? null;
    if ($contact) {
        // $this->redirect(route('show-contact', $contact['id']));
        $this->editme($contact['id']);
    }else{
       $this->msuc('Post added successfully') ;

        // toastr()->info('notification message?');
        // toastr()->success('Post added successfully :)','Success'); 
        //    session()->flash('message', "notfound "); 
    }

}

public function updatedQuery()
{
    $this->contacts = User::where('name', 'like', '%' . $this->query . '%')
        ->get()
        ->toArray();
}

// ===============================================
// ===============================================

// public function emailvalid()
// {
//     $data = $this->validate([
//         'email' => 'required|email|unique:users',

//     ]);

// }

// mount====================================================================
// public function mount()
// {
//     // emailvalid();
//     $this->listall=listall::all();
// }
// mount====================================================================

// editsave=========resources\views\employeeadmin\employeenew\main\2.blade.php===========================================================
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

public function meinf($txt)
{
    $this->alert('info', $txt, [
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

public function mwor($txt)
{
    $this->alert('warning', $txt, [
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


public function msg()
{
    
    $this->msuc("done");
 
//   $this->datajob  =datajob::where('user_id','=',$userid)->get();
    // dd($this->datajob);

}



 

public function viewalljobs($history,$userid)
{
    $this->msuc("done");
    // toastr()->success('Success Message');
  $this->datajob  =datajob::where('user_id','=',$userid)->where('jobactive',$history)->get();
    // dd($this->datajob);

}




public function uploadimg($id)
{
    if ($this->img1=="") {
        $this->merr('choose file first'); 
        return;
    }
try  
  {$this->validate([
'img1' => 'required|image|max:1024',
]);
// $this->img1->store('images');
// $this->img1->storePubliclyAs('public/images', '2.png' );
$this->img1->storePubliclyAs('/public/images/'.$this->userid.'/' , 'job'.$id.'.png' );  
    
// dd('/public/images/'.$this->userid.'/' , 'job'.$id.'.png');
} catch (\Exception $e) {
  
    $this->merr('err upload'.$e);
    //  dd($e);
    return;
}

$this->msuc('done upload');
 $this->img1="";

// dd($this->img1);
// $this->img1->store('images' ,'public',  'avatar.jpg');
// $this->img1->store('images' ,'public','2.png');
}

public function deleteimg($id)
{
    // $filename='images/1.png';
    // Storage::disk('public')->delete('/avatars/' . auth()->user()->avatar);
    // /public/images/'.$this->userid.'/job' , $id.'.png'
    $filename='/'.'images/'.$this->userid. '/job'.$id.'.png';
    // $filename='/'.'images/'.$this->userid. '/'.$id.'.png';
    if(Storage::disk('public')->exists($filename)){
        Storage::disk('public')->delete($filename);
        /*
            Delete Multiple File like this way
            Storage::delete(['upload/test.png', 'upload/test2.png']);
        */
        // $this->msuc('deleted');
    }else{
        // $this->merr("File does not exists.");

        // dd($filename,'File does not exists.');
    }
}
public function deletejob($id)
{
     
    $datajob = datajob::find($id);
    $datajob->delete();
    $this->flashmessagestatus="success";
    session()->flash('message', "deleted");
    $this->viewalljobs(1,$this->userid);
}
public function editjob($id)
{
     $this->jobeditmood=1;
     $this->jobid=$id;
    $datajob = datajob::find($id);
    // dd( $datajob);

    $this->jobname          =$datajob->job          ; 
    $this->job_division =$datajob->job_division ;
    $this->jobyear      =$datajob->jobyear      ;
    $this->school       =$datajob->school       ;
    $this->stage        =$datajob->stage        ;
    $this->job_status   =$datajob->job_status   ;
    $this->jobactive   =$datajob->jobactive   ;
    
    $this->jobstartdate =$datajob->jobstartdate ;
    $this->jobfinishdate=$datajob->jobfinishdate;


    $this->notesjob=$datajob->notesjob;

    // $datajob->delete();
    // $this->flashmessagestatus="success";
    // session()->flash('message', "deleted");
    // $this->viewalljobs($this->userid);
}
public function jobcleartxt() 
{
    $this->jobeditmood=0;
    $this->jobname      ="";
    $this->job_division ="";
    $this->jobyear      ="";
    $this->school       ="";
    $this->stage        ="";
    $this->job_status   ="";
    $this->jobactive   ="";
    $this->jobstartdate ="";
    $this->jobfinishdate="";
}
public function insrteditjob($id)
{

    $this->validate([
        'jobyear' => 'required', // 1MB Max
        'job_division' => 'required', // 1MB Max
        'job_status' => 'required', // 1MB Max
        'jobactive' => 'required', // 1MB Max

    ]);  
    
    try {
        //  $savedatajob=  
       $alldata=[
        "user_id"   => $this->userid ,
        "jobyear"   => $this->jobyear ,
        "job"   => $this->jobname ,
        "job_division"   => $this->job_division ,
        "school"   => $this->school ,
        "stage"   => $this->stage ,
        "job_status"   => $this->job_status ,
        "jobactive"   => $this->jobactive ,
        "jobstartdate"   => $this->jobstartdate ,
        "jobfinishdate"   => $this->jobfinishdate ,
        "notesjob"   => $this->notesjob ,
        
        

        
       ];
    //    dd($alldata);
       if ($this->jobeditmood==0) {
        // new
         datajob::create($alldata);
    } else {
        // edit

         datajob::where("id",$id )->update($alldata);
    }
   
$this->jobeditmood=0;
$this->jobcleartxt();


    } catch (\Exception $e) {
        // $this->flashmessagestatus="danger";

        // session()->flash('message', "failed  wwww".$e->getMessage());
        // return $e->getMessage();
        ; 
        $this->merr("error ".($this->jobeditmood==0)? "error creating":"error editing");
       
        
        return ;
    }
    // $this->flashmessagestatus="success";
    // session()->flash('message', "Done");

    $this->viewalljobs(1,$this->userid);

}
public function editsave($userid)
{
    // emailvalid();
    // $this->listall=listall::all();

    try {
        
  User::findOrFail($userid)->update([
       'name'=>$this->name ,
       'email'=>$this->email  
    ]);

    


        $this->flashmessagestatus="success";
session()->flash('message', "Done uuuuuuu ");
    // session()->flash('alert-success', 'Done ok');
    } catch (\Exception $e) {


        $this->flashmessagestatus="danger";
        session()->flash('message', "failed ");

        // session()->flash('alert-danger', 'failed');
    };


    //    ==============================================







    try {
    //   $datamain=  datamain::where('user_id', $userid)->get()->dd();

      $datamain=  datamain::where('user_id', $userid) ->update([
        // 'name'=>$this->name ,
        'name_ar'=>$this->name_ar ,
 'name_en'=>$this->name_en ,
 'gender'=>$this->gender ,
 'nationality'=>$this->nationality ,
 'type'=>$this->type ,
 'nationalid'=>$this->nationalid ,
 'birth_date'=>$this->birth_date ,
 'birth_place'=>$this->birth_place ,
 'stay_place'=>$this->stay_place ,
 'address_current'=>$this->address_current ,
 'mobile1'=>$this->mobile1 ,
 'mobile2'=>$this->mobile2 ,
 'mobile_whats'=>$this->mobile_whats ,
 'job_start_date'=>$this->job_start_date ,
 'address_home'=>$this->address_home ,
 'passport_number'=>$this->passport_number ,
 'passport_name_arabic'=>$this->passport_name_arabic ,
 'passport_name_english'=>$this->passport_name_english ,
 'passport_job'=>$this->passport_job ,
 'passport_address'=>$this->passport_address ,
 'passport_start_date'=>$this->passport_start_date ,
 'passport_end_date'=>$this->passport_end_date ,
 'stay_number'=>$this->stay_number ,
 'stay_job'=>$this->stay_job ,
 'stay_job_owner'=>$this->stay_job_owner ,
 'stay_start_date'=>$this->stay_start_date ,
 'stay_end_date'=>$this->stay_end_date ,
 'relative_phone'=>$this->relative_phone ,
 'relative_mobile'=>$this->relative_mobile ,
 'relative_type'=>$this->relative_type ,
 'notesmain'=>$this->notesmain ,
  
     ]);
 
 



        $this->flashmessagestatus="success";
session()->flash('message', "Done 222 ");
    // session()->flash('alert-success', 'Done ok');
    } catch (\Exception $e) {
dd($e);

        $this->flashmessagestatus="danger";
        session()->flash('message', "failed 222 ".report($e));

        // session()->flash('alert-danger', 'failed');
    };


    
        //    ==============================================


//     $this->flashmessagestatus="success";
// session()->flash('message', "Done uuuuuuu ");
// session()->flash('alert-danger', 'danger');
// session()->flash('alert-warning', 'warning');
// session()->flash('alert-success', 'success');
// session()->flash('alert-info', 'info');

// $this->flashmessagestatus="danger";
// session()->flash('message', "waiting ");

}
// editsave end====================================================================

// editme====resources\views\employeeadmin\employeenew\main\1.blade.php================================================================
    public function editme($userid)
    {
        // toastr()->success('Success Message');
        $this->userid= $userid;
        $this->emptyallfields();

        // $this->flashmessagestatus="";
        // session()->flash('message', "");

        // emptyallfields();
        $this->newrecord=1;
        // $Usera = User::find($userid)->name;
        // $datamain = User::find($userid)->datamain->nationalid;

        // dd($Usera,$datamain);
        // try {
                      
        //   } catch (\Exception $e) {
          
        //       return $e->getMessage();
        //   }
// dd($userid);

        try {
                      

$Usera = User::find($userid);
// $Usera = User::find($userid)->with('datajob')->with('dataqualify')->with('datamain')->get();
  $this->datajob=$Usera->datajob;
  $dataqualify=$Usera->dataqualify;
 $datamain=$Usera->datamain;
//    dd( $datajob);
// dd($userid, $Usera, $Usera->datamain, $Usera->dataqualify, $Usera->datajob);
// dd($datajob->first()->job);
// $datamain->

//   dd($userid,$Usera);
//  Session::flash('error', $Usera->name,$datamain->nationalid);
// session()->flash('message', "$Usera->name,". 
//  $datamain->nationalid );
//  (!$Usera->datamain== null)? $datamain->nationalid :"");
 
// if(!$Usera->datamain== null){
// session()->flash('message', "$Usera->name,"
//   .  $datamain->nationalid
//  );
    
// }else{
//     session()->flash('message', "$Usera->name," );
// }

// $this->user_id=$Usera->id;
$this->name=$Usera->name;
// dd($this->name);
$this->email=$Usera->email;
$this->lang=$Usera->lang;
// datajob=;
// $this->job=$datajob->first()->job;
// $this->job_division=$datajob->first()->job_division;
// $this->year=$datajob->first()->year;
// $this->school=$datajob->first()->school;
// $this->stage=$datajob->first()->stage;
// $this->notesjob=$datajob->first()->notesjob;
// dataqualify=;
$this->qualification=$dataqualify->first()->qualification;
$this->university=$dataqualify->first()->university;
$this->college=$dataqualify->first()->college;
$this->specialization=$dataqualify->first()->specialization;
$this->percentage=$dataqualify->first()->percentage;
$this->graduation_year=$dataqualify->first()->graduation_year;
$this->rate=$dataqualify->first()->rate;
$this->notesqualify=$dataqualify->first()->notesqualify;
 
// datamain=;
$this->name_ar=$datamain->name_ar;
$this->name_en=$datamain->name_en;
// dd($this->name_en,$datamain->name_en);
$this->gender=$datamain->gender;
$this->nationality=$datamain->nationality;
//   dd($this->nationality,$datamain->nationality);
$this->type=$datamain->type;
$this->nationalid=$datamain->nationalid;
$this->birth_date=$datamain->birth_date;
$this->birth_place=$datamain->birth_place;
$this->stay_place=$datamain->stay_place;
$this->address_current=$datamain->address_current;
$this->mobile1=$datamain->mobile1;
$this->mobile2=$datamain->mobile2;
$this->mobile_whats=$datamain->mobile_whats;
$this->job_start_date=$datamain->job_start_date;
$this->address_home=$datamain->address_home;
$this->passport_number=$datamain->passport_number;
$this->passport_name_arabic=$datamain->passport_name_arabic;
$this->passport_name_english=$datamain->passport_name_english;
$this->passport_job=$datamain->passport_job;
$this->passport_address=$datamain->passport_address;
$this->passport_start_date=$datamain->passport_start_date;
$this->passport_end_date=$datamain->passport_end_date;
$this->stay_number=$datamain->stay_number;
$this->stay_job=$datamain->stay_job;
$this->stay_job_owner=$datamain->stay_job_owner;
$this->stay_start_date=$datamain->stay_start_date;
$this->stay_end_date=$datamain->stay_end_date;
$this->relative_phone=$datamain->relative_phone;
$this->relative_mobile=$datamain->relative_mobile;
$this->relative_type=$datamain->relative_type;
$this->notesmain=$datamain->notesmain;


} catch (\Exception $e) {
       $this->merr('failed data error') ;
    // return $e->getMessage();
    // $this->flashmessagestatus="danger";

    // session()->flash('message', "failed data error ");
    // dd('aaaaaa'.$e);
    return;
}
$this->msuc('data is here ') ;

// $this->flashmessagestatus="success";
// toastr()->success('We do have the Kapua suite available.', 'Turtle Bay Resort', ['timeOut' => 1000]);
// toastr()->success('Have fun storming the castle!', 'Miracle Max Says');

// session()->flash('message', "data is here 33 ");
// name	email	email_verified_at	password	lang	active
// job	job_division	year	school	stage	notes
// name_ar	name_en	gender	nationality	type	nationalid	birth_date	birth_place	stay_place	address_current	mobile1	mobile2	mobile_whats	job_start_date	address_home	passport_number	passport_name_arabic	passport_name_english	passport_job	passport_address	passport_start_date	passport_end_date	stay_number	stay_job	stay_job_owner	stay_start_date	stay_end_date	relative_phone	relative_mobile	relative_type	notes
// qualification	university	college	specialization	percentage	graduation_year	rate	notes

$this->viewalljobs(1,$userid);
// $datamain->nationalid:"" );
    
$this->hideMeAfter5Seconds="showMeAfter5Seconds";

// dd($Usera->name,$datamain->nationalid);
}


    public function emptyallfields()
    {
        // ----    
        $this->name="";
        $this->email="";
         $this-> name_ar =""; 
         $this-> name_en =""; 
        $this-> gender =""; 
        
        $this-> name_ar =""; 
        $this-> name_en =""; 
        $this-> gender =""; 
        $this-> nationality =""; 
        $this-> type =""; 
        $this-> nationalid =""; 
        $this-> birth_date =""; 
        $this-> birth_place =""; 
        $this-> stay_place =""; 
        $this-> address_current =""; 
        $this-> mobile1 =""; 
        $this-> mobile2 =""; 
        $this-> mobile_whats =""; 
        $this-> job_start_date =""; 
        $this-> address_home =""; 
        $this-> passport_number =""; 
        $this-> passport_name_arabic =""; 
        $this-> passport_name_english =""; 
        $this-> passport_job =""; 
        $this-> passport_address =""; 
        $this-> passport_start_date =""; 
        $this-> passport_end_date =""; 
        $this-> stay_number =""; 
        $this-> stay_job =""; 
        $this-> stay_job_owner =""; 
        $this-> stay_start_date =""; 
        $this-> stay_end_date =""; 
        $this-> relative_phone =""; 
        $this-> relative_mobile =""; 
        $this-> relative_type =""; 
        $this-> notesmaindata =""; 
        
        $this->jobname="";
        $this->job_division="";
        $this->jobyear="";
        $this->school="";
        $this->stage="";
        $this->job_status="";
        $this->jobactive="";

        $this->jobstartdate="";
        $this->jobfinishdate="";


        $this->notesjob="";

    }

    public function imgvalidimgggg($val)
    {
        $this->validate([
            'photo'.$val => 'image|max:1024', // 1MB Max
        ]);      
}
    public function imgvalid($val)
    {

        // $this->photosize=     Storage::size($this->photo1->temporaryUrl());
        $fullName=$this->photo1->getClientOriginalName();
        $this->imgname=explode('.',$fullName)[0];

// if ($this->imgvalidimgggg($val)) {
     
// } else {
//     $photo1=""; 
// }

    }

    
    public function saveimg($userid)
    {
        //  $this->photosrc='public/storage/app/photos/'.$userid.'/img1.png';
         $this->photosrc= public_path("/photos/".$userid.'/img1.png');
        
        $this->validate([
            'photo1' => 'image|max:1024', // 1MB Max
        ]);
 
        // $this->photo->store('photos');
        $this->photo1->storeAs('photos', $userid.'/img1.png');
            //   $this->photo1->storePubliclyAs('photos'.$userid.'/', 'img1.png', 's3');
    //    $this->photosrc=storage_path('app/photos/'.$userid.'/img1.png');
      
       
  
    }


    public function createnew()
    {
        $this->loadingme(1);
         #region
                // $this->validate();
                // $data = $this->validate([
                //     'name' => 'required',
                // 'name' => 'required|min:6',
                // 'email' => 'required|email',
    //             // 'body' => 'required',
    //             // 'first_name' => 'required|string|min:3|max:255',
    //             'user_id' => 'required',
    // 'name_ar' => 'required',
    // 'name_en' => 'required',
    // 'gender' => 'required',
    // 'nationality' => 'required',
    // 'type' => 'required',
    // 'nationalid' => 'required',
    // 'birth_date' => 'required',
    // 'birth_place' => 'required',
    // 'stay_place' => 'required',
    // 'address_current' => 'required',
    // 'mobile1' => 'required',
    // 'mobile2' => 'required',
    // 'mobile_whats' => 'required',
    // 'job_start_date' => 'required',
    // 'address_home' => 'required',
    // 'passport_number' => 'required',
    // 'passport_name_arabic' => 'required',
    // 'passport_name_english' => 'required',
    // 'passport_job' => 'required',
    // 'passport_address' => 'required',
    // 'passport_start_date' => 'required',
    // 'passport_end_date' => 'required',
    // 'stay_number' => 'required',
    // 'stay_job' => 'required',
    // 'stay_job_owner' => 'required',
    // 'stay_start_date' => 'required',
    // 'stay_end_date' => 'required',
    // 'relative_phone' => 'required',
    // 'relative_mobile' => 'required',
    // 'relative_type' => 'required',
    // 'notesmaindata' => 'required',
    // // 'chekme=1 ' => 'required',
    // 'notesqualify' => 'required',
    // 'notesgraduat' => 'required',

    //         ], 
    //         [
    //             'name.required' => 'Name is requiredtttttttttttttt',
    //             // 'password.required' => 'Password is required'
            // ]);
    
            // User::create($data);
    // $this->found=User::where('name'  ,'LIKE', '%'.$this->name .'%')->get();
    
            // return redirect()->to('/form');

#endregion
           $data = $this->validate([
        'email' => 'required|email|unique:users',
        // 'filepersonalimg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);


    // $this->filepersonalimg->store('files', 'public');
 #region   sssssssss

 $this->savingme(1);
         try {

$user = User::create([
            'name'                  => $this->name,
            'email'                 => $this->email,
            'password'              => Hash::make('12345678'),
        ]);
    
        $datamain = datamain::create([
            'user_id'               => $user['id'],
            'name_ar'               => $this-> name_ar , 
            'name_en'               => $this-> name_en , 
            'gender'                => $this-> gender , 
            'nationality'           => $this-> nationality , 
            'type'                  => $this-> type , 
            'nationalid'            => $this-> nationalid , 
            'birth_date'            => $this-> birth_date , 
            'birth_place'           => $this-> birth_place , 
            'stay_place'            => $this-> stay_place , 
            'address_current'       => $this-> address_current , 
            'mobile1'               => $this-> mobile1 , 
            'mobile2'               => $this-> mobile2 , 
            'mobile_whats'          => $this-> mobile_whats , 
            'job_start_date'        => $this-> job_start_date , 
            'address_home'          => $this-> address_home , 
            'passport_number'       => $this-> passport_number , 
            'passport_name_arabic'  => $this-> passport_name_arabic , 
            'passport_name_english' => $this-> passport_name_english , 
            'passport_job'          => $this-> passport_job , 
            'passport_address'      => $this-> passport_address , 
            'passport_start_date'   => $this-> passport_start_date , 
            'passport_end_date'     => $this-> passport_end_date , 
            'stay_number'           => $this-> stay_number , 
            'stay_job'              => $this-> stay_job , 
            'stay_job_owner'        => $this-> stay_job_owner , 
            'stay_start_date'       => $this-> stay_start_date , 
            'stay_end_date'         => $this-> stay_end_date , 
            'relative_phone'        => $this-> relative_phone , 
            'relative_mobile'       => $this-> relative_mobile , 
            'relative_type'         => $this-> relative_type , 
            'notesmaindata'         => $this-> notesmaindata , 

            // 'notesqualify' => $this-> notesqualify , 
            // 'notesgraduat' => $this-> notesgraduat , 
            
        ]);
        $datajob = datajob::create([
            'user_id' => $user['id'],

            'job'                   => $this->jobname,
            'job_division'          => $this->job_division,
            'year'                  => $this->jobyear,
            'school'                => $this->school,
            'stage'                 => $this->stage,
            'notes'                 => $this->notesjob,
          ]);  
            
            
            
            
            
            

$dataqualify = dataqualify::create([
    'user_id' => $user['id'],
            'qualification' => $this->qualification,
            'university' => $this->university,
            'college' => $this->college,
            'specialization' => $this->specialization,
            'percentage' => $this->percentage,
            'graduation_year' => $this->graduation_year,
            'rate' => $this->rate,
            'notes' => $this->notesqualify,
//             'notes' => $this->notes,
]);
                      
} catch (\Exception $e) {
          
    return $e->getMessage();
}
// $datajob = datajob::create([
//     'user_id' => $user['id'],
//             'job' => $this->job,
//             'job_division' => $this->job_division,
//             'year' => $this->jobyear,
//             'school' => $this->school,
//             'stage' => $this->stage,
//             'graduation_year' => $this->graduation_year,
//             'rate' => $this->rate,
//             'notes' => $this->notesqualify,
// //             'notes' => $this->notes,
// ]);



// $user = new User;
// $user->name = "Test Name";
// $user->email = "test@mnp.com";
// $user->password = Hash::make("12345678");
// $user->save();

// $mobile = new Mobile;
// $mobile->mobile = '123456789';
// $user->mobile()->save($mobile);





// SELECT `id`, `user_id`, `qualification`, `university`, `college`, `specialization`, `percentage`, 
// `graduation_year`, `rate`, `notes`,
//  `created_at`, `updated_at` FROM `dataqualifies` WHERE 1

// SELECT `id`, `user_id`, `job`, `job_division`, `year`, `school`, `stage`, `notes`,
//  `created_at`, `updated_at` FROM `datajobs` WHERE 1
$this->doneme(1);

    }
// ===============new record======================================================













    public function ckeckifnotfound()
    {
       $this->msuc('Success') ;

        // toastr()->success('Success Message');
$this->loadingme(1);
        $this->chekme=0;
        $data = $this->validate([
            'NationalIDcheck' => 'required',
            // 'email' => 'required|email',
            // 'body' => 'required',
            // 'first_name' => 'required|string|min:3|max:255',
        ]);
        // Contact::create([
        //     'name' => $this->name,
        //     'email' => $this->email
        // ]);
$this->found=User::where('name'  ,'LIKE', '%'.$this->NationalIDcheck .'%')->with('datamain')->get();

// dd($this->found);
if ($this->found->count()>0) {
    $this->searchresultscount=$this->found->count();
    $this->chekme=1;
} else {
    $this->chekme=0;
$this->searchresultscount=0;
}

// $this->found=User::all()->where('name','like','%'.$this->name.'%');

          $this->newrecord=1;
// $this->loading=0;
$this->loadingme(0);

    }
    

// ======================================================================================
public function doneme($val)
{
    $this->saving=0;
    $this->savingnew=0;
    $this->done=$val; 
    $this->loading=0; 
}
public function loadingme($val)
{
    $this->saving=0;
    $this->savingnew=0;
    $this->done=0; 
    $this->loading=$val; 
    
}
public function savingme($val)
{
    $this->saving=$val;
    $this->savingnew=0;
    $this->loading=0; 
    $this->done=0;   
}
public function savingnewme($val)
{
    $this->saving=0;
    $this->savingnew=$val;
    $this->loading=0; 
    $this->done=0;   
}
// ======================================================================================


    public function show()
    {
       
        if($this->newrecord==0){
            $this->newrecord=1;
            
            }else{
                    $this->newrecord=0;      
        }
    }












    public function render()
    {
        return view('livewire.employeenewwire');
    }
}
