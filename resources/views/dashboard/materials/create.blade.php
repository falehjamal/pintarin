@extends('dashboard.dashboard')

@section('content')
<div class="container">
<div class="card">
	<div class="card-body">
		<h3>Buat Materi</h3>
		<div class="row">
			<div class="col-lg-5">
				<form action="{{ route('daftar-materi.store') }}" method="post">
				{{csrf_field()}}
				<label>Judul</label>
					<input type="text" name="name" class="form-control">
				<label>Materi</label>
				<textarea class="form-control" name="content"></textarea><br>
				<label>Mata Pelajaran</label>
				<select class="form-control" name="subjects">
				@foreach ($subjects as $subject)
					<option value="{{$subject->id}}">{{$subject->name}}</option>
				@endforeach
				</select>
				<br>
				<label>Jenjang</label>
				<select class="form-control" name="levels">
				@foreach ($levels as $level)
					<option value="{{$level->id}}">{{$level->name}}</option>
				@endforeach
				</select>
				<br>
				<br>
				<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
@endsection