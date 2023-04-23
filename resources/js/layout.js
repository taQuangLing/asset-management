

const btnDetailList = Array.from(document.querySelectorAll('.btn-detail'));
const btnDeleteList = document.querySelectorAll('.btn-delete');
const modalDetail = document.querySelector('.modal');
const btnCancel = document.querySelector('.btn-close');
const filterBox = document.querySelector('.filter');

function openModal() {
  modalDetail.style.display = 'block';
}

function closeModal() {
  modalDetail.style.display = 'none';
}

function getFilterFields(e) {
  console.log(e);
}

btnDetailList.forEach(btn => btn.addEventListener('click', openModal));
btnCancel.addEventListener('click', closeModal);


filterBox.addEventListener('click', getFilterFields);