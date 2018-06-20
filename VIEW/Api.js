var keyword;

$(function SearchApi(){

$("#search").on("click",function(){

var searchItem =$("#searchItem").val();
var urlApp="https://en.wikipedia.org/w/api.php?action=opensearch&search="+ keyword +"&format=json&origin=*"; 

$.ajax({
    url:urlApp,
    type:'GET',
    contentType:"application/json;charset=utf-8" ,
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


$(function GetWord  (){

$.ajax({
    url:'KeyWord.php',
    type:'GET',
    datatype:"json",
    success:function (data,statut){
keyword=data['Name'];    

    }
})
.done(function(){
    console.log("success"); 
})
.fail(function(){
    console.log("error");   
})



});


