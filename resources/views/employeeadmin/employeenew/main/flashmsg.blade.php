
@if (session()->has('message'))
        <style>
            
            .hideMeAfter5Seconds {
  animation: hideAnimation 0s ease-in 2s;
  animation-fill-mode: forwards;
}
            .showMeAfter5Seconds {
  animation: showAnimation 0s ease-in 1s;
  animation-fill-mode: forwards;
}

@keyframes hideAnimation {
  to {
    visibility: hidden;
    /* width: 0;
    height: 0; */
  }
}
@keyframes showAnimation {
  to {
    visibility:visible ;
    /* width: 0;
    height: 0; */
  }
}
            .flashmsgbar {
      overflow: hidden;
      background-color: rgba(48, 43, 43, 0.11);
      position: fixed;
      top:  10px;
      /* width: 100%; */
      pointer-events: none;
      padding: 1px;
      text-align: center;
      z-index: 9999999;
    }
     .flashmsgbardiv {
      overflow: hidden;
      background-color: rgba(48, 43, 43, 0);
      position: fixed;
      top:  10px;
      /* width: 100%; */
      pointer-events: none;
      /* padding: 1px; */
      text-align: center;
      z-index: 9999999;
    }


        </style>
      
     {{-- <div class=" w-25   " > msg: --}}
        
            <div class="flashmsgbardiv w-100">
              {{-- <span class=" m-2 fa fa-check text-{{ $flashmessagestatus }}"><span id="hideMeAfter5Seconds p-2 "  class="flashmsgbar text-sm  {{$hideMeAfter5Seconds}}  hideMeAfter5Seconds text-center alert   alert-{{ $flashmessagestatus }}"> {{ session('message') }}</span> --}}
              <span id="hideMeAfter5Seconds p-2 "  class="flashmsgbar text-sm  {{$hideMeAfter5Seconds}}  hideMeAfter5Seconds text-center alert   alert-{{ $flashmessagestatus }}">
                
                <span class=" m-2 fa fa-{{($flashmessagestatus=="success")? "check":"exclamation"}} text-{{ $flashmessagestatus }}"></span>
                {{ session('message') }}</span>
            
            
            
            </div>

 @else  
   <div class="flashmsgbar">
<span  class="   text-center alert  alert-{{ $flashmessagestatus }}">{{ session('message') }}</span>
</div>
            @endif
            
            
        {{-- </div> --}}