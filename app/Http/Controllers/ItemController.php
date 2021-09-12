<?php

namespace App\Http\Controllers;
use App\Models\item;
use App\Models\category;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Hash;

class ItemController extends Controller
{

    public function index(){
        $data = ["cat"=>Category::all(),"product"=>Item::all()];
        return view('home',$data);
       // ["cat"=>Category::where("parent_id",0)->get(),
        //"pro"=> item::paginate(20)]);
    }
public function filter(Request $req, $id){
    return view("filter",["pro"=> Item::where("category_id",$id)->paginate(25)]); 

}
public function view($itemId,$catId){
    return view("single",["item"=>Item::find($itemId),"pro"=>Item::where("id","!=",$itemId)->where("category_id",$catId)->get()]);
}

public function search(Request $req){
    if($req->search != ""):
    return view("filter",["pro"=>Item::where("pro_title", "LIKE", "%$req->search%")->paginate(20)]);

    else:
     return redirect()->route("homepage");
    endif;
}



public function insert(Request $req){
    if($req->method() == "POST"){
    $req->validate([
        'title'=>'required',
        'seller_contact'=>'required',
    ]);

    $filename = $req->image->getClientOriginalName();
    $req->image->move(public_path("products"),$filename);

    $i = new Item();
    $i->pro_title = $req->title;
    $i->price = $req->price;
    $i->seller_name = $req->seller_name;
    $i->seller_contact = $req->seller_contact;
    $i->category_id = $req->category;
    $i->address = $req->address;
    $i->city = $req->city;
    $i->desc= $req->description;
    $i->image = $filename;
    $i->save();
    return redirect()->route('home');
    }
    return view("insertItem",[
        'cat'=> Category::all(),
        'main'=> Category::Where("parent_id",0)->get()
    ]);

}
public function insertcat(Request $r){
    $r->validate([
        'title' => 'required'

    ]);
    $c = new Category();
    $c->title = $r->title;
    $c->parent_id = $r->parent;
    $c->save();

    return redirect()->route('home');

}

  public function register(Request $req){
    if($req->method() == "POST"){
        $u = new user();
        $u->name = $req->name;
        $u->email = $req->email;
        $u->password = Hash::make($req->password);
        $u->save();
        return redirect()->route("login");
    } 

      return view("register");
  }
  public function login(Request $req){
    if($req->method() == "POST"){
        $user = User::where("email",$req->email)->first();
        
            if(!$user || !Hash::check($req->password, $user->password)){
                return "<script>alert('error : email or password invalid')</script>";
        
        }
        else{
            //storing session
            $req->session()->put("login",$req->email);
            //redirecting 
            return redirect()->route('insert');
        }
        
    }
      return view("login");
  }
public function logout(Request $req){
    $req->session()->flush();
    return redirect()->route('home');
}

}

