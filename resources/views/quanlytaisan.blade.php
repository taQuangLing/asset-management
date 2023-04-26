<div class="filter">
    <input class="input" type="text" placeholder="Ma tai san"/>
    <input class="input" type="text" placeholder="Ma phieu nhap"/>
    <input class="input" type="text" placeholder="Loai tai san"/>
    <input class="input" type="text" placeholder="Nha cung cap"/>
    Tu ngay: <input class="input" type="date" placeholder="Tu ngay"/>
    Den ngay: <input class="input" type="date" placeholder="Den ngay"/>
    <label class="checkbox-container">Han bao hanh
        <input type="checkbox" checked="checked">
        <span class="checkmark"></span>
    </label>
    <button class="btn btn-green">Loc</button>
</div>

<div style="text-align: start; margin-top: 20px;">
    <button class="btn btn-green">Them moi</button>

</div>

<div class="table">
    <table>
        <thead>
        <tr>
            <th>STT</th>
            <th style="width: 80px;">Ma tai san</th>
            <th style="width: 80px;">Ma phieu nhap</th>
            <th style="width: 280px;">Ten tai san</th>
            <th>Loai tai san</th>
            <th>Don gia(VND)</th>
            <th style="width: 100px;">So luong</th>
            <th style="width: 150px;">Han bao hanh</th>
            <th>Nha cung cap</th>
            <th>Thao tac</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>TS001</td>
            <td>PN003</td>
            <td>Laptop Dell XSP 13 9320 i5 1240P</td>
            <td>Laptop</td>
            <td>43.990.000</td>
            <td>1</td>
            <td>30/04/2024</td>
            <td>CTCP ban le ky thuat so FPT</td>
            <td>
                <button class="btn btn-green btn-detail">Chi tiet</button>
                <button class="btn btn-red btn-delete">Xoa</button>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>TS001</td>
            <td>PN003</td>
            <td>Laptop Dell XSP 13 9320 i5 1240P</td>
            <td>Laptop</td>
            <td>43.990.000</td>
            <td>1</td>
            <td>30/04/2024</td>
            <td>CTCP ban le ky thuat so FPT</td>
            <td>
                <button class="btn btn-green btn-detail">Chi tiet</button>
                <button class="btn btn-red btn-delete">Xoa</button>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>TS001</td>
            <td>PN003</td>
            <td>Laptop Dell XSP 13 9320 i5 1240P</td>
            <td>Laptop</td>
            <td>43.990.000</td>
            <td>1</td>
            <td>30/04/2024</td>
            <td>CTCP ban le ky thuat so FPT</td>
            <td>
                <button class="btn btn-green btn-detail">Chi tiet</button>
                <button class="btn btn-red btn-delete">Xoa</button>
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
</nav>

<div class="modal modal-active">
  <div class="wrapper">
      <h3 class="underline-after-text">
          Thong tin tai san
      </h3>
      <div class="field-group">
          <label>Ma tai san:</label>
          <p>DXY00002</p>
      </div>
      <div class="field-group">
          <label>Ten tai san:</label>
          <input class="input" type="text" value="Laptop Dell XPS 13 9320 i5 12340P">
      </div>
      <div class="field-group">
          <label>Gia tien:</label>
          <input class="input" type="text" value="45.000.000">
      </div>
      <div class="field-group">
          <label>Loai tai san:</label>
          <input class="input" type="text" value="Laptop">
      </div>
      <div class="field-group">
          <label>Hang san xuat:</label>
          <input class="input" type="text" value="Nha may san xuat QuangLing">
      </div>
      <div class="field-group">
          <label>Han bao hanh:</label>
          <input class="input" type="date" value="30/09/2024">
      </div>
      <div class="field-group">
          <label>Ma phieu nhap:</label>
          <p>TQL0001</p>
      </div>
      <div class="field-group">
          <label>Ngay nhap:</label>
          <p>20/01/2023</p>
      </div>
      <div class="field-group">
          <label>Kich hoat:</label>
          <select class="input">
              <option>Chua kich hoat</option>
              <option>Da kich hoat</option>
          </select>
      </div>
      <div class="field-group">
          <label>Tinh trang:</label>
          <select class="input">
              <option>Tot</option>
              <option>Bao hanh</option>
              <option>Da thanh ly</option>
              <option>Xoa</option>
          </select>
      </div>
      <h3 class="underline-after-text">
          Thong tin nha cung cap
      </h3>
      <div class="field-group">
          <label>Ma nha cung cap:</label>
          <p>TQL</p>
      </div>
      <div class="field-group">
          <label>Ten nha cung cap:</label>
          <p>Nha cung cap Qling</p>
      </div>
      <div class="field-group">
          <label>Dia chi:</label>
          <p>Hai Ba Trung, Ha Noi</p>
      </div>
      <div class="field-group">
          <label>So dien thoai:</label>
          <p>0123456789</p>
      </div>

      <h3 class="underline-after-text">
          Mo ta tai san
      </h3>
      <div class="field-group">
          <label>Mo ta:</label>
          <input class="input" type="text" placeholder="Abxasfd...">
      </div>
  </div>

  <div class="action">
      <button class="btn btn-green">Xong</button>
      <button class="btn btn-red btn-close">Huy</button>
  </div>
</div>