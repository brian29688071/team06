@extends('typhoon_app')
@section('typhoon_content')
        <table border=2 align="center">
            <tr>
                <th>年份</th>
                <th>颱風編號</th>
                <th>颱風名稱</th>
                <th>是否到達台灣</th>
                <th>颱風強度</th>
                <th>警報發布級數</th>
                <th>建立時間</th>
                <th>編輯時間</th>
            </tr>
            @foreach ($typhoons as $typhoon)
            <tr>
                    <th>{{$typhoon->year}}</th>
                    <th>{{$typhoon->id}}</th>
                    <th>{{$typhoon->name}}</th>
                    <th>{{$typhoon->arrived}}</th>
                    <th>{{$typhoon->powerLV}}</th>
                    <th>{{$typhoon->level}}</th>
                    <th>{{$typhoon->created_at}}</th>
                    <th>{{$typhoon->updated_at}}</th>
                    <th><input type="button" value="更改" onclick="location.href='/typhoon/{{$typhoon->id}}/edit'"></th>
                    <th><input type="button" value="詳情" onclick="location.href='/typhoon/{{$typhoon->id}}'"></th>
            </tr>
            @endforeach
        </table>
    <table align="center">
        <tr>
            <td>
                <input type="button" value="新增" onclick="location.href='typhoon_add'">
                <input type="button" value="強度" onclick="location.href='level'">
            </td>
        </tr>
    </table>
@endsection
