{{-- بيانات المؤهل  --}}
<div class="container-fluid text-justify" dir="rtl">
  <div class="card bg-light mb-0"  >
      <div class="card-header p-1"> بيانات الدخول للموقع 
      </div>
    <div class="card-body">
        <div class="row">
         
                              <div class={{$class}}>
                              {{-- -------------------------------------- --}}
    
                              <div class="form-group ">
                                <label  >البريد الالكتروني</label>
                                <input  class={{$inputClass}} type="text" name="email" id="acount_email"  autocomplete="off"      	  wire:model.lazy='email' />		

                                        
                                <span> @error('email') <small class="text-danger">{{ $message }}</small> @enderror</span>
                            </div>
                    
    
                              {{-- -------------------------------------- --}}
    
                              </div>
                              <div class={{$class}} >
                              {{-- -------------------------------------- --}}
    
                              <div class="form-group">
                                <label  > الرقم السري</label>
                                <input  class={{$inputClass}} type="text" name="acount_password" id="acount_password"  autocomplete="off" value="12345678"  readonly    >
                               </div>
                              {{-- -------------------------------------- --}}
                              </div>
                              <div class={{$class}}>
                                  {{-- -------------------------------------- --}}
                                  <label> Active</label>
                                  <input class={{$inputClass}} type="text" id="acount_Active" name="acount_Active" value="Not Active" readonly/>
                                  <span> @error('notesqualify') <small class="text-danger">{{ $message }}</small> @enderror</span>
                                  {{-- -------------------------------------- --}}
                              </div>
                              <div class={{$class}}>
                                  {{-- -------------------------------------- --}}
                                  <label>Block user</label>
                                  <select    class="form-control p-0 m-0 w-100" wire:model.lazy='blocked' >
                                    <option  value="0">UnBlocked</option>
                                    <option  value="1">Blocked</option>
                                    
                                  </select>
                                  {{-- <input class={{$inputClass}} type="text" id="acount_Active" name="acount_Active" value="Not Active" readonly/> --}}
                                  <span> @error('blocked') <small class="text-danger">{{ $message }}</small> @enderror</span>
                                  {{-- -------------------------------------- --}}
                              </div>
                              <div class={{$class}}>
                                  {{-- -------------------------------------- --}}
                                  <label> صلاحيات الدخول</label>
                                  <select    class="form-control p-0 m-0 w-100" wire:model.lazy='user_type' >
                                      <option  value=""> اختر</option>
                                      @foreach ($listall->where("listdev_id","14") as $item)
                                      <option>{{ $item->list_item_ar }}</option>
                                      @endforeach
                                    </select>
                                  
                                   
                            
                                  
                                  {{-- <input class={{$inputClass}} type="text" id="acount_type" name="acount_type" value="user" /> --}}
                                  <span> @error('user_type') <small class="text-danger">{{ $message }}</small> @enderror</span>
                                  {{-- -------------------------------------- --}}
                              </div>

                              <div class={{$class}}>
                                {{-- -------------------------------------- --}}
                                <label> اللغة المفضلة</label>

                                    <select    class="form-control p-0 m-0 w-100" 
                                    wire:model.lazy='lang' 
                                    >
                                     <option  value=""> اختر</option>
                                    @foreach ($listall->where("listdev_id","16") as $item)
                              
                                    <option>{{ $item->list_item_ar }}</option>
                                    @endforeach
                                    
                                  </select>

                                {{-- <input class={{$inputClass}} type="text" id="acount_lang" name="acount_lang" value="Ar" /> --}}
                                <span> @error('lang') <small class="text-danger">{{ $message }}</small> @enderror</span>
                                {{-- -------------------------------------- --}}
                            </div>

                            <div class={{$class}}>
                              {{-- -------------------------------------- --}}
                              <label> name</label>
                              <input class={{$inputClass}} type="text" id="acount_name" name="acount_name"  value=""  wire:model='name'/>
                              <span> @error('name') <small class="text-danger">{{ $message }}</small> @enderror</span>
                              {{-- -------------------------------------- --}}
                          </div>

                          {{-- <div class={{$class}}>
                             <label> notes</label>
                            <input class={{$inputClass}} type="text" id="notesmaindata" name="notes" value="" wire:model='notesmaindata'/>
                            <span> @error('notesmaindata') <small class="text-danger">{{ $message }}</small> @enderror</span>
                         </div> --}}

                              
                              
              </div>
          </div>
      </div>
  </div>

{{-- 

<div class="form-group">
  <label for="">job</label>
  <input type="text" class="form-control" name="job" id="job" aria-describedby="helpId" placeholder="">
  <small id="helpId" class="form-text text-muted">Help text</small>
</div>

<div class="form-group">
  <label for="">year</label>
  <input type="text" class="form-control" name="year" id="year" aria-describedby="helpId" placeholder="">
  <small id="helpId" class="form-text text-muted">Help text</small>
</div>

<div class="form-group">
  <label for="">school</label>
  <input type="text" class="form-control" name="school" id="school" aria-describedby="helpId" placeholder="">
  <small id="helpId" class="form-text text-muted">Help text</small>
</div>

<div class="form-group">
  <label for="">stage</label>
  <input type="text" class="form-control" name="stage" id="stage" aria-describedby="helpId" placeholder="">
  <small id="helpId" class="form-text text-muted">Help text</small>
</div>

<div class="form-group">
  <label for="">notes</label>
  <input type="text" class="form-control" name="notes" id="notes" aria-describedby="helpId" placeholder="">
  <small id="helpId" class="form-text text-muted">Help text</small>
</div>


--}}
