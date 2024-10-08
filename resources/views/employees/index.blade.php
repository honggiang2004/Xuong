@extends('master')
@section('title')
@endsection

@section('content')
    <h1>
        Quản lý khách hàng

        <a class="btn btn-primary" href="{{ route('employees.create') }}" role="button">Thêm mới</a>

    </h1>
    @if (session()->has('success') && session()->get('success'))
        <div class="alert alert-success" role="alert">
            <strong>Thao tác thành công</strong>
        </div>
    @endif
    @if (session()->has('success') && !session()->get('success'))
        <div class="alert alert-danger" role="alert">
            <strong>Thao tác KHÔNG thành công</strong>{{ session()->get('error') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <th scope="col">Hành động</th>
                <th scope="col">id</th>
                <th scope="col">first_name</th>
                <th scope="col">last_name</th>
                <th scope="col">email</th>
                <th scope="col">phone</th>
                <th scope="col">date_of_birth</th>
                <th scope="col">hire_date</th>
                <th scope="col">salary</th>
                <th scope="col">is_active</th>
                <th scope="col">deparment</th>
                <th scope="col">manager_id</th>
                <th scope="col">address</th>
                <th scope="col">profile_picture</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
                
            </thead>
            <tbody>
                @foreach ($data as $employees)
                    <tr class="">
                        <td>
                            <a class="btn btn-info" href="{{ route('employees.show', $employees) }}">Show</a>
                            <a class="btn btn-warning" href="{{ route('employees.edit', $employees) }}">Edit</a>

                            <form action="{{ route('employees.destroy', $employees) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('co chac xoa khong')" class="btn btn-danger">
                                    Xóa mềm
                                </button>

                            </form>
                            <form action="{{ route('employees.forceDestroy', $employees) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('co chac xoa khong')" class="btn btn-dark">
                                    Xóa cứng
                                </button>

                            </form>

                        </td>
                        <td>{{ $employees->id }}</td>

                        <td>{{ $employees->first_name }}</td>
                        <td>{{ $employees->last_name }}</td>
                        <td>{{ $employees->email }}</td>
                        <td>{{ $employees->phone }}</td>
                        <td>{{ $employees->date_of_birth }}</td>
                        <td>{{ $employees->hire_date }}</td>
                        <td>{{ $employees->salary }}</td>
                        <td>
                            @if ($employees->is_active)
                                <span class="badge bg-primary">Yes</span>
                            @else
                                <span class="badge bg-danger">No</span>
                            @endif
                        </td>
                        <td>{{ $employees->department_id }}</td>
                        <td>{{ $employees->manager_id }}</td>
                        <td>{{ $employees->address }}</td>
                        <td>
                            @if ($employees->profile_picture)
                                <img src="{{ Storage::url($employees->profile_picture) }}" alt="" width="100px">
                            @endif
                        </td>
                        <td>{{ $employees->created_at }}</td>
                        <td>{{ $employees->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
