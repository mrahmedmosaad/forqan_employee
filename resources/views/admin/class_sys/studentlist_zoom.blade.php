


<svg version="1.1" 
onclick="copyToClipboard(document.getElementById('ZOOMLINK1').value)"

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



<br>


{{-- @if ($showzoomlink==1) --}}
{{-- <button onclick="copymytext('mytextbox_id1')">copy</button> --}}

@if (substr($class_name , 0, 1)==5)

<input type="text" id="ZOOMLINK1"  
style="font-size:12px;width:600px"
value="https://zoom.us/j/95862819989?pwd=V3lIa2FXQnVFL0pxNzZyYytKbFkwZz0">

<textarea name="" id="" cols="60" rows="5" style="font-size:12px">https://zoom.us/j/95862819989?pwd=V3lIa2FXQnVFL0pxNzZyYytKbFkwZz0


Meeting ID: 922 3853 8813
Passcode: 1234
(Math) - Grade 5 link 
</textarea>





@else

<input type="text"  id="ZOOMLINK1"  
style="font-size:12px;width:600px"
value="https://zoom.us/j/99586328937?pwd=VWxncnhZZlVNY3hMQmJ2TjNWbWcydz09">

<textarea name="" id="" cols="60" rows="5" style="font-size:12px;">https://zoom.us/j/99586328937?pwd=VWxncnhZZlVNY3hMQmJ2TjNWbWcydz09


Meeting ID: 995 8632 8937
Passcode: 1234

(Math) - Grade 6 link
</textarea>





       



@endif
{{-- @endif --}}

