<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addBook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<h1>Add a new book to the library</h1>
<form method="POST" action="/add">
    @csrf
    
  <div class="form-group">
    <label >Book Name</label>
    <input type="text" name="name" class="form-control" >
  </div>
  <div class="form-group">
    <label >Book Description</label>
    <input type="text" name="description" class="form-control" >
  </div>
  <div class="form-group">
    <label >Book prics</label>
    <input type="text" name="price" class="form-control" >
  </div>
  <div class="form-group">
    <label >Book quantity</label>
    <input type="text" name="quantity" class="form-control" >
  </div>
  
  
  <button style="margin-top: 30px;" type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>


