@extends('base')

@section('content')
<div class="container mt-4">
    <div class="row">
            <div class="col-lg-12">
                <div class="row"> 
                    <div class="col-lg-3">
                        <div class="ard">
                            <div class="card-header">
                               Seller_Details
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">Seller_name</div>
                                    <div class="col">{{$item->seller_name}}</div>
                                </div>
                                <div class="row">
                                    <div class="col">Seller_contact</div>
                                    <div class="col">{{$item->seller_contact}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border border-muted mt-3 py-1 rounded">
                                <p class="lead">{{$item->address}} ({{$item->city}})</p>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{asset('products/'.$item->image)}}" class="card-img-top" style="object-fit: cover; height:200px">
                            </div>
                            <div class="col-lg-9 mt-2">
                                <div class="card mb-3">
                                    <div class="card-body">
                                </h4 class="h6">{{$item->price}}</h4>
                                <h6 class="small text-capitalize font-bolder text-truncate"> {{$item->pro_title}}</h6>   
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3 ">
                    <div class="card-header">Product details</div>
                    <div class="card-body">
                        <p class="text-muted">{{$item->description}}</p>
                    </div>
                </div>
             </div>
    </div>
    <div class="row">
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
                    
                </div>
        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection