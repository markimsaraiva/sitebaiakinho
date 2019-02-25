setInterval(function time2(){
  var d = new Date();
  var hours = 15 - d.getHours();
  var min = 59 - d.getMinutes();
  if((min + '').length == 1){
    min = '0' + min;
  }
  var sec = 60 - d.getSeconds();
  if((sec + '').length == 1){
        sec = '0' + sec;
  }
  if(min < 0 ){
  jQuery('.ctf1').html('<font color="black">Finalizado</font>');
  }
  else if(hours < 0 ){
  jQuery('.ctf1').html('<font color="black">Finalizado</font>');
  }
  else{
  jQuery('.ctf1').html(hours+'h:'+min+'m:'+sec+'s')
}
}, 1000);

setInterval(function time2(){
  var d = new Date();
  var hours = 18- d.getHours();
  var min = 59 - d.getMinutes();
  if((min + '').length == 1){
    min = '0' + min;
  }
  var sec = 60 - d.getSeconds();
  if((sec + '').length == 1){
        sec = '0' + sec;
  }
  if(min < 0 ){
  jQuery('.ctf2').html('<font color="black">Finalizado</font>');
  }
  else if(hours < 0 ){
  jQuery('.ctf2').html('<font color="black">Finalizado</font>');
  }
  else{
  jQuery('.ctf2').html(hours+'h:'+min+'m:'+sec+'s')
}
}, 1000);

setInterval(function time2(){
  var d = new Date();
  var hours = 21 - d.getHours();
  var min = 59 - d.getMinutes();
  if((min + '').length == 1){
    min = '0' + min;
  }
  var sec = 60 - d.getSeconds();
  if((sec + '').length == 1){
        sec = '0' + sec;
  }
  if(min < 0 ){
  jQuery('.ctf3').html('<font color="black">Finalizado</font>');
  }
  else if(hours < 0 ){
  jQuery('.ctf3').html('<font color="black">Finalizado</font>');
  }
  else{
  jQuery('.ctf3').html(hours+'h:'+min+'m:'+sec+'s')
}
}, 1000);