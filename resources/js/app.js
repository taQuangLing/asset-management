"use strict";
export let modalDetail;
export let btnCancel;

export function openModal() {
  modalDetail.style.display = 'block';
}

export function closeModal() {
  modalDetail.style.display = 'none';
}

function init() {
  modalDetail = document.querySelector('.modal');
  btnCancel = document.querySelector('.btn-close');
  btnCancel.addEventListener('click', closeModal);
}

window.addEventListener('load', init);
