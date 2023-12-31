<!DOCTYPE html>
<html>

<head>
    <title>Book</title>
    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 16px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }

        .is-danger{
            color: red;
            font-size: 14px;
            /* position: absolute; */
            margin: 0px;
        }

        form {
            width: 1200px;
            border: 1px solid black;
            margin: auto;
            padding: 20px;
            border-radius: 6px;
        }
    </style>
</head>

<body>
    <center>
        <h1>Sách nói Monkey - Thêm thông tin</h1>
    </center>
    <form action="{{url('book')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-25">
                <label for="fname">Tên sách</label>
            </div>
            <div class="col-75">
                <input type="text" name="bookName" placeholder="Nhập tên sách.." value="{{ old('bookName') }}">
                @if ($errors->has('bookName'))
                    <p class="help is-danger">{{ $errors->first('bookName') }}</p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">Tác giả</label>
            </div>
            <div class="col-75">
                <input type="text" name="writer" placeholder="Nhập tên tác giả.." value="{{ old('writer') }}">
                @if ($errors->has('writer'))
                    <p class="help is-danger">{{ $errors->first('writer') }}</p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="country">Minh họa</label>
            </div>
            <div class="col-75">
                <input type="text" name="illstrator" placeholder="Nhập tên họa sĩ.." value="{{ old('illstrator') }}">
                @if ($errors->has('illstrator'))
                    <p class="help is-danger">{{ $errors->first('illstrator') }}</p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="subject">Ảnh bìa</label>
            </div>
            <div class="col-75">
                <input type="file" name="bookCover" id="" value="{{ old('bookCover') }}">
                @if ($errors->has('bookCover'))
                    <p class="help is-danger">{{ $errors->first('bookCover') }}</p>
                @endif
            </div>
        </div>
        <div class="row">
            <input type="submit" value="Thêm sách">
        </div>
    </form>
    <center>
        <p>Bảng book thêm sửa xóa</p>
    </center>
</body>

</html>