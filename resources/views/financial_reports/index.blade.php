@extends('master')
@section('title')
    <h1>Sale</h1>
@endsection
@section('content')
    <div class="table-responsive">
        <h1>Báo cáo tài chính</h1>
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">month</th>
                    <th scope="col">year</th>
                    <th scope="col">total_sales</th>
                    <th scope="col">total_expanse </th>
                    <th scope="col">profit_before_tax</th>
                    <th scope="col">tax_amount</th>
                    <th scope="col">profit_after_tax</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $financial_reports)
                    <tr class="">
                        <td scope="row">{{ $financial_reports->month}}</td>
                        <td>{{ $financial_reports->year}}</td>
                        <td>{{ $financial_reports->total_sales }}</td>
                        <td>{{ $financial_reports->total_expanse }}</td>
                        <td>{{ $financial_reports->profit_before_tax }}</td>
                        <td>{{ $financial_reports->tax_amount }}</td>
                        <td>{{ $financial_reports->profit_after_tax }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection