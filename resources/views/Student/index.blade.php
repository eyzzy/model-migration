<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href=  https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js

    </head>
<body>
    <div> class = "container"
        <div class="row">
            <div> class="col-12"</div>
            <table  class= "table table hover primary table">
                
            <table> 
        <thead> 
            <tr>
                <th>fullname</th>
                <th>email</th>
                <th>phone</th>
                <th>address</th>
                <th>city</th>
                <th>province</th>
                <th>zip</th>
                <th>birthdate</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td> {{$student->fullname}}</td>
                <td> {{$student->email}}</td>
                <td> {{$student->phone}}</td>
                <td> {{$student->address}}</td>
                <td> {{$student->city}}</td>
                <td> {{$student->province}}</td>
                <td> {{$student->zip}}</td>
                <td> {{$student->birthday}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

        </div>
    </div>
 
    <table> 
        <thead> 
            <tr>
                <th>fullname</th>
                <th>email</th>
                <th>phone</th>
                <th>address</th>
                <th>city</th>
                <th>province</th>
                <th>zip</th>
                <th>birthdate</th>
                <th>Action</th>
                <td>
                    <a href="{{ url('students', $student->id) }}/ edit" class ="btn btn-outline primary btn-sm">Edit</a>
                    <form actions ="{{ url 'students', $student-> $id) }}" method= "POST"
                    @method ('delete')
                    @csrf
                    <button type="submit" class= "btn btn-outline-danger btn-sm" onclick ="return confirm ("sure kana ba?")> Delete</button>
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td> {{$student->fullname}}</td>
                <td> {{$student->email}}</td>
                <td> {{$student->phone}}</td>
                <td> {{$student->address}}</td>
                <td> {{$student->city}}</td>
                <td> {{$student->province}}</td>
                <td> {{$student->zip}}</td>
                <td> {{$student->birthday}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>



</body>
</html>
