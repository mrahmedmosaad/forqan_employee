<div class="     {{ ($present==1)?"animate__animated  animate__rubberBand":"" }}
                      ">
                     
  <div class="          {{ ($present==1)?"  btn-sm     animate__animated animate__rubberBand":"" }}
                      ">

 
 {{-- ____________checkbox_____________________z-index:9999_________________ --}}
 {{-- <label for="s{{ $stnumber }}">
  {{ ($present==1)?"":"-" }}
</label> --}}

{{-- <div class="nav-item full-screen fullscreen-button">
  <a class="new nav-link full-screen-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg></a>
</div> --}}
@include('admin.class_sys.studentlist_stars')


{{-- <div class="containerimg"> --}}
  {{--  <img src="img_snow_wide.jpg" alt="Snow" style="width:100%;">  --}}
  {{-- 'photos/{{ $student_id }}/avatar.png' --}}
  {{-- <figure> --}}
    {{-- <svg 
     class="m-0 p-0"
    style="background-color: yellow"
    xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="blue" class="bi bi-bookmark-star-fill" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM8.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z"/>
    </svg>
  --}}
  {{--  <div class=" rounded-circle border-1 border-danger ">  --}}

 
@if (Storage::exists('/photos/'.$student->idN.'.jpg'))

@if ($present==1)
{{--  <div style="z-index:-9999;background-color:blue ">  --}}


<div class="   text-center   p-0   m-0 w-100 " style="width:44px;height:55px" >
        <img src="/storage/photos/{{ $student->idN }}.jpg"  
    style=" width:44px;height:44px;" 
    {{-- onclick="this.src = '/storage/photos/{{ $student->id }}/avatar.png?142';" --}}
    class="  rounded-circle  
    hvr-glow hvr-bounce-in hvr-grow-rotate p-0   m-0
    presentimg animate__animated animate__zoomInDown"
  >
</div>
{{--  </div>  --}}
@else
        <img src="/storage/photos/{{ $student->idN }}.jpg"  
    style=" width:43px;height:43px;filter: grayscale(100%);"
    {{-- onclick="this.src = '/storage/photos/{{ $student->id }}/avatar.png?142';" --}}
    class=" rounded-circle  
     p-0   m-0  
    "
  >
@endif


@else
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill='gray' viewBox="0 0 20 20">
  <title>
    user avatar
  </title>
  <path d="M10 12.5c-5.92 0-9 3.5-9 5.5v1h18v-1c0-2-3.08-5.5-9-5.5z"/>
  <circle cx="10" cy="6" r="5"/>
</svg>
@endif





  {{--  <img 
 
src="{{ (Storage::exists('/photos/'.$student->id.'/avatar.png'))? "/storage/photos/$student->id/avatar.png":"/avatar.png"}}"
class=" rounded-circle border border-primary 
hvr-buzz-out  p-0   m-0  
 
{{ ($present==1)? "presentimg animate__animated animate__zoomInDown" :"abcentimg animate__animated animate__shakeX " }} "
onclick="this.src = '/storage/photos/{{ $student->id }}/avatar.png?142';"


 
class=" rounded-circle border border-primary 
hvr-buzz-out  p-0   m-0  
 
{{ ($present==1)? "presentimg animate__animated animate__zoomInDown" :"abcentimg animate__animated animate__shakeX " }} "
style=" width:38px;height:38px;{{ ($present==1)? "":"filter: grayscale(100%);" }}" alt="" 

onclick="this.src = '/storage/photos/{{ $student->id }}/avatar.png?142';"
 
>  --}}

{{--  </div>  --}}
{{-- </figure> --}}
 
{{--  <div class="top-left">Top Left</div>
<div class="top-right">Top Right</div>
<div class="bottom-right">Bottom Right</div>
<div class="centered">Centered</div>  --}}




 {{-- </div> --}}
{{-- ________________________________________________________________________________________________________ --}}

{{-- <img src="avatar.png" alt="" class="circle" style="width: 38px"> --}}
{{-- {{ $loading }}
@if ($loading==1)
<img src="avatar.png" alt=""  >
    
@endif --}}
{{-- <br class="p-0 m-0"> --}}
<div class="p-0   m-0  "
style="position: absolute;top:62px">
{{-- class=" {{ ($present==1)?"bg-success":"" }}" --}}

{{-- __________________________________________________dropdown_______________________________________ --}}


                    <div class="dropdown   p-0   m-0 " style="float:left ;left:-5px;width:25px;top:-32px">
                      <input type="button" style="float:left ;width:15px;
                      {{ ($present==0)?"background-color: gray ;":" box-shadow: 0 0 10px 5px green;" }}
                      " class=" rounded-circle  {{ ($present==0)?" ":"anim-border2" }}  m-0 p-0  " value="{{ $stnumber  }}">
                      {{-- <span class="   btn m-0 p-1  dropdown-toggle"></span> --}}

 {{-- <span class="rounded-circle  {{ ($present==0)?" ":"anim-border2" }}  m-0 p-0 ">{{ $stnumber  }}</span>  --}}



                      <div class="dropdown-content rounded" style="  box-shadow: 0 0 10px 5px blue;width:125px">
                        <input type="button" value="save">
                       
                       
                        <input type  ="checkbox"
                                class ="btn"  
                                style =" width:16px; height:16px;float: left;" 
                                            {{ ($present==1)?"checked":"" }} wire:click="update_attend('{{ $student->id }}','{{ $present }}')" 
                                            >



                        <input type="text" class="  w-100"  >
                      {{--dropdown-item class="text-wrapp"<p>Hello World!</p> --}}
                      <div class="p-0   m-0 ">

                        <span class="  w-100" >{{ $student->full_name_en }}</span>
                        <br>
                        <span class=" w-100" >{{ $student->full_name_ar }} </span>
                      </div>
                     
