@extends('layaout.heard')
@section('content')

    @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <h4>La liste des produits</h4>
        @foreach($produits as $produit)
        <div class="col-sm-4">
          <div class="card">
            <div class="image">
              <img src="http://loremflickr.com/320/150?random=4" />
            </div>
            <div class="card-inner">
              <div class="header">
                <p>{{$produit->id}}</p>
                <h2><a href="/produits/{{$produit->id}}">{{$produit->title}}</a></h2>

            </div>
            <div class="content">
              <p>{{$produit->description}}</p>
            </div>
              </div>
          </div>
            <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="{{ URL::to('produits/' . $produit->id . '/edit') }}">
                  	<button type="button" class="btn btn-warning">Edit</button>
                  </a>&nbsp;
                  <form action="{{url('produits', [$produit->id])}}" method="POST">
          					<input type="hidden" name="_method" value="DELETE">
         						<input type="hidden" name="_token" value="{{ csrf_token() }}">
         						<input type="submit" class="btn btn-danger" value="Delete"/>
         				  </form>
            </div>
        </div>
        @endforeach
    @endsection
