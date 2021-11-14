<tr>
    <td
   style="  {{ ($iday==$day_today)? "background: #ffebb5;":"" }}"
   {{-- style="  {{ ($iday==$day_today)? "background: linear-gradient(to right, #abbd73 35%, #d6e2ad 100%);":"" }}" --}}
        
        >
        <div class="badge bg-success">
           day: {{ $iday }}
        </div>
    </td>
@for ($iperiod  = 1; $iperiod  <= 6; $iperiod++)            
    <td 
    style="  {{ ($iday==$day_today)? "background-color:#ffebb5 ;":"" }}
    
      
    
    "
 
    
    >
{{-- <div class="badge  ">{{ $iperiodnow }}</div> --}}
        <div class="text-center"
        
        
        
        
        >
        

            @include('admin.class_sys.table-per')      
        </div>
    </td> 

    @if ($iperiod  == 3)
      <td  >
         <input type="button" value="break" class="{{ ($iperiod==$iperiodnow && $iday==$day_today)? "anim-border":"" }}"> </td>  
    @endif
    @endfor  
</tr>