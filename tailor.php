<html>
<body>

<h2>Add Tailor</h2>
<form method="POST" id="checkform">
<label>ID</label>
<input type="text" name="tid" id="inp1"><br>
<span id="error1"></span><br>

<label>Name</label>
<input type="text" name="tname" id="inp2"><br>
<span id="error2"></span><br>

<label>Email</label>
<input type="email" name="email" id="inp3"><br>
<span id="error3"></span><br>

<label>Date</label>
<input type="date" name="date" id="inp4"><br>
<span id="error4"></span><br>

<input type="submit" id="submit" name="submit">
</form>

<div id="result"></div>


<script>

function validateForm(){
isValid=true;
const a=document.getElementById('inp1').value;
const b=document.getElementById('inp2').value;
const c=document.getElementById('inp3').value;
const d=document.getElementById('inp4').value;

document.getElementById('error1').innerHTML = "";
document.getElementById('error2').innerHTML = "";
document.getElementById('error3').innerHTML = "";
document.getElementById('error4').innerHTML = "";


if(!a){
document.getElementById('error1').innerHTML = "Please enter ID";
isValid=false;
}
if(!b){
document.getElementById('error2').innerHTML = "Please enter Name";
isValid=false;
}

if(!c){
document.getElementById('error3').innerHTML = "Please enter Email";
isValid=false;
}

if(!d){
document.getElementById('error4').innerHTML = "Please enter Date";
isValid=false;
}
return isValid;
}

function DisplayData(event){
event.preventDefault();

if(validateForm()){

const a=document.getElementById('inp1').value;
const b=document.getElementById('inp2').value;
const c=document.getElementById('inp3').value;
const d=document.getElementById('inp4').value;

console.log(a,b,c,d);

const outputDiv = document.getElementById('result')
outputDiv.innerHTML = `
<h2>Tailor Details</h2>
<p><strong>ID</strong>${a}</p>
<p><strong>Name</strong>${b}</p>
<p><strong>email</strong>${c}</p>
<p><strong>Date</strong>${d}</p>
`

}
}
document.getElementById('checkform').addEventListener("submit",DisplayData);


</script>

</body>
</html>