{{-- __________________________________________________dropdown_______________________________________ --}}

                      <span>
                         <input type  ="checkbox"
                                class ="btn"  
                                style =" width:16px; height:16px;float: right;" 
                                            {{ ($present==1)?"checked":"" }} wire:click="update_attend('{{ $student->id }}','{{ $present }}')" 
                                            >

<div 
>


  <svg 
  onclick="document.getElementById('filem'+{{$student->id}}).click();"
  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-plus" viewBox="0 0 16 16">
    <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z"/>
    <path d="M13.5 10a.5.5 0 0 1 .5.5V12h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V13h-1.5a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/>
  </svg>


                                            <form wire:submit.prevent="saveme(Object.fromEntries(new FormData($event.target)))">
                                              <input type="file" name="student_id" id="filem{{ $student->id }}" wire:model="photo" hidden>
                                            <input type="text"   name="student_id" value="{{ $student->idN }}"  hidden
                                            {{-- wire:model.debounce.500ms="student_id" --}}
                                            >
                                              @error('photo') <span class="error">{{ $message }}</span> @enderror
                                            
                                              <button type="submit"
                                              class="btn btn-link  m-0 p-3  "
                                              {{-- style="float: left" --}}
                                              > 
                                            
                                                  <svg
                                                  style="width: 14px"
                                                  version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                  viewBox="0 0 286.036 286.036" style="enable-background:new 0 0 286.036 286.036;" xml:space="preserve">
                                             <g>
                                                 <path style="fill:#39B29D;" d="M231.641,113.009c-3.915-40.789-37.875-72.792-79.684-72.792c-32.351,0-60.053,19.201-72.819,46.752
                                                     c-3.844-1.225-7.849-2.056-12.095-2.056c-22.214,0-40.226,18.021-40.226,40.226c0,4.416,0.885,8.591,2.199,12.551
                                                     C11.737,147.765,0,166.26,0,187.696c0,32.092,26.013,58.105,58.105,58.105v0.018h160.896v-0.018
                                                     c37.044,0,67.035-30.009,67.035-67.044C286.036,146.075,262.615,118.927,231.641,113.009z M176.808,164.472h-15.912v35.864
                                                     c0,4.943-3.987,8.957-8.939,8.957h-17.878c-4.934,0-8.939-4.014-8.939-8.957v-35.864h-15.921c-9.708,0-13.668-6.481-8.823-14.383
                                                     l33.799-33.316c6.624-6.615,10.816-6.838,17.646,0l33.799,33.316C190.503,158,186.516,164.472,176.808,164.472z"/>
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
                                            
                                              </button>
                                            
                                            </form>
                                          </div>
                          {{-- <span class="badge bg-dark">{{ $stnumber  }}</span>    
                          {{ $stnumber++ }} --}}
                                  {{-- {{ $student->name }}  --}}
<?php 
$str = $student->name;
$headers = explode(' ', $str);


// $rr=str_split("Hello",1) ;
// foreach ($rr as $r){

// echo $r;
// }

$rr=str_split($headers[0],1) ;
// print_r($headers);

$gg=0
?>
                           </span>       {{-- {{ explode(' ',$student->name) }} --}}
                                  {{-- {{ $headers[0] }} --}}
                                  
                                </div>
                              </div>

          <span class="          p-0   m-0 "
          style="background-color: {{ ($present==1)? "black":"gray" }}"
          >                         
<span class="badge  anim-textback  p-0 m-0 " style="font-size: 14px">

  {{-- <span class="badge   "
  style="background-color: gray;color: yellow;font-size:14px"
  >{{ $stnumber  }}</span> --}}

 
                   
  @foreach ($rr as $r)
                                        @if ($gg==0)
                                        <span class="badge text-shadow  p-0 m-0 text-bold {{ ($present==1)? "anim-textback":"" }}  " style="font-size: 24px;background-color:{{ ($present==1)? "black":"" }}">  {{ $r }}</span>
                                        <?php
$gg=1;
                                        ?>
                                        @else
                                         <span class="text-shadow   p-0 m-0  text-light">  {{ $r }} </span>
                                        @endif
                                    @endforeach

</span></span> 
                                   -
                                    
                                    
                                    {{-- {{ $headers[0] }} --}}
                                  
                                  <span class=" text-shadow   text-light p-0   m-0 "> 
                                    
                                  @if (!empty($headers[1]))
                                  {{-- <br class="m-0 p-0 "> --}}
                                   {{ $headers[1] }}
                                  @endif
                                  </span>
                      


</div>
</div>
  </div>