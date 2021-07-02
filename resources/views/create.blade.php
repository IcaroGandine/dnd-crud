@extends('templates.template')

@section('content')
   
   <div class="col-8 m-auto">
    <h1> Add Weapon</h1> 
    <form name="formWeapon" id="formWeapon" method="post" action="{{url('weapons')}}"> 
        @csrf

        <div class="row mb-3">
            <div class="col">
                Name: <input class="form-control" type="text" placeholder="Default input" maxlength="190" >
            </div>
            <div class="col"> 
                Damage:<input class="form-control" type="text" placeholder="Default input" maxlength="190">
            </div> 

        </div>

        <div class="row mb-3">
            <div class="col">
               Weight: <input class="form-control" type="text" placeholder="Default input" maxlength="190">
            </div>
            <div class="col"> 
               Type: <input class="form-control" type="text" placeholder="Default input" maxlength="190">
            </div> 

        </div>

        <div class="row">
            <div class="col">Description: <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="190"></textarea> </div>
            
        </div>

        
        
        
        
    </form>

   </div>
    
@endsection