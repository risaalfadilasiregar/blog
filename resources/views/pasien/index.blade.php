@extends('layouts.app')
@section('content')
<div class="right_col" role="main">

    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Data Pasien</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <a href="{{Route('pasien.create')}}"><button class="btn btn-info" type="submit">Tambah Data</button></a>
                            <table id="datatable-keytable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>NOMOR</th>
                                        <th>JENIS PERAWATAN</th>
                                        <th>NAMA PASIEN</th>
                                        <th>ALAMAT PASIEN</th>
                                        <th>OPTION</th>
                                    </tr>
                                </thead>
                                @php 
                                    $nomor = 1;
                                @endphp
                                @foreach ($pasien as $data)
                                <tbody>
                                    <tr>
                                        <td>{{$nomor++}}</td>
                                        <td>{{$data->rawat->jenis_rawat}}</td>
                                        <td>{{$data->nama_pasien}}</td>
                                        <td>{{$data->alamat_pasien}}</td>
                                        <td>
                                            <button class="btn-brand"><a href="{{Route('pasien.edit',$data->id_pasien)}}">Edit</a></button>
                                            <form action="{{Route('pasien.destroy','$data->id_pasien')}}" method="POST">
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