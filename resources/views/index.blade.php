@extends('templates.template')

@section('content')
    <h1 class="text-center"> Weapons Test! </h1>

    <div class="text-center mb-2 mt-3"> <a href ="{{url("weapons/create")}}"> <button type="button" class="btn btn-success">+ Add Weapon +</button> </a> </div>

    <div class="text-center"> 
        <table class="table table-hover">
            <thead>  
                <tr> 
                    <th> ID </th>
                    <th> Name</th> 
                    <th> Weight </th>
                    <th> Type </th>  
                    <th> Damage </th>  
                    <th> Actions</th>   
                </tr>  
            </thead>
            <tbody>
                @foreach ($weapon as $weapons )
                    <tr>
                        <th>
                            {{$weapons->id}}
                        </th>
                        <td>
                            {{$weapons->name}}
                        </td>
                        <td>
                            {{$weapons->weight}}
                        </td>
                        <td>
                            {{$weapons->type}}
                        </td>
                        <td>
                            {{$weapons->damage}}
                        </td>
                        <td>
                            <div class="row justify-content-center"> 
                                <div class="col-sm-2"> <a href ="{{url("weapons/$weapons->id")}}">  <button type="button" class="btn btn-primary">View</button></a> </div>
                                <div class="col-sm-2"> <a href ="{{url("weapons/$weapons->id/edit")}}"><button type="button" class="btn btn-warning">Edit</button> </a>  </div>
                                <div class="col-sm-2"> <form name="formWeaponDelete" id="formWeaponDelete" method="post" action="{{url("weapons/$weapons->id")}}"> @method("delete") 
                                    @csrf
                                     <button type="submit" class="btn btn-danger">Delete</button>
                                </form> 
                            </div>
                            </div>
                            
                            
                            
                        </td>
                    </tr>
                @endforeach   
            </tbody>
            
        
           
          
        </table>
    </div>
@endsection