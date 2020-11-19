@extends('level_app')
@section('level_content')
<form action="/level_edit_updating" method="post">
    {{ csrf_field() }}
    <table align="center"><tr><td>更改</td></tr></table>
    <table align="center"><tr></tr></table>
    <table table style="border:3px #FFD382 dashed;" cellpadding="10" border='1' align="center">
        <tr><th>颱風強度</th><th><input name="id" id="id" value="{{$id}}"></th></tr>
        <tr><th>警報發布級數</th><th><input name="description" id="description" value="{{$description}}"></th></tr>
    </table>
    <table align="center">
        <tr>
            <th>
                <input type="hidden" name="o_id" id="o_id" value="{{$id}}">
                <input type="submit" value="更改">
                <input type="button" value="返回" onclick="location.href='/level/{{$id}}'">
            </th>
        </tr>
    </table>
</form>
@endsection
