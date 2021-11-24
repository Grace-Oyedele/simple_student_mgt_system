<table class="table">
    <thead class="thead-light">
    <tr>

        <th scope="col">CNE</th>
        <th scope="col">First Name</th>
        <th scope="col">Second Name</th>
        <th scope="col">Age</th>
        <th scope="col">Specialty</th>
        <th scope="col">Operation</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($students as $student)
    <tr>

        <td>{{$student->cne}}</td>
        <td>{{$student->firstname}}</td>
        <<td>{{$student->secondname}}</td>
        <td>{{$student->age}}</td>
        <td>{{$student->specialty}}</td>
        <td>
            <a href="#" class="btn btn-sm btn-info">Show</a>
            <a href="{{ url ('/edit/'.$student->id) }}" class="btn btn-sm btn-info">Edit</a>
            <a href="" class="btn btn-sm btn-info">Delete</a>
        </td>
    </tr>
        @endforeach
    </tbody>
</table>
