<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table-custom {
            background-color: #FFC0CB;
        }
        
        .table-custom thead th {
            background-color: #FF69B4; 
            color: #ffffff; 
        }
        
        .table-custom tbody tr:nth-of-type(odd) {
            background-color: #FFB6C1; 
        }
        
        .table-custom tbody tr:nth-of-type(even) {
            background-color: #FFA07A; 
        }
        
        .table-custom tbody tr:hover {
            background-color: #FF1493;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <h2 class="text-center text-danger mt-4">Car list of Lan Anh</h2>
        <button > <a href="{{url('cars/create')}}">ADD</a></button>
        <div class="table-responsive mt-4">
            <table class="table table-custom">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Description</th> 
                        <th>Model</th>
                        <th>Produced_on</th>
                        <th>Image</th>
                        <th>Chức năng</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cars as $car)
                    <tr>
                        <td>{{$car->id}}</td>
                        <td>{{$car->description}}</td>
                        <td>{{$car->model}}</td>
                        <td>{{$car->produced_on}}</td>
                        <td><img src="{{$car->image}}" style="width: 100px; height: 100px" alt=""></td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('cars.show', $car->id) }}" role="button">Chi tiết</a>
                        </td>
                        <td>
                           <a href="{{url('cars/'.$car->id.'/edit') }}">EDIT</a>
                            
                            {{-- <form action="{{ route('cars/'.$car->id.'/edit') }}" method="POST" style="display: inline;">
                                
                                <button type="submit" class="btn btn-info">  Update</button>
                            </form>
                            <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display: inline;">
                             
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form> --}}

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



