{{-- @extends('layouts.app') 
@section('content')
@endsection --}}
 
<div>



    {{-- admin.class_sys.timeline --}}
{{-- <button wire:click='timeline'>time line</button> --}}
<?php
// $nextperiod=0;
// $timenow=date("Y-m-d 17:30:00");

// $timenow=date("Y-m-d 16:35");
  $timenow=date("Y-m-d H:i:s");
// _____________________________________________________________________________________
// $periods_array = array('beforschool',1,2,3,'break',4,5,6,7,8,'After school');
?>
 {{-- {{ $timenow }} --}}
@foreach ($periodtimes as $item)
@if ($timenow>date("Y-m-d ".$item->start) && $timenow<date("Y-m-d ".$item->end ))
    <?php
// $iperiodnow=$item->period;

?>
<div wire:poll='periodnownumber'></div>
{{-- <input type="button" > --}}
{{-- {{ $iperiodnow }} --}}
{{-- value="{{ $item->period }}" --}}
    {{-- <span class=""> --}}
<span class="  fixed-down2">
    {{ 
        $persentleft=
      round((

        strtotime($timenow)
                            -
                           strtotime(date("Y-m-d ".$item->start)) 


       ) /(60*40)
        ,2) *100
        }}
    <div class="progress bg-success m-0 p-0" style="position: absolute      ;top:-12px;width:300px" > 
        {{-- <input type="button" value="" class="progress-bar  "> --}}
        
        
        <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $persentleft }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{ $persentleft }}%</div>
      </div>
<span class="badge   badge-primary "> period:<span class="anim-border badge badge-primary ">{{  $item->period }}</span>
    {{-- @if ( $allSchedules->where('period_code',$day_today.$item->period)->first()->class_name)
    {{ $allSchedules->where('period_code',$day_today.$item->period)->first()->class_name }} --}}
</span>
 




<span class="badge bg-danger  ">{{date('h:i',(strtotime($item->start)))  }}</span>



<span class="badge bg-success  ">{{ date('h:i',(strtotime($item->end)))   }}</span>
            {{-- ---{{ date("Y-m-d ".$item->start) }}------{{ date("Y-m-d ".$item->end ) }} --}}
        <span 
        style="background-color: black;font-size:14px"
        
        class="badge   anim-border">

            
            {{ gmdate("H:i:s",
                            strtotime(date("Y-m-d ".$item->end))
                            -
                            strtotime($timenow)
                            )  }} 
                            </span>
    </span>


   







@else
{{-- {{ $item->period }}---{{ date("Y-m-d ".$item->start) }}------{{ date("Y-m-d ".$item->end ) }} --}}
{{-- <br> --}}
 
@endif



    {{-- <br> --}}
@endforeach
@if ($timenow<date("Y-m-d ".$periodtimes->where('period','1')->first()->start) )
    
<span class="fixed-down2 ">
    <span class="bg-primary">
    Befor School


     

    {{ gmdate("H:i:s",
    strtotime(date("Y-m-d ".$periodtimes->where('period','1')->first()->start))
    -
    strtotime($timenow)
)  }} 
 
</span></span>





    <?php
// $ts1 = strtotime($timenow);
// $ts2 = strtotime(date("Y-m-d ".$periodtimes->where('period','1')->first()->start));     
// $seconds_diff = $ts2 - $ts1;                            
// $time = ($seconds_diff/3600);
    ?>
    {{--  <hr>  --}}
    {{-- {{ gmdate("H:i:s",$seconds_diff)  }} --}}
{{-- {{ $timenow - date("Y-m-d ".$periodtimes->where('period','1')->first()->start) }} --}}
    {{-- <hr> --}}

     @endif
     @if ($timenow>date("Y-m-d ".$periodtimes->where('period','8')->first()->end) )
        After School
        <br>
              {{-- <hr> --}}
         @endif
            

</div>


