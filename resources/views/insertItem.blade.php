@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        @foreach ($errors as $item)
                            {{$item}}
                        @endforeach
                    <form action="{{ route('insert') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 text-center">
                            <label class="text-center h1 text-success">Insert Item</label>
                        </div>
                        <div class="mb-3">
                            <label>title</label>
                            <input type="text" name="title" class="form-control" value="{{old('title')}}">
                            @error('title')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>price</label>
                            <input type="text" name="price" class="form-control" value="{{old('price')}}">
                            @error('price')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>seller_name</label>
                            <input type="text" name="seller_name" class="form-control" value="{{old('seller_name')}}">
                            @error('seller_name')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>seller_contact</label>
                            <input type="text" name="seller_contact" class="form-control" value="{{old('seller_contact')}}">
                            @error('seller_contact')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>address</label>
                            <input type="text" name="address" class="form-control" value="{{old('address')}}">
                            @error('address')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>city</label>
                            <input type="text" name="city" class="form-control" value="{{old('city')}}">
                            @error('city')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>image</label>
                            <input type="file" name="image" class="form-control" value="{{old('image')}}">
                            @error('image')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>category</label>
                            <select name="category" class="form-control">

                                <option value="0">Select Category</option>
                                @foreach($cat as $c)
                                 @php
                                   if($c->parent_id == 0){
                                   $flag = 1;
                                   }
                            else{
                                    $flag = 0;
                            }
                        
                            
                                 @endphp

                                <option value="{{$c->id}}" <?=($flag == 1)? "disabled": " ";?>>{{$c->title}}</option>
                                @endforeach
                            </select>
                            <a href="#cat" class="nav-link" data-bs-toggle="modal">Create new category</a>
                            @error('category')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>description</label>
                            <textarea name="description" id="" row="10" class="form-control">{{old('description')}}</textarea>
                            
                        </div>
                        <div class="mb-3">
                            <input type="submit" name="insert" class="btn btn-success w-100">
                        </div>

                    </form>
                    <div class="modal fade" id="cat">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <form action="{{route('insertcat')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label>main category</label>
                                    <select name="parent" class="form-control">
                                        <option value="0">Select Main Category</option>
                                        @foreach($main as $cat)
                                            <option value="{{$cat->id}}">{{$cat->title}}</option>
                                        @endforeach
                                    </div>
                                    <div class="mb-3">
                                    <input type="text" name="title" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <input type="submit" name="submit" class="btn btn-success">
                                </div>
                                
        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection