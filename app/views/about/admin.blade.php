@extends('layouts.main')

@section('contents')
<div class="row mt">
    <div class="col-md-8 col-md-offset-2">
        <h2>ABOUT</h2>
        <hr>
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        @include('layouts.notifikasi')
    </div>
</div>
<div class="row mt">
    <div class="col-md-8 col-md-offset-2">
        <form method="POST" action="{{$action}}" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <textarea name="contents" class="ckeditor">{{$contents}}</textarea>
            </div>
            <div class="form-group">
                <label>Gambar 1</label>
                <input type="file" name="gambar1"/>
            </div>
            <div class="form-group">
                <label>Gambar 2</label>
                <input type="file" name="gambar2"/>
            </div>
            <div class="form-group">
                <label>Gambar 3</label>
                <input type="file" name="gambar3"/>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Update"/>
            </div>
        </form>
    </div>
</div>

@stop

@section('js')
{{HTML::script('assets/js/ckeditor.js')}}
@stop