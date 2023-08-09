<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home view</title>
</head>
<body>
    <div style="text-align:center;">
        <h1 style="color:red;font-size:100px ">Add</h1>
    </div>
    <div>
        <form method="post" >
            <?php echo csrf_field() ?>
            <label for="">Tên</label>
            <input type="text" name="name" placeholder="Tên item..." />
            <button type="submit">Thêm item</button>
        </form>
    </div>
</body>
</html>