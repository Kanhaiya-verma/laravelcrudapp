<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1 class="text-center text-uppercase text-secondary"> welcome to laravel</h1>
    <hr>
    @if (session()->has('status'))
        <div class="alert alert-success container">
            {{ session('status') }}
        </div>
    @endif
    <div class="container">
        <div>
            <div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>

                            <th scope="col">ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">AGE</th>
                            <th scope="col">SALARY</th>
                            <th scope="col-6">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ED as $employee)
                            <tr>
                                <th scope="row">{{ $employee->Id }}</th>
                                <td> {{ $employee->Name }}</td>
                                <td>{{ $employee->Age }}</td>
                                <td>{{ $employee->Salary }}</td>
                                <td>
                                    <a href="{{ url('/edit', $employee->Id) }}"
                                        class=" btn btn-sm btn-outline-info">Edit</a>
                                    <a href="{{ url('/delete', $employee->Id) }}"
                                        class=" btn btn-sm btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-right">
            <a href="{{ route('add') }}" class=" btn btn-md btn-outline-info">ADD DATA</a>
        </div>
    </div>
</body>

</html>
