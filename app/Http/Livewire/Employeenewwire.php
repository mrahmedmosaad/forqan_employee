<?php

namespace App\Http\Livewire;


use App\Models\datajob;
use App\Models\datamain;
use App\Models\dataqualify;
use App\Models\listall;
use App\Models\User;
use Error;
use Illuminate\Support\Facades\Auth;
// use Facade\FlareClient\Stacktrace\File;
// use Illuminate\Contracts\Session\Session;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
 use Livewire\WithFileUploads;
use PhpParser\Node\Stmt\TryCatch;

// use Brian2694\Toastr\Facades\Toastr;
// use Yoeunes\Toastr\Facades\Toastr as FacadesToastr;

class Employeenewwire extends Component
{
    use WithFileUploads;
//    use session;
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
  public $umberadd=0;
  public  $base = array();
  public  $basenew =   [];
     public  $USER_IDSARRAY_ORDER =   [];
     public  $USER_IDSARRAY_ORDER_orignal =   [];

  // public $first_name,$name,$email,$body;
//  ==================================================================

public $userscollectionmain;
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
// public $nationalid;
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
public $userscollection;
 public $schoolchoose;
public $chekme; 
public $NationalIDcheck;
public $searchresultscount;
public $counter=1;
public $counter2=1;
public $counter0=0;
public $counter55=0;
public $counterh;
public $sizeh;
public $saving=0;
public $savingnew=0;
public $done=0;
public $loading=0;
public $filepersonalimg;
public $blocked=0;
// public $specialization;
// public $specialization;
// public $specialization;
// public $specialization;
//  ==================================================================

public $name,	$email,$lang,$user_type		;
public $user_id,	$jobname,	$job_division,	$jobyear,	$school,$job_status ,$jobactive=1 ,$stage, $jobstartdate , $jobfinishdate,	$notesjob;
public $name_ar,	$name_en,	$gender,	$nationality,	$type, 	$birth_date,	$birth_place,	$stay_place,	$address_current,	$mobile1,	$mobile2,	$mobile_whats,	$job_start_date,	$address_home,	$passport_number,	$passport_name_arabic,	$passport_name_english,	$passport_job,	$passport_address,	$passport_start_date,	$passport_end_date,	$nationalid,	$stay_job,	$stay_job_owner,$job_owner,	$stay_start_date,	$stay_end_date,	$relative_phone,	$relative_mobile,	$relative_type,	$notesmain,	$notesmaindata;
public $dataqualify,$qualification,	$university,	$college,	$specialization,	$percentage,	$graduation_year,	$rate,$rating_me,	$notesqualify;
public $userid;
public $flashmessagestatus;
public $hideMeAfter5Seconds;
public $datajob;
public $dataqua ;
public $datajoball;
public $dataquaalls;
public $img1;
public $quaeditmood=0;
public $jobeditmood=0;
public $jobid;
public $quaid;
public $listallschoolyear;
public $isnewuser;
public $newusermood=0;
public $permission= 'user';
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
public $contactsmains;

public $highlightIndex;
public $type1=1;
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

public function deletuser($id)
{
    
  if (auth()->user()->id  === $id){
    $this->merr('can not delete current');
    return;
}
 }  

public function creatarray()
{
    foreach (datajob::where('school','الفرقان') as $key => $value) {
        
        array_push($this->USER_IDSARRAY_ORDER_orignal,$value->user_id);
    }
    // $this->USER_IDSARRAY_ORDER_orignal;

}

public function mount()
{

    // dd($this->USER_IDSARRAY_ORDER_orignal);
    $this->counterh=0     ;
    $this->sizeh = 1; //default value 
    $this->counter55  ;
    $this->reset1();
    // $this->type1;
    $this->listall=listall::all();
       $this->listallschoolyear= $this->listall->where("listdev_id","26")->first()->list_item_ar;
    if ($this->userid!="") {
        // dd($this->userid);
        # code...
        $this->datajob=datajob::where('user_id','=',$this->userid)->get()->toArray();
        $this->dataqualify=dataqualify::where('user_id','=',$this->userid)->get()->toArray();
        //  dd('datajob',$this->datajob);
        $this->datajoball=datajob::where('user_id','=',$this->userid)->get();
        $this->dataquaalls=dataqualify::where('user_id','=',$this->userid)->get();
        // $this->userscollection=datajob::all();
        // dd($this->userscollection);
        $this->userscollection=datajob:: get();
        // $this->userscollectionmain=datamain::all();
// dd($this->dataquaalls)  ;
//  dd($this->dataqualify,$this->datajoball);
      }
    //   dd($this->dataquaalls)  ;
    // dd($this->userid,$this->dataqualify,$this->datajoball);
    // $post->comments()->get()->toArray();
    // SELECT `id`, `user_id`, `job`, `job_division`, `year`, `school`, `stage`, `status`, `jobactive`, `jobstartdate`, `jobfinishdate`, `notes`,
    //  `created_at`, `updated_at` FROM `datajobs` WHERE 1
}
 
public function reset1()
{
    // dd('reset1',$this->userid);
    // $this->query = '';
    // $this->contacts = [];
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
    // $this->isnewuser=3;
    // dd($this->highlightIndex);
    $contact = $this->contacts[$this->highlightIndex] ?? null;
    // $contactsmain = $this->contactsmains[$this->highlightIndex] ?? null;
    
    if ($contact) {
        // dd($contact);  
        $this->editme($contact['user_id']);
        $this->msuc('found successfully') ;
    }else{
        $this->merr('not found   ') ;
    }
         
    // if ($contactsmain) {
    //     // dd($contact);  
    //     $this->editme($contactsmain['user_id']);
    //     $this->msuc('found successfully') ;
    // }else{
    //     $this->merr('not found   ') ;
    // }
          

        // toastr()->info('notification message?');
        // toastr()->success('Post added successfully :)','Success'); 
        //    session()->flash('message', "notfound "); 
    // dd('selectContact',$this->userid,$contact['id']);
    $this->reset1();
}


// public function userdataarray()
// {
//     $this->query="a";
 
 
//     $contacts = User::where('name', 'like', '%' . $this->query . '%')
//     ->orWhere('email', 'LIKE', '%'.$this->query.'%')        ->get()
//     ->toArray();
//     $contacts2 = datamain::where('name_en', 'like', '%' . $this->query . '%')
//     ->orWhere('name_ar', 'LIKE', '%'.$this->query.'%')

//         ->get()
//         ->toArray();
// // dd($contacts,$contacts2 );
// $this->contacts = array_merge($contacts, $contacts2);
 
// // dd($this->contacts  );
// // dd($this->contacts[0]['name'] );
// dd($this->contacts[4]['name_ar'] );
        
        
// }

public function updatedQuery()
{
// $namesearch='name';
 
 
 
    // $contacts2 = datamain::where('name_en', 'like', '%' . $this->query . '%')
    // ->orWhere('name_ar', 'LIKE', '%'.$this->query.'%')

    //     ->get()
    //     ->toArray();
 

// if ($this->type1==5) {
    # code...
    // $this->msuc('type1==1');
    // $namesearch='nationalid';
    // $namesearch='mobile1';
    // $namesearch='mobile_whats';
    // $namesearch='passport_number';
    // $namesearch='email';
    // $namesearch='name';
    // $namesearch='name_ar';
    // $namesearch='name_en';
    // $namesearch='email';

    $this->contacts = datamain::where('nationalid', 'like', '%' . $this->query . '%')
    ->orWhere('nationalid', 'LIKE', '%'.$this->query.'%')
    ->orWhere('mobile1', 'LIKE', '%'.$this->query.'%')
    ->orWhere('mobile_whats', 'LIKE', '%'.$this->query.'%')
    ->orWhere('passport_number', 'LIKE', '%'.$this->query.'%')
  
    ->orWhere('name_ar', 'LIKE', '%'.$this->query.'%')
    ->orWhere('name_en', 'LIKE', '%'.$this->query.'%')

        ->get()
        ->toArray();
        // return;
//   dd($this->contacts  );

// } 
// if ($this->type1==2) {
//     # code...
//     $this->msuc('type1==2');
    
// } 



//     $this->contacts = User::where($namesearch, 'like', '%' . $this->query . '%')
//         ->get()
//         ->toArray();
// }

// ===============================================
// ===============================================

// public function emailvalid()
// {
//     $data = $this->validate([
//         'email' => 'required|email|unique:users',

//     ]);

  }

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















public function chooseschoolfun()
{
    // $this->basenew=[0];
    $this->dataquaalls=dataqualify::where('user_id','=',$this->userid)->get();
    $this->userscollection=datajob:: get();
    // $this->userscollectionmain=datamain:: where('user_id', 39)->first()->name_ar ;
    $this->userscollectionmain=datamain:: get();
    // $this->userscollectionmain=datamain:: where('user_id', $item->user_id)->get() ;
    // dd($this->userscollectionmain);
 }  

