<?php  

function get($url = null, $headers = null) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	if ($headers != "") {
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	}

	return $result = curl_exec($ch);
	curl_close($ch);
}

function number($length) {
	$characters = '0123456789';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}

function create_account() {
	
}

echo "\e[96m";
echo "";
echo " _____   _____   _____  _     _  _  _     _  _     _  _   _  _  ________   __
|  __ \ |  __ \ |  ___|| \   / || || |   | || \   / || | / || ||___  ___| /  \
| |__) || |__) || |___ |  \_/  || || |   | ||  \_/  || |/ / | |   |  |   / /\ \
|  ___/ |  __ / |  ___|| |\_/| || || |   | || |\_/| ||   |  | |   |  |  / ____ \
| |     | | \ \ | |___ | |   | || || |___| || |   | || |\ \ | |   |  | / /    \ \
|_|     |_|  \_\|_____||_|   |_||_||_______||_|   |_||_| \_||_|   |__|/_/      \_\
";
echo "===================================================================================\n";
echo "                         NETFLIX PREMIUM ACCOUNT CREATOR                           \n";
echo "===================================================================================\n";


echo "\e[93mJumlah Akun : ";
$banyak = trim(fgets(STDIN));
echo "\n";
echo "\e[93mSEDANG MEMBUAT AKUN\n";

for ($i = 0; $i < $banyak ; $i++) {
	sleep(3);
	flush();
	echo $data = "\e[92m[SUKSES]\e[0m premiumkita".number(6)."@gmail.com | premiumkita123 [Expired ".date('d M Y', strtotime('+30 days', strtotime(date('d M Y'))))."]\n\r";
	$fh = fopen("result.txt", "a");
	fwrite($fh, "premiumkita".number(6)."@gmail.com | premiumkita123 [Expired ".date('d M Y', strtotime('+30 days', strtotime(date('d M Y'))))."] \n\r");
	fclose($fh);
}
echo "====================================================\n";
echo "Akun Netflix Premium \e[92mSUKSES\e[0m Dibuat Cek result.txt\n";
echo "====================================================\n";

?>
