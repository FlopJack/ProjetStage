
function searchFunction(){
var input,inputVal, card,cardVal ;
input =document.getElementById("srcId");
inputVal=input.value.toUpperCase();

card=document.getElementById("cardId");
cardVal=card.value.toUpperCase();

if(cardVal==inputVal){

 input.style.display="";

}else {

input.style.display='none';

}



}