 public function increament(){
    $this->counterh+=1;
    // $this->counterh=$this->counterh+$this->counterh ;
    // dd($this->counterh);
}
public function changeorder($counterh,$user_id)
{
    $this->increament();
    // $this->counterh += $this->sizeh;
    // dd($counterh ,$user_id);
//  =====================
// $a1=array("a"=>"red","b"=>"green");
// $a2=array("a"=>"orange","burgundy");
// print_r(array_replace($a1,$a2));
// ==============================


// $this->umberadd=$this->umberadd+1;
// dd($this-> counter0,$this->umberadd,$oldorder);
$replacements = array($this->counterh => $user_id );
// $replacements = array($this->counterh => $user_id );
//  dd($replacements);
// $this->basenew = array_replace( $this->basenew, $replacements);
$this->USER_IDSARRAY_ORDER = array_replace( $this->USER_IDSARRAY_ORDER, $replacements);

}



public function upim()
{
   #region uploadimg
//    dd($id);
    if ($this->img1=="") {
        $this->merr('choose file first'); 
        return;
    }

   $this->validate([
  'img1' => 'required|image|max:3024',
  ]);
try   {
// $this->img1->store('images');
// $this->img1->storePubliclyAs('public/images', '2.png' );
$this->img1->storePubliclyAs('/public/images/'.$this->userid.'/' , 'test.png' );  
    
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
#endregion
}











// img---------------------------------------------------------------------------------
#region
public function uploadimg($id)
{
   #region uploadimg
//    dd($id);
    if ($this->img1=="") {
        $this->merr('choose file first'); 
        return;
    }

   $this->validate([
  'img1' => 'required|image|max:3024',
  ]);
try   {
// $this->img1->store('images');
// $this->img1->storePubliclyAs('public/images', '2.png' );
$this->img1->storePubliclyAs('/public/images/'.$this->userid.'/' , $id.'.png' );  
    
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
#endregion
}
  


public function deleteimg($id)
{
     #region
    // $filename='images/1.png';
    // Storage::disk('public')->delete('/avatars/' . auth()->user()->avatar);
    // /public/images/'.$this->userid.'/job' , $id.'.png'
    $filename='/'.'images/'.$this->userid. '/'.$id.'.png';
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
      #endregion
}
 #endregion
 // img---------------------------------------------------------------------------------



 // job///////////////////////////////---------------------------------------------------------------------------------
#region 

public function viewalljobs($history,$userid)
{
     #region 
    //   dd($history,$userid);
    $this->msuc("done");
    // toastr()->success('Success Message');
  $this->datajob  =datajob::where('user_id','=',$userid)->where('jobactive',$history)->get();
    // dd($this->datajob);
 #endregion
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
     #region  
     $this->jobeditmood=1;
     $this->jobid=$id;
    $datajob = datajob::find($id);
    //   dd( $datajob);

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


    #endregion
}


public function cleartxtjob() 
{
    $this->jobeditmood=0;
    $this->jobname      ="";
    $this->job_division ="";
    $this->jobyear      ="";
    $this->school       ="";
    $this->stage        ="";
    $this->job_status   ="";
    $this->jobactive   ="1";
    $this->jobstartdate ="";
    $this->jobfinishdate="";
}



public function insrteditjob($id)
{
   #region 
    $this->validate([
        'jobyear' => 'required', // 1MB Max
        'job_division' => 'required', // 1MB Max
        'job_status' => 'required', // 1MB Max
        'jobactive' => 'required', // 1MB Max

    ]);  
    // dd($this->jobeditmood);
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
        

        
      
                        //  dd($alldata);
                        if ($this->jobeditmood == 0) {
                            // new
                            datajob::create($alldata);
                        } else {
                            // edit

                            datajob::where("id", $id)->update($alldata);
                        } 

                        $this->jobeditmood=0;
                        $this->cleartxtjob();

   
                    } catch (\Exception $e) {


        // $this->flashmessagestatus="danger";
        // dd($e);
        // session()->flash('message', "failed  wwww".$e->getMessage());
        // return $e->getMessage();
        // ; 
        $this->merr("error ".($this->jobeditmood==0)? "error creating":"error editing");
        return ;
       
    }
        
    // $this->flashmessagestatus="success";
    // session()->flash('message', "Done");

    $this->viewalljobs(1,$this->userid);
 #endregion
}

 

#endregion
 // job///////////////////---------------------------------------------------------------------------------




// ====================dataqualify =================================
#region 
public function viewallquas($userid)
{
    #region
    // dd($history,$userid);
   
    // toastr()->success('Success Message');
  $this->dataqua  =dataqualify::where('user_id','=',$userid)->get();
    // dd($this->datajob);
    $this->msuc("done");
 #endregion
}

public function deletequa($id)
{
     
    $dataqua = dataqualify::find($id);
    $dataqua->delete();
    $this->msuc('تم الحذف ');
    // $this->flashmessagestatus="success";
    // session()->flash('message', "deleted");
    $this->viewallquas($this->userid);
    
}
public function editqua($id)
{
     #region  
     $this->quaeditmood=1;
     $this->quaid=$id;
    $dataqua = dataqualify::find($id);
    //   dd( $datajob);

    $this->qualification                =$dataqua->qualification ; 
    $this->university                   =$dataqua->university ;
    $this->college                      =$dataqua->college ;
    $this->specialization               =$dataqua->specialization  ;
    $this->percentage                   =$dataqua->percentage  ;
    $this->graduation_year              =$dataqua->graduation_year ;
    $this->rating_me                    =$dataqua->rating_me ;
    $this->notesqualify                 =$dataqua->notesqualify;
 


 



// 'qualification'
// 'university'
// 'college'
// 'specialization '
// 'graduation_year'
// 'rating_me'
// 'notesqualify'

    // $datajob->delete();
    // $this->flashmessagestatus="success";
    // session()->flash('message', "deleted");
    // $this->viewalljobs($this->userid);


    #endregion
}


public function cleartxtqua() 
{
    $this->quaeditmood      =0;
    $this->qualification    ="";
    $this->university       ="";
    $this->college          ="";
    $this->specialization   ="";
    $this->percentage       ="";
    
    $this->graduation_year  ="";
    $this->rating_me        ="";
    $this->notesqualify     ="";
    
}



public function insrteditqua($id)
{
   #region 
    $this->validate([
        // 'quaeditmood'       => 'required', // 1MB Max
        'qualification'     => 'required', // 1MB Max
        'university'        => 'required', // 1MB Max
        'college'           => 'required', // 1MB Max

    ]);  
    // dd($this->jobeditmood);
    try {
                    //  $savedatajob=  
                        $alldata=[
                            'user_id'                => $this->userid ,
                            'qualification'          => $this->qualification   ,
                            'university'             => $this->university      ,
                            'college'                => $this->college         ,
                            'specialization'         => $this->specialization  ,
                            'percentage'             => $this->percentage  ,
                            'graduation_year'        => $this->graduation_year ,
                            'rating_me'              => $this->rating_me       ,
                            'notesqualify'           => $this->notesqualify    ,

                                                                ];
        

        
      
                        //  dd($alldata);
                        if ($this->quaeditmood == 0) {
                            // new
                            dataqualify::create($alldata);
                        } else {
                            // edit

                            dataqualify::where("id", $id)->update($alldata);
                        } 

                        $this->quaeditmood=0;
                        $this->cleartxtqua();

   
                    } catch (\Exception $e) {


        // $this->flashmessagestatus="danger";
        // dd($e);
        // session()->flash('message', "failed  wwww".$e->getMessage());
        // return $e->getMessage();
        // ; 
        $this->merr("error ".($this->quaeditmood==0)? "error creating".$e:"error editing".$e);
        return ;
       
    }
        
    // $this->flashmessagestatus="success";
    // session()->flash('message', "Done");

    $this->viewallquas($this->userid);
 #endregion
}




#endregion
// ====================dataqualify =================================










public function editsave($userid)
{





    // $this->validate([
    //     'email' => 'email',
    //     // 'mobile1' => 'required|min:10|max:10',
    //     // 'mobile2' => 'required',
    //     // 'nationalid' => 'required',
    //     // 'passport_number' => 'required',
    //     // 'password' => 'string|min:8|confirmed',

    //     // 'grade' => 'required|not_in:0'
    // ]);



    // return back()->with('mobile1', 'Post created successfully.');

    // return mes('mobile1', 'Post created successfully.');
    // Session::flash('mobile1', "Special message goes here");
    $onemobileisfound=0;
    if ($this->mobile1=="" && $this->mobile2=="" && $this->mobile_whats=="" ) {
        $this-> merr('you have to write one mobile number at least');
       
        return;
        }else{
            $onemobileisfound=1;
        }
// dd($onemobileisfound);
    if ($this->nationalid=="") {
        $this-> merr('nationalid is empty');
    return;
    }


    // dd($firstCharacter2 );


    if ($onemobileisfound==1  ) {
    if ($this->mobile1 !="" ) {
     $firstCharacter = $this->mobile1[0].$this->mobile1[1];
    $firstCharacter2 = strlen( $this->mobile1) ;

    // رقم الجوال السعودي =========================================
           if ($firstCharacter2!=10) {
        $this-> merr('رقم الجوال السعودي must be 10 numbers  ');
    return;
    // dd($firstCharacter!='05');
     } 
        if ($firstCharacter!='05') {
        $this-> merr('رقم الجوال السعودي must start with 05  ');
    return;
    // dd($firstCharacter!='05');
     }
            if ($firstCharacter!='05') {
        $this-> merr('رقم الجوال السعودي must start with 05  ');
    return;
    // dd($firstCharacter!='05');
     } 
    //  $this-> merr('you have to write one mobile number at least');
    //  return;
}}
    // رقم الجوال السعودي =========================================
    
       
    if ($this->nationalid=="") {
        $this-> merr('nationalid is empty');
    return;
    }

    if ($this->passport_number=="") {
        $this-> merr('passport_number is empty');
    
    return;
    }



    $users = User::all()->except($userid);
    $users2 = User::all();


$validemail=$users->where('email',$this->email)->count();
if ($validemail>0) {
    $this-> merr('Email is allready taken');
return;

}
$validpassport_number=$users->where('passport_number',$this->passport_number)->count();
if ($validpassport_number>0) {
    $this-> merr('passport_number is allready taken');
return;

}
$validnationalid=$users->where('nationalid',$this->nationalid)->count();
if ($validnationalid>0) {
    $this-> merr('nationalid is allready taken');
return;

}

// dd($validemail,$validnationalid,$validpassport_number);

    // $usersvv=$users->validate([
    //     'name' => 'required',
    //     'password' => 'required|min:5',
    //     'email' => 'required|email|unique:users'
    // ], [
    //     'name.required' => 'Name is required',
    //     'password.required' => 'Password is required'
    // ]);
    // $users = User::all()->except(Auth::id());
    // dd($usersvv,$users,$users2);
    // emailvalid();
    // $this->listall=listall::all();
// dd($this->address_current );

// 'mobile1'      
// 'mobile2'      
// 'mobile_whats' 
        // $this->validate([
        //     'email'  =>  'required|email|unique:users,email,'.$userid,
        //     'email' => 'required|email|unique:users', 
        //     'mobile1' => 'required|unique:datamains,mobile1,'.$userid,
        //     'passport_number' => 'required|unique:datamains,passport_number,'.$userid,
        //     // 'email' => 'required|unique:users', 
     
        // ]
        // , [
        //     'name.required' => 'Name is required',
        //     'password.required' => 'Password is required'
        // ] 
    // );


        $userall=[
       'name'=>$this->name ,
       'email'=>$this->email  ,
       'lang'=>$this->lang  ,
       'blocked'=>$this->blocked  ,
        ];
        
$datamainall=[
    'name_ar'              =>$this->name_ar ,
    'name_en'              =>$this->name_en ,
    'gender'               =>$this->gender ,
    'nationality'          =>$this->nationality ,
   'nationalid'            =>$this->nationalid ,
   'birth_date'            =>$this->birth_date ,
   'birth_place'           =>$this->birth_place ,
   'stay_place'            =>$this->stay_place ,
    'address_current'      =>$this->address_current ,
    'mobile1'              =>$this->mobile1 ,
    'mobile2'              =>$this->mobile2 ,
    'mobile_whats'         =>$this->mobile_whats ,
    'job_start_date'       =>$this->job_start_date ,
    'address_home'         =>$this->address_home ,
    'passport_number'      =>$this->passport_number ,
    'passport_name_arabic' =>$this->passport_name_arabic ,
    'passport_name_english'=>$this->passport_name_english ,
    'passport_job'         =>$this->passport_job ,
    'passport_address'     =>$this->passport_address ,
    'passport_start_date'  =>$this->passport_start_date ,
    'passport_end_date'    =>$this->passport_end_date ,
   //  'nationalid'          =>$this->nationalid ,
    'stay_job'             =>$this->stay_job ,
    'stay_job_owner'       =>$this->stay_job_owner ,
    'stay_start_date'      =>$this->stay_start_date ,
    'stay_end_date'        =>$this->stay_end_date ,
    'relative_phone'       =>$this->relative_phone ,
    'relative_mobile'      =>$this->relative_mobile ,
    'relative_type'        =>$this->relative_type ,
    'notesmain'            =>$this->notesmain ,
   
   ];
   
   

    try {
        $User =User::where('id',$userid)->update($userall);
        $datamain=  datamain::where('user_id', $userid) ->update($datamainall);
    } catch (\Exception $e) {
        $this->merr('User update error'.$e);
        return;

    };
    $this->msuc('User update success');


}
// editsave end====================================================================

// editme====resources\views\employeeadmin\employeenew\main\1.blade.php================================================================
    


public function editme($userid)
    {

        $this->userid= $userid;
        $this->emptyallfields();
        $this->jobyear=$this->listallschoolyear;
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
  $this->dataqualify=$Usera->dataqualify;
    //  dd( $dataqualify);
 $datamain=$Usera->datamain;
 $this->name=$Usera->name;
$this->email=$Usera->email;
$this->lang=$Usera->lang;
//    dd( $datajob);

// $this->qualification=$this->dataqualify->first()->qualification;
// $this->university=$this->dataqualify->first()->university;
// $this->college=$this->dataqualify->first()->college;
// $this->specialization=$this->dataqualify->first()->specialization;
// $this->percentage=$this->dataqualify->first()->percentage;
// $this->graduation_year=$this->dataqualify->first()->graduation_year;
// $this->rating_me=$this->dataqualify->first()->rating_me;
// $this->notesqualify=$this->dataqualify->first()->notesqualify;
 
// datamain=;
$this->name_ar=$datamain->name_ar;
$this->name_en=$datamain->name_en;
$this->gender=$datamain->gender;
$this->nationality=$datamain->nationality;
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
$this->nationalid=$datamain->nationalid;
$this->stay_job=$datamain->stay_job;
$this->stay_job_owner=$datamain->stay_job_owner;
$this->stay_start_date=$datamain->stay_start_date;
$this->stay_end_date=$datamain->stay_end_date;
$this->relative_phone=$datamain->relative_phone;
$this->relative_mobile=$datamain->relative_mobile;
$this->relative_type=$datamain->relative_type;
$this->notesmain=$datamain->notesmain;


} catch (\Exception $e) {
       $this->merr('failed data error'.$e) ;
    // return $e->getMessage();
    // $this->flashmessagestatus="danger";

    // session()->flash('message', "failed data error ");
    // dd('aaaaaa'.$e);
    return;
}
$this->msuc('data is here ') ;

$this->viewalljobs(1,$userid);
$this->viewallquas($userid);
 
}

// // ================new ====================

// public function creatme()

// // public function editsave($userid)
// {
// $this->newusermood=1;

 


//     $this->validate([
//         'email' => 'email',
//         // 'mobile1' => 'required|min:10|max:10',
//         // 'mobile2' => 'required',
//         // 'nationalid' => 'required',
//         // 'passport_number' => 'required',
//         // 'password' => 'string|min:8|confirmed',

//         // 'grade' => 'required|not_in:0'
//     ]);

//     // dd('ok') ;

//     // return back()->with('mobile1', 'Post created successfully.');

//     // return mes('mobile1', 'Post created successfully.');
//     // Session::flash('mobile1', "Special message goes here");
//     $onemobileisfound=0;
//     if ($this->mobile1=="" && $this->mobile2=="" && $this->mobile_whats=="" ) {
//         $this-> merr('you have to write one mobile number at least');
       
//         return;
//         }else{
//             $onemobileisfound=1;
//         }
// // dd($onemobileisfound);
//     if ($this->nationalid=="") {
//         $this-> merr('nationalid is empty');
//     return;
//     }


//     // dd($firstCharacter2 );


//     if ($onemobileisfound==1  ) {
//     if ($this->mobile1 !="" ) {
//      $firstCharacter = $this->mobile1[0].$this->mobile1[1];
//     $firstCharacter2 = strlen( $this->mobile1) ;

//     // رقم الجوال السعودي =========================================
//            if ($firstCharacter2!=10) {
//         $this-> merr('رقم الجوال السعودي must be 10 numbers  ');
//     return;
//     // dd($firstCharacter!='05');
//      } 
//         if ($firstCharacter!='05') {
//         $this-> merr('رقم الجوال السعودي must start with 05  ');
//     return;
//     // dd($firstCharacter!='05');
//      }
//             if ($firstCharacter!='05') {
//         $this-> merr('رقم الجوال السعودي must start with 05  ');
//     return;
//     // dd($firstCharacter!='05');
//      } 
//     //  $this-> merr('you have to write one mobile number at least');
//     //  return;
// }}
//     // رقم الجوال السعودي =========================================
    
       
//     if ($this->nationalid=="") {
//         $this-> merr('nationalid is empty');
//     return;
//     }

//     if ($this->passport_number=="") {
//         $this-> merr('passport_number is empty');
    
//     return;
//     }

//     dd('ok') ;

//     $users = User::all()->except($userid);
//     $users2 = User::all();


// $validemail=$users->where('email',$this->email)->count();
// if ($validemail>0) {
//     $this-> merr('Email is allready taken');
// return;

// }
// $validpassport_number=$users->where('passport_number',$this->passport_number)->count();
// if ($validpassport_number>0) {
//     $this-> merr('passport_number is allready taken');
// return;

// }
// $validnationalid=$users->where('nationalid',$this->nationalid)->count();
// if ($validnationalid>0) {
//     $this-> merr('nationalid is allready taken');
// return;

// }

// // dd($validemail,$validnationalid,$validpassport_number);

//     // $usersvv=$users->validate([
//     //     'name' => 'required',
//     //     'password' => 'required|min:5',
//     //     'email' => 'required|email|unique:users'
//     // ], [
//     //     'name.required' => 'Name is required',
//     //     'password.required' => 'Password is required'
//     // ]);
//     // $users = User::all()->except(Auth::id());
//     // dd($usersvv,$users,$users2);
//     // emailvalid();
//     // $this->listall=listall::all();
// // dd($this->address_current );

// // 'mobile1'      
// // 'mobile2'      
// // 'mobile_whats' 
//         // $this->validate([
//         //     'email'  =>  'required|email|unique:users,email,'.$userid,
//         //     'email' => 'required|email|unique:users', 
//         //     'mobile1' => 'required|unique:datamains,mobile1,'.$userid,
//         //     'passport_number' => 'required|unique:datamains,passport_number,'.$userid,
//         //     // 'email' => 'required|unique:users', 
     
//         // ]
//         // , [
//         //     'name.required' => 'Name is required',
//         //     'password.required' => 'Password is required'
//         // ] 
//     // );
//     try {

//         $userall=[
//        'name'=>$this->name ,
//        'email'=>$this->email  ,
//        'lang'=>$this->lang  ,
//        'blocked'=>$this->blocked  ,
//         ];


//     // findOrFail($userid)
//     $User =User::where('id',$userid)->update($userall);

// // dd($User);
    
//     } catch (\Exception $e) {


//         // $this->flashmessagestatus="danger";
//         // session()->flash('message', "failed ");
//         $this->merr('User update error'.$e);
// return;
//         // session()->flash('alert-danger', 'failed');
//     };

//     $this->msuc('User update success');
//     //    ==============================================







//     try {
//     //   $datamain=  datamain::where('user_id', $userid)->get()->dd();

// $datamainall=[
//  'name_ar'              =>$this->name_ar ,
//  'name_en'              =>$this->name_en ,
//  'gender'               =>$this->gender ,
//  'nationality'          =>$this->nationality ,
// 'nationalid'            =>$this->nationalid ,
// 'birth_date'            =>$this->birth_date ,
// 'birth_place'           =>$this->birth_place ,
// 'stay_place'            =>$this->stay_place ,
//  'address_current'      =>$this->address_current ,
//  'mobile1'              =>$this->mobile1 ,
//  'mobile2'              =>$this->mobile2 ,
//  'mobile_whats'         =>$this->mobile_whats ,
//  'job_start_date'       =>$this->job_start_date ,
//  'address_home'         =>$this->address_home ,
//  'passport_number'      =>$this->passport_number ,
//  'passport_name_arabic' =>$this->passport_name_arabic ,
//  'passport_name_english'=>$this->passport_name_english ,
//  'passport_job'         =>$this->passport_job ,
//  'passport_address'     =>$this->passport_address ,
//  'passport_start_date'  =>$this->passport_start_date ,
//  'passport_end_date'    =>$this->passport_end_date ,
//  'nationalid'          =>$this->nationalid ,
//  'stay_job'             =>$this->stay_job ,
//  'stay_job_owner'       =>$this->stay_job_owner ,
//  'stay_start_date'      =>$this->stay_start_date ,
//  'stay_end_date'        =>$this->stay_end_date ,
//  'relative_phone'       =>$this->relative_phone ,
//  'relative_mobile'      =>$this->relative_mobile ,
//  'relative_type'        =>$this->relative_type ,
//  'notesmain'            =>$this->notesmain ,

// ];



    
//       $datamain=  datamain::where('user_id', $userid) ->update($datamainall);

      
//     } catch (\Exception $e) {
//         $this->merr('datamain update error'.$e);

//         return;

      
//     };

//     $this->msuc('datamain update success');
// dd($userall,$datamainall);

// }
// // editsave end====================================================================


// // ================new ====================

