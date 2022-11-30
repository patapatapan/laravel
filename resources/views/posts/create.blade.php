<h1>表單建立</h1>


{!! Form::open(['url'=>'posts','method'=>'POST','files'=>true]) !!}

{!! Form::label('title', '標題') !!}
{!! Form::text('title', '小火龍',['class'=>'myclass','style'=>'color:red']) !!}<br>
@if ($errors->has('title'))
    <div style="color:red">{{ $errors->first('title')}}</div>
@endif<br>

{!! Form::label('evo', '要讓小火龍進化嗎') !!}
{!! Form::checkbox('evo', 1, true) !!}<br><br>

{!! Form::label('content', '內文') !!}
{!! Form::textarea('content', '小火龍進化成火恐龍了!!',['style'=>'color:red']) !!}<br>
@if ($errors->has('content'))
    <div style="color:red">{{ $errors->first('content')}}</div>
@endif<br>

{!! Form::label('text', '技能:') !!}<br>
抓　{!! Form::radio('skill', 1, true) !!}<br>
火花{!! Form::radio('skill', 2, false) !!}<br>
咬碎{!! Form::radio('skill', 3, false) !!}<br>
瞪眼{!! Form::radio('skill', 4, false) !!}<br><br>

你喜歡那些寶可夢?<br>
{!! Form::label('fav', '妙蛙種子') !!}
{!! Form::checkbox('fav', '001', false) !!}<br>
{!! Form::label('fav', '小火龍　') !!}
{!! Form::checkbox('fav', '004', false) !!}<br>
{!! Form::label('fav', '傑尼龜　') !!}
{!! Form::checkbox('fav', '007', false) !!}<br><br>

{!! Form::select('month', $months, $month, ['placeholder' => '請選擇月份']) !!}<br><br>

{!! Form::select('mode', $modes, $mode, ['placeholder' => '請選擇商品模式']) !!}<br><br>

{!! Form::label('number', '數字', []) !!}
區間數字下拉
{!! Form::selectRange('number', 1, 10, 5, []) !!}<br><br>

{!! Form::label('email', '郵箱', []) !!}
{{ Form::email('email',null,[]) }}<br><br>

{!! Form::label('password', '數字', []) !!}
{!! Form::password('password', []) !!}<br><br>

{!! Form::label('sell_at', '何時上架', []) !!}
{!! Form::date('sell_at',null, []) !!}<br><br>

年紀{!! Form::number('age', '18', ['min'=>18, 'max'=>80]) !!}<br><br>

{!! Form::label('pic', '圖片', []) !!}
{!! Form::file('pic', []) !!}<br><br>

{!! Form::submit('送出', []) !!}
{!! Form::reset('重置', []) !!}

{!! Form::close() !!}
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div style="color:red">{{$error}}</div>
    @endforeach
@endif
