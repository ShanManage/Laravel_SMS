<div class="col">
  <div class="table">
    <thead class="thead-light">
      <tr>
        <th class="col">CNE</th>
        <th class="col">First Name</th>
        <th class="col">Last Name</th>
        <th class="col">Age</th>
        <th class="col">Speciality</th>
        <th class="col">Operation</th>
      </tr>
    </thead>
    <tbody>
      @foreach($students as $student)
      <tr>
        <td>{{ $student -> cne}}</td>
        <td>{{ $student -> firstName}}</td>
        <td>{{ $student -> lastName}}</td>
        <td>{{ $student -> age}}</td>
        <td>{{ $student -> speciality}}</td>
        <td>
          <a href="#" class="btn btn-sm btn-info">Show</a>
          <a href="{{ url('/edit/'. $student->cne)}}" class="btn btn-sm btn-warning">Edit</a>
          <a href="#" class="btn btn-sm btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </div>
</div>