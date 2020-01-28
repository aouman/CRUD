@extends('layaout.formcreate')
@section('formcontent')

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{url('produits', [$produit->id])}}" method="post">
                <input type="hidden" name="_method" value="PUT">
					{{csrf_field()}}
                    <span class="login100-form-title p-b-26">
						modifiez vos produits ici.
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" value="{{$produit->title}}" type="text" name="title" id="produitTitle">
						<span class="focus-input100" data-placeholder="titre"></span>
					</div>

					<div class="wrap-input100 validate-input">

						<input class="input100" value="{{$produit->description}}"  type="text" name="description" id="produitDescription">
						<span class="focus-input100" data-placeholder="Description"></span>
					</div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                          @endif

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Modifiez
							</button>
						</div>
					</div>


				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

@endsection
