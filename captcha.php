<?php
session_start();

class captcha {
	
	public static function validate($num, $lang="se") {
		
		if(!isset($_SESSION["ka_cap"])) {
			echo 'Error. No session set.'; exit;
		} else {
			$a = captcha::parse(str_replace(" ", "", $_SESSION["ka_cap"]), $lang);

			if($a==$num) {
				return true;
			} else {
				return false;
			}
		}
	}

	public static function parse($_, $lang="se") {
		$strip = array(
			"se" => array("tusen", "hundra"),
			"en" => array("thousand", "hundred")
		);

		$nums = array(
			"se" => array(
				"noll" 	=> 0,
				"ett" 	=> 1,
				"två" 	=> 2,
				"tre" 	=> 3,
				"fyra" 	=> 4,
				"fem"	=> 5,
				"sex" 	=> 6,
				"sju"	=> 7,
				"åtta" 	=> 8,
				"nio" 	=> 9),
			"en" => array(
				"zero" 	=> 0,
				"one" 	=> 1,
				"two" 	=> 2,
				"three" => 3,
				"four" 	=> 4,
				"five"	=> 5,
				"six" 	=> 6,
				"seven"	=> 7,
				"eight" => 8,
				"nine" 	=> 9)
		);
		
		$teens = array(
			"se" => array(
				"tio"		=> "ett",
				"elva"		=> "ettett",
				"tolv"		=> "etttvå",
				"tretton"	=> "etttre",
				"fjorton"	=> "ettfyra",
				"femton"	=> "ettfem",
				"sexton"	=> "ettsex",
				"sjutton"	=> "ettsju",
				"arton"		=> "ettåtta",
				"nitton"	=> "ettnio"),
			"en" => array(
				"ten"		=> "one",
				"eleven"	=> "oneone",
				"twelve"	=> "onetwo",
				"thirteen"	=> "onethree",
				"fourteen"	=> "onefour",
				"fifteen"	=> "onefive",
				"sixteen"	=> "onesix",
				"seventeen"	=> "oneseven",
				"eighteen"	=> "oneeight",
				"nineteen"	=> "onenine")
		);

		$oldies = array(
			"se" => array(
				"tjugo"		=> "två",
				"trettio"	=> "tre",
				"fyrtio"	=> "fyra",
				"femtio"	=> "fem",
				"sextio"	=> "sex",
				"sjuttio"	=> "sju",
				"åttio"		=> "åtta",
				"nittio"	=> "nio"),
			"en" => array(
				"twenty"	=> "two",
				"thirty"	=> "three",
				"fourty"	=> "four",
				"fifty"		=> "five",
				"sixty"		=> "six",
				"seventy"	=> "seven",
				"eighty"	=> "eight",
				"ninety"	=> "nine")
		);
		
		// Nita tomma rader
		$parsed = str_ireplace(" ", "", $_);

		// Nita "tusen" och "hundra"
		$parsed = str_ireplace($strip[$lang], "", $parsed);

		// Replacea tiotal mot ental
		$parsed = str_ireplace(array_keys($oldies[$lang]), $oldies[$lang], $parsed);

		// Replacea tonåringarna.
		$parsed = str_ireplace(array_keys($teens[$lang]), $teens[$lang], $parsed);

		// Replacea text mot riktiga siffror
		$numbered = str_ireplace(array_keys($nums[$lang]), $nums[$lang], $parsed);

		return (int) $numbered;
	}

	public static function generate($lang = "se") {
		$t = array("se" => array("", "ett", "två", "tre", "fyra", "fem", "sex", "sju", "åtta", "nio"), "en" => array("", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine"));

		$teens = array(
			"se" => array(
				11	=> "elva",
				12	=> "tolv",
				13	=> "tretton",
				14	=> "fjorton",
				15	=> "femton",
				16	=> "sexton",
				17	=> "sjutton",
				18	=> "arton",
				19	=> "nitton"),
			"en" => array(
				11	=> "eleven",
				12	=> "twelve",
				13	=> "thirteen",
				14	=> "fourteen",
				15	=> "fifteen",
				16	=> "sixteen",
				17	=> "seventeen",
				18	=> "eighteen",
				19	=> "nineteen")
		);

		$others = array(
			"se" => array(
				2 => "tjugo",
				3 => "trettio",
				4 => "fyrtio",
				5 => "femtio",
				6 => "sextio",
				7 => "sjuttio",
				8 => "åttio",
				9 => "nittio"
			),
			"en" => array(
				2 => "twenty",
				3 => "thirty",
				4 => "fourty",
				5 => "fifty",
				6 => "sixty",
				7 => "seventy",
				8 => "eighty",
				9 => "ninety"
			)
		);

		$num = null;

		for($x=0; $x<4; $x++) {
			$rnd = mt_rand(1, 9);
			$num = $num . $rnd;
		}

		$tl = array("se" => "tusen", "en" => "thousand");
		$hl = array("se" => "hundra", "en" => "hundred");

		$thousand 	= $t[$lang][substr($num, 0, 1)] . $tl[$lang];
		$hundred 	= $t[$lang][substr($num, 1, 1)] . $hl[$lang];

		$last = substr($num, 2, 2);

		if($last<20) :
			$suffix = str_replace(array_keys($teens[$lang]), $teens[$lang], $last);
		else :
			$f = substr($last, 0, 1);
			$l = substr($last, 1, 1);
			$suffix = str_replace(array_keys($others[$lang]), $others[$lang], $f) . $t[$lang][$l];
		endif;

		$_SESSION["ka_cap"] = $thousand . $hundred . $suffix;

		if($lang=="en") {
			return $thousand . ' ' . $hundred . ' and ' . $suffix;
		} else {
			return $thousand . ' ' . $hundred . ' ' . $suffix;
		}
		
	}
}

if(count($_POST)>0) {

	$chk = (int) $_POST["number"];

	if(captcha::validate($chk)) {
		echo 'VALIDATED!';
	} else {
		echo 'ROBOT ALERT!';
	}
}

?>
<!DOCTYPE html>
<html dir="ltr" lang="sv-SE">
<head>
	
	<title>Captcha</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<style type="text/css">
		body 	{ padding: 50px; font-family: "Open Sans";}
		h3 		{ font-weight: 300; font-size: 32px; color: #bada55; border-bottom: 1px solid #bada55; padding: 0 0 10px 0;}
		p 		{ font-weight: 300; font-size: 18px; color: #444; }
		input 	{ padding: 10px; border: 1px solid #ccc; width: 70px; font-weight: 700; font-size: 24px; border-radius: 5px; color: #444;}
	</style>

</head>
<body>

<form method="post" action="">
	<h3>Generating captcha</h3>
	<p><?=captcha::generate()?></p>

	<h3>Solve captcha</h3>
	<p><input type="text" name="number"></p>
</form>
</body>
</html>