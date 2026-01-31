
<?php session_start(); if(!isset($_SESSION['user'])) header("Location: login.php"); ?>
<h3>Typing Exam</h3>
<div id="p">আমি বাংলাদেশকে ভালোবাসি</div>
<textarea id="t"></textarea>
<p>Correct:<span id="c">0</span> Wrong:<span id="w">0</span></p>
<button onclick="f()">Finish</button>
<script>
let p=document.getElementById('p').innerText;
let t=document.getElementById('t');
t.oninput=()=>{
let c=0,w=0;
for(let i=0;i<t.value.length;i++){
if(t.value[i]==p[i])c++; else w++;
}
cSpan.innerText=c; wSpan.innerText=w;
}
function f(){
location=`result.php?typed=${t.value.length}&correct=${c.innerText}&wrong=${w.innerText}`;
}
</script>
