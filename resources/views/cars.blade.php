<!DOCTYPE html>
<html lang="en">
<head>
  <title>cars data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('includes.nav')

<div class="container">
  <h2>cars list</h2>
  <p>the table shows cars in database on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Published</th>
        <th>Category</th>
        <th>Eidt</th>
        <th>Show</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($cars as $row)
      <tr>
        <td>{{ $row->title }}</td>
        <td>{{ $row->description }}</td>
        <td>
        {{ $row->published ? "Yes" : "No"}}
        </td>
        <td>{{ $row->category->cat_name}}</td>
        <td><a href="eidtCar/{{ $row->id }}">Edit</a></td>
        <td><a href="showCar/{{ $row->id }}">show</a></td>
        <td><a href="deleteCar/{{ $row->id }}" onclick="return confirm('Are you sure you want to delete?')">delete</a></td>
      </tr>
    @endforeach 
    </tbody>
  </table>
</div>

</body>
</html>
