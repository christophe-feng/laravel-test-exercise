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
  <h2>新增學生資料</h2>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="name">姓名：</label>
      <input type="name" class="form-control" id="name" placeholder="輸入姓名" name="name">
    </div>    
    <div class="mb-3 mt-3">
      <label for="mobile">電話：</label>
      <input type="mobile" class="form-control" id="mobile" placeholder="輸入電話" name="mobile">
    </div>    
    <button type="submit" class="btn btn-primary">建立</button>
  </form>
</div>

</body>
</html>
