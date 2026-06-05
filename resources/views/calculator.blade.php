<!DOCTYPE html>
<html>
<head>
<title>Scientific Calculator</title>

<style>
body{
background:#111;color:#fff;
font-family:Arial;
display:flex;
justify-content:center;
padding:20px;
}

.kalkulator{
width:800px;
background:#1c1c1c;
padding:20px;
border-radius:20px;
}

input{
width:100%;
height:70px;
font-size:35px;
text-align:right;
background:#1c1c1c;
color:white;
border:none;
margin-bottom:20px;
}

.grid{
display:grid;
grid-template-columns:repeat(8,1fr);
gap:10px;
}

button{
height:60px;
border:none;
border-radius:50px;
background:#222;
color:white;
font-size:20px;
}

.op{color:#4b78ff}
.sama{background:#4b78ff}
</style>
</head>

<body>

<div class="kalkulator">

<input id="hasil">

<div class="grid">

<button onclick="klik('(')">(</button>
<button onclick="klik(')')">)</button>
<button onclick="math('pow10')">10ˣ</button>
<button onclick="hasil.value=''">AC</button>
<button onclick="hasil.value=hasil.value.slice(0,-1)">⌫</button>
<button onclick="hasil.value*=-1">+/-</button>
<button class="op" onclick="klik('/')">÷</button>

<button onclick="math('inv')">1/x</button>
<button onclick="math('pow2')">x²</button>
<button onclick="math('pow3')">x³</button>
<button onclick="math('powx')">yˣ</button>

<button onclick="klik('7')">7</button>
<button onclick="klik('8')">8</button>
<button onclick="klik('9')">9</button>
<button class="op" onclick="klik('*')">×</button>

<button onclick="math('fact')">x!</button>
<button onclick="math('sqrt')">√</button>
<button onclick="math('log')">lg</button>
<button onclick="math('ln')">ln</button>

<button onclick="klik('4')">4</button>
<button onclick="klik('5')">5</button>
<button onclick="klik('6')">6</button>
<button class="op" onclick="klik('-')">−</button>

<button onclick="math('sin')">sin</button>
<button onclick="math('cos')">cos</button>
<button onclick="math('tan')">tan</button>
<button onclick="math('exp')">eˣ</button>

<button onclick="klik('1')">1</button>
<button onclick="klik('2')">2</button>
<button onclick="klik('3')">3</button>
<button class="op" onclick="klik('+')">+</button>

<button>Rad</button>
<button onclick="klik(Math.PI)">π</button>
<button onclick="hasil.value=Math.random()">Rand</button>

<button>%</button>
<button onclick="klik('0')">0</button>
<button onclick="klik('.')">.</button>

<button class="sama" onclick="hasil.value=eval(hasil.value)">=</button>

</div>
</div>

<script>

function klik(x){
hasil.value+=x
}

function math(a){

n=parseFloat(hasil.value)

if(a=="sqrt") hasil.value=Math.sqrt(n)
if(a=="pow2") hasil.value=n**2
if(a=="pow3") hasil.value=n**3
if(a=="sin") hasil.value=Math.sin(n)
if(a=="cos") hasil.value=Math.cos(n)
if(a=="tan") hasil.value=Math.tan(n)
if(a=="log") hasil.value=Math.log10(n)
if(a=="ln") hasil.value=Math.log(n)
if(a=="exp") hasil.value=Math.exp(n)
if(a=="inv") hasil.value=1/n
if(a=="pow10") hasil.value=10**n
if(a=="powx") hasil.value=n**prompt("Pangkat")
if(a=="fact"){
h=1
for(i=1;i<=n;i++)h*=i
hasil.value=h
}

}

</script>

</body>
</html>       