{{-- @extends('base') 

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-12 ">

                <div class="row">
                @foreach ($cat as $c)
                @php
                if($c->child->count()< 1)
                continue;

            @endphp
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">{{$c->title}}</div>
                        <div class="card-body">
                          <ul>

                            @foreach ($c->child as $p)
                            <li><a href="{{route('filter',['id'=>$p->id])}}">{{$p->title}}</a></li>
                            @endforeach
                        </ul>

                        </div>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
       
    </div>
</div>
@endsection
 --}}
 @extends('base')
 @section('content')
 @livewire("cat-layout",["cat"=>$cat])

 @livewire('product-layout',["pro"=>$product])
 @endsection