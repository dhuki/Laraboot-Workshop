@extends('layouts.app')

@section('content')

<div class="box">
	<div class="box-header">
      <h3 class="box-title">List Kegiatan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Jenis Kegiatan</th>
          <th>Tanggal Kegiatan</th>
          <th>Deskripsi Kegiatan</th>
          <th>Keterangan</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @if(count($listActivity) >= 1)
          @foreach($listActivity as $Activity)
            <tr>
              <td> {{ $Activity->jenis_kegiatan }} </td>
              <td> {{ $Activity->tanggal_kegiatan }} </td>
              <td> {{ $Activity->deskripsi_kegiatan }} </td>
              <td> {{ $Activity->keterangan }} </td>
              <td>
                <form role="form" method="post" action="{{ route('destroy', $Activity) }}">
                    @csrf
                    <div class="form-group">
                      <button type="submit" class="btn btn-danger"><i class="fa fa-close"></i></button>
                    </div>
                </form>
              </td>
            </tr>
          @endforeach
        @else
          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
        @endif
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

@endsection