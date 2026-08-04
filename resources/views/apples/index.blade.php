<!-- 檢查從後端傳送過來的資料是否正確 -->
@php
dump($info);
dump($info[1]);
dump($info[0]['name']);
@endphp
<!--  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,
    tr,
    td {
        border: 1px solid black;
    }
</style>

<body>
    <!-- Hello AppleController View -->
    <a href="{{route('apples.f1')}}">1F</a><br>
    <a href="{{route('apples.f2')}}">2F</a><br>
    <a href="{{route('apples.f3')}}">3F</a><br>
    <br>
    <table>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>QT</td>
        </tr>
        <!-- blade框架語法 -->
        @foreach($info as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['name']}}</td>
            <td>{{$item['qt']}}</td>
        </tr>
        @endforeach
    </table>
    <br>
    <table>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>QT</td>
        </tr>
        <!-- php原生語法 -->
        <?php
        foreach ($info as $item):
        ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['name'] ?></td>
                <td><?= $item['qt'] ?></td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>

</body>

</html>