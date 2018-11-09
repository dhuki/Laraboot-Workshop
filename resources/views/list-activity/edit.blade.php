@extends('layouts.app')

@section('content')

<div class="box box-primary">
    <div class="box-header">
      <h3 class="box-title">Edit Kegiatan</h3>
    </div>
    <div class="box-body">
        <form role="form" method="post" action="{{ route('update', $activity) }}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label>Jenis Kegiatan</label>
                <select class="form-control" name= "jenis_kegiatan">
                    <option <?php if($activity->jenis_kegiatan == 'option 1') { echo "selected"; } ?>>option 1</option>
                    <option <?php if($activity->jenis_kegiatan == 'option 2') { echo "selected"; } ?>>option 2</option>
                    <option <?php if($activity->jenis_kegiatan == 'option 3') { echo "selected"; } ?>>option 3</option>
                    <option <?php if($activity->jenis_kegiatan == 'option 4') { echo "selected"; } ?>>option 4</option>
                    <option <?php if($activity->jenis_kegiatan == 'option 5') { echo "selected"; } ?>>option 5</option>
                </select>
            </div>
            <div class="form-group">
                <label>Tanggal Kegiatan</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" name="tanggal_kegiatan" value="{{ $activity->tanggal_kegiatan }}">
                </div>
            </div>
            <div class="form-group">
                <label>Deskripsi Kegiatan</label>
                <textarea class="form-control" name="deskripsi_kegiatan" rows="3" placeholder="Enter ...">{{ $activity->deskripsi_kegiatan }}</textarea>
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <select class="form-control" name= "keterangan">
                    <option <?php if($activity->keterangan == 'To Do') { echo "selected"; } ?>>To Do</option>
                    <option <?php if($activity->keterangan == 'Doing') { echo "selected"; } ?>>Doing</option>
                    <option <?php if($activity->keterangan == 'Done') { echo "selected"; } ?>>Done</option>
                </select>
            </div>
            <!-- textarea -->
            <div class="box-footer">
                <div class="pull-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <!-- /.box-body -->
</div>
<!-- /.box -->

@endsection
