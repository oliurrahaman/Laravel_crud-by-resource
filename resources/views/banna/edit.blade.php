<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>
<body>
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">

                        <h2>Edit Student</h2>
                    </div>

                      <div>
                        <form action="{{ url('banna/' .$banna->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$banna->id}}" />
                            <label class="control-label">Name</label><br>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $banna->name }}"><br>
                            <label class="control-label">Roll</label><br>
                            <input type="number" name="roll" id="roll" class="form-control" value="{{ $banna->roll}}"><br>

                            <input type="submit" value="update" class="btn btn-success">

                        </form>
                      </div>
                </div>
            </div>


</body>
</html>
