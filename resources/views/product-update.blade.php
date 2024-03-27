<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Your Form</title>
    
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
              <h4>Edit Product</h4>
            </div>
            <div class="card-body">
              <form action="{{ url('products/'.$product->id.'/edit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" class="form-control"  value="{{$product->name}}" >
                  @error('name')
                    <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
               

                <div class="form-group">
                  <label for="old_price">Old Price</label>
                  <input rows="5" name="old_price" id="old_price" class="form-control"  value="{{$product->old_price}}" ></input>
                  @error('old_price')
                    <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="new_price">New Price</label>
                    <input rows="5" name="new_price" id="new_price" class="form-control" value="{{$product->new_price}}"></input>
                    @error('new_price')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input rows="5" name="description" id="description" class="form-control" value="{{$product->description}}" ></input>
                    @error('description')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="detail_description">Detail_description</label>
                    <textarea rows="3" name="detail_description" id="detail_description" class="form-control">{{$product->detail_description}}</textarea>
                    @error('detail_description')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="origin">Origin</label>
                    <textarea rows="2" name="origin" id="origin" class="form-control">{{$product->origin}}</textarea>
                    @error('origin')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="standard">Standard</label>
                    <textarea rows="2" name="standard" id="standard" class="form-control">{{$product->standard}}</textarea>
                    @error('standard')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>

                


                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" onchange="previewImage(event)" name="image" id="image" class="form-control">
                    <img src="{{ asset('images/'.$product->image) }}" id="image_product" width="200px" height="200px" style="display:none">
                    @error('image')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                <script>
                function previewImage(event) {
                    var input = event.target;
                    var reader = new FileReader();
                
                    reader.onload = function() {
                        var imgElement = document.getElementById("image_product");
                        imgElement.src = reader.result;
                        imgElement.style.display = "block"; // Hiển thị ảnh sau khi tải lên
                    };
                
                    reader.readAsDataURL(input.files[0]);
                }
                </script>
                <div class="form-group">
                    <label for="category_id">Chọn danh mục</label>
                    <select name="category_id" class="form-control">
                        <option value="">Chọn danh mục</option>
                        @foreach($categories as $id => $category_name)
                        <option value="{{ $id }}" {{ (old('category_id', $product->category_id) == $id) ? 'selected' : '' }}>
                          {{ $category_name }}
                      </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{url('/products')}}" class="btn btn-primary float-end">Back</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
 
</html>