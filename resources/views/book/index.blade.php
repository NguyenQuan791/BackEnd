<!DOCTYPE html>
<html>

<head>
    <title>Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <style>
        * {
            outline: none;
            padding: 0;
            margin: 0;
        }

        body {
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
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
                <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    <center>
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