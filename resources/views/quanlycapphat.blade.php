<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/app.css">
  <link rel="stylesheet" href="../css/layout.css">
  <link rel="stylesheet" href="../css/quanlycapphat.css">
  <style>
    :root {
      --color-gray--: #e2f0d9;
      --color-green--: #87c540;
      --color-green-light--: #e7fada;
      --color-green-dark--: #badaa6;
      --color-yellow--: #debe00;

      --transition--: all .3s ease;

    }

    body {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      list-style: none;
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

    .btn-green,
    .btn-allocation {
      background-color: var(--color-green--);
    }

    .btn-red,
    .btn-recovery {
      background-color: red;
    }

    .btn-yellow {
      background-color: var(--color-yellow--);
    }

    .btn-yellow:hover {
      background-color: white;
      color: var(--color-yellow--);
      border-color: var(--color-yellow--);
    }

    .btn-allocation:hover,
    .btn-allocation:focus,
    .btn-green:hover,
    .btn-green:focus {
      background-color: white;
      color: #87c540;
      border-color: var(--color-green--);
    }

    .btn-recovery:hover,
    .btn-recovery:focus,
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
      padding: 10px 0 10px 10px;
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
    /*@import "../css/app.css";*/

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
      padding: 20px 30px 0;
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
    .field-group select,
    .field-group textarea {
      width: 100%;
    }

    .field-group textarea {
      height: 100px;
      padding: 10px 0 10px 10px;
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
    }

  </style>

  <style>
    @import "../css/app.css";
    @import "../css/quanlybaohanh.css";

    .allocation-filter {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      column-gap: 10px;
    }

    .wrapper {
      height: 100%;
    }

    .modal {
      display: none;
    }


  </style>
</head>

<body>
<div class="layout">
  <header>
    <div class="logo">Logo</div>
    <div class="user">
      <button class="btn btn-green">Đăng xuất</button>
      <span class="user-info">
          avatar icon
        </span>
    </div>
  </header>
  <main>
    <div class="sidebar">
      <ul>
        <li>Quản lý tài sản</li>
        <li>Quản lý phiếu nhập</li>
        <li class="active">Quản lý bảo hành</li>
        <li>Quản lý cấp phát</li>
        <li>Kiểm kê tài sản</li>
        <li>Thống kê báo cáo</li>
      </ul>
    </div>
    <div class="main">
      <div class="search">
        <div>
          <input class="input" type="text" placeholder="Mã phiếu nhập"/>
          <button class="btn btn-green">Tìm kiếm</button>
        </div>
      </div>
      <div class="allocation-filter">
        <span class="filter-type filter-allocated filter-active">Đã cấp phát</span>
        <span class="filter-type filter-not-allocate">Chưa cấp phát</span>
      </div>
      <div class="table">
        <table>
          <thead>
          <tr>
            <th style="width: 50px;">STT</th>
            <th style="width: 120px;">Mã tài sản</th>
            <th style="width: 450px;">Tên tài sản</th>
            <th style="width: 150px;">Loại tài sản</th>
            <th>Người được cấp phát</th>
            <th>Mã nhân viên</th>
            <th>Ngày cấp phát</th>
            <th>Thao tác</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>1</td>
            <td>TS001</td>
            <td>Laptop Dell XPS 13 9320 i5 1240P</td>
            <td>Laptop</td>
            <td>Nguyễn Văn A</td>
            <td>ANV10023</td>
            <td>12/04/2023</td>
            <td>
              <button class="btn btn-green btn-recovery">Thu hồi</button>
            </td>
          </tr>
          <tr>
            <td>1</td>
            <td>TS001</td>
            <td>Laptop Dell XPS 13 9320 i5 1240P</td>
            <td>Laptop</td>
            <td>Nguyễn Văn A</td>
            <td>ANV10023</td>
            <td>12/04/2023</td>
            <td>
              <button class="btn btn-green btn-recovery">Thu hồi</button>
            </td>
          </tr>
          <tr>
            <td>1</td>
            <td>TS001</td>
            <td>Laptop Dell XPS 13 9320 i5 1240P</td>
            <td>Laptop</td>
            <td>Nguyễn Văn A</td>
            <td>ANV10023</td>
            <td>12/04/2023</td>
            <td>
              <button class="btn btn-green btn-recovery">Thu hồi</button>
            </td>
          </tr>
          </tbody>
        </table>

      </div>
      <nav aria-label="pagination">
        <ul class="pagination">
          <li><a href=""><span aria-hidden="true">«</span><span class="visuallyhidden">Trước</span></a></li>
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

  <div class="modal modal-asset-detail modal-active">
    <div class="wrapper">
      <h3 class="underline-after-text">
        Thông tin tài sản
      </h3>
      <div class="field-group">
        <label>Mã tài sản:</label>
        <p>DXY002</p>
      </div>
      <div class="field-group">
        <label>Tên tài sản:</label>
        <p>Laptop Dell XPS 13 9320 i5 1240P</p>
      </div>
      <div class="field-group">
        <label>Giá tiền:</label>
        <p>45.000.000</p>
      </div>
      <div class="field-group">
        <label>Loại tài sản:</label>
        <p>Laptop</p>
      </div>
      <div class="field-group">
        <label>Hãng sản xuất:</label>
        <p>Nhà máy sản xuất QuangLinh</p>
      </div>
      <div class="field-group">
        <label>Hạn bảo hành:</label>
        <p>30/09/2024</p>
      </div>
      <div class="field-group">
        <label>Mã phiếu nhập:</label>
        <p>TQL0001</p>
      </div>
      <div class="field-group">
        <label>Ngày nhập:</label>
        <p>20/01/2023</p>
      </div>
      <div class="field-group">
        <label>Kích hoạt:</label>
        <p>Chưa kích hoạt</p>
      </div>
      <div class="field-group">
        <label>Tình trạng:</label>
        <p>Tốt</p>
      </div>


      <h3 class="underline-after-text">
        Đối tượng cấp phát
      </h3>
      <div class="field-group">
        <label>Đối tượng:</label>
        <select class="object input">
          <option value="Cá nhân">Cá nhân</option>
          <option value="Phòng ban">Phòng ban</option>
        </select>
      </div>
      <div class="allocation-placeholder">

      </div>
    </div>

    <div class="action">
      <button class="btn btn-green">Lưu</button>
      <button class="btn btn-yellow btn-close">Hủy</button>
    </div>
  </div>

</div>

<script type="module" src="../js/quanlycapphat.js"></script>
<script>
  "use strict";

  import {openModal} from "./app.js";

  const allocationFilterList = Array.from(document.querySelectorAll('.allocation-filter .filter-type'));
  let currentFilter = document.querySelector('.filter-active');
  const allocationPlaceholder = document.querySelector('.allocation-placeholder');
  const objectEl = document.querySelector('.object');
  let btnList = Array.from(document.querySelectorAll('table button'));
  let currentObj;


  function switchFilter(e) {
    allocationFilterList.forEach(filter => filter.classList.remove('filter-active'));
    e.target.classList.add('filter-active');
    currentFilter = document.querySelector('.filter-active');

    if (currentFilter.classList.contains('filter-allocated')) {
      btnList.forEach(btn => {
        btn.removeEventListener('click', openModal);
        btn.textContent = "Thu hồi";
        btn.classList.add('btn-recovery');
        btn.classList.remove('btn-allocation');
      });
    } else if (currentFilter.classList.contains('filter-not-allocate')) {
      btnList.forEach(btn => {
        btn.addEventListener('click', openModal);
        btn.textContent = "Cấp phát";
        btn.classList.remove('btn-recovery');
        btn.classList.add('btn-allocation');
      });
    }
  }

  function selectObject(e) {
    currentObj = e.target.value;

    allocationPlaceholder.innerHTML = '';
    if (currentObj === 'Phòng ban') {
      allocationPlaceholder.insertAdjacentHTML('beforeend', `
      <div class="field-group">
        <label>Phòng:</label>
        <select class="input">
          <option value="Phòng hành chính" selected>Phòng hành chính</option>
          <option value="Phòng kế toán">Phòng kế toán</option>
          <option value="Phòng kỹ thuật">Phòng kỹ thuật</option>
          <option value="Phòng marketing">Phòng marketing</option>
          <option value="Phòng pháp chế">Phòng pháp chế</option>
        </select>
      </div>
    `);
    } else {
      allocationPlaceholder.insertAdjacentHTML('beforeend', `
      <div class="field-group">
        <label>Mã nhân viên:</label>
        <input class="input" type="text" value="ANV10023">
      </div>
      <div class="field-group">
        <label>Tên nhân viên:</label>
        <p>Nguyễn Văn A</p>
      </div>
    `);
    }
  }


  allocationFilterList.forEach(gf => gf.addEventListener('click', switchFilter));
  objectEl.addEventListener('change', selectObject);

</script>
</body>

</html>
