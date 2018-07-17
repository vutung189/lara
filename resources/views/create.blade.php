<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h2> passport create form</h2>
    <form method="post" action="{{url('passports')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group col-md-4">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="number">Phone Number</label>
                <input type="text" class="form-control" name="number">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <input type="file" class="form-control" name="filename">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group col-md-4">
                    <label> Passport Office</label>
                    <select name="office">
                        <option value="Ha Noi"> Ha noi</option>
                        <option value="Ha Giang"> Ha giang</option>
                        <option value="Ha Nam"> Ha nam</option>
                        <option value="Ha ha"> Ha ha</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 form-group">
                <button type="submit" class="btn btn-success"> Submit</button>
            </div>
        </div>

    </form>

</div>


</body>
</html>