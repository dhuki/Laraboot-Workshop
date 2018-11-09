@extends('layouts.app')

@section('content')

<div class="box box-primary">
    <div class="box-header">
      <h3 class="box-title">Input Kegiatan</h3>
    </div>
    <div class="box-body">
        <form role="form" method="post" action="{{ route('store') }}">
            @csrf
            <div class="form-group">
                <label>Jenis Kegiatan</label>
                <select class="form-control" name= "jenis_kegiatan">
                    <option>Kuliah</option>
                    <option>Lab</option>
                    <option>UKM</option>
                    <option>HIMA</option>
                    <option>Refreshing</option>
                </select>
            </div>
            <div class="form-group">
                <label>Tanggal Kegiatan</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" name="tanggal_kegiatan">
                </div>
            </div>
            <div class="form-group">
                <label>Deskripsi Kegiatan</label>
                <textarea class="form-control" name="deskripsi_kegiatan" rows="3" placeholder="Enter ..."></textarea>
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
