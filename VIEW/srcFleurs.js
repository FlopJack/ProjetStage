
function SearchBar()
{
var srcinput= $("#srcId").val();
var search=$('.cardId');


$(search).children('div').each(function(index,value)
{
   if(index%2===0)
  {
    
         if(value.id==srcinput){
          $(this).parent().show();
         }
         else
         {
          $(this).parent().hide();         
         }
         if(srcinput==""){

           $('.cardId').show();
         }
  } 
}
);
}




