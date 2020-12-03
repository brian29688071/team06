@extends('typhoon_app')
@section('typhoon_content')
    <form action="/typhoon_edit_updating" method="post">
        @csrf
        <table align="center"><tr><td>編輯</td></tr></table>
        <table align="center"><tr></tr></table>
        <table table style="border:3px #FFD382 dashed;" cellpadding="10" border='1' align="center">
            <tr><th>年份</th><th><input name="year" id='year' value="{{$year}}"></th></tr>
            <tr><th>颱風編號</th><th><input name="id" id="id" value="{{$id}}"></th></tr>
            <tr><th>颱風名稱</th><th><input name="name" id="name" value="{{$name}}"></th></tr>
            <tr><th>是否到達台灣</th><th><input name="arrived" id='arrived' value="{{$arrived}}"></th></tr>
            <tr><th>颱風強度</th><th><input name="powerLV" id="powerLV" value="{{$powerLV}}"></th></tr>
            <tr><th>警報發布級數</th><th><input name="level" id="level" value="{{$level}}"></th></tr>
        </table>
        <table align="center">
            <tr>
                <th>
                    <input type="hidden" name="o_id" id="o_id" value="{{$id}}">
                    <input type="submit" value="更改">
                    <input type="button" value="返回" onclick="location.href='/typhoon/{{$id}}'">
                </th>
            </tr>
        </table>
    </form>
@endsection
