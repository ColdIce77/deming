@extends("layout")

@section("title")
Ajouter un domaine
@endsection

@section("content")
	@if (count($errors))
	<div class= “form-group”>
		<div class= “alert alert-danger”>
			<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		</div>
	</div>
	@endif

	<form method="POST" action="/domains">
	@csrf
	<div class="grid">
    	<div class="row">
    		<div class="cell-1">
	    		<strong>Nom</strong>
	    	</div>
    		<div class="cell-5">
				<input type="text" name="title" placeholder="title" value="{{ old('title') }}" size='25'>
			</div>
		</div>

    	<div class="row">
    		<div class="cell-1">
	    		<strong>Description</strong>
	    	</div>
    		<div class="cell-5">
				<textarea name="description" rows="5" cols="80">{{ old('description') }}</textarea>
			</div>
		</div>

    	<div class="row">
    		<div class="cell-5">
				<button type="submit" class="button success">Sauver</button>
				<button type="submit" class="button" onclick='this.form.action="/domains";'>Annuler</button>
			</div>
		</div>	
	</form>

@endsection

