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
        <h2>學生資料總表</h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
        <!-- 用bootstrap製作按鈕和排版 -->
        <div class="text-end mb-3">
            <a href="{{route('students.create')}}" class="btn btn-success">新增</a>
        </div>
        <!--  -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>姓名</th>
                    <th>電話</th>
                    <th>操作</th>
                </tr>
            </thead>
            <!-- 傳過來的資料不是陣列形式 -->
            @foreach($data as $value)
            <!-- 用陣列包住整個資料的形式傳送 -->
            {{-- @foreach($data['data'] as $value) --}}
            <tbody>
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->mobile}}</td>
                    <td>
                        {{--@php
                        $url=route('students.edit',$value->id);
                        dd($url);
                        @endphp--}}
                        <!-- 要在前端頁面傳送刪除的指令到後端時，要用form表單的形式 -->
                        <!-- method要用'DELETE' -->
                        <form action="{{route('students.destroy',['student' =>$value->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <!-- 兩者皆可 -->
                            <!-- 修改資料時，需要將id傳送至後端 -->
                            <a href="{{route('students.edit',$value->id)}}" class="btn btn-warning">修改</a>
                            <!-- <a href="{{route('students.edit',['student'=>$value->id])}}" class="btn btn-warning">修改</a> -->
                            <!--  -->
                            <button type="submit" class="btn btn-danger">刪除</button>
                        </form>
                        <!--  -->
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>

</body>

</html>