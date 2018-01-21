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


		<br>
		<br>
		<div class="row">
					<div class="col-lg-3" style="padding: 10px;">
					@if (Auth::user()->type == 2)
						{{-- expr --}}
					<a href="{{ url('panel/daftar-soal/dari-saya') }}">
					@else
					<a href="{{ url('panel/daftar-soal/dari-orangtua') }}">
					
					@endif
						<div class="card">
							<div class="card-body">
							@if (Auth::user()->type == 2)
							<center><h3>Dari Saya</h3></center>
							@else
							<center><h3>Dari Orangtua</h3></center>
							@endif
							</div>
						</div>
						</a>
					</div>

				@foreach ($data as $d)
					<div class="col-lg-3" style="padding: 10px;">
					<a href="{!! url("/panel/daftar-soal/".$d['permalink'].'-'.$d['id']) !!}">
						<div class="card">
							<div class="card-body">
							<center><h3>{{$d['name']}}</h3></center>
							</div>
						</div>
						</a>
					</div>
				@endforeach

		</div>
	</div>
</div>
</div>
@endsection