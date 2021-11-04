@extends('adminapp.master')

@section('content')
<div class="card-body- table-responsive p-8">

<table class="table table-hover text-nowrap">
    <thead class="">
        <tr>
            <td>ID</td>
            <td>NAMA</td>
            <td>HARGA</td>
            <td>JUMLAH</td>
            <td>ACTION</td>
        </tr>
    </thead>
    <tbody>
        @foreach($getproducts as $item)
        <tr>

            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->harga }}</td>
            <td>{{ $item->jumlah }}</td>
            <td><a href=" {{route('produkDelete', $item->id)}} " class="btn btn-flat btn-danger">Hapus</a></td>
        </tr>
        @endforeach
    </tbody>
</table>


</div>
@endsection

