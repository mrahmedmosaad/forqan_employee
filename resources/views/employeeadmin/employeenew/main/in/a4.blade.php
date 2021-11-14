{{-- بيانات خاصة بدولة القدوم  --}}
<div class="container-fluid text-justify" dir="rtl">
  <div class="card bg-light mb-0">
    <div class="card-header p-1">بيانات خاصة بدولة القدوم </div>
    <div class="card-body">
      <div class="row">
        {{-- -------------------------------------- --}}
        
        <div class={{$class}}>
          <div class="form-group ">
                <label>هاتف أحد الأقارب </label>
                <input class={{$inputClass}} type="text" name="relative_phone"  autocomplete="off" value=""  wire:model.lazy='relative_phone' />
                @error('relative_phone') <small class="text-danger">{{ $message }}</small> @enderror
          </div>
        </div>
        
        {{-- -------------------------------------- --}}

        <div class={{$class}}>
          <div class="form-group">
                <label> جوال أحد الأقارب</label>
                <input class={{$inputClass}} type="text" name="relative_mobile"   autocomplete="off" value=""  wire:model.lazy='relative_mobile' />
                @error('relative_mobile') <small class="text-danger">{{ $message }}</small> @enderror
          </div>
        </div>
        {{-- -------------------------------------- --}}

        <div class={{$class}}>
          <label> صفة القرابة</label>
          <input class={{$inputClass}} type="text" id="relative_type" name="relative_type" value="" wire:model.lazy='relative_type' />
            
          @error('relative_type') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        {{-- -------------------------------------- --}}

        </div>
      </div>
    </div>
  </div>
 
