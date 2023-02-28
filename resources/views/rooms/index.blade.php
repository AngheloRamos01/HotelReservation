@include('partials.header')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Room ID</th>
      <th scope="col">Room Description</th>
      <th scope="col">Room Capacity</th>
      <th scope="col">Date From</th>
      <th scope="col">Date To</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($rooms as $room)
    <tr>
      <th scope="row">{{$room->id}}</th>
      <td>{{$room->roomDescription}}</td>
      <td>{{$room->roomCapacity}}</td>
      <td>{{$room->dateFrom}}</td>
      <td>{{$room->dateTo}}</td>
      <td><button type="button" class="btn btn-primary">Edit</button></td>
      <td><button type="button" class="btn btn-primary">Delete</button></td>
      
    </tr>
    @endforeach
  </tbody>
</table>

@include('partials.footer')



    

