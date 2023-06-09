<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Document</title>
  {{--    <link rel="stylesheet" href="../css/app.css">--}}
  {{--    <link rel="stylesheet" href="../css/layout.css">--}}

  <style>
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
      column-gap: 4%;
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
      padding: 20px 5px;

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

    .imgcontainer {
      text-align: left;
      margin: 24px 5px 12px 30px;
      border-radius: 50%;
    }
  </style>

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

</head>

<body>
<div id="data" style="display:none;">{{ $data }}</div>
<div class="layout">
  <header>

    <div class="imgcontainer">
      <img
        src="https://upload.wikimedia.org/wikipedia/vi/thumb/a/a1/Man_Utd_FC_.svg/1200px-Man_Utd_FC_.svg.png"
        alt="Logo" class="logo" width="50px" height="50px">
    </div>
    <h2>Cùng nhau quản lý tài sản </h2>
    <div class="imgcontainer">
      <span>Đăng xuất</span>
      <img
        src="https://scontent.fhan1-1.fna.fbcdn.net/v/t39.30808-1/336171687_129162599933758_439339820751928032_n.jpg?stp=dst-jpg_p200x200&_nc_cat=106&ccb=1-7&_nc_sid=7206a8&_nc_ohc=xM9NVGHRHwUAX8LJYml&_nc_ht=scontent.fhan1-1.fna&oh=00_AfDXs0xiqn-k64SgAQS_wgf4ElmBn07RCvh5L7dzh9npCQ&oe=644A4641"
        alt="Avatar" class="avatar" width="50px" height="50px">
    </div>
  </header>
  <main>
    <div class="sidebar">
      <ul>
        <li>Quan ly tai san</li>
        <li>Quan ly phieu nhap</li>
        <li>Quan ly bao hanh</li>
        <li>Quan ly cap phat</li>
        <li>Kiem ke tai san</li>
        <li>Thong ke bao cao</li>
      </ul>
    </div>
    <div class="main">
      <div class="search">
        <input class="input" type="text" placeholder="Ten tai san"/>
        <button class="btn btn-green">Tim kiem</button>

      </div>

      <div class="filter">
        <input id="fmataisan" class="input" type="text" placeholder="Ma tai san"/>
        <input class="input" type="text" placeholder="Ma phieu nhap" id="fmaphieunhap"/>
        <input class="input" type="text" placeholder="Loai tai san" id="floaitaisan"/>
        <input class="input" type="text" placeholder="Nha cung cap" id="fncc"/>
        Tu ngay: <input class="input" type="date" placeholder="Tu ngay" id="ftungay"/>
        Den ngay: <input class="input" type="date" placeholder="Den ngay" id="fdenngay"/>
        <label class="checkbox-container">Han bao hanh
          <input type="checkbox" checked="checked" id="fhanbaohanh">
          <span class="checkmark"></span>
        </label>
        <button class="btn btn-green btn-filter">Loc</button>
      </div>

      <div style="text-align: start; margin-top: 20px;">
        <button class="btn btn-green">Them moi</button>

      </div>

      <div class="table" id="table-parent">
        <table class="table" id="table">
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
      </nav>
    </div>
  </main>

  <div class="modal modal-active">
    <form>
      <div class="wrapper">
        <h3 class="underline-after-text" id="thong-tin-tai-san">
          Thông tin tài sản
        </h3>
        <div class="field-group">
          <label>Mã tài sản :</label>
          <p id="ma-tai-san">DXY00002</p>
        </div>
        <div class="field-group">
          <label>Tên tài sản :</label>
          <input class="input" id="ten-tai-san" type="text" value="Laptop Dell XPS 13 9320 i5 12340P">
        </div>
        <div class="field-group">
          <label>Giá tiền:</label>
          <input class="input" id="gia-tien" type="text" value="45.000.000">
        </div>
        <div class="field-group">
          <label>Loại tài sản:</label>
          <input class="input" id="loai-tai-san" type="text" value="Laptop">
        </div>
        <div class="field-group">
          <label>Hãng sản xuất:</label>
          <input class="input" id="hang-san-xuat" type="text" value="Nha may san xuat QuangLing">
        </div>
        <div class="field-group">
          <label>Hạn bảo hành:</label>
          <input class="input" id="han-bao-hanh" type="text" value="30/09/2024">
        </div>
        <div class="field-group">
          <label>Ma phieu nhap:</label>
          <p id="ma-phieu-dien">TQL0001</p>
        </div>
        <div class="field-group">
          <label>Ngay nhap:</label>
          <p id="ngay-nhap">20/01/2023</p>
        </div>
        <div class="field-group">
          <label>Kich hoat:</label>
          <select id="kich-hoat" class="input">
            <option>Chua kich hoat</option>
            <option>Da kich hoat</option>
          </select>
        </div>
        <div class="field-group">
          <label>Tinh trang:</label>
          <select id="tinh-trang" class="input">
            <option>Tot</option>
            <option>Bao hanh</option>
            <option>Da thanh ly</option>
            <option>Xoa</option>
          </select>
        </div>
        <h3 class=" underline-after-text">
          Thong tin nha cung cap
        </h3>
        <div class="field-group">
          <label>Ma nha cung cap:</label>
          <p id="ma-ncc">TQL</p>
        </div>
        <div class="field-group">
          <label>Ten nha cung cap:</label>
          <p id="ten-ncc">Nha cung cap Qling</p>
        </div>
        <div class="field-group">
          <label>Dia chi:</label>
          <p id="dia-chi">Hai Ba Trung, Ha Noi</p>
        </div>
        <div class="field-group">
          <label>So dien thoai:</label>
          <p id="sdt">0123456789</p>
        </div>

        <h3 class="underline-after-text">
          Mo ta tai san
        </h3>
        <div class="field-group">
          <label>Mo ta:</label>
          {{--                <input class="input" type="text" placeholder="Abxasfd...">--}}
          <textarea id="mo-ta" rows="5" cols="60">

                </textarea>
        </div>
      </div>

      <div class="action">
        <button class="btn btn-green btn-update" type="submit">Xong</button>
        <button class="btn btn-red btn-close">Huy</button>
      </div>
    </form>

  </div>


