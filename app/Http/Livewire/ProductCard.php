<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductCard extends Component
{
    public $pro;
    public function render()
    {
        return <<<'blade'
            <div>
            <div class="card">
                <img src="{{asset('products/'.$pro->image)}}" class="card-img-top" style="object-fit: cover; height:200px">
                <div class="card-body">
            </h4 class="h6">{{$pro->price}}/-</h4>
            <h6> {{$pro->title}}</h6>
            <a href=" " class="nav-link stretched-link">know more</a>

            </div>
        </div>
        </div>
        blade;
    }
}
