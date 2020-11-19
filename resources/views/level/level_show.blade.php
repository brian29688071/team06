@extends('level_app')
@section('level_content')
<table align="center"><tr><th>詳情</th></tr></table>
<table table style="border:3px #FFD382 dashed;" cellpadding="10" border='1' align="center">
    <tr><th>颱風強度</th><th>{{$id}}</th></tr>
    <tr><th>警報發布級數</th><th>{{$description}}</th></tr>
    <tr><th>建立時間</th><th>{{$created_at}}</th></tr>
    <tr><th>編輯時間</th><th>{{$updated_at}}</th></tr>
</table>
<table align="center">
    <tr>
        <th>
            <input type="button" value="更改" onclick="location.href='/level/{{$id}}/edit'">
            <input type="button" value="返回" onclick="location.href='/level'">
        </th>
    </tr>
</table>
@endsection

