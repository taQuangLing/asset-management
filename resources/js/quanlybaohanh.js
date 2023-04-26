"use strict";

import {closeModal, openModal} from "./app.js";

const guaranteeFilterList = Array.from(document.querySelectorAll('.guarantee-filter .filter-type'));
const btnGuaranteeList = Array.from(document.querySelectorAll('.btn-guarantee'));
const btnActionList = document.querySelector('.action');
const guaranteePlaceholder = document.querySelector('.guarantee-placeholder');
let currentFilter = document.querySelector('.filter-active');
let btnCancel;

function switchFilter(e) {
  guaranteeFilterList.forEach(filter => filter.classList.remove('filter-active'));
  e.target.classList.add('filter-active');
  currentFilter = document.querySelector('.filter-active');
  btnActionList.innerHTML = '';
  reloadModalByFilter();
  btnCancel.addEventListener('click', closeModal);
}

function reloadModalByFilter() {
  guaranteePlaceholder.innerHTML = '';
  if(currentFilter.classList.contains("filter-assets-list")) {
    guaranteePlaceholder.insertAdjacentHTML('afterbegin', `
      <div class="field-group">
        <label>Lý do bảo hành:</label>
        <textarea class="input">Khi khởi động máy tính thì màn hình đen ngòm</textarea>
      </div>
    `);

    btnActionList.insertAdjacentHTML('afterbegin', `
      <button class="btn btn-green">Kích hoạt bảo hành</button>
      <button class="btn btn-yellow btn-close">Thoát</button>
    `);
    btnCancel = document.querySelector('.btn-close');
    return;
  }
  else if(currentFilter.classList.contains("filter-wait-guarantee")) {
    guaranteePlaceholder.insertAdjacentHTML('afterbegin', `
      <div class="field-group">
        <label>Ngày dự kiến bàn giao:</label>
        <input class="input" type="date" value="12/10/2024">
      </div>
      <div class="field-group">
        <label>Lý do bảo hành:</label>
        <textarea class="input">Khi khởi động máy tính thì màn hình đen ngòm</textarea>
      </div>
    `);
  }
  else if(currentFilter.classList.contains("filter-guarantying")) {
    guaranteePlaceholder.insertAdjacentHTML('afterbegin', `
      <div class="field-group">
        <label>Chi phí:</label>
        <input class="input" type="text" value="5.000.000">
      </div>
      <div class="field-group">
        <label>Trạng thái:</label>
        <select class="input">
          <option>Hoàn thành</option>
          <option>Từ chối</option>
        </select>
      </div>
      <div class="field-group">
        <label>Mô tả tình trạng sau bảo hành:</label>
        <input class="input" type="text" value="Lỗi main không thể bào hành">
      </div>
    `);
  }
  else if(currentFilter.classList.contains("filter-result")) {
    guaranteePlaceholder.insertAdjacentHTML('afterbegin', `
      <div class="field-group">
        <label>Chi phí:</label>
        <p>5.000.000</p>
      </div>
      <div class="field-group">
        <label>Trạng thái:</label>
        <p>Hoàn thành</p>
      </div>
      <div class="field-group">
        <label>Mô tả tình trạng sau bảo hành:</label>
        <p>Tốt</p>
      </div>
      <div class="field-group">
        <label>Ngày dự kiến bàn giao:</label>
        <p>12/10/2024</p>
      </div>
      <div class="field-group">
        <label>Ngày bàn giao:</label>
        <p>13/10/2024</p>
      </div>
      <div class="field-group">
        <label>Mô tả lý do bảo hành:</label>
        <p>Khi khởi động máy tính thì màn hình đen ngòm</p>
      </div>
    `);
  }
  console.log('hrlo')
  btnActionList.insertAdjacentHTML('afterbegin', `
    <button class="btn btn-green">Lưu</button>
    <button class="btn btn-yellow btn-close">Thoát</button>
  `);
  btnCancel = document.querySelector('.btn-close');
}

guaranteeFilterList.forEach(gf => gf.addEventListener('click', switchFilter));
btnGuaranteeList.forEach(btn => btn.addEventListener('click', openModal));
reloadModalByFilter();
