setInterval(function time3(){
  var d = new Date();
  var hours = 9 - d.getHours();
  var min = 59 - d.getMinutes();
  if((min + '').length == 1){
    min = '0' + min;
  }
  var sec = 60 - d.getSeconds();
  if((sec + '').length == 1){
        sec = '0' + sec;
  }
  if(min < 0 ){
  jQuery('.zmb1').html('<font color="black">Finalizado</font>');
  }
  else if(hours < 0 ){
   jQuery('.zmb1').html('<font color="black">Finalizado</font>');
  }
  else{
  jQuery('.zmb1').html(hours+'h:'+min+'m:'+sec+'s')
}
}, 1000);

setInterval(function time3(){
  var d = new Date();
  var hours = 12 - d.getHours();
  var min = 59 - d.getMinutes();
  if((min + '').length == 1){
    min = '0' + min;
  }
  var sec = 60 - d.getSeconds();
  if((sec + '').length == 1){
        sec = '0' + sec;
  }
  if(min < 0 ){
  jQuery('.zmb2').html('<font color="black">Finalizado</font>');
  }
  else if(hours < 0 ){
   jQuery('.zmb2').html('<font color="black">Finalizado</font>');
  }
  else{
  jQuery('.zmb2').html(hours+'h:'+min+'m:'+sec+'s')
}
}, 1000);

setInterval(function time3(){
  var d = new Date();
  var hours = 22 - d.getHours();
  var min = 59 - d.getMinutes();
  if((min + '').length == 1){
    min = '0' + min;
  }
  var sec = 60 - d.getSeconds();
  if((sec + '').length == 1){
        sec = '0' + sec;
  }
  if(min < 0 ){
  jQuery('.zmb3').html('<font color="black">Finalizado</font>');
  }
  else if(hours < 0 ){
   jQuery('.zmb3').html('<font color="black">Finalizado</font>');
  }
  else{
  jQuery('.zmb3').html(hours+'h:'+min+'m:'+sec+'s')
}
}, 1000);