<?php
$addr = $_POST["addr"];
$url = "https://blockchain.info/address/".$addr."?format=json";
$fgc = json_decode(file_get_contents($url), true);
$bal = $fgc["total_received"];

if($bal >= 100000){
//success
$paid = <<<EOT
<div id="container">
	<div id="logo-events" class="constrain clearfix">
		<h2 class="logo"><a href="/" title="jQuery CDN">jQuery CDN</a></h2>

		<aside><div id="broadcast"></div></aside>
	</div>

	<nav id="main" class="constrain clearfix">
		<div class="menu-top-container">
	<ul id="menu-top" class="menu">
<li class="menu-item"><a href="/jquery/">jQuery Core</a></li>
<li class="menu-item"><a href="/ui/">jQuery UI</a></li>
<li class="menu-item"><a href="/mobile/">jQuery Mobile</a></li>
<li class="menu-item"><a href="/color/">jQuery Color</a></li>
<li class="menu-item"><a href="/qunit/">QUnit</a></li>
<li class="menu-item"><a href="/pep/">PEP</a></li>
	</ul>
</div>
EOT;
echo $paid;
}else {
echo "you didn't pay enough ".$bal;
}

?>