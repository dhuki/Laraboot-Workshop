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
        @if(count($activity) >= 1)
          @foreach($activity as $activity)
            <tr>
              <td> {{ $activity->jenis_kegiatan }} </td>
              <td> {{ $activity->tanggal_kegiatan }} </td>
              <td> {{ $activity->deskripsi_kegiatan }} </td>
              <td> {{ $activity->keterangan }} </td>
              <td>
								<button type="submit" class="btn btn-danger"><i class="fa fa-close"></i></button>
								<form role="form" method="post" action="{{ route('destroy', $activity) }}">
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
