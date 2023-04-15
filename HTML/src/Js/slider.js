var i=0;
var images=[];
var time=5000;


images[0]='src/js/slide-1.jpg';
images[1]='src/js/slide-2.jpg';


function changeImg(){

	document.getElementById("slider").src=images[i];

	if(i<images.length-1){

		i++;
	}else{
		i=0;
	}

	setTimeout("changeImg()",time);




}

window.onload=changeImg;