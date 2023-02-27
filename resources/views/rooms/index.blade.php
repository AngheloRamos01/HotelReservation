<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Rooms</title>
</head>
<body>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Room ID</th>
      <th scope="col">Room Description</th>
      <th scope="col">Room Capacity</th>
      <th scope="col">Date From</th>
      <th scope="col">Date To</th>
    </tr>
  </thead>
  <tbody>
    @foreach($rooms as $room)
    <tr>
      <th scope="row">1</th>
      <td>{{$room->roomDescription}}</td>
      <td>{{$room->roomCapacity}}</td>
      <td>{{$room->dateFrom}}</td>
      <td>{{$room->dateTo}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>
    
</body>
</html>


    

