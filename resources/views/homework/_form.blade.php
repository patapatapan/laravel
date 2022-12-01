{!! Form::label('subject', '標題 :') !!}
{!! Form::text('subject') !!}<br><br>

{!! Form::label('category', '類別 : ') !!}
{!! Form::select('category', $categories, $category, ['placeholder' => '請選擇類別']) !!}<br><br>

{!! Form::label('desc', '內文 :') !!}
{!! Form::textarea('desc') !!}<br><br>

{!! Form::label('status', '狀態 : ') !!}<br>
關閉{!! Form::radio('status', 0, false) !!}<br>
開啟{!! Form::radio('status', 1, true) !!}<br><br>

{!! Form::label('number', '排序 :', []) !!}
{!! Form::selectRange('number', 1, 10, null, []) !!}<br><br>

{!! Form::label('sell_at', '日期 :', []) !!}
{!! Form::date('sell_at',null, []) !!}<br><br>

{!! Form::label('tags[]', '標籤 : ') !!}<br>
news{!! Form::checkbox('tags[]', 'news') !!}<br>
skill&nbsp;{!! Form::checkbox('tags[]', 'skill') !!}<br>
like&nbsp;&nbsp;{!! Form::checkbox('tags[]', 'like') !!}<br><br>

{!! Form::label('pic', '圖片 :', []) !!}
{!! Form::file('pic') !!}<br><br>

{!! Form::submit('送出', []) !!}
{!! Form::reset('重置', []) !!}
