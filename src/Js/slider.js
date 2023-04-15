var i=0;
var images=[];
var time=5000;


images[0]='src/img/slide-1.jpg';
images[1]='src/img/slide-2.jpg';
images[2]='src/img/slide-3.jpg';


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