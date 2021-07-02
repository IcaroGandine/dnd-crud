@extends('templates.template')

@section('content')
   
   <div class="col-8 m-auto">
    <h1> @if (isset($weapon)) Edit Weapon @else Add Weapon @endif </h1> 
    
    @if (isset($weapon)) 
    
    <form name="formWeaponEdit" id="formWeaponEdit" method="post" action="{{url("weapons/$weapon->id")}}"> @method('PUT')
    @else 
    
    <form name="formWeaponCad" id="formWeaponCad" method="post" action="{{url('weapons')}}"> 
    
    @endif
    
        @csrf

        <div class="row mb-3">
            <div class="col">
                Name: <input name ="name" class="form-control" type="text" placeholder="Default input" maxlength="190" value="{{$weapon->name ?? ''}}" >
            </div>
            <div class="col"> 
                Damage:<input name ="damage" class="form-control" type="text" placeholder="Default input" maxlength="190" value="{{$weapon->damage ?? ''}}">
            </div> 

        </div>

        <div class="row mb-3">
            <div class="col">
               Weight: <input  name ="weight" class="form-control" type="text" placeholder="Default input" maxlength="190" value="{{$weapon->weight ?? ''}}">
            </div>
            <div class="col"> 
               Type: <input  name ="type" class="form-control" type="text" placeholder="Default input" maxlength="190" value="{{$weapon->type ?? ''}}">
            </div> 

        </div>

        <div class="row mb-3">
            <div class="col">Description: <textarea  name ="description" class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="190" >{{$weapon->description ?? ''}}</textarea>  </div>
        </div>

        <div class="row">
            <div class="col"> <button type="submit" value="Add Weapon" class="btn btn-primary"> @if (isset($weapon)) Edit Weapon @else Add Weapon @endif </button></div>
        </div>

        
        
        
        
    </form>

   </div>
    
@endsection