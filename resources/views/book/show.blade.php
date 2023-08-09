<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>

    <center>
        <h1>Sách nói Monkey - Chi tiết thông tin</h1>
    </center>
    <div style="display: flex; border:1px solid black;padding:10px;width:90%;margin:auto">
        <div style="width:70%; padding:10px;">
            <img style="width:90%; border:1px solid black" src="/storage/images/j2FtITkWXWvEA2eeiolqNH1672904703836_trong.png" alt="Test">
        </div>
        <div style="flex:1; display:flex;justify-content:center; flex-direction:column">
            <h1>{{$book->bookName}}</h1>
            <h2>Tác giả: {{$book->writer}}</h2>
            <h2>Minh họa: {{$book->illstrator}}</h2>
        </div>
    </div>
    <center>
        <h3>Sách nói Monkey - Nội dung</h3>
    </center>
    <div>
        <center>
            <button style="width:200px;height:50px;margin-bottom:10px; background-color: green; color:white;">Thêm trang sách mới</button>
        </center>
        @if(!empty($page))
        @foreach($page as $p)
        <center><label style="margin-top:10px;display:block;font-weight: 800;" for="">Trang {{$p->pageNumber}}</label></center>
        <div style="display: flex; border:1px solid black;padding:10px;width:90%;margin:auto;margin-top:10px;border-radius:10px">
            <img style="width:50%; border:1px solid #ccc;" src="/storage/images/{{$p->backgroud}}" alt="Test">
            <div style="text-align: center;flex:1">
                <label style="font-weight: 800;" for="">Tài nguyên</label>
                <table style="width:80%;margin:auto; margin-top:10px">
                    <thead>
                        <tr>
                            <th style="width:80%">Text</th>
                            <th>Âm thanh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>alo</td>
                            <td><img src="data:image/png;base64,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" style="width:20px; padding:5px;border-radius:50%;border:1px solid red" alt=""></td>
                        </tr>
                        <tr>
                            <td>alo</td>
                            <td><img src="data:image/png;base64,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" style="width:20px; padding:5px;border-radius:50%;border:1px solid red" alt=""></td>
                        </tr>
                        <tr>
                            <td>alo</td>
                            <td><img src="data:image/png;base64,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" style="width:20px; padding:5px;border-radius:50%;border:1px solid red" alt=""></td>
                        </tr>
                        <tr>
                            <td>alo</td>
                            <td><img src="data:image/png;base64,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" style="width:20px; padding:5px;border-radius:50%;border:1px solid red" alt=""></td>
                        </tr>
                        <tr>
                            <td>alo</td>
                            <td><img src="data:image/png;base64,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" style="width:20px; padding:5px;border-radius:50%;border:1px solid red" alt=""></td>
                        </tr>
                        <tr>
                            <td>alo</td>
                            <td><img src="data:image/png;base64,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" style="width:20px; padding:5px;border-radius:50%;border:1px solid red" alt=""></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</body>

</html>