<input type="text" id="inputa">
<button onclick="changer()">Submit</button>
<div id="content">Type a number greater than 0</div>
<script>
function changer(){
	var x = parseInt(document.getElementById("inputa").value);
		var sum = 0;
		for(var q = x; q > 0; q--){
			sum = sum + q;
		}
		
		var a1 = 1;
		var a2 = 1;
		var a3 = 1;
		for(var e = x-2; e > 0; e--){
			a1 = a2;
			a2 = a3;
			a3 = a1 + a2;
		}
	
		var prod = 1;
		if(x >= 0){
		for(var p = x; p > 0; p--){
			prod = prod*p;
		}
		}else{
			prod = -1;
		}
	
	document.getElementById("content").innerHTML = sum+"</br>"+a3+"</br>"+prod;
}

</script>