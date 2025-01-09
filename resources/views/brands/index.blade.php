@extends('layout')
@section('content')
    <h1>Danh sách brand</h1>
    <h2>thêm</h2>

    <table>
        <tr>
            <td>stt</td>
            <td>name</td>
            <td>edit<td>
            <td>delete</td>
        </tr>
        @foreach($brands as $brand)
            <tr>
                <td>{{$brand->id}}</td>
                <td>{{$brand->name}}</td>
                <td><a href="{{route('brands.edit', ['brand' => $brand->id])}}">edit</a></td>
                <td>delete</td>
            </tr>
        @endforeach
    </table>
@endsection
