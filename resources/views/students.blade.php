<div>
    <h1>Students List</h1>
    <table border="5">
        <tr>
            <td>Name</td>
            <td>email</td>
            <td>city</td>
            <td>contact</td>
        </tr>
        @foreach ($data as $student)
            <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->city}}</td>
            <td>{{$student->contact}}</td>
        </tr>
        @endforeach
         
    </table>
