@extends('layouts.backend')

@section('content')

<div class="addnew">
    {!! show_errors($errors) !!}
    {!! lang_tabs() !!}
        {!! Form::open(['method' => 'post', 'route'=>'admin.province.store', 'class'=>'form-horizontal']) !!}
        <br />
        <div class="tab-content">
                <?php
                $i = 0;
                foreach (get_langs() as $key => $lang) {
                    $code = $lang->code;
                    $i++;
                    ?>
            <div class="tab-pane fade <?php if ($i == 1) echo 'in active' ?>" id="lang-{{$lang->code}}">
                {!! fForm::groupText('Tên tỉnh', $code.'[name]', null, ['required']) !!}
            </div>
                    <?php
                }
                ?>
        </div> 
        
        {!! fForm::groupSelect('Quốc gia', 'parent', $countries, null) !!}
        {!! fForm::groupText('Thứ tự', 'order', null) !!}
        {!! fForm::groupSelect('Trạng thái', 'status', [1=>'Enable', 0=>'Disable'], null) !!}
        

        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Lưu lại</button>
            </div>
        </div>
        {!! Form::close() !!}
</div>
@stop

