<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h2 class="text-center">這是studentController</h2>
    <a href="{{route('students.create')}}" class="mb-3 btn btn-success" role="button">add</a>
    <div class="container">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>姓名</th>
                    <th>國文</th>
                    <th>英文</th>
                    <th>數學</th>
                    <th>建立時間</th>
                    <th>更新時間</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->chinese }}</td>
                        <td>{{ $student->english }}</td>
                        <td>{{ $student->math }}</td>
                        <td>{{ $student->created_at }}</td>
                        <td>{{ $student->updated_at }}</td>
                        <td>
                            <a href="{{route('students.edit', ['student'=>$student->id])}}">編輯</a>
                            
                            <form action="{{route('students.destroy',['student'=>$student->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="del">
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

</body>

</html>
