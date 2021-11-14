studentlist_thisdayreport.blade.php
<br>

{{-- <button class="me2">aaa</button> --}}
<input type="button" value="day1"  wire:click='daychange(1)'>
<input type="button" value="day2"  wire:click='daychange(2)'>
<input type="button" value="day3"  wire:click='daychange(3)'>
<input type="button" value="day4"  wire:click='daychange(4)'>
<input type="button" value="day5"  wire:click='daychange(5)'>
<br>
 report for day :<span class="badge badge-danger">{{ $daynumber }} </span>
 <br> 
<table class="table table-light" dir="rtl">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>الصف الدراسي</th>
            <th>المادة</th>
            <th>الدرس</th>
            <th>برامج التواصل المستخدمة</th>
            <th>عدد الطلاب الكلي</th>
            <th>Absent</th>
            <th>المتفاعلين</th>
            <th>الغير متفاعلين</th>
            <th>الايجابيات</th>
            <th>التحديات التي واجهتك</th>
        </tr>
    </thead>
    <tbody>


@if ($daynumber&&$StudentAbsencesReport)
    
{{-- $daynumber {{ $daynumber }} <br> 

absence_report_id <br> --}}

@foreach ($schedules->where('subject','Math')->where('day',$daynumber ) as $item)
{{-- period:{{ $item->period }} - {{ $item->class_name }} -  --}}

<?php
// if ($daynumber) {
    try {
    // run your code here

    // dd($StudentAbsencesReport->where('period_code',$daynumber.$item->period)->where('week',$week));
 $idrr= $StudentAbsencesReport->where('period_code',$daynumber.$item->period)->where('week',$week)->first()->id ;
$sa= $StudentAbsence_allall->where('absence_report_id',$idrr)->where('present',0)->count()  ;
$sa_classtot= $StudentAbsence_allall->where('absence_report_id',$idrr)->count()  ;
$sa_active= $StudentAbsence_allall->where('absence_report_id',$idrr)->where('present',1) ->where('mark_extra','>=',5)->count()  ;

    # code...
 


?>

{{-- {{ $idrr }} <br> --}}

 {{-- -
 -
 -
 <br> --}}
 <tr>
    <td>{{ $item->period }} </td>
<td>{{ $item->class_name }}</td>
<td>{{ $subject }}</td>
<td></td>
<td></td>
            <td>{{ $sa_classtot }} </td>
            <td>{{ $sa }}</td>
            <td>{{ $sa_active }}</td>
            <td>{{ $sa_classtot -($sa_active+$sa) }}</td>
            <td></td>
            <td></td>
</tr>
<?php

    # code...
// } else {
// }

}
catch (exception $e) {
    //code to handle the exception
}
?>
{{-- {{ $StudentAbsence->where('absence_report_id',$idrr)  }} <br> --}}
@endforeach

@endif


{{-- <td>{{ $class_name }}</td>
<td> </td> --}}
{{-- <td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td> --}}

</tbody>
<tfoot>
<tr>
<th>#</th>
</tr>
</tfoot>
</table>