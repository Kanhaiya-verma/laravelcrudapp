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
    <h1 class="text-center text-secondary">ADD DATA</h1>
    <hr>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-5 card p-5 my-5 mx-5 ">
                <form method="post" action="{{ route('saveData') }}">
                    @csrf
                    <div class="form-group">
                        <b> NAME </b> <input type="text" class="form-control" name="name" id="name"
                            placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <b> AGE </b> <input type="text" class="form-control" id="age" name="age"
                            placeholder="Enter Age">
                    </div>
                    <div class="form-group">
                        <b> SALARY </b><input type="number" class="form-control" id="salary" name="salary"
                            placeholder="Enter Salary">
                    </div>
                    <div class="text-right">
                        <button type="submit" class=" btn btn-md btn-outline-success">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