</div>

</div>

<script>
  const table = document.getElementById('table')
  const data = JSON.parse(document.getElementById('data').textContent);
  console.log("Data:", data);

  function createTable(data) {
    var mTable = document.createElement('table');
    mTable.className = 'table';
    mTable.id = 'table';
    var headerRow = document.createElement('tr');
    var headers = Object.keys(data[0]);
    var count = 1
    // Create table headers

    var th = document.createElement('th');
    th.textContent = "STT";
    headerRow.appendChild(th);

    headers.forEach(function (header) {
      var th = document.createElement('th');
      th.textContent = header;
      headerRow.appendChild(th);
    });
    th = document.createElement('th');
    th.textContent = 'Thao tác ';
    headerRow.appendChild(th);
    mTable.appendChild(headerRow);

    // Create table rows

    data.forEach(function (obj) {
      var tr = document.createElement('tr');
      var td = document.createElement('td');
      td.textContent = count.toString();

      tr.appendChild(td);
      headers.forEach(function (header) {
        var td = document.createElement('td');
        td.textContent = obj[header];
        tr.appendChild(td);
      });

      td = document.createElement('td');
      let myButtonDetail = document.createElement("button-detail");
      let myButtonDelete = document.createElement("button-delete");
      myButtonDetail.className = "btn btn-green btn-detail";
      myButtonDetail.innerText = "Chi tiết ";
      var ma_tai_san = Object.values(data[count - 1]);
      myButtonDetail.id = parseInt(ma_tai_san[0]);
      td.appendChild(myButtonDetail)
      myButtonDelete.className = "btn btn-red btn-delete";
      myButtonDelete.innerText = "Xóa ";
      myButtonDelete.id = parseInt(ma_tai_san[0]);
      td.appendChild(myButtonDelete)

      tr.appendChild(td);
      mTable.appendChild(tr);
      count++;
    });

    return mTable;
  }

  var mTable = createTable(data);
  // Add the table to your HTML page
  document.getElementById('table').replaceWith(mTable);


</script>

