@extends('admin.layout.index')

@section('content')
<form action="{{route('update', $edit->id)}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Judul</label>
        <input type="text" class="form-control" name="judul" value="{{$edit->judul}}" id="exampleInputEmail1"
            aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Pengarang</label>
        <input type="text" class="form-control" name="pengarang" value="{{$edit->pengarang}}"
            id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Konten</label>
        <input type="text" class="form-control" name="konten" value="{{$edit->konten}}" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection