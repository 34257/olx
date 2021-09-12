@extends('base')

@section('content')
<div class="container mt-4">
    <div class="col-lg-12">
        <div class="row">

            <div class="col-9">
                <div class="row">
                    @foreach($pro as $item)
                    <div class="col-3 mt-2">
                        <div class="card">
                            <img src="{{asset('products/'.$item->image)}}" class="card-img-top" style="object-fit: cover; height:200px">
                            <div class="card-body">
                        </h4 class="h6">{{$item->price}}</h4>
                        <h6> {{$item->pro_title}}</h6>
                        <a href="{{route('view',['itemId'=>$item->id,"catId"=>$item->category_id])}} " class="nav-link stretched-link">know more</a>
    
                        </div>
                    </div>
                    </div>
                @endforeach
                <div class="col-10 mt-1 mx-auto">
                    {{$pro->links()}}
                </div>
            </div>
    
            </div>
        </div>
    </div>
</div>
</div>
@endsection