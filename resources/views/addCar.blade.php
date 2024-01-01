<!DOCTYPE html>
<html lang="en">
<head>
  <title>add car</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('includes.nav')
<div class="container">
  <h2>add new car data</h2>
  <form action="{{ route('storeCar') }}" method = "POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value= "{{ old ('title')}}">
      @error('title')
      {{$message}}
      @enderror

    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <input type="text" class="form-control" id="description" placeholder="Enter description" name="description"  value= "{{ old ('description')}}">
      @error('description')
      {{$message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image"  name="image" value= "{{ old ('image')}}">
      @error('image')
        {{ $message }}
      @enderror
    </div>

    <div class="form-group">
      <label for="category">Category:</label>
      <select name="category_id" id="" >
        <option value="">Select Category</option>
        @foreach($categories as $cat)
        <option value="{{$cat->id}}">{{$cat->cat_name}}</option>
        @endforeach
      </select>
      @error('category_id')
        {{ $message }}
      @enderror

    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="published" @checked( old('published'))> published </label>
    </div>
    <button type="submit" class="btn btn-default">Insert</button>
  </form>
</div>

</body>
</html>