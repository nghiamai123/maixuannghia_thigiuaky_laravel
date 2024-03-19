<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Your Form</title>
    <!-- <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script> -->
    <style>
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
                <div class="mb-3">
                    @if ($errors->has('model'))
                    <label for="model" style="color: red;">Model : </label>
                    @else
                    <label for="model">Model : </label>
                    @endif
                    <input type="text" class="form-control" id="floatingInput" name="model" placeholder="name@example.com" value="{{ old('model') }}">

                </div>
                <div class="mb-3">
                    <!-- <label for="floatingPassword">Product on : </label> -->
                    @if ($errors->has('product_on'))
                    <label for="model" style="color: red;">Product on : </label>
                    @else
                    <label for="model">Product on : </label>
                    @endif
                    <input type="date" class="form-control" id="floatingPassword" name="product_on" placeholder="Password" value="{{ old('product_on') }}">
                </div>
                <div class="mb-3">
                    @if ($errors->has('description'))
                    <label for="description" style="color: red;">Description : </label>
                    @else
                    <label for="description">Description : </label>
                    @endif
                    <textarea class="form-control" placeholder="Leave a comment here" name="description" id="floatingTextarea" value="{{ old('description') }}"></textarea>
                </div>
                <div>
                    @if ($errors->has('image'))
                    <label for="image" style="color: red;">Image : </label>
                    @else
                    <label for="image">Image : </label>
                    @endif
                </div>
                <div class="mb-3">
                    <input id="image" type="file" accept="image/*" name="image" onchange="loadFile(event)">
                </div>
                <div>
                    <img style="width: 200px; height: 200px; list-style-type: none; border:none" id="output" />
                </div>
                <div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </div>

                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            </form>
        </div>
    </div>

    </div>
    <script>
        let file = null;
        var loadFile = function(event) {
            for (let i = 0; i <= event.target.files.length - 1; i++) {
                const fsize = event.target.files.item(i).size;
                const filee = Math.round((fsize / 1024));
                // The size of the file. check size of image
                if (filee > 4096) {
                    alert("File too Big, please select a file less than 4mb");
                } else {
                    var output = document.getElementById('output');
                    file = event;
                    output.src = URL.createObjectURL(event.target.files[0]);
                    output.onload = function() {
                        URL.revokeObjectURL(output.src)
                    }
                }
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>