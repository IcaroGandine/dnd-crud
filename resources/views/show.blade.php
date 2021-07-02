@extends('templates.template')

@section('content')
   
    <div class="mt-4 d-flex justify-content-center"> 
        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">{{$weapon->type}}</div>
            <div class="card-body">
              <h5 class="card-title">{{$weapon->name}}</h5>
              <p class="card-text">
                  <div class="card-text mb-3">  <b> Weight: {{$weapon->weight}} lbs <br>
                    Damage: {{$weapon->damage}} <br>
                 </b> </div>
                 
                  

                  {{$weapon->description}}
              </p>
            </div>
        </div>
    </div>
@endsection