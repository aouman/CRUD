@extends('layaout.heard')
@section('content')
        
    <div class="col-sm-4">
        <div class="card">
            <div class="image">
              <img src="http://loremflickr.com/320/150?random=4" />
              <h1>Montrez le produit :{{ $produit->title }}</h1>
            </div>
            <div class="card-inner">
                <div class="header">
                    <h2>{{ $produit->title }}</h2>
                </div>
                <div class="content">
                    <p>{{$produit->description}}</p>
                </div>
            </div>
            <div>
                <div></div>
                <div></div>
            </div>
        </div>
            
    </div>
      
    @endsection