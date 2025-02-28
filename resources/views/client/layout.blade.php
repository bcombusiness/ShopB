<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('asset/client/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/client/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/client/css/constant.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/client/css/main.css') }}">

    <title>Shop B</title>
</head>

<body>

    <div class="header_box">

        <div class="py-1 header_top d-flex justify-content-between">
            <nav aria-label="breadcrumb" style="padding-bottom: 4px; --bs-breadcrumb-divider: '|';">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Kênh người bán</a></li>
                    <li class="breadcrumb-item"><a href="#">Tải ứng dụng</a></li>
                    <li class="breadcrumb-item"><a href="#">Kết nối</a></li>
                </ol>
            </nav>

            <nav aria-label="breadcrumb" style="padding-bottom: 4px; --bs-breadcrumb-divider: '';">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item dropdown-center">
                        <a href="#" type="button" class="pe-2 dropdown_arrow_none dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Thông báo
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Hỗ trợ</a></li>
                    <li class="breadcrumb-item dropdown-center">
                        <a href="#" type="button" class=" dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Tiếng việt
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="breadcrumb-item dropdown-center">
                        <a href="#" type="button" class="dropdown_arrow_none dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img id="header_top_avatar" src="http://127.0.0.1:8000/asset/upload/image/anh-jisoo-de-thuong.jpg" alt="">
                            Người dùng
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="header_bottom pb-2 row">

            <div class="col-2">
                <a href="#">
                    <img src="http://127.0.0.1:8000/asset/upload/system/logo-removebg-preview.png" alt="">
                </a>
            </div>
            <div class="col-9 d-flex justify-content-center align-items-center">

                <div class="header_bottom_search_box" style="display: inline; width: 90%; margin-top: auto">
                    <div class="input-group mb-1">
                    <input type="text" class="form-control" placeholder="Tìm kiếm ..." aria-label="Tìm kiếm ..." aria-describedby="button-addon2">
                    <button class="header_bottom_search_btn btn" type="button" id="button-addon2">Tìm kiếm</button>
                    </div>
    
                    <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="#">Máy tính</a></li>
                        <li class="breadcrumb-item"><a href="#">Điện thoại</a></li>
                        <li class="breadcrumb-item"><a href="#">Laptop</a></li>
                    </ol>
                    </nav>
                </div>

            </div>
            <div class="col-1 d-flex justify-content-center align-items-center">
                <div class="dropdown-center">
                <a id="header_bottom_cart" href="#" type="button" class="pe-2 dropdown_arrow_none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false">
                    Giỏ hàng
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </div>
            </div>

        </div>

    </div>



</body>

<script src="{{ asset('asset/client/js/bootstrap.bundle.min.js') }}"></script>

</html>
