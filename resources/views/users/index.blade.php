
@include('partials.header')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->firstName}}</td>
      <td>{{$user->lastName}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->contactNumber}}</td>
      <td>{{$user->address}}</td>
      <td><button type="button" class="btn btn-primary">Edit</button></td>
      <td><button type="button" class="btn btn-primary">Delete</button></td>
    </tr>
    @endforeach
  </tbody>
</table>

@include('partials.footer')

    

