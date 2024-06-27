@extends('admin.layout.index')

@section('content')
<a href="{{route('create')}}">Tambah data</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Judul</th>
            <th scope="col">Pengarang</th>
            <th scope="col">Konten</th>
            <th scope="col">Aksi</th>

        </tr>
    </thead>
    <tbody>
        @foreach($buku as $i)
        <tr>
            <th scope="row">{{$c++}}</th>
            <td>{{$i->judul}}</td>
            <td>{{$i->pengarang}}</td>
            <td>{{$i->konten}}</td>
            <td>
                <div style="display:flex">
                    <a href="{{route('edit', $i->id)}}" class="btn btn-danger">Edit</a>
                    <a href="{{route('products.show', $i->id)}}" class="btn btn-success">Detail</a>
                    <form action="{{route('delete', $i->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        &nbsp&nbsp
                        <button class="btn btn-warning" type="submit">Hapus</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection