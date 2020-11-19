@extends('typhoon_app')
@section('typhoon_content')
    <form action="/typhoon_add_updating" method="post">
        {{ csrf_field() }}
        <table align="center"><tr><td>新增</td></tr></table>
        <table align="center"><tr></tr></table>
        <table table style="border:3px #FFD382 dashed;" cellpadding="10" border='1' align="center">
            <tr><th>年份</th><th><input name="year" id='year' value=""></th></tr>
            <tr><th>颱風編號</th><th><input name="id" id="id" value=""></th></tr>
            <tr><th>颱風名稱</th><th><input name="name" id="name" value=""></th></tr>
            <tr><th>是否到達台灣</th><th><input name="arrived" id='arrived' value=""></th></tr>
            <tr><th>颱風強度</th><th><input name="powerLV" id="powerLV" value=""></th></tr>
            <tr><th>警報發布級數</th><th><input name="level" id="level" value=""></th></tr>
        </table>
        <table align="center">
            <tr>
                <th>
                    <input type="submit" value="確認">
                    <input type="button" value="返回" onclick="location.href='/typhoon'">
                </th>
            </tr>
        </table>
    </form>
@endsection