    public function  eeeeeeeeeecreatnewuserok()
    {

        // $this->newusermood=1;
        $this->emptyallfields();

        $this->email            = rand ( 10000 , 99999 ).'user@school.com';
        $this->name             = rand ( 10000 , 99999 ).'user';
        $this->lang             = 'ar';
        $this->permission             = 'user';
        $this->jobyear          =$this->listallschoolyear;
        $this->password          =Hash::make('12345678');
 
        
      
try {
    //code...


        $userData = [
              'password'            => $this->password      ,
             'email'            => $this->email      ,
             'name'             => $this->name       ,
             'user_type'             => 'user'       ,

            
            ];
            $User  =User::create($userData);
            $mainData = [
                'user_id'            => $User->id      ,
               'name_en'             => $this->name       ,

              
              ];

      $datamain=  datamain::create($mainData);
    } catch (\Exception $th) {
        //throw $th;
        $this->merr('error creat new'.$th);
        return;
    }
    $this->userid=$User->id;
    // dd($this->userid);
    $this->msuc('done creat new'.$this->userid);
    $this->newrecord=1;
    $this->viewallquas($this->userid);
    $this->viewalljobs(1,$this->userid);
    

    }


//     public function addnewuser()
//     {
//         if ($this->query=="") {
//             $this->  merr('حقل البحث مطلوب');
//             return;
//         }
//             if (!is_numeric($this->query)) {
//             $this->  merr('حقل البحث ارقام');
//             return;
//         }     
//         if (strlen($this->query)!=10) {
//             $this->  merr('حقل البحث 10 ارقام');
//             return;
//         }    
//         $userData = [
//             'name' => $this->query, 
//             'email' => 'me@yahoo.com'
//                 ];
//         User::create($userData);
// dd($this->type1,$this->query);
//         dd('ok');
//         // $this->isnewuser=1;
//     }


    public function emptyallfields()
    {
        // ----    
        $this->name="";
        $this->email="";
        $this-> user_type =""; 
         $this-> name_ar =""; 
         $this-> name_en =""; 
        $this-> gender =""; 
        
        $this-> name_ar =""; 
        $this-> name_en =""; 
        $this-> gender =""; 
        $this-> nationality =""; 
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
        $this-> nationalid =""; 
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
        $this->jobactive="1";

        $this->jobstartdate="";
        $this->jobfinishdate="";


        $this->notesjob="";

    }

    public function imgvalidimgggg($val)
    {
        $this->validate([
            'photo'.$val => 'image|max:3024', // 1MB Max
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
            'photo1' => 'image|max:3024', // 1MB Max
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
    // 'nationalid' => 'required',
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
            'nationalid'           => $this-> nationalid , 
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
