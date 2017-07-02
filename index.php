<?php
$xpub = "xpubYOUR_XPUB_KEY_GOES_HERE";
$url = "https://api.smartbit.com.au/v1/blockchain/address/".$xpub;
$fgc = json_decode(file_get_contents($url), true);
$next = $fgc["address"]["extkey_next_receiving_address"];

?>
<html>
<head>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
</head>
<h1>Article Title</h1>
<p>This is where you get the reader want to read more</p>
<h3>YOU NEED TO PAY TO READ THE REST OF THIS ARTICLE</h3>
<p>SEND 0.001BTC TO <?php echo $next; ?></p>
<button onclick="return checkBal('<?php echo $next; ?>')">OK I PAID</button>
<div id="paid">PAID CONTENT BLOCKED</div>
<script>
function checkBal(address){
   var postdata = "addr="+address;
   $.ajax({
	type: "post",
	url: "fetch.php",
        data: postdata,
        success: function(html){
            document.getElementById("paid").innerHTML = html;
	}
	});
}
</script>
</html>
