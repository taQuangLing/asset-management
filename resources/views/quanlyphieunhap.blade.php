<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/layout.css">
    <link rel="stylesheet" href="../css/quanlyphieunhap.css">

    <style>
        :root {
            --color-gray--: #e2f0d9;
            --color-green--: #87c540;
            --color-green-light--: #e7fada;
            --color-green-dark--: #badaa6;
        }

        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
        }

        .btn-green {
            background-color: var(--color-green--);
        }

        .btn-red {
            background-color: red;
        }

        /* BUTTON */
        .btn {
            border-radius: 3px;
            border: 1px solid VAR(--color-green--);
            box-shadow: rgba(255, 255, 255, .7) 0 1px 0 0 inset;
            box-sizing: border-box;
            cursor: pointer;
            display: inline-block;
            font-size: 13px;
            font-weight: 400;
            line-height: 1.15385;
            margin: 0;
            color: white;
            font-weight: 600;
            outline: none;
            padding: 10px 20px;
            position: relative;
            text-align: center;
            text-decoration: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: baseline;
            white-space: nowrap;
            transition: all .3s ease;
        }

        .btn-green:hover,
        .btn-green:focus {
            background-color: white;
            color: #87c540;
            border-color: var(--color-green--);
        }

        .btn-red:hover,
        .btn-red:focus {
            background-color: white;
            color: red;
            border-color: red;
        }

        .btn:focus {
            box-shadow: 0 0 0 4px rgba(0, 149, 255, .15);
        }

        .btn:active {
            /* background-color: var(); */
            box-shadow: none;
            /* color: #2c5777; */
        }

        .input {
            padding: 10px 10px;
            padding-right: 0;
            border-radius: 6px;
            outline: none;
            border: 1px solid #87c540;
        }

        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }

        table tr th {
            border: solid 1px black;
            font-weight: 600;
            height: 60px;
            font-weight: 600;
            background-color: var(--color-gray--);
        }

        table tr td {
            border: solid 1px black;
            height: 60px;
            padding: 10px;
        }

        .underline-after-text {
            font-weight: 600;
            margin-bottom: 1rem;
            position: relative;
            overflow: hidden;
        }

        .underline-after-text::after {
            content: "";
            display: inline-block;
            height: 0.5em;
            vertical-align: bottom;
            width: 100%;
            margin-right: -100%;
            margin-left: 10px;
            border-top: 1px solid black;
            /* position: absolute;
            right: 0; */
        }

        /* Customize the label (the container) */
        .checkbox-container {
            display: block;
            position: relative;
            padding-left: 35px;
            cursor: pointer;
            font-size: 16px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default checkbox */
        .checkbox-container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        /* Create a custom checkbox */
        .checkmark {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #eee;
        }

        /* On mouse-over, add a grey background color */
        .checkbox-container:hover input ~ .checkmark {
            background-color: #ccc;
        }

        /* When the checkbox is checked, add a blue background */
        .checkbox-container input:checked ~ .checkmark {
            background-color: #2196F3;
        }

        /*Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the checkmark when checked */
        .checkbox-container input:checked ~ .checkmark:after {
            display: block;
        }

        /* Style the checkmark/indicator */
        .checkbox-container .checkmark:after {
            left: 6px;
            top: 2px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .flex-between {
            display: flex;
            justify-content: space-between !important;
            align-items: center;
        }
    </style>

    <style>
        @import "../css/app.css";

        .layout {
            box-sizing: border-box;
            position: relative;
        }

        header {
            height: 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: var(--color-gray--);
            padding-right: 20px;
        }

        main {
            display: grid;
            grid-template-columns: 13% 83%;
            column-gap: 2%;
        }

        .sidebar {
            width: 260px;
            background-color: var(--color-gray--);
        }

        .sidebar ul {
            height: 85vh;
            width: 100%;
            padding: 0;
            overflow: hidden;
        }

        .sidebar ul li {
            display: block;
            margin: 10px 0;
            width: 100%;
            padding: 12px 40px;
            list-style: none;
            transition: all .3s ease;
            cursor: pointer;
            box-sizing: border-box;
        }

        .sidebar ul li.active {
            background-color: var(--color-green-dark--);
        }


        .sidebar ul li:hover {
            background-color: var(--color-green-dark--);
        }

        .user-info {
            margin-left: 10px;
        }

        .main {
            padding: 20px 10px;

        }

        input {
            width: 400px;
            font-size: 16px;
        }

        .search {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            margin-bottom: 20px;
            column-gap: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 20px;
        }

        table {
            margin-top: 20px;
        }

        table button {
            margin: 5px auto;
            font-size: 16px;
            display: block;
        }

        .filter {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            column-gap: 10px;
        }

        .filter input {
            width: 170px;
        }

        .filter button {
            width: 100px;
        }

        input[type="date"] {
            width: 150px;
        }

        nav {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .pagination {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-align: center;
        }

        .pagination li {
            margin: 0 1px;
        }

        .pagination li a {
            width: 60px;
            padding: 5px;
            display: inline-block;
            color: black;

        }

        .pagination li a:hover {
            background-color: var(--color-green-dark--);
            color: black;
        }

        .pagination li:first-of-type,
        .pagination li:last-of-type {
            margin: 0 20px;
        }

        .modal {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 5;
            background-color: white;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
            box-shadow: 0 0 0 1000px rgba(0, 0, 0, 0.15);
            width: 1000px;
            height: 800px;
            overflow-y: scroll;
            border-radius: 10px;
            display: none;
        }

        .modal .modal-active {
            display: block;
        }

        .modal .wrapper {
            padding: 20px 30px;
            padding-bottom: 0;
        }

        .field-group {
            display: grid;
            grid-template-columns: 30% 65%;
            column-gap: 5%;
            place-items: center start;
            padding: 5px 60px;
        }

        .field-group-2 {
            width: 80%;
            grid-template-columns: 30% 65%;
        }

        .field-group input,
        .field-group select {
            width: 100%;
            cursor: pointer;
        }

        .field-group p {
            margin: 5px;
        }

        .modal .action {
            padding: 20px 0;
            text-align: center;
            position: sticky;
            bottom: 0;
            background-color: #eee;
            /* transform: translateX(-50%); */
            width: 100%;
            margin: 30px auto 0;
            box-shadow: 0 14px 40px rgba(0, 0, 0, .3);
            border-top: 1px solid #ccc;
        }

        .action .btn {
            margin-right: 20px;
            width: 100px;
        }
    </style>

    <style>
        /*@import "../css/app.css";*/

        .modal {
            display: block;
        }

        .grid-64 {
            display: grid;
            grid-template-columns: 60% 40%;
            place-items: start;
        }

        .asset-detail {
            height: 220px;
            border-bottom: 1px solid #ccc;
            padding-top: 30px;
        }

        .asset-detail-btn {
            text-align: right;
            padding-right: 50px;
        }

        .asset-detail-btn button {
            width: 100px;
        }

        .asset-detail-total {
            padding: 20px;
            font-size: 20px;
            font-weight: 600;
        }
    </style>
</head>

<body>
<div class="layout">
    <header>
        <div class="logo">Logo</div>
        <div class="user">
            <button class="btn btn-green">Dang xuat</button>
            <span class="user-info">
          avatar icon
        </span>
        </div>
    </header>
    <main>
        <div class="sidebar">
            <ul>
                <li>Quan ly tai san</li>
                <li class="active">Quan ly phieu nhap</li>
                <li>Quan ly bao hanh</li>
                <li>Quan ly cap phat</li>
                <li>Kiem ke tai san</li>
                <li>Thong ke bao cao</li>
            </ul>
        </div>
        <div class="main">
            <div class="search flex-between">
                <button class="btn btn-green btn-add-coupon">Them phieu nhap</button>
                <div>
                    <input class="input" type="text" placeholder="Ten tai san"/>
                    <button class="btn btn-green">Tim kiem</button>
                </div>
            </div>
            <div class="table">
                <table>
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th style="width: 160px;">Ma phieu nhap</th>
                        <th style="width: 160px;">Ma nhan vien</th>
                        <th style="width: 500px;">Nha cung cap</th>
                        <th>Tong gia</th>
                        <th>Ngay nhap</th>
                        <th>Hanh dong</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>NCCQL001</td>
                        <td>TQL0001</td>
                        <td>Nha cung cap QLing</td>
                        <td>13.990.000</td>
                        <td>12/03/2023</td>
                        <td>
                            <button class="btn btn-green btn-detail">Chi tiet</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>NCCQL001</td>
                        <td>TQL0001</td>
                        <td>Nha cung cap QLing</td>
                        <td>13.990.000</td>
                        <td>12/03/2023</td>
                        <td>
                            <button class="btn btn-green btn-detail">Chi tiet</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>NCCQL001</td>
                        <td>TQL0001</td>
                        <td>Nha cung cap QLing</td>
                        <td>13.990.000</td>
                        <td>12/03/2023</td>
                        <td>
                            <button class="btn btn-green btn-detail">Chi tiet</button>
                        </td>
                    </tr>

                    </tbody>
                </table>

            </div>
            <nav aria-label="pagination">
                <ul class="pagination">
                    <li><a href=""><span aria-hidden="true">«</span><span class="visuallyhidden">Truoc</span></a></li>
                    <li><a href=""><span class="visuallyhidden"></span>1</a></li>
                    <li><a href="" aria-current="page"><span class="visuallyhidden"></span>2</a></li>
                    <li><a href=""><span class="visuallyhidden"></span>3</a></li>
                    <li><a href=""><span class="visuallyhidden"></span>4</a></li>
                    <li><a href=""><span class="visuallyhidden">Sau</span><span aria-hidden="true">»</span></a>
                    </li>
                </ul>
        </div>
    </main>

    <div class="modal modal-asset-detail modal-active">
        <div class="wrapper">
            <h3 class="underline-after-text">
                Thong tin nha cung cap
            </h3>
            <div class="field-group">
                <label>Nha cung cap:</label>
                <input class="input" type="text" value="Nha cung cap abc">
            </div>
            <div class="field-group">
                <label>Ma nha cung cap:</label>
                <input class="input" type="text" value="def">
            </div>
            <div class="field-group">
                <label>Dia chi:</label>
                <input class="input" type="text" value="Hai Ba Trung, VietNam">
            </div>
            <div class="field-group">
                <label>So dien thoai:</label>
                <input class="input" type="text" value="01241432234">
            </div>

            <h3 class="underline-after-text">
                Thong tin nhan vien
            </h3>
            <div class="field-group">
                <label>Ma nhan vien:</label>
                <input class="input" type="text" value="01241432234">
            </div>

            <h3 class="underline-after-text">
                Chi tiet tai san
            </h3>
            <div class="asset-detail">
                <div class="grid-64">
                    <div class="field-group field-group-2">
                        <label>Mo ta:</label>
                        <input class="input" type="text" placeholder="Abxasfd...">
                    </div>
                    <div class="field-group">
                        <label>So luong:</label>
                        <input class="input" type="text" placeholder="">
                    </div>
                </div>
                <div class="grid-64">
                    <div class="field-group field-group-2">
                        <label>Ma tai san:</label>
                        <input class="input" type="text" placeholder="Abxasfd...">
                    </div>
                    <div class="field-group">
                        <label>Don gia:</label>
                        <input class="input" type="text" placeholder="">
                    </div>
                </div>

                <div class="grid-64">
                    <div class="field-group field-group-2">
                        <label>Loai tai san:</label>
                        <input class="input" type="text" placeholder="Abxasfd...">
                    </div>
                </div>
                <div class="asset-detail-btn">
                    <button class="btn btn-green btn-add">Them</button>
                    <button class="btn btn-red btn-delete">Xoa</button>
                </div>
            </div>
            <div class="asset-detail">
                <div class="grid-64">
                    <div class="field-group field-group-2">
                        <label>Mo ta:</label>
                        <input class="input" type="text" placeholder="Abxasfd...">
                    </div>
                    <div class="field-group">
                        <label>So luong:</label>
                        <input class="input" type="text" placeholder="">
                    </div>
                </div>
                <div class="grid-64">
                    <div class="field-group field-group-2">
                        <label>Ma tai san:</label>
                        <input class="input" type="text" placeholder="Abxasfd...">
                    </div>
                    <div class="field-group">
                        <label>Don gia:</label>
                        <input class="input" type="text" placeholder="">
                    </div>
                </div>

                <div class="grid-64">
                    <div class="field-group field-group-2">
                        <label>Loai tai san:</label>
                        <input class="input" type="text" placeholder="Abxasfd...">
                    </div>
                </div>
                <div class="asset-detail-btn">
                    <button class="btn btn-green btn-add">Them</button>
                    <button class="btn btn-red btn-delete">Xoa</button>
                </div>
            </div>
            <div class="asset-detail-total flex-between">
                <span>Tong:</span>
                <span class="total">24.000.000</span>
            </div>
        </div>

        <div class="action">
            <button class="btn btn-green">Xong</button>
            <button class="btn btn-red btn-close">Huy</button>
        </div>
    </div>
</div>

</div>

<script src="../js/quanlyphieunhap.js"></script>
<script>
    let assetDetailList = Array.from(document.querySelectorAll('.asset-detail'));
    const btnCancel = document.querySelector('.btn-close');
    const modalDetail = document.querySelector('.modal');
    const addCoupon = document.querySelector('.btn-add-coupon');
    modalDetail.style.display = 'none';
    function addNewAssetDetailRow(ad) {
        ad.insertAdjacentHTML("afterend", `
    <div class="asset-detail">
      <div class="grid-64">
        <div class="field-group field-group-2">
          <label>Mo ta:</label>
          <input class="input" type="text" placeholder="">
        </div>
        <div class="field-group">
          <label>So luong:</label>
          <input class="input" type="text" placeholder="">
        </div>
      </div>

      <div class="grid-64">
        <div class="field-group field-group-2">
          <label>Ma tai san:</label>
          <input class="input" type="text" placeholder="">
        </div>
        <div class="field-group">
          <label>Don gia:</label>
          <input class="input" type="text" placeholder="">
        </div>
      </div>

      <div class="grid-64">
        <div class="field-group field-group-2">
          <label>Loai tai san:</label>
          <input class="input" type="text" placeholder="">
        </div>
      </div>
      <div class="asset-detail-btn">
        <button class="btn btn-green btn-add">Them</button>
        <button class="btn btn-red btn-delete">Xoa</button>
      </div>
    </div>
  `);
    }

    function deleteCurrentAssetDetailRow(ad) {
        ad.remove();
    }

    function assetDetailHandler(e) {
        const clickElement = e.target;
        if (clickElement.classList.contains('btn-add')) {
            addNewAssetDetailRow(this);
            assetDetailList = Array.from(document.querySelectorAll('.asset-detail'));
            assetDetailList.forEach(ad => {
                if (ad.getAttribute('listener') !== true)
                    ad.addEventListener('click', assetDetailHandler.bind(ad))
            });
        }
        if (clickElement.classList.contains('btn-delete')) {
            deleteCurrentAssetDetailRow(this);
        }
    }

    assetDetailList.forEach(ad => ad.addEventListener('click', assetDetailHandler.bind(ad)));

    function closeModal() {
        modalDetail.style.display = 'none';
    }

    function openModal() {
        modalDetail.style.display = 'block';
    }

    btnCancel.addEventListener('click', closeModal);
    addCoupon.addEventListener('click', openModal);
</script>
</body>

</html>
