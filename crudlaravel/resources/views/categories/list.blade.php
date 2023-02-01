<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="container pt-5">
    <h2>Categories <a class ="btn btn-info" href="/category-create">New Category</a></h2>
          
  <table class="table">
    <thead>
      <tr>
        <th>Serial Number </th>
        <th>Title </th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
      <tr>
        <td>{{ $loop->index }}</td>
        <td>{{ $category->title }}</td>
        <td>
            <a href ="{{ url('category-edit/'.$category->id)  }}"class="btn btn-sm btn-info">Edit</a>
            <a href ="{{ url('category-delete/'.$category->id)  }}"class="btn btn-sm btn-danger">delete</a>
            
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>

</body>
</html>
