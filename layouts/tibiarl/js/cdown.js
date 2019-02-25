setInterval(function time(){
  var d = new Date();
  var hours = 13 - d.getHours();
  var min = 59 - d.getMinutes();
  if((min + '').length == 1){
    min = '0' + min;
  }
  var sec = 60 - d.getSeconds();
  if((sec + '').length == 1){
        sec = '0' + sec;
  }
  if(min < 0 ){
  jQuery('.btf1').html('<font color="black">Finalizado</font>');
  }
  else if(hours < 0 ){
  jQuery('.btf1').html('<font color="black">Finalizado</font>');
  }
  else{
  jQuery('.btf1').html(hours+'h:'+min+'m:'+sec+'s')
}
}, 1000);

setInterval(function time(){
  var d = new Date();
  var hours = 17 - d.getHours();
  var min = 59 - d.getMinutes();
  if((min + '').length == 1){
    min = '0' + min;
  }
  var sec = 60 - d.getSeconds();
  if((sec + '').length == 1){
        sec = '0' + sec;
  }
  if(min < 0 ){
  jQuery('.btf2').html('<font color="black">Finalizado</font>');
  }
  else if(hours < 0 ){
  jQuery('.btf2').html('<font color="black">Finalizado</font>');
  }
  else{
  jQuery('.btf2').html(hours+'h:'+min+'m:'+sec+'s')
}
}, 1000);


setInterval(function time(){
  var d = new Date();
  var hours = 20 - d.getHours();
  var min = 59 - d.getMinutes();
  if((min + '').length == 1){
    min = '0' + min;
  }
  var sec = 60 - d.getSeconds();
  if((sec + '').length == 1){
        sec = '0' + sec;
  }
  if(min < 0 ){
  jQuery('.btf3').html('<font color="black">Finalizado</font>');
  }
  else if(hours < 0 ){
  jQuery('.btf3').html('<font color="black">Finalizado</font>');
  }
  else{
  jQuery('.btf3').html(hours+'h:'+min+'m:'+sec+'s')
}
}, 1000);
