<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tứ Diệp Thảo</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <!-- Information on the right -->
            <div class="col-md-12 align-content-center">
                <h1 class="text-center text-danger" id="title">UPDATE INFORMATION OF CAR HAS ID {{$car->id}} </h1>
            </div>
            @if(Session::has('message'))
            @if(Session::get('message') == "success")
            <div class="alert alert-success">
                <span>Updated product successful! </span>
            </div>
            @elseif(Session::get('message') == "faild")
            <div class="alert alert-danger">
                <span class="arlert-danger">Update product faild! </span>
            </div>
            @endif
            @endif
            <div class="col-md-4 mt-4">
                <!-- Image on the left -->
                <img src="{{'/images/'.$car->image}}" alt="Car Image" class="img-fluid" style="height:220px">
            </div>
            <div class="col-md-8 mt-4">
                <form action="{{route('editCar.car-detail', ['id'=>$car->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <!-- <label for="recipient-name" class="col-form-label">Model:</label> -->
                        @if ($errors->has('model'))
                        <label for="model" style="color: red;">Model : </label>
                        @else
                        <label for="model">Model : </label>
                        @endif
                        <input type="text" class="form-control" value="{{ isset($car)? $car->model : old('model') }}" name="model">
                        @error('model')
                        <span style="color: red;">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        @if ($errors->has('description'))
                        <label for="description" style="color: red;">Description : </label>
                        @else
                        <label for="description">Description : </label>
                        @endif
                        <input class="form-control" value="{{ isset($car)? $car->description : old('description') }}" name="description"></input>
                        @error('description')
                        <span style="color: red;">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Produced_on :</label>
                        <input type="date" class="form-control" value="{{ isset($car)? $car->product_on : old('product_on') }}" name="product_on">
                        @error('product_on')
                        <span style="color: red;">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        @if ($errors->has('image'))
                        <label for="image" style="color: red;">Image : </label>
                        @else
                        <label for="image">Image : </label>
                        @endif
                        <input type="file" class="form-control" value="" name="image">
                        @error('image')
                        <span style="color: red;">{{$message}}</span>
                        @enderror
                    </div>
                    <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary"><a style="text-decoration: none; color:#000" href="{{route('cars.index')}}">Back</a></button>
                </form>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>