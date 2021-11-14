<?php   
if ($StudentAbsence_all->count()>0) {
        $present= $StudentAbsence_all->where('student_id',$student->id)->first()->present;
        $starnumber= $StudentAbsence_all->where('student_id',$student->id)->first()->mark_extra/5;
            }else{
              $present=0;
              $starnumber=0;
            }
        ?>

<div style="position: absolute   ;left:94px ;width:44px ;top:32px;" > 
    @if ($starnumber==3 ||$starnumber==4)
    <img src="good_job.png" alt=""  
    class="hvr-buzz-out animate__animated  animate__flipInY"
    style="position: absolute  ;width:44px ;left:55px;top:6px; z-index:9999">
   
 
@endif
{{-- animate__rubberBand --}}
@if ($starnumber==5)
<img src="excellent.png" alt="" 

{{-- animate__flipInY--}}
class="hvr-buzz-out animate__animated   animate__flip"
style="position: absolute  ;width:84px ;left:35px;top:1px; z-index:9999">

@endif

</div>