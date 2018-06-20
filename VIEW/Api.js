$(function(){

$("#search").on("click",function(){

var searchItem =$("#searchItem").val();
var urlApp="https://en.wikipedia.org/w/api.php?action=opensearch&search="+ searchItem +"&format=json&origin=*"; 

$.ajax({
    url:urlApp,
    type:'GET',
    contentType:"application/json;charset=utf-8",
    async: true,
    datatype:"json",
    success:function (data,statut){
    console.log(data);
    console.log(searchItem);
    }
})
.done(function(){
    console.log("success");
  
})
.fail(function(){

    console.log("error");
})
})
});
