<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Your Form</title>
    <style>
        /* Custom styles go here, if needed */
        .form-create {
            display: flex;
            align-items: center;
            justify-content: center;
            align-items: center;
            /* height: 80vh; */
            margin-left: 180px;
        }

        .custom-form {
            max-width: 900px;
            /* Adjust the maximum width as needed */
        }

        .form-control {
            min-width: 600px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-md-12 align-content-center mt-5">
            <h1 class="text-center text-danger " id="animation">Thêm mới sản phẩm</h1>
        </div>
       

        <div class="col-md-8 form-create">
            <form action="{{route('cars.store')}}" enctype="multipart/form-data" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="model" placeholder="name@example.com" value="{{ old('model') }}">
                    <label for=" floatingInput">Model : </label>
                    @error('model')
                    <span style="color: red;">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="floatingPassword" name="product_on" placeholder="Password" value="{{ old('product_on') }}">
                    <label for="floatingPassword">Product on : </label>
                    @error('product_on')
                    <span style="color: red;">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" name="description" id="floatingTextarea" value="{{ old('description') }}"></textarea>
                    <label for=" floatingTextarea">Description : </label>
                    @error('description')
                    <span style="color: red;">{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <input type="file" name="image" id="">
                    @error('image')
                    <span style="color: red;">{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </div>

                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>