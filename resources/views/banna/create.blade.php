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
<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">

                    <h2>Create New Student</h2>
                </div>

                  <div>
                    <form action="{{url('banna')}}" method="post" class="form">
                        {!! csrf_field() !!}
                        <label class="control-label">Name</label><br>
                        <input type="text" name="name" id="name" class="form-control
                        @error('name')
                            is-invalid
                         @enderror">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span><br>
                        @enderror
                        <label class="control-label">Roll</label><br>
                        <input type="text" name="roll" id="roll" class="form-control
                        @error('name')
                            is-invalid
                         @enderror">
                        @error('roll')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span><br>
                        @enderror

                        <input type="submit" value="save" class="btn btn-success">

                    </form>
                  </div>
            </div>
        </div>


</body>

</html>
