var minSlider = document.getElementById('min');
var maxSlider = document.getElementById('max');

var outputMin = document.getElementById('min-value');
var outputMax = document.getElementById('max-value');

outputMin.innerHTML = minSlider.value;
outputMax.innerHTML = maxSlider.value;

minSlider.oninput = function(){
 outputMin.innerHTML=this.value;    
}

maxSlider.oninput = function(){
 outputMax.innerHTML=this.value;    
}