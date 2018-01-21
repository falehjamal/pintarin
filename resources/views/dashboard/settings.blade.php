@extends('dashboard.dashboard')

@section('content')
<div class="container">
<div class="card">
	<div class="card-body">

   @if (Session::has('success'))
    @component('alerts.success')
    @slot('title')
    {{session('success')}}
    @endslot
@endcomponent
  <br>
    @endif
			<div class="row">
				<div class="col-lg-6">
					<form action="{{ url('/panel/pengaturan') }}" method="post">
					{{csrf_field()}}
					{{method_field('POST')}}
						<label>Nama</label>
						<input type="text" name="name" class="form-control" value="{{$data->name}}">
						<label>Email</label>
						<input type="email" name="email" class="form-control" value="{{$data->email}}">
						<label>Username</label>
						<input type="text" name="username" class="form-control" readonly value="{{$data->username}}">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
						<label>Nomor Hp</label>
						<input type="number" name="phone" class="form-control" value="{{$data->phone}}">
						<label>Jenis Kelamin</label>
						<select class="form-control" name="gender">
							<option {{$data->gender == 'laki-laki' ? 'selected' : ''}} value="laki-laki">Laki - Laki</option>
							<option {{$data->gender == 'perempuan' ? 'selected' : ''}} value="perempuan">Perempuan</option>
						</select>
						<label>Alamat</label>
						<textarea name="address" class="form-control">{{$data->address}}</textarea>
						<br>
						<button class="btn btn-success">Simpan</button>
					</form>
				</div>
			</div>
	</div>
</div>
</div>
@endsection