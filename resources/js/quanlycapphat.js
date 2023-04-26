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

  if(currentFilter.classList.contains('filter-allocated')) {
    btnList.forEach(btn => {
      btn.removeEventListener('click', openModal);
      btn.textContent = "Thu hồi";
      btn.classList.add('btn-recovery');
      btn.classList.remove('btn-allocation');
    });
  } else if(currentFilter.classList.contains('filter-not-allocate')) {
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
  if(currentObj === 'Phòng ban') {
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
  }
  else {
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