<script>
  const btnDetailList = Array.from(document.querySelectorAll('.btn-detail'));
  const btnDeleteList = document.querySelectorAll('.btn-delete');
  const modalDetail = document.querySelector('.modal');
  const btnCancel = document.querySelector('.btn-close');
  const btnUpdate = document.querySelector('.btn-update')
  const filterBox = document.querySelector('.btn-filter');

  const ma_tai_san = document.getElementById('ma-tai-san')
  const ten_tai_san = document.getElementById('ten-tai-san')
  const gia_tien = document.getElementById('gia-tien')
  const hang_sx = document.getElementById('hang-san-xuat')
  const loai_hang = document.getElementById('loai-tai-san')
  const han_bao_hanh = document.getElementById('han-bao-hanh')
  const ma_phieu_nhap = document.getElementById('ma-phieu-dien')
  const ngay_nhap = document.getElementById('ngay-nhap')
  const kich_hoat = document.getElementById('kich-hoat')
  const tinh_trang = document.getElementById('tinh-trang')
  const ma_ncc = document.getElementById('ma-ncc')
  const ten_ncc = document.getElementById('ten-ncc')
  const dia_chi = document.getElementById('dia-chi')
  const sdt = document.getElementById('sdt')
  const mota = document.getElementById('mo-ta')

  const fmataisan = document.getElementById('fmataisan');
  const fmaphieunhap = document.getElementById('fmaphieunhap');
  const floaitaisan = document.getElementById('floaitaisan');
  const fncc = document.getElementById('fncc');
  const ftungay = document.getElementById('ftungay');
  const fdenngay = document.getElementById('fdenngay');
  const fhanbaohanh = document.getElementById('fhanbaohanh');


  function openModal() {
    modalDetail.style.display = 'block';

  }

  function closeModal() {
    modalDetail.style.display = 'none';
  }

  function getFilterFields(e) {
    let url = "/search/";

    if (fmataisan.value) {
      url += fmataisan.value + "/";
    } else {
      url += "/";
    }

    if (fmaphieunhap.value) {
      url += fmaphieunhap.value + "/";
    } else {
      url += "/";
    }

    if (floaitaisan.value) {
      url += floaitaisan.value + "/";
    } else {
      url += "/";
    }

    if (fncc.value) {
      url += fncc.value + "/";
    } else {
      url += "/";
    }

    if (ftungay.value) {
      url += ftungay.value + "/";
    } else {
      url += "/";
    }

    if (fdenngay.value) {
      url += fdenngay.value + "/";
    } else {
      url += "/";
    }

    const xhr = new XMLHttpRequest();
    xhr.open("GET", url);

    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          const data = JSON.parse(xhr.responseText);
          console.log(data);
          createTable(data)
          var mTable = createTable(data);
          // Add the table to your HTML page
          document.getElementById('table').replaceWith(mTable);
        } else {
          console.log("Error: " + xhr.status);
        }
      }
    }
    xhr.send();
  }

  // btnDetailList.forEach(btn => btn.addEventListener('click', openModal));
  btnCancel.addEventListener('click', closeModal);
  filterBox.addEventListener('click', getFilterFields);

  btnDetailList.forEach(btn => btn.addEventListener('click', () => {
    openModal();
    const ma_ts = btn.id;

    const xhr = new XMLHttpRequest();
    xhr.open("GET", "/fetch-data-asset/" + ma_ts);
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          const data = JSON.parse(xhr.responseText);
          console.log(data[0]);
          const asset = data[0];
          ma_tai_san.innerText = asset['ma_tai_san'];
          ten_tai_san.value = asset['ten_tai_san'];
          gia_tien.value = asset['don_gia'];
          loai_hang.value = asset['loai_tai_san'];
          hang_sx.value = asset['hang_san_xuat']
          han_bao_hanh.value = asset['han_bao_hanh']
          ma_phieu_nhap.innerText = asset['ma_phieu_nhap']
          ngay_nhap.innerText = asset['ngay_nhap']
          if (asset['tinh_trang']) {
            kich_hoat.value = 'Da kich hoat'
          } else {
            kich_hoat.value = 'Chua kich hoat'
          }
          if (asset['trang_thai'] === 0) {
            tinh_trang.value = 'Tot'
          } else if (asset['trang_thai'] === 1) {
            tinh_trang.value = 'Bao hanh'
          } else if (asset['trang_thai'] === 2) {
            tinh_trang.value = 'Da thanh ly'
          } else {
            tinh_trang.value = 'Xoa'
          }

          ma_ncc.innerText = asset['ma_ncc']
          ten_ncc.innerText = asset['ten_ncc']
          dia_chi.innerText = asset['dia_chi_ncc']
          sdt.innerText = asset['sdt_ncc']
          mota.value = asset['mo_ta']
        } else {
          console.log("Error: " + xhr.status);
          // document.getElementById("modal-body").innerHTML = "Error fetching data.";
        }
      }
    };
    xhr.send();
  }));

  btnDeleteList.forEach(btn => btn.addEventListener('click', () => {
    const ma_tai_san = btn.id;
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "/deleteAsset/" + ma_tai_san);
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          window.location.reload();
        } else {
          console.log("Error: " + xhr.status);
        }
      }
    }
    xhr.send();
  }));

  btnUpdate.addEventListener('click', (event) => {
    event.preventDefault();
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/updateAsset");
    xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          window.location.reload();
        } else {
          console.log("Error: " + xhr.status);
        }
      }
    };
    var params = {
      ma_tai_san: ma_tai_san.innerText,
      ten_tai_san: ten_tai_san.value,
      gia_tien: gia_tien.value,
      loai_tai_san: loai_hang.value,
      hang_sx: hang_sx.value,
      han_bao_hanh: han_bao_hanh.value,
      kich_hoat: 0,
      tinh_trang: 0,
      mota: mota.value
    };
    xhr.send(JSON.stringify(params));
    console.log(JSON.stringify(params))

  });


</script>


</body>

</html>
