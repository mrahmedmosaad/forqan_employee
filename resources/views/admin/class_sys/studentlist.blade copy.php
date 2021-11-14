
      <br>
      <style>
         body{
          /* background-image: url('math.png'); */
          /* width: 200px; */
          background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  /* filter: alpha(Opacity=95); */
opacity: 0.95;
        }
      </style>
      <div class=" text-shadow h2   bgimgmath">
        {{ $class_name }}   <input type="checkbox"   wire:model='caneditstudentname'>

 <div wire:poll='autorefresh'></div>
 {{--  {{ $StudentAbsencetotal       }}-
 {{ $StudentAbsencetotal_Absent}}-
 {{ $StudentAbsencetotal_present}}-  --}}
{{-- 
          http://192.168.1.22/Schedule_teacher/d-none --}}
        <div class="container  text-center ">
  
          <div><span contenteditable >
            Math{{ $class_name   }}_Q{{ $quarter }}_W{{ $week }}_D{{substr($period_code , 0, 1)}}_p{{substr($period_code , -1, 1)}}
            </span>
            <input type="button" value="link" class="bg-danger" wire:click='showlink'>   
            
            
 


@if ($showzoomlink==1)
    {{-- <button onclick="copymytext('mytextbox_id1')">copy</button> --}}

@if (substr($class_name , 0, 1)==5)
<textarea name="" id="" cols="60" rows="5" style="font-size:12px">https://zoom.us/j/92238538813?pwd=YjFPUHBMV0IvK0l2UmVHVzdwcEVUZz09
  

Meeting ID: 922 3853 8813
Passcode: 1234
(Math) - Grade 5 link 
</textarea>
<input type="text" name=""   
style="font-size:12px;width:600px"
value="https://zoom.us/j/92238538813?pwd=YjFPUHBMV0IvK0l2UmVHVzdwcEVUZz09">





@else
<textarea name="" id="" cols="60" rows="5" style="font-size:12px;">https://zoom.us/j/99586328937?pwd=VWxncnhZZlVNY3hMQmJ2TjNWbWcydz09
  

Meeting ID: 995 8632 8937
Passcode: 1234

(Math) - Grade 6 link
</textarea>
<input type="text" name=""   
style="font-size:12px;width:600px"
value="https://zoom.us/j/99586328937?pwd=VWxncnhZZlVNY3hMQmJ2TjNWbWcydz09">

 


           


 
@endif
@endif

         
            {{-- <button wire:click="edittext">textreadonly</button>
            <input type="text" wire:model="name" {{ $textreadonly }} class="text-shadow" style="background: transparent;border:0px;readonly:true">{{ $textreadonly }} --}}
            {{-- <input type="text"> --}}
         {{-- 
            Hi! My name is {{ $name }} --}}
            {{-- <textarea name="" id="" cols="30" rows="10"  wire:doubl="name" ></textarea> --}}

{{-- @if ($my_class_list)
    
{{ substr($my_class_list[0],0,1); }}
@endif --}}

{{-- <br>
@foreach ($my_grade_list as $item)
    {{ $item }} <br>
@endforeach
<br> --}}
        </div>



  
          Grade:{{ $class_name }} <br>
          {{-- period_code:{{ $period_code }} <br> --}}
          teacher_name:{{ $teacher_name }} <br>


</div>

      </div>
      <br>
{{-- {{ $StudentTb }} --}}
@if ($StudentTb)
{{-- {{ $StudentTb }} --}}
      @if ($StudentTb->count()>0)
          <?php $stnumber=1; ?>
     <div class="container-fluid"
     style="width: 94%"
     >


              @foreach ($StudentTb as $student)


{{-- animate__zoomInDown animate__rubberBand hvr-float-shadow hvr-pulse-grow--}}


{{-- unit animate__jello hvr-pulse-grow{{ ($present==1)?"   ":"" }};z-index:9999z-index:9999--}}
{{-- {{   $StudentAbsence_all }} --}}

<div class="li   text-center   ">
@include('admin.class_sys.studentlist_stars')


 

  <div class="normal
              {{ ($present==1)?"animate__animated  animate__rubberBand":"" }}
                      ">
  <div class="btn
        {{ ($present==1)?"btn-primary btn-sm     animate__animated animate__rubberBand":"" }}
                      ">

 
 {{-- ____________checkbox_____________________z-index:9999_________________ --}}
 <label for="s{{ $stnumber }}">
  {{ ($present==1)?"":"-" }}
</label>
<input type="checkbox"  
style="position: absolute  ;left:4px ;top:14px;" 

name="" id="s{{ $stnumber }}" 

{{ ($present==1)?"checked":"" }} wire:click="update_attend('{{ $student->id }}','{{ $present }}')" 
>

{{-- ____________checkbox______________________________________ --}}
    {{-- <br> --}}

{{-- ________________________________________________________________________________________________________ --}}
{{-- 
<svg 
                width="12" height="12" 
                wire:click='setstar(0)'
                enable-background="new 0 0 515.556 515.556" viewBox="0 0 515.556 515.556" xmlns="http://www.w3.org/2000/svg"><path d="m257.778 0c-142.137 0-257.778 115.641-257.778 257.778s115.641 257.778 257.778 257.778 257.778-115.641 257.778-257.778-115.642-257.778-257.778-257.778zm-193.334 257.778c0-41.69 13.397-80.235 35.924-111.846l269.255 269.255c-31.611 22.526-70.156 35.924-111.846 35.924-106.609 0-193.333-86.723-193.333-193.333zm350.743 111.846-269.256-269.256c31.611-22.526 70.156-35.924 111.846-35.924 106.61 0 193.333 86.723 193.333 193.333 0 41.691-13.397 80.236-35.923 111.847z"/></svg>
      
                @for ($istar = 1; $istar <= 7; $istar++)
    
                            <svg
                                wire:click='setstar({{   $istar }})'
                                class="hvr-buzz-out  p-0   m-auto  
                                {{ ($istar<=$starnumber)? "animate__animated animate__rubberBand  ":""}}
                                "  xmlns="http://www.w3.org/2000/svg" style=" width:33px;  height:33px;" fill="black"   viewBox="0 0 16 16">
                                <path     d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                <path   fill="{{ ($istar<=$starnumber)? "yellow":"gray"}}"  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                    @endfor --}}



                    @if ($present==1)
                    @include('admin.class_sys.studentlist_stars2')
                    @endif
          
    
{{-- ________________________________________________________________________________________________________ --}}

<img src="avatar.png" alt="" class="circle" style="width: 38px">


<div class="btn-group"  >
  <button type="button"
   {{-- class="btn btn-primary"
  badge badge-primary
  style=" width:50px;word-wrap: break-word;"text-wrap style="width: 6rem;"--}}

  class=" btn {{ ($present==1)?" btn-primary text-shadow ":"btn-muted" }}" 
  {{-- wire:click='nameedit'class="d-none" --}}
  >
 {{-- wire:model='studentnamename' --}}
<input type="text"  wire:model='studentnamename'   class="{{ ($caneditstudentname==1)? "":"d-none" }}" 
{{-- value="{{ $student->name contenteditable}}" --}}

>
  <span       >
   <span class="badge bg-dark">{{ $stnumber++ }}</span>  {{ $student->name }} 
     {{-- {{ $studentnamename }} --}}
  </span>
{{-- {{ $caneditstudentname }} wire:ignore  --}}
</button>
  <button type="button"   class="btn  {{ ($present==1)?"  btn-primary ":"btn-muted" }} dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
  </button>
  <div class="dropdown-menu"  >
    <textarea name="" id="" cols="30" rows="10">fffff</textarea>
    <button>dfff</button>
    <a class="dropdown-item" >{{ $student->full_name_en }}</a>
    <a class="dropdown-item" >{{ $student->full_name_ar }} </a>
  </div>
</div>

<div class="dropdown">
  <span>Mouse over me</span>
  <div class="dropdown-content">
    <input type="button" value="save">
    <input type="text" name="" id="">
  <p>Hello World!</p>
  </div>
</div>

{{-- <br> --}}

{{-- href="#" --}}
    {{-- <span 
    class="{{ ($present==1)?"text-shadow":"" }} "
    data-content=" {{ $student->full_name_en }}" data-content="{{ $student->full_name_en }}-{{ $student->full_name_ar }} "
   style="    font-family: 'Helvetica', 'Arial', sans-serif;font-size: 12pt;"
   
   
   data-container="body" data-toggle="popover" data-placement="top"  
   
   > --}}

{{-- {{ $student->name }} --}}
{{-- <div wire:poll.2000ms='test1'>
  {{ $test }}
</div> --}}
{{-- {{$present= $StudentAbsence_all->where('student_id',$student->id)->first()->present }} --}}
  
    {{-- </span> --}}

    {{-- <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
      Popover on top
    </button> --}}

      {{-- <br> --}}
    {{-- @if ($present==1)
        
    
    
    @for ($i = 1; $i < 6; $i++)
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
    </svg>
    @endfor
    @endif --}}
           

 
      
</div>
  </div>
</div>
@endforeach

</div>


@else
    
@endif 

   
@endif 
 




<br>



{{-- 
</div>
</div>
<ul>
  <li data-tippy-content="Click to copy box-shadow #0" style="box-shadow: rgba(0, 0, 0, 0.35) 0px -50px 36px -28px inset;"><span>#49</span><span class="credits">by Alligator</span></li><li data-tippy-content="Click to copy box-shadow #50" style="box-shadow: rgba(240, 46, 170, 0.4) 5px 5px, rgba(240, 46, 170, 0.3) 10px 10px, rgba(240, 46, 170, 0.2) 15px 15px, rgba(240, 46, 170, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 25px 25px;"><span>#50</span><span class="credits">by Alligator</span></li><li data-tippy-content="Click to copy box-shadow #51" style="box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px;"><span>#51</span></li><li data-tippy-content="Click to copy box-shadow #52" style="box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;"><span>#52</span><span class="credits">by pqina.nl/doka</span></li><li data-tippy-content="Click to copy box-shadow #53" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;"><span>#53</span></li><li data-tippy-content="Click to copy box-shadow #54" style="box-shadow: rgba(27, 31, 35, 0.04) 0px 1px 0px, rgba(255, 255, 255, 0.25) 0px 1px 0px inset;"><span>#54</span><span class="credits">by Github</span></li><li data-tippy-content="Click to copy box-shadow #55" style="box-shadow: rgba(3, 102, 214, 0.3) 0px 0px 0px 3px;"><span>#55</span><span class="credits">by Github</span></li><li data-tippy-content="Click to copy box-shadow #56" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;"><span>#56</span></li><li data-tippy-content="Click to copy box-shadow #57" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;"><span>#57</span><span class="credits">by Facebook</span></li><li data-tippy-content="Click to copy box-shadow #58" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;"><span>#58</span><span class="credits">by Shopify</span></li><li data-tippy-content="Click to copy box-shadow #59" style="box-shadow: rgba(33, 35, 38, 0.1) 0px 10px 10px -10px;"><span>#59</span><span class="credits">by Shopify</span></li><li data-tippy-content="Click to copy box-shadow #60" style="box-shadow: blue 0px 0px 0px 2px inset, rgb(255, 255, 255) 10px -10px 0px -3px, rgb(31, 193, 27) 10px -10px, rgb(255, 255, 255) 20px -20px 0px -3px, rgb(255, 217, 19) 20px -20px, rgb(255, 255, 255) 30px -30px 0px -3px, rgb(255, 156, 85) 30px -30px, rgb(255, 255, 255) 40px -40px 0px -3px, rgb(255, 85, 85) 40px -40px; border-radius: 0px;"><span>#60</span><span class="credits">by Fossheim</span></li><li data-tippy-content="Click to copy box-shadow #61" style="box-shadow: rgb(85, 91, 255) 0px 0px 0px 3px, rgb(31, 193, 27) 0px 0px 0px 6px, rgb(255, 217, 19) 0px 0px 0px 9px, rgb(255, 156, 85) 0px 0px 0px 12px, rgb(255, 85, 85) 0px 0px 0px 15px; border-radius: 0px;"><span>#61</span><span class="credits">by Fossheim</span></li><li data-tippy-content="Click to copy box-shadow #62" style="box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;"><span>#62</span><span class="credits">by boxshadows.com</span></li><li data-tippy-content="Click to copy box-shadow #63" style="box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;"><span>#63</span><span class="credits">by boxshadows.com</span></li><li data-tippy-content="Click to copy box-shadow #64" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px;"><span>#64</span><span class="credits">by box-shadows.co</span></li><li data-tippy-content="Click to copy box-shadow #65" style="box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px;"><span>#65</span><span class="credits">by box-shadows.co</span></li><li data-tippy-content="Click to copy box-shadow #66" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"><span>#66</span><span class="credits">by box-shadows.co</span></li><li data-tippy-content="Click to copy box-shadow #67" style="box-shadow: rgba(17, 17, 26, 0.05) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;"><span>#67</span><span class="credits">by box-shadows.co</span></li><li data-tippy-content="Click to copy box-shadow #68" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;"><span>#68</span><span class="credits">by box-shadows.co</span></li><li data-tippy-content="Click to copy box-shadow #69" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 48px;"><span>#69</span><span class="credits">by box-shadows.co</span></li><li data-tippy-content="Click to copy box-shadow #70" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px;"><span>#70</span><span class="credits">by box-shadows.co</span></li><li data-tippy-content="Click to copy box-shadow #71" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;"><span>#71</span><span class="credits">by box-shadows.co</span></li><li data-tippy-content="Click to copy box-shadow #72" style="box-shadow: rgba(50, 50, 105, 0.15) 0px 2px 5px 0px, rgba(0, 0, 0, 0.05) 0px 1px 1px 0px;"><span>#72</span><span class="credits">by 10er.app</span></li><li data-tippy-content="Click to copy box-shadow #73" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px;"><span>#73</span><span class="credits">by wip.chat</span></li><li data-tippy-content="Click to copy box-shadow #74" style="box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;"><span>#74</span></li><li data-tippy-content="Click to copy box-shadow #75" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px 0px;"><span>#75</span><span class="credits">by Airbnb</span></li><li data-tippy-content="Click to copy box-shadow #76" style="box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;"><span>#76</span><span class="credits">by Airbnb</span></li><li data-tippy-content="Click to copy box-shadow #77" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;"><span>#77</span><span class="credits">by Airbnb</span></li><li data-tippy-content="Click to copy box-shadow #78" style="box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;"><span>#78</span><span class="credits">by Airbnb</span></li><li data-tippy-content="Click to copy box-shadow #79" style="box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;"><span>#79</span><span class="credits">by ls.graphics</span></li><li data-tippy-content="Click to copy box-shadow #80" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px;"><span>#80</span><span class="credits">by ls.graphics</span></li><li data-tippy-content="Click to copy box-shadow #81" style="box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;"><span>#81</span><span class="credits">by Lonely Planet</span></li><li data-tippy-content="Click to copy box-shadow #82" style="box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;"><span>#82</span><span class="credits">by Mac</span></li><li data-tippy-content="Click to copy box-shadow #83" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 20px 30px;"><span>#83</span><span class="credits">by Mac</span></li><li data-tippy-content="Click to copy box-shadow #84" style="box-shadow: rgba(255, 255, 255, 0.2) 0px 0px 0px 1px inset, rgba(0, 0, 0, 0.9) 0px 0px 0px 1px;"><span>#84</span><span class="credits">by Mac</span></li><li data-tippy-content="Click to copy box-shadow #85" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 0.0625em 0.0625em, rgba(0, 0, 0, 0.25) 0px 0.125em 0.5em, rgba(255, 255, 255, 0.1) 0px 0px 0px 1px inset;"><span>#85</span><span class="credits">by pqina.nl/doka</span></li><li data-tippy-content="Click to copy box-shadow #86" style="box-shadow: rgba(0, 0, 0, 0.09) 0px 3px 12px;"><span>#86</span><span class="credits">by Typedream</span></li><li data-tippy-content="Click to copy box-shadow #87" style="box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px; border-radius: 35px;"><span>#87</span></li><li data-tippy-content="Click to copy box-shadow #88" style="box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;" class=""><span>#88</span></li><li data-tippy-content="Click to copy box-shadow #89" style="box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;"><span>#89</span></li><li data-tippy-content="Click to copy box-shadow #90" style="box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px, rgb(209, 213, 219) 0px 0px 0px 1px inset;"><span>#90</span></li><li data-tippy-content="Click to copy box-shadow #91" style="box-shadow: rgba(0, 0, 0, 0.35) 0px -50px 36px -28px inset;"><span>#91</span></li></ul> --}}



{{-- <br>
{{ $absence_report_id }}
<br> --}}
{{-- {{ $StudentAbsence_all }} --}}


<?php    

$num=1;
?>
 

<div class="  text-center  fixed-down hvr-sweep-to-right animate__animated animate__bounce">
  {{-- <div class="row w-100"> --}}
      {{-- <div class="col "> --}}
          <div class="text-shadow  d-flex justify-content-between align-items-center breaking-news bg-success"
          
         
          >

              <div class="text-shadow d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger text-white 
              
              hvr-push animate__animated  animate__flip
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
           
              p:{{ $StudentAbsencetotal_present}} A:{{ $StudentAbsencetotal_Absent}} 
 
                 {{-- T:20 - (A:3 - P:17) --}}
                              
                {{-- <span class="d-flex align-items-center
               
                hvr-buzz-out animate__animated  animate__flip
                ">&nbsp;Top 5</span> --}}

                
                
                
                </div>

                <div
                
                class="text-shadow d-flex flex-row flex-grow-1 flex-fill justify-content-center   text-white 
              
                hvr-push animate__animated  animate__flip
                news"
                 {{-- style=" width:242px" --}}
                >
                 
                  {{-- <div class="w-25">
                    @include('admin.class_sys.class_sys_lessonprep')
                    </div> --}}
                   {{-- time left:12:00substr('abcdef', 1, 3) --}}
                 
                   <h3>Math-{{ $class_name}}</h3>
                   <img src="top5.png" 
                   style="position: absolute;top:-52px; width:42px"
                  
                    alt="">  
                 </div>



              <marquee style="background-color: black" class="text-shadow news-scroll
              hvr-push animate__animated  animate__bounce
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
    {{ $topfive_order }}
    @else
       
        <?php
        $topfive_order=$topfive_order+1;
        
        $mark_extra_last=$item->mark_extra ?>
    @endif
    
             @if ($topfive_order>5)
            
             @else
                 
            
             <span class="badge bg-success  "> {{ $topfive_order }}</span>
                  
                  <span class="hvr-buzz-out animate__animated  animate__lightSpeedInRight" >
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
</div>