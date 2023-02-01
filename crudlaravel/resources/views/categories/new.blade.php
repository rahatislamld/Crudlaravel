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
    <h2>New Category</h2> 
    <form method="POST" action ="category-store">
        @csrf
        <label>Title</label>
        <input type='text' name="title" class="form control"/>
        <button class ="btn btn-info mt-4" type="submit">Create</button>
    </form>
          
  
</div>

</body>
</html>
