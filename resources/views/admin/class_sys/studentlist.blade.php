
<div class="c">
  <!-- The dropdown starts here... -->
  <div class="dd">

  @if ($showtimetable==1)

    <div class="dd-a"> </div>
    <input  type="button" value="report day :{{($daynumber)? $daynumber :"" }} " wire:click='ww'>
 
  {{--  <label for="uuu">dddddddd
    {{ $yy }} </label>  --}}
    
    <input type="checkbox" style="display: none" id="uuu" value="1"  wire:model='yy'>
 
    <div class="dd-c">
      <ul>
        <li>
        
         
           @include('admin.class_sys.studentlist_thisdayreport')
    
         
          
          
          
          {{--  <input type="button" value="Dropdown menu"><a href="#"><span>Link</span></a></li>
        <li><a href="#"><span>A somewhat longer link to expand the menu further.</span></a></li>
        <li><a href="#"><span>Link</span></a></li>
        <li><a href="#"><span>Link</span></a></li>  --}}
     </li>
     
      </ul>
    </div>
  </div>
  <!-- ...and ends here. -->
</div>







<div class="dropdown">
  {{--  <span>Mouse over me</span>  --}}
  <input type="button" value="search">
  <div class="dropdown-content" style="width: 300px">
    {{--  <p>Hello World!</p>  --}}
    start with this letter{{ $startwiththisletter }}
    <input type="checkbox" value="1" wire:model='startwiththisletter'>
result count:@if ($txtsearchresult)
  {{ $txtsearchresult->count() }}
  @endif
<input type="text"  wire:model='txtsearch' wire:keydown='txtsearchfun()'>
<input type="button" value="aa" wire:click='txtsearchfun()'>
{{--  <input type="button" value="aa" wire:keydown.enter='txtsearchfun'>  --}}
{{--  <input type="text" wire:model.lazy='txtsearch' wire:keydown='txtsearchfun'>  --}}
<div>
  @if ($txtsearchresult)
  {{ $txtsearchresult->count() }}
      @foreach ($txtsearchresult as $item)
          {{ $item->class_name }}<br>

          {{ $item->name }} <br>
          {{ $item->full_name_ar }} <br>
          {{ $item->full_name_en }} <br>

          Absent days:{{ $StudentAbsenceall->where('student_id', $item->id)
          ->where('present', '0')
          
          ->count()  }} <br>
                   mark:{{ $StudentAbsenceall->where('student_id', $item->id)
           
          
          ->sum('mark_extra')  }} <br>
          <hr>
      @endforeach
  @endif
</div>

  </div>
</div>

<br>
<div class="dropdown">
  <span>Week</span>
  <input type="button" value="current week:{{ $currentweek }}   week:{{ $week }}">
  {{--  current week:{{ $currentweek }} <br> week:{{ $week }}  --}}
  <input type="checkbox">
  <div class="dropdown-content">
    <input type="button" wire:click='changeweek({{ $currentweek }})' value="current week:{{ $currentweek }}">
<br>
    @foreach ($QuarterDatesall as $item)
    change week
    <input type="button" wire:click='changeweek({{ $item->week }})' value="week:{{ $item->week }}">
        <br>
    @endforeach
    <p>Hello World!</p>


  </div>
