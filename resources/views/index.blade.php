@extends('templates.template')

@section('content')
    <h1 class="text-center"> Weapons Test! </h1>

    <div class="text-center mb-2 mt-3"> <button type="button" class="btn btn-success">+ Add Weapon +</button> </div>

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
                            <button type="button" class="btn btn-primary">View</button>
                            <button type="button" class="btn btn-warning">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach   
            </tbody>
            
        
           
          
        </table>
    </div>
@endsection