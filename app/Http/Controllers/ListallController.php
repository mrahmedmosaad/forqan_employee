<?php

namespace App\Http\Controllers;

use App\Models\listall;
use App\Models\listdev;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ListallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //  dd('index');
        return view('employeeadmin.listall.index');
        //employeeadmin\listall
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    public function create()
    {
        // dd('create');

        $listdev = listdev::all();
        $listall = listall::all()->where('listdev_id', 1);
        $array_data = [
            'new' => 1,
            'listall' => $listall,
            'listdev_id' => 1,
            'listdev' => $listdev

        ];
        //   dd($array_data);

        return view('employeeadmin.listall.create', compact('array_data'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 public function listdev_name_ar(Request $request)
    {
// dd( $request->get('listdev_edit_id'));

// "listdev_edit_id" => "17"
//       "listdev_edit" => "list:17"
        $data= listdev::where('id',$request->get('listdev_edit_id'))->update(['listname_ar'=>$request->input('listdev_edit')]);
        Session::flash('success', "updated Successfully");

        $listdev = listdev::all();
        $listall = listall::all()->where('listdev_id', 1);
        $array_data = [
            'new' => 1,
            'listall' => $listall,
            'listdev_id' => $request->get('listdev_edit_id'),
            'listdev' => $listdev

        ];
        //   dd($array_data);

        return view('employeeadmin.listall.create', compact('array_data'));
        //
// return redirect()->back();
 

    }

     
    public function store(Request $request)
    {
        
        //SELECT `id`, `listdev_id`, `list_item`, `list_item_ar`,
        // `notes`, `created_at` FROM `listalls` WHERE 1
        // dd('store');
        //   dd($request);

    if($request->input('list_item_ar')==null){
    
        $listdev_id=$request->input('listdev_id');
        $listall=listall ::all()->where('listdev_id',$listdev_id);
        $listdev_name_ar=listdev ::all()->where('id',$listdev_id)->first()->listname_ar;
// dd($listdev_name_ar);
    // $status = 'Successfully Done';
    $listdev=listdev::all();
    $array_data=[
        'new'=>1,
        'listall'=>$listall,
        'listdev_id'=>$listdev_id,
        'listdev'=>$listdev,
        'listdev_name_ar'=>$listdev_name_ar,
    
    ];



 
    return  view('employeeadmin.listall.create')->with( 'array_data',$array_data );

}



    
        $listall2=new Listall();
        $listall2->listdev_id=$request->input('listdev_id');
        $listall2->list_item_ar=$request->input('list_item_ar');
        $listall2->save();
    




        $listdev_id=$request->input('listdev_id');
        $listall=listall ::all()->where('listdev_id',$listdev_id);
    // $status = 'Successfully Done';
    $listdev=listdev::all();
    $array_data=[
        'new'=>1,
        'listall'=>$listall,
        'listdev_id'=>$listdev_id,
        'listdev'=>$listdev
    
    ];



        Session::flash('message', "item--".$request->input('list_item_ar')."- Added Successfully");
    // dd($listdev_id);

    

    return view('employeeadmin.listall.create')->with( 'array_data',$array_data );

    // return redirect()->back()->with( 
    //     'array_data',$array_data );
   



        // return redirect()->back()->with($listdev_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Listall  $listall
     * @return \Illuminate\Http\Response
     */
    public function show(Listall $listall)
    {
        //
        dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Listall  $listall
     * @return \Illuminate\Http\Response
     */
    public function edit($listall)
    {
       
        $listall_edit=listall ::all()->where('id',  $listall)->first();
        //  dd($listall);
        // return view('employeeadmin.listall.edit',compact('listall'));
                return view('employeeadmin.listall.edit')->with('listall_edit', $listall_edit);

        
        dd('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Listall  $listall
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $listall)
    {
        //
       $data= Listall::where('id',$listall)->update(['list_item_ar'=>$request->input('list_item_ar')]);



       $listdev_id=$request->input('listdev_id');
       $listall=listall ::all()->where('listdev_id',$listdev_id);
   // $status = 'Successfully Done';
   $listdev=listdev::all();
   $array_data=[
       'new'=>1,
       'listall'=>$listall,
       'listdev_id'=>$listdev_id,
       'listdev'=>$listdev
   
   ];



       return view('employeeadmin.listall.create')->with( 'array_data',$array_data );

        dd('update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Listall  $listall
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $listall)
    {
        //
        $listall_edit=listall ::find($listall);
        
        $listall_edit->delete();


        $listdev_id=$request->input('listdev_id');

        $listdev=listdev::all();
$listall=listall::all()->where('listdev_id',$listdev_id);
$array_data=[
        'new'=>1,
        'listall'=>$listall,
        'listdev_id'=>$listdev_id,
        'listdev'=>$listdev

];
    // dd($array_data);

        return view('employeeadmin.listall.create')->with( 'array_data',$array_data );







        //  dd($listall);
        // return view('employeeadmin.listall.edit',compact('listall'));

                return view('employeeadmin.listall.create')->with('listall_edit', $listall_edit);

        // ->where('id', $id)->delete


        dd('destroy');
    }
}
