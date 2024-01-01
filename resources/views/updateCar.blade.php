<!DOCTYPE html>
<html lang="en">
<head>
  <title>update car</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('includes.nav')
<div class="container">
  <h2>Update car data</h2>
  <form action="{{ route('update', [$car->id]) }}" method = "POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{ $car->title }}">
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <input type="text" class="form-control" id="description" placeholder="Enter description" name="description" value="{{ $car->description}}">
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" name="image">
      <br>
      <img src="{{ asset('assets/images/'. $car->image) }}" alt="car" style="width:200px;">
      @error('image')
        {{ $message }}
      @enderror
    </div>
    
    		<!-- update category  -->
    <div class="form-group">
      <label for="category">Category:</label>
      <select name="category_id" id="" >
        <option value="">Select Category</option>
        @foreach($categories as $cat)
        <option value="{{$cat->id}}">{{ $cat->id == $car->category_id ? 'selected' : '' }}>
      {{$cat->cat_name}}</option>
        @endforeach
      </select>
      @error('category_id')
        {{ $message }}
      @enderror
    </div>

    <input type= "hidden" name= "oldimage" value="{{$car->image}}">
    <div class="checkbox">
      <label><input type="checkbox" name="published" @checked($car->published)> published </label>
    </div>
    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>

</body>
</html>