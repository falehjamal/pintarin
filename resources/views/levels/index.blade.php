@extends('dashboard')

@section('content')
    <div class="jumbotron">
    <a href="levels/create" class="btn btn-primary">Tambah</a>
    @if (Session::has('success'))
    @component('alerts.success')
    @slot('title')
    {{session('success')}}
    @endslot
@endcomponent
  <br>
    @endif
    <h4>{{$title}}</h4>
    <table class="table table-hover">
      <thead>
        <th>#</th>
        <th>Nama</th>
        <th>Opsi</th>
      </thead>
      <tbody>
      @foreach ($datas as $data)
        <tr>
          <td>{{$no++}}</td>
          <td>{{$data->name}}</td>
          <td>

          <a class="btn btn-warning" href="{{$url.'/'.$data->id.'/edit' }}">Edit</a>
          <form action="{{@url('admin/levels/'.$data->id)}}" method="post" style="display: inline-block;">
          {{method_field('DELETE')}}
          {{csrf_field()}}
          <button type="submit" class="btn btn-danger">Hapus</button></td>
          </form>
        </tr>
      @endforeach
      </tbody>
    </table>
    </div>
@endsection