<br>
{{-- <button class="    text-white " wire:click='changeorder(0)'>{{ $basenew[0] }}</button>
<button wire:click='changeorder(1)'>{{ $basenew[1] }}</button>
<button wire:click='changeorder(2)'>{{ $basenew[2] }}</button>
<button wire:click='changeorder(3)'>{{ $basenew[3] }}</button> --}}

<select class="form-control p-0 m-0 w-100" wire:click='chooseschoolfun' wire:model.lazy='schoolchoose'>
    <option value=""> اختر</option>
    @foreach ($listall->where("listdev_id","7") as $item)

    <option>{{ $item->list_item_ar }}</option>
    @endforeach

</select>
<button wire:click='chooseschoolfun'>choose</button>

<br>
schoolchoose{{$schoolchoose}}


<br>
{{-- {{($USER_IDSARRAY_ORDER)? $USER_IDSARRAY_ORDER:'' }} --}}

<br>
counterh{{$counterh}}
<button wire:click='increament'>increament</button>
<br>

<br>
<button wire:click='creatarray'>creatarray</button>
<table class="table table-hover table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>#</th>

            <th>school</th>
            <th>name</th>
            <th>old order</th>
            <th>new order</th>

        </tr>
    </thead>
    <tbody>
        <?php
     
    //  $USER_IDSARRAY_ORDER=[] ;
    
    ?>

        {{-- @if (!$USER_IDSARRAY_ORDER==null )

        @foreach ($USER_IDSARRAY_ORDER as $item)
        {{$item}} <br>
        @endforeach
        @endif --}}
        @if (!$schoolchoose==null && !$userscollectionmain==null && !$userscollection==null)

        {{-- ===================================== --}}
        @foreach ($userscollection->where('school',$schoolchoose) as $item)
        {{-- @foreach ($userscollection->where('school',$schoolchoose) as $item) --}}
        <?php
// $array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search($item->user_id, $USER_IDSARRAY_ORDER_orignal);
if ($key) {
  return;  
}else{

    array_push($USER_IDSARRAY_ORDER_orignal,$item->user_id );
    print_r($USER_IDSARRAY_ORDER_orignal);
}
?>
        <tr>
            <td scope="row">{{$counter++}}</td>

            {{-- <td>{{!! $userscollectionmain->where('user_id', $item->user_id)->first()->name_ar !!}}</td> --}}
            <td>{{$item->school}}</td>
            <td> {{ !empty( $userscollectionmain->where('user_id', $item->user_id)->first()) ?
                $userscollectionmain->where('user_id', $item->user_id)->first()->name_ar:'' }}</td>
            {{-- <td>{{$userscollectionmain->where('user_id', $item->user_id)->first()->name_ar}}</td> --}}
            <td>{{$counter0++}}</td>

            <td><button wire:click='changeorder({{$counterh}},{{$item->user_id}})'> DD </button>
                {{$counter55}}-{{$counter0}}
                {{-- {{ ($USER_IDSARRAY_ORDER_orignal)?$USER_IDSARRAY_ORDER_orignal :""}} --}}
                {{ ($USER_IDSARRAY_ORDER_orignal)?$USER_IDSARRAY_ORDER_orignal[$counterh]:""}}
                {{-- -{{ $basenew[$counter55] }} --}}
                {{-- -{{ ($basenew[$counter55])?$basenew[$counter55]:"" }} --}}

            </td>
            {{-- {{ ($basenew[$counter0])?$basenew[$counter0]:"" }} --}}
        </tr>
        @endforeach
        <?php
                // $counter0=0 ;
                // $counter05=0 ;
                
                ?>
        @endif
    </tbody>
</table>