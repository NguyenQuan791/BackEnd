<!DOCTYPE html>
<html>

<head>
    <title>Book</title>
    <style>
        *{
            outline: none;
            padding: 0;
            margin: 0;
        }

        body{
            padding: 30px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            text-align: center;
        }

        img {
            height: 100px;

        }

        button {
            font-weight: 700;
            border-radius: 6px;
        }

        #snackbar {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            top: 30px;
            font-size: 17px;
        }

        #snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {
                top: 0;
                opacity: 0;
            }

            to {
                top: 30px;
                opacity: 1;
            }
        }

        @keyframes fadein {
            from {
                top: 0;
                opacity: 0;
            }

            to {
                top: 30px;
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeout {
            from {
                top: 30px;
                opacity: 1;
            }

            to {
                top: 0;
                opacity: 0;
            }
        }

        @keyframes fadeout {
            from {
                top: 30px;
                opacity: 1;
            }

            to {
                top: 0;
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <center>
    <h1>Sách nói Monkey - Thông tin</h1>
    <h1>Sách nói Monkey - Thông tin</h1>
    </center>
    <a href="{{url('/book/create')}}"><button style="width:200px;height:50px;margin-bottom:10px; background-color: green; color:white;">Thêm sách</button></a>
    <table style="width:100%">
        <thead>
            <tr>
                <th style="width: 60px;">STT</th>
                <th>Tên sách</th>
                <th>Tác giả</th>
                <th>Minh họa</th>
                <th>Bìa sách</th>
                <th style="width:10%;">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($book as $key=>$item)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->bookName}}</td>
                <td>{{$item->writer}}</td>
                <td>{{$item->illstrator}}</td>
                <td><img src="storage/images/{{$item->bookCover}}" alt=""></td>
                <td>
                    <a href="{{url('book/'.$item->id)}}"><button style="width:80%;height:30px;margin:5px;background-color: blue; color:white;">Xem sách</button></a>
                    <a href="{{url('book/edit/'.$item->id)}}"><button style="width:80%;height:35px;margin:5px;background-color: yellow; color:black;">Sửa sách</button></a>
                    <a href="{{url('book/delete/'.$item->id)}}"><button style="width:80%;height:35px;margin:5px;background-color: red; color:white;">Xóa sách</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div id="snackbar">Some text some message..</div>
    <center>
        <p>Bảng book thêm sửa xóa</p>
    </center>

    <script>
        function myFunction(mess) {
            var x = document.getElementById("snackbar");
            x.className = "show";
            x.innerHTML = mess;
            setTimeout(function() {
                x.className = x.className.replace("show", "");
            }, 3000);
        }
    </script>
</body>

</html>