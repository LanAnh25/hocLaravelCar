<!DOCTYPE html>
<html lang="en">
<head>
  <title>Car</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
    body {
      background-color: #f8f9fa;
    }

    .container {
      max-width: 500px;
      margin: 0 auto;
      padding: 40px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(110, 228, 246, 0.886);
    }

    h1 {
      font-size: 30px;
      margin-bottom: 30px;
      text-align: center;
      color: #e41010;
    }

    label {
      font-weight: bold;
      color: #555;
    }

    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 3px;
      margin-bottom: 20px;
      font-size: 16px;
      color: #555;
    }

    input[type="submit"] {
      display: block;
      width: 100%;
      padding: 12px;
      background-color: #007bff;
      border: none;
      color: #fff;
      font-weight: bold;
      text-align: center;
      border-radius: 3px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #0069d9;
    }
  .error-label {
    color: #e41010; 
  }



  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
        @endif

        <div class="card">
          <div class="card-header">
            <h4>Add Car</h4>
          </div>
          <div class="card-body">
            <form action="{{ url('cars/create') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="model" class="{{ $errors->has('model') ? 'error-label' : '' }}">Model:</label>
                <input type="text" name="model" id="model" class="form-control" value="{{ old('model') }}">
                @error('model')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="description" class="{{ $errors->has('description') ? 'error-label' : '' }}">Description:</label>
                <textarea rows="5" name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                @error('description')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="produced_on" class="{{ $errors->has('produced_on') ? 'error-label' : '' }}">Produced On:</label>
                <input type="date" name="produced_on" id="produced_on" class="form-control" value="{{ old('produced_on') }}">
                @error('produced_on')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="previewImage(event)">
                <img id="preview" src="#" alt="Preview" style="max-width: 200px; display: none;">
            </div>
            
            <script>
              function previewImage(event) {
                  var reader = new FileReader();
                  reader.onload = function () {
                      var preview = document.getElementById('preview');
                      preview.src = reader.result;
                      preview.style.display = 'block';
                  }
                  reader.readAsDataURL(event.target.files[0]);
              }
          </script>

              <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{url('cars')}}" class="btn btn-primary float-end">Back</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>