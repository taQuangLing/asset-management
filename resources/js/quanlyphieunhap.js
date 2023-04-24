let assetDetailList = Array.from(document.querySelectorAll('.asset-detail'));


function addNewAssetDetailRow(ad) {
  const currentAsset = ad;

  currentAsset.insertAdjacentHTML("afterend", `
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