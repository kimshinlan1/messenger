//$.ajaxSetup({cache:true});
// Thiết lập thời gian thực vòng lặp 1 giây
setInterval(function(){
  $('.main-chat').load('mslog.php');
},1000);