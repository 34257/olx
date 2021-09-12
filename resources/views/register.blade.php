@extends('base')

@section('content')
<div class="conyainer mt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h6>Create an Account </h6>
                    <form action="{{route('register')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for=""> Email</label>
                                <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                        </div>
                       
                        <div class="mb-3">
                                <input type="submit"  class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection