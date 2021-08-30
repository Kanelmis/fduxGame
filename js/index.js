//首页 弹出二维码 以及下载功能 
function openWindow(obj) {
  var link = "light_android";
  switch (obj.id) {
    case 'download_Andorid':
      link = "light_android"
      break;
  }

  document.getElementById(link).style.display = 'block';
  document.getElementById('QRfade').style.display = 'block';
}


function closeWindow() {
  document.getElementById('light_android').style.display = 'none';
  //document.getElementById('light_taptap').style.display='none';
  document.getElementById('QRfade').style.display = 'none';


}

//检测ESC 或者点击蒙版
window.document.onkeydown = function (e) {
  if (!e) {
    e = event;
  }
  if (e.keyCode == 27) {
    lightbox_close();
  }
}

//PV播放
function lightbox_open() {
  var lightBoxVideo = document.getElementById("VisaChipCardVideo");
  window.scrollTo(0, 0);
  document.getElementById('light').style.display = 'block';
  document.getElementById('fade').style.display = 'block';
  lightBoxVideo.play();
}

function lightbox_close() {
  var lightBoxVideo = document.getElementById("VisaChipCardVideo");
  document.getElementById('light').style.display = 'none';
  document.getElementById('fade').style.display = 'none';
  lightBoxVideo.pause();
}

//公众号二维码 分享
function lightbox_open_wechat() {
  window.scrollTo(0, 0);
  document.getElementById('lightQR').style.display = 'block';
  document.getElementById('lightText').style.display = 'block';
  document.getElementById('fadeQR').style.display = 'block';
}

function lightbox_close_wechat() {
  document.getElementById('lightQR').style.display = 'none';
  document.getElementById('fadeQR').style.display = 'none';
  document.getElementById('lightText').style.display = 'none';
}

//手机预约 弹窗
function popReserve(){
  window.scrollTo(0, 0);
  document.getElementById('reservePop').style.display = 'block';
}

function close_reservePop(){
  document.getElementById('reservePop').style.display = 'none';
}


//单选Checkbox

function checkBox(value){
  if(value=="ios"){
    document.getElementById("type1").checked = true;
    document.getElementById("type2").checked = false;
  }
  if(value=="android"){
    document.getElementById("type1").checked = false;
    document.getElementById("type2").checked = true;
  }

}