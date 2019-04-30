
<script src="ocrad.js"></script>
	


<script>

	/*
	//originial
	var string = OCRAD(imaage);
	alert(string);
	*/
	var arr = [];
	//var words = new Array("Branch","Account Title","IBAN","p K H A B B O o","Credit Card No.","BANK/BRANCH","TOTAL AMOUNT","Total Amount ln Words","Depositor's Name","Contact No.","Depositor's CNIC No.","Depositor's Account No.","Received By","Depositor's Signature","1291335");
	function convert()
	{
		console.log("----------------------");
		var string = OCRAD(imaage);
	
		alert(string);

	
		console.log(string);
		/*document.body.innerHTML='';
		//document.write(string);
		document.write("<br><br>");
		//document.write(string.match("HBL"));
		for(i=0;i<words.length;i++)
		{
			arr[i] = string.match(words[i]);
			document.write("<br>"+arr[i]+"<br>");
		}
		*/

	}

</script>

<html>
<body>
<button id="convert" onclick="convert()">Convert</button>
<img id="imaage" src="AccountActivationForm.png">
	<p id="para"></p>
</body>
</html>

<?php
   

/*

$myfile = fopen("C:\\xampp\\htdocs\\Rameen\\OCR PROJECT\\files\\Project.txt", "w") or die("Unable to open file!");
$txt = ?>;
<?php
fwrite($myfile, $txt);
fclose($myfile);

*/
?>