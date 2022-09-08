@extends('layouts.app')
@section('content')
<div class="right_col" role="main">

    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Tindakan</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <a href="{{Route('obat.create')}}"><button class="btn btn-info" type="submit">Tambah Data</button></a>
                            <table id="datatable-keytable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>NOMOR</th>
                                        <th>Nama Obat</th>
                                        <th>Jenis Obat</th>
                                        <th>Stok Obat</th>
                                        <th>OPTION</th>
                                    </tr>
                                </thead>
                                @php 
                                    $nomor = 1;
                                @endphp
                                @foreach ($obat as $data)
                                <tbody>
                                    <tr>
                                        <td>{{$nomor++}}</td>
                                        <td>{{$data->nama_obat}}</td>
                                        <td>{{$data->jenis_obat}}</td>
                                        <td>{{$data->stok_obat}}</td>
                                        <td>
                                            <button class="btn-brand"><a href="{{Route('obat.edit',$data->id)}}">Edit</a></button>
                                            <form action="{{Route('obat.destroy','$data->id')}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Hapus" class="btn-dark">
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>''
</div>
@endsection