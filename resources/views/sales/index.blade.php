@extends('master')
@section('title')
    <h1>Helooooooooo</h1>
@endsection
@section('content')
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
                @foreach ($data as $sale)
                    <tr class="">
                        <td scope="row">{{$sale->year}}</td>
                        <td>{{$sale->month}}</td>
                        <td>{{$sale->total_sales}}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
