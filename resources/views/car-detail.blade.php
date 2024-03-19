<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
.container {
    min-height: 100%; 
    display: flex;
    flex-direction: column;
    justify-content: space-between; 
    padding-top: 20px; 
    padding-bottom: 20px; 
    background-color: pink; 
}

.car-details {
    display: flex;
    align-items: center;
}

.car-details img {
    width: 30%; 
    margin-right: 20px; 
}

.list-group {
    flex: 1; 
}

.list-group-item {
    margin-bottom: 10px; 
}

.list-group-item.active {
    background-color: hotpink; 
}

    </style>
  </head>
  <body>
    <div class="container">
        <h3 style="color:red; text-align:center">Chi tiết xe</h3>
        <div class="car-details">
            <img src="{{$car->image}}" alt="Car Image">
            <ul class="list-group">
                <li class="list-group-item active">Id: {{$car->id}}</li>
                <li class="list-group-item">Description: {{$car->description}}</li>
                <li class="list-group-item disabled">Model: {{$car->model}}</li>
                <li class="list-group-item disabled">Produced_on: {{$car->produced_on}}</li>
            </ul>
        </div>
    </div>
    




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>