@extends('master')
@section('title')
    <h1>Phonq cáck</h1>
@endsection
@section('content')
    <h1>
        Thêm mới khách hàng

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


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <form>
            <div class="mb-3 row">
                <label for="first_name" class="col-4 col-form-label">First name</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="first_name" id="first_name" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="last_name" class="col-4 col-form-label">Last name</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="last_name" id="last_name" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="email" id="email" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="phone" class="col-4 col-form-label">Phone</label>
                <div class="col-8">
                    <input type="number" class="form-control" name="phone" id="phone" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="date_of_birth" class="col-4 col-form-label">Date of birth</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="date_of_birth" id="date_of_birth" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="hire_date" class="col-4 col-form-label">Hire Date</label>
                <div class="col-8">
                    <input type="number" class="form-control" name="hire_date" id="hire_date" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="salary" class="col-4 col-form-label">Salary</label>
                <div class="col-8">
                    <input type="number" class="form-control" name="salary" id="salary" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="is_active" class="col-4 col-form-label">Is active</label>
                <div class="col-8">
                    <input type="checkbox" class="form-checkbox" value="1" name="is_active" id="is_active" value="{{old('is_active')}}"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="hire_date" class="col-4 col-form-label">Hire Date</label>
                <div class="col-8">
                    <input type="number" class="form-control" name="hire_date" id="hire_date" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="hire_date" class="col-4 col-form-label">Hire Date</label>
                <div class="col-8">
                    <input type="number" class="form-control" name="hire_date" id="hire_date" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="hire_date" class="col-4 col-form-label">Hire Date</label>
                <div class="col-8">
                    <input type="number" class="form-control" name="hire_date" id="hire_date" />
                </div>
            </div>
            <div class="mb-3 row">
                <div class="offset-sm-4 col-sm-8">
                    <button type="submit" class="btn btn-primary">
                        Action
                    </button>
                </div>
            </div>
        </form>
    </div>
