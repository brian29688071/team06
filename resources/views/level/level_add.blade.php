@extends('level_app')
@section('level_content')
<form action="/level_add_updating" method="post">
    {{ csrf_field() }}
    <table align="center"><tr><td>新增</td></tr></table>
    <table align="center"><tr></tr></table>
    <table table style="border:3px #FFD382 dashed;" cellpadding="10" border='1' align="center">
        <tr><th>颱風強度</th><th><input name="id" id="id" value=""></th></tr>
        <tr><th>警報發布級數</th><th><input name="description" id="description" value=""></th></tr>
    </table>
    <table align="center">
        <tr>
            <th>
                <input type="submit" value="新增">
                <input type="button" value="返回" onclick="location.href='/level'">
            </th>
        </tr>
    </table>
</form>
@endsection

