<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tứ Diệp Thảo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .hover-effect {
            transition: transform 0.4s ease;
            text-align: center;
        }

        .hover-effect {
            border-radius: 20px;
        }

        .hover-effect:hover {
            transform: translateY(-10px);
        }

        @keyframes animation {
            0% {
                color: #EAD8FC
            }

            50% {
                color: #9FCBF4;
            }

            100% {
                color: #2da0ed;
            }
        }

        #animation {
            -webkit-animation: animation 5000ms infinite;
            animation-duration: animation 5000ms infinite;
            animation-name: animation 1000ms infinite;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="col-md-12 align-content-center">
            <h1 class="text-center text-danger " id="animation">LIST OF CARS</h1>
        </div>
        <table class="table table-hover" style="font-size: 15px;">
            <thead class="table-danger">
                <tr>
                    <th scope="col" style="width: 5%">Id</th>
                    <th scope="col" style="width: 25%">Description</th>
                    <th scope="col" style="width: 20%">Model</th>
                    <th scope="col" style="width: 15%">Produced On</th>
                    <th scope="col">Image</th>
                    <th scope="col" style="width: 15%">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($cars as $car)
                <tr>
                    <th scope="row" style="width: 5%">{{$car->id}}</th>
                    <td style="width: 25%">{{$car->description}}</td>
                    <td style="width: 20%">{{$car->model}}</td>
                    <td style="width: 15%">{{$car->product_on}}</td>
                    <td style="width: 15%"><img src="{{'/image/'.$car->image}}" alt="" srcset="" height="80" width="100"></td>


                    <td style="width: 20%">
                        <button type="button" class="btn btn-info"><a style="text-decoration: none; color:#000" href="{{action([App\Http\Controllers\CarController::class, 'show'], ['car'=>$car->id])}}">Detail</a></button>
                        <button type="button" class="btn btn-success"><a style="text-decoration: none; color:#000" href="{{action([App\Http\Controllers\CarController::class, 'show'], ['car'=>$car->id])}}">Update</a></button>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>


    <!-- Include Bootstrap JS and Popper.js (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>