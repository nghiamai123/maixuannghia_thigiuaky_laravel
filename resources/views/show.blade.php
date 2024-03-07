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
                <h1 class="text-center text-danger" id="title">INFORMATION OF CAR HAS ID {{$car->id}} </h1>
            </div>
            <div class="col-md-4 mt-4">
                <!-- Image on the left -->
                <img src="{{'/image/'.$car->image}}" alt="Car Image" class="img-fluid" style="height:220px">
            </div>
            <div class="col-md-8">
                <div class="col-md-12 mt-4">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Update</button>
                        </li>
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
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Make:</label>
                                <input type="text" class="form-control" value="{{$car->make}}" name="make">

                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Model:</label>
                                <input type="text" class="form-control" value="{{$car->model}}" name="model">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Produced_on :</label>
                                <input type="text" class="form-control" value="{{$car->produced_on}}" name="produced_on">
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <button type="submit" class="btn btn-primary">Send message</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </form>
                    </div>
                    <div class="modal-footer">


                    </div>
                </div>
            </div>

            <!-- Your existing script and Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>