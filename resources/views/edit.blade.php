<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-3">
                <form action="{{url('/update',$student->id)}}" method="POST">
                    @csrf
                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="{{$student->name}}">
                    <br>
                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email" value="{{$student->email}}">
                    <br>
                    <input type="password" name="password" class="form-control" placeholder="Enter Your Password" value="{{$student->password}}">
                    <br>
                    <input type="submit" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
</body>

</html>