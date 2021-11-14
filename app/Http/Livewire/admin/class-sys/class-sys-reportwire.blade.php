<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    php artisan make:livewire admin.class_sys.class_sys_reportwire
    <button wire:click='doo'>doo</button>
    <select name="" id="" wire:model='weekchoosen'>
        {{-- <select name="" id="" wire:change='teacherreport'> --}}
        @foreach ($weeks as $week)
              <option value="{{ $week->week }}">Week: {{ $week->week }}</option>
        @endforeach
      
    </select>
    {{-- {{  }} --}}
@if ($weekchoosen)
@foreach ($StudentAbsencesReport->where('week',$weekchoosen) as $item)
{{ $item->id }}

<button wire:click='absence_report_idmethod({{ $item->id }})'>{{ $item->period_code }}</button>




    @endforeach 
    <br>
  {{ $absence_report_id }}
  <br>
        {{-- SELECT `id`, `absence_report_id`, `student_id`, `student_idN`, `present`, `behavior`, `participation`, `classwork`, `homework`, `quiz`, `project`, `delay_minutes`, `active`, `mark`, `mark_extra`, `level`, `level_percent`, `notes`, `lastaccesstime`,
         `cansolve`, `canregattend`, `created_at`, `updated_at` FROM `student_absences` WHERE 1 --}}
@if ($absence_report_id)
<hr>
present
<hr>
        @foreach ($student_absences  as $item)
                            @if ($item->present==1)
                            {{$StudentTb->where('id',$item->student_id)->first()->name  }} <br>
                            @endif
        @endforeach
                                <br>
                                <hr>
                                Absent
                                <hr class="bg-success border-danger border-1 ">
        @foreach ($student_absences  as $item)
                        @if ($item->present==0)
                        {{$StudentTb->where('id',$item->student_id)->first()->name  }} <br>
                        @endif
            
        


@endforeach
{{-- <br>
  {{$StudentTb->where('id',$item->student_id)->where('present','1')->count()  }}  
<hr> --}}


@else
    
@endif



    @else
 looding...
@endif

</div>
