@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Sukurti įraša</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Atgal</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
        <strong>Klaida!</strong> Rašydami padarėte klaidaĄ.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('products.store') }}" method="POST">
    	@csrf


         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Vardas:</strong>
		            <input type="text" name="name" class="form-control" placeholder="Vardas">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Komentaras:</strong>
		            <textarea class="form-control" style="height:150px" name="detail" placeholder="Komentaras"></textarea>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <br>
		            <button type="submit" class="btn btn-primary">Patvirtinti</button>
		    </div>
		</div>


    </form>
@endsection