
<div class="text-center  "

style="box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;"
>


<span class="badge bg-primary">{{ $ih }}</span>
 
<br>
{{
$periodtimes->where('period',$ih)->first()->start
}}
{{--  .":".
gmdate("H:i",strtotime($periodtimes->where('period',$ih)->first()->start))
                            


  }}  --}}
<span class="badge bg-dark">
    {{ date('h:i', strtotime($periodtimes->where('period',$ih)->first()->start)); }}
    </span>

<br>
{{

$periodtimes->where('period',$ih)->first()->end}}
{{--  gmdate("H:i",strtotime($periodtimes->where('period',$ih)->first()->end))   --}}

    <span class="badge bg-info">
        {{ date('h:i', strtotime($periodtimes->where('period',$ih)->first()->end)); }}
        </span>
            


</div>
