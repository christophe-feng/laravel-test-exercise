{{--@php
dump($data);
@endphp--}}

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Bordered Table</h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>MOBILE</th>
                </tr>
            </thead>
            <!-- 傳過來的資料不是陣列形式 -->
            @foreach($data as $value)
            <!-- 用陣列包住整個資料的形式傳送 -->
            <!-- @foreach($data['data'] as $value) -->
            <tbody>
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->mobile}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>

</body>

</html>