</div>


      <div class=" text-shadow      "><br>

        {{--  <input type="checkbox" date("Y-m-d H:i:s")  wire:model='caneditstudentname'>  --}}
        
        @if ($class_name)
        {{-- <input type="button" value="link" class="bg-danger" wire:click='showlink'>    --}}
        {{--  <input type="checkbox"   wire:model='showzoomlink' value="1" >  --}}
               <span class="badge bg-danger"> {{ $class_name }}</span>   
        <br>
        Start:<div class="badge bg-dark">{{ date("h:i",strtotime($thisperiodstart ))}}</div> <div class="badge bg-dark">{{ $thisperiodstart }}</div> 
        <br>
        End:<div class="badge bg-danger">{{ $thisperiodend }}</div>
        <div class="badge bg-danger">{{ date("h:i",strtotime($thisperiodend )) }}</div>
        
                <div>
          <span  >
            {{-- Math{{ $class_name   }}_Q{{ $quarter }}_W{{ $week }}_D{{substr($period_code , 0, 1)}}_p{{substr($period_code , -1, 1)}} --}}
            {{-- contenteditable id="copy"  --}}
           Math {{ $class_name   }}-{{ $thisperiodorder }}
          
          
          </span>
{{-- ___________________________copy________________________________________________________________           --}}
           
          {{-- <input type="text" value="Hello World" id="copythis1" onclick="copyToClipboard('Math {{ $class_name   }}-{{ $thisperiodorder }}')">
          <button onclick="copyToClipboard('Math {{ $class_name   }}-{{ $thisperiodorder }}')">Copy text</button> --}}







          <svg  {{-- copy --}}
         
          version="1.1" 
          onclick="copyToClipboard('Math {{ $class_name   }}-{{ $thisperiodorder }}')"
          
          class="    " style="width: 20PX;cursor: pointer;"  fill='green' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          viewBox="0 0 488.3 488.3" style="enable-background:new 0 0 488.3 488.3;" xml:space="preserve">
       <g>
         <g>
           <path d="M314.25,85.4h-227c-21.3,0-38.6,17.3-38.6,38.6v325.7c0,21.3,17.3,38.6,38.6,38.6h227c21.3,0,38.6-17.3,38.6-38.6V124
             C352.75,102.7,335.45,85.4,314.25,85.4z M325.75,449.6c0,6.4-5.2,11.6-11.6,11.6h-227c-6.4,0-11.6-5.2-11.6-11.6V124
             c0-6.4,5.2-11.6,11.6-11.6h227c6.4,0,11.6,5.2,11.6,11.6V449.6z"/>
           <path d="M401.05,0h-227c-21.3,0-38.6,17.3-38.6,38.6c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5c0-6.4,5.2-11.6,11.6-11.6h227
             c6.4,0,11.6,5.2,11.6,11.6v325.7c0,6.4-5.2,11.6-11.6,11.6c-7.5,0-13.5,6-13.5,13.5s6,13.5,13.5,13.5c21.3,0,38.6-17.3,38.6-38.6
             V38.6C439.65,17.3,422.35,0,401.05,0z"/>
         </g>
       </g>
       <g>
       </g>
       <g>
       </g>
       <g>
       </g>
       <g>
       </g>
       <g>
       </g>
       <g>
       </g>
       <g>
       </g>
       <g>
       </g>
       <g>
       </g>
       <g>
       </g>
       <g>
       </g>
       <g>
       </g>
       <g>
       </g>
       <g>
       </g>
       <g>
       </g>
       </svg>
       



          {{--           






 

 
{{-- ___________________________copy________________________________________________________________           --}}

<div class="dropdown " >
  {{-- <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
      aria-expanded="false">
        Dropdown
      </button> --}}
<input type="button"
{{-- btn btn-secondary --}}
class="rounded  dropdown"   id="triggerId" data-toggle="dropdown" aria-haspopup="true"
      aria-expanded="false"
{{-- style="width: 74px" --}}

value="link">



  <div class="dropdown-menu" aria-labelledby="triggerId">
   
{{-- class="dropdown-item" --}}
<div >
  @if ($showtimetable==1)

   @include('admin.class_sys.studentlist_zoom')
  
@endif

</div>


    {{-- <button class="dropdown-item" href="#">Action</button>
    <button class="dropdown-item disabled" href="#">Disabled action</button> --}}
  </div>
</div>





        </div>
        @endif
        {{--  :{{ $thisperiodend }}  --}}
 {{-- <div wire:poll='autorefresh'></div> --}}

        <div class="   text-center ">



@if ($class_name=="")
    
@else
    

  
          Grade:{{ $class_name }}  <br>
          {{-- period_code:{{ $period_code }} <br> --}}
          teacher_name:{{ $teacher_name }}  <br>

          @endif
          {{--  <input type="button" value="reload" wire:click='reloadimg'>  --}}
</div>
@endif
      </div>













 
{{-- {{ $StudentTb }} --}}
          <?php
           $stnumber=0;
            ?>
@if ($StudentTb)
{{-- {{ $StudentTb }} --}}
      @if ($StudentTb->count()>0)

     <div
      {{-- class="container-fluid"
     style="width: 94%" --}}
     >


              @foreach ($StudentTb as $student)


{{-- animate__zoomInDown animate__rubberBand hvr-float-shadow hvr-pulse-grow--}}

        <?php   
if ($StudentAbsence_all->count()>0) {

  

        $present= $StudentAbsence_all->where('student_id',$student->id)->first()->present;
        $starnumber= $StudentAbsence_all->where('student_id',$student->id)->first()->mark_extra/5;
}else{
  $present=0;
  $starnumber=0;
}

        ?>
{{-- unit animate__jello hvr-pulse-grow{{ ($present==1)?"   ":"" }};z-index:9999z-index:9999--}}
{{-- {{   $StudentAbsence_all }} --}}



<div  class="li  me1 text-center  p-1 m-1 rounded 
{{ ($present==1)? "animbgcolor2":""}}"
style="{{ ($present==1)? "":"background-color: lightgray" }};"
{{--  style="{{ ($present==1)? "background-image: linear-gradient(to top, #4481eb 0%, #04befe 100%);":"background-color:lightgray" }};"  --}}
{{--  style="{{ ($present==1)? "background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);":"background-color:lightgray" }};"  --}}


>

        <div style="position: absolute   ;left:94px ;width:44px ;top:32px;
        
        
        " > 
 

            @include('admin.class_sys.studentlist_stars2')
        </div>

 {{-- {{ $stnumber++ }} --}}
 {{-- ===============dataedit========= --}}
 
  <?php

  $stnumber++
  ?>
  
    @include('admin.class_sys.studentlist_dataedit')
 

</div>
@endforeach

</div>


@else
    
@endif 

   
@endif 
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
{{--  @include('admin.class_sys.weeklyclassrecord')  --}}



 
 
<?php    

$num=1;
?>
 @if ($showtimetable==1)

<div class="  text-center  fixed-down hvr-sweep-to-right animate__animated animate__bounce">
  {{-- <div class="row w-100"> --}}
      {{-- <div class="col "> --}}
          <div class="text-shadow  d-flex justify-content-between align-items-center breaking-news "
          
         
          >

{{-- left_________________________________________________ --}}
              <div class="text-shadow d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger text-white 
              
               
              news"
               style=" width:242px"
              >
             <span  class="badge bg-primary p-1 m-0">
             <h6 wire:poll> 
               {{date('h:i:s', strtotime(now())) }} 
               {{-- {{ now() }} --}}
               </h6> 
               </span> 
{{-- {{ $class_name}} - 
Per:{{substr($period_code , -1, 1)}} --}}

             Total: {{ $StudentAbsencetotal       }}
           
               :{{ $StudentAbsencetotal_present}} <span class="badge anim-border anim-textback m-0 p-0 " style="height: 9px">A:{{ $StudentAbsencetotal_Absent}}</span> 
 
{{--                        
               <div class="progress bg-success m-0 p-0" style="position: absolute      ;top:-12px;width:300px" > 
                  
                
                <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $persentleft }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{ $persentleft }}%</div>
              </div> --}}
                
                
                </div>
{{-- left_______end__________________________________________ --}}


 



                <div
                
                class="text-shadow d-flex flex-row flex-grow-1 flex-fill justify-content-center   text-white 
              
                hvr-push 
                news"
                 {{-- style=" width:242px" --}}
                >

                  {{-- <div class="w-25">
                    @include('admin.class_sys.class_sys_lessonprep')
                    </div> --}}
                   {{-- time left:12:00substr('abcdef', 1, 3) --}}
                 
                   <h3>Math {{ $class_name}}</h3>
                   <img src="top5.png" 
                   style="position: absolute;top:-12px; width:62px;left:300px;
                   z-index: 9999;"
                  
                    alt="">  
                 </div>



              <marquee style="background-color: black;z-index:-1" class="text-shadow news-scroll
 
              " behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">

                <h4>
                {{-- _________________________________________________________________ --}}
               
                @if ($StudentAbsence_all)
                <?php
    
    $topfive_order=0;
    $mark_extra_last="";
    ?>
           
    @foreach ($StudentAbsence_all as $item)
                
                   {{-- {{ $num++ }} --}}
                  
                  
                  
                   @if ($item->mark_extra>=10)
    
     
    @if ($item->mark_extra==$mark_extra_last)
    {{--  {{ $topfive_order }}  --}}
    @else
       
        <?php
        $topfive_order=$topfive_order+1;
        
        $mark_extra_last=$item->mark_extra ?>
    @endif
    
             @if ($topfive_order>5)
            
             @else
                 
            @if ($topfive_order==1)
                <img class=" rounded-circle  " src="1.gif" alt=""  width="55" >
            @else
                    <span class="badge bg-success  "> {{ $topfive_order }}</span>
            @endif
         
                  <img
                  
                  class=" rounded-circle  "
                  src="/storage/photos/{{ $student_tb_all ->where('id',$item->student_id)->first()->idN }}.jpg"  alt="" width="45"  >  
                  <span class="  " >
                  {{ $student_tb_all->where('id',$item->student_id)->first()->full_name_en }}
                  </span>
                {{-- <span class="badge bg-success"> {{ $item->mark_extra }}</span> --}}
               
              
                 
                          </div> 
    
              
                {{-- {{ $item->present }} --}}
              {{-- {{ ($item->present==1)? "" :"غائب"}}</td> --}}
              
    
              @endif
               
    
    
          @endif    
    @endforeach
    @endif
    
                              {{-- _________________________________________________________________ --}}
</h4>
              </marquee>

        {{-- </div> --}}
      {{-- </div> --}}
  </div>
 @endif
</div> 