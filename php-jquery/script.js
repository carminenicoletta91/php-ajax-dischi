function init(){
  console.log("hello world");
  getalbum();
}
$(document).ready(init);

function getalbum(){
  $.ajax({
    url:'arrmusic.php',
    method:"GET",
    success:function(data){
      console.log(data);
      printitem(data)
    },
  });
}
function printitem(data){
  console.log("sei qui");
  var obj=$(".album");
  var source =$("#item-template").html();
  var template=Handlebars.compile(source);
  for(var i=0;i<data.length;i++){
    var context={
      poster_path:data[i].poster_path,
      nome_album:data[i].name,
      autore:data[i].author,
      anno:data[i].year
    };
    var html = template(context);
    obj.append(html);
  }
}
