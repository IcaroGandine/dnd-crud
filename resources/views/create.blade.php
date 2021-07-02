@extends('templates.template')

@section('content')
   
   <div class="col-8 m-auto">
    <h1> Add Weapon</h1> 
    <form name="formWeapon" id="formWeapon" method="post" action="{{url('weapons')}}"> 
        @csrf

        <div class="row mb-3">
            <div class="col">
                Name: <input name ="name" class="form-control" type="text" placeholder="Default input" maxlength="190" >
            </div>
            <div class="col"> 
                Damage:<input name ="damage" class="form-control" type="text" placeholder="Default input" maxlength="190">
            </div> 

        </div>

        <div class="row mb-3">
            <div class="col">
               Weight: <input  name ="weight" class="form-control" type="text" placeholder="Default input" maxlength="190">
            </div>
            <div class="col"> 
               Type: <input  name ="type" class="form-control" type="text" placeholder="Default input" maxlength="190">
            </div> 

        </div>

        <div class="row mb-3">
            <div class="col">Description: <textarea name ="description" class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="190"></textarea>  </div>
        </div>

        <div class="row">
            <div class="col"> <button type="submit" value="Add Weapon" class="btn btn-primary"> Add Weapon </button></div>
        </div>

        
        
        
        
    </form>

   </div>
    
@endsection