<html>
<head>
<title>JAVASCRIPT TUT</title>

<script>
function event1(x){
		document.getElementById("text1").value+=x;
}
function event2(){
		var x = document.getElementById("text1").value;
		document.getElementById("text1").value = eval(x);
}
</script>
</head>
<body>
	<form name="form1">
		<input type="text" name="txtName" value="demo">
		<!--<input type="button" value="hello" onclick="javascript:alert('hell')"/>-->
		<input type="button" value="hello" onclick="javascript:Sayhello()"/>

	</form>

	<table border="1">
<tr>
	<th colspan=4><h1>Calculator</h1></th>
</tr>
<tr >
	<td colspan=4><input type="text" id="text1" placeholder="0" style="text-align:right;"/></td>
	
</tr>
<tr>
	<td></td>
	<td><button type="button" value="/"  onClick="event1(this.value)">/</button></td>
	<td><button type="button" value="*"  onClick="event1(this.value)">*</button></td>
	<td><button type="button" value="-"  onClick="event1(this.value)">-</button></td>
	<td rowspan=2><button type="button" value="+" style="height:50px;" onClick="event1(this.value)">+</td>
</tr>
<tr>
	<td><button type="button" value="7" onClick="event1(this.value)">7</button></td>
	<td><button type="button" value="8" onClick="event1(this.value)">8</button></td>
	<td><button type="button" value="9" onClick="event1(this.value)">9</button></td>
	
</tr>
<tr>
	<td><button type="button" value="4" onClick="event1(this.value)">4</button></td>
	<td><button type="button" value="5" onClick="event1(this.value)">5</button></td>
	<td><button type="button" value="6" onClick="event1(this.value)">6</button></td>
</tr>
<tr>
	<td><button type="button" value="1" onClick="event1(this.value)">1</button></td>
	<td><button type="button" value="2" onClick="event1(this.value)">2</button></td>
	<td><button type="button" value="3" onClick="event1(this.value)">3</button></td>
	<td rowspan=2><button type="button" style="height:48px;"  onClick="event2()" >=</button></td>
</tr>
<tr>
	<td colspan=2><button type="button" style="width:100%">0</button></td>
	<td><button type="button">.</button></td>
</tr>
</table>
</body>
</html>
