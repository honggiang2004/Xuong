@extends('master')
@section('title')
    
@endsection
@section('content')
<h1>Helooooooooo</h1>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Năm</th>
                    <th scope="col">Tháng</th>
                    <th scope="col">Tổng</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $expense)
                    <tr class="">
                        <td scope="row">{{$expense->year}}</td>
                        <td>{{$expense->month}}</td>
                        <td>{{$expense->total_sales}}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
