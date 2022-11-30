<h1>歡迎光臨，哥布林衝鋒小隊</h1>
{!! Form::open(['url'=>'articles','method'=>'POST','files'=>true]) !!}



{!! Form::label('subject', '標題') !!}
{!! Form::text('subject' , '老師好帥') !!}<br><br>

{!! Form::label('desc', '內文') !!}
{!! Form::textarea('desc', 'coding 真快樂' ) !!}<br><br>


{!! Form::label('status', '你同意老師帥嗎(狀態)') !!}<br>
帥{!! Form::radio('status', 0, false) !!}<br>
超帥{!! Form::radio('status', 1, true) !!}<br><br>

{!! Form::label('tags[]', '標籤') !!}<br>
news{!! Form::checkbox('tags[]', 'news') !!}<br>
skill{!! Form::checkbox('tags[]', 'skill') !!}<br>
like{!! Form::checkbox('tags[]', 'like') !!}<br><br>

{!! Form::submit('送出', []) !!}

{!! Form::reset('取消', []) !!}

{!! Form::close() !!}

@if ($errors->has('size'))
    <div style="color:red">{{ $errors->first('size')}}</div>
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div style="color:red">{{$error}}</div>
    @endforeach
@endif
