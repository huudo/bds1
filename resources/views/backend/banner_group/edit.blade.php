@extends('layouts.backend')

@section('content')

{!! show_errors($errors) !!}

<div class="manage_slider">
    
    {!! Form::model($item, ['method' => 'put', 'route'=> ['admin.banner_group.update', $item->id], 'class'=>'form-horizontal']) !!}
    
    {!! fForm::groupText('Tên nhóm slider', 'dfname', null, ['required']) !!}
    {!! fForm::groupText('Đường dẫn tĩnh', 'dfslug', null) !!}
    {!! fForm::groupSelect('Trạng thái', 'status', [1=>'Enable', 0=>'Disable'], null) !!}
    {!! Form::hidden('type', 'menugroup') !!}

    <div class="form-group">
        <div class="col-sm-9 col-sm-offset-3">
            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Lưu lại</button>
        </div>
    </div>
    {!! Form::close() !!}
</div>

@stop