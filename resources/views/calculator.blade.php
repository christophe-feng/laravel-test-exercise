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
        <h2>Calculator Table</h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Num1</th>
                    <th>Num2</th>
                    <th>Plus</th>
                    <th>Minus</th>
                    <th>Multiply</th>
                    <th>Divide</th>
                </tr>
            </thead>
            <tbody>
                <!-- 傳統php的原生寫法 -->
                <tr>
                    <td><?= $result['num1']; ?></td>
                    <td><?= $result['num2']; ?></td>
                    <td><?= $result['plus']; ?></td>
                    <td><?= $result['minus']; ?></td>
                    <td><?= $result['multiply']; ?></td>
                    <td><?= $result['divide']; ?></td>
                </tr>
                
                <!-- 框架blade語法 -->
                <tr>
                    <td>{{$result['num1'];}} </td>
                    <td>{{$result['num2'];}} </td>
                    <td>{{$result['plus'];}} </td>
                    <td>{{$result['minus'];}} </td>
                    <td>{{$result['multiply'];}} </td>
                    <td>{{$result['divide'];}} </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>