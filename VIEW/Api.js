var keyword;

$(function GetWord(){
    $.ajax({
        url:'KeyWord.php',
        type:'GET',
        datatype:"json",
        success:function (data,statut){
         txtkey=JSON.parse(data); 
         keyword=txtkey[0].Nom;

        }
    })
    .done(function(){
       //console.log("success");
       console.log(keyword) 
       
    })
    .fail(function(){
        console.log("error");   
    })
    
    
    });
    

$(function SearchApi(){
$("#search").on("click",function(){
var urlApp="https://en.wikipedia.org/w/api.php?action=parse&page="+ keyword +"&format=json&origin=*"; 

$.ajax({
    url:urlApp,
    type:'GET',
    contentType:"application/json;charset=utf-8" ,
    async: true,
    datatype:"json",
    success:function (data,statut){
    
        console.log(data);
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



