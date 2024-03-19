<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tứ Diệp Thảo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <!-- Information on the right -->
            <div class="col-md-12 align-content-center">
                <h1 class="text-center text-danger" id="title">INFORMATION OF CAR HAS ID {{$car->id}} </h1>
            </div>
            <div class="col-md-4 mt-4">
                <!-- Image on the left -->
                <img src="{{'/images/'.$car->image}}" alt="Car Image" class="img-fluid" style="height:220px">
            </div>
            <div class="col-md-8">
                <div class="col-md-12 mt-4">
                    <ul class="list-group">
                        <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Update</a>
                        </li> -->
                        <li class="list-group-item d-flex justify-content-between align-items-center active">
                            ID : {{$car->id}}
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Make : {{$car->make}}
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Model : {{$car->model}}
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            produced_on : {{$car->produced_on}}
                        </li>
                    </ul>
                </div>
                <div>
                    <a href="{{route('cars.index')}}" class="btn btn-primary mt-4">Back</a>
                </div>
            </div>
        </div>

    </div>


    <!-- Include Bootstrap JS and Popper.js (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>