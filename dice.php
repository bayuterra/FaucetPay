<?php
@error_reporting(0);
$banner = "
:hhhhhhyyssssssssssssssssssssssssssssssssyyhhhhhh:
+MMMNmmmdyyssssssssssssssssssssssssssssyhdmmmNMMM+
+MNmmd+.                                  .+dmmNM+
+Nmms`                                      `smmN+
/mmy                                          ymm/
/mm/                                          /mm/
/mm/      `------------.  ---------.`         /mm/
/mm/      :mmmmmmmmmmmm+ `mmmmmmmmmmmh+`      /mm/
/mm/      :mmmh////////- `mmmm////+smmmd-     /mm/
/mm/      :mmmy          `mmmm      :mmmd     /mm/
/mm/      :mmmy          `mmmm      -mmmd     /mm/
/mm/      :mmmmddddddd+  `mmmm::::/odmmm/     /mm/
/mm/      :mmmdyyyyyyy/  `mmmmmmmmmmmds-      /mm/
/mm/      :mmmy          `mmmm:::::-.         /mm/
/mm/      :mmmy          `mmmm                /mm/
/mm/      :mmmy          `mmmm                /mm/
/mm/      :ddds          `dddd                /mm/
/mm/                                          /mm/
/mm/                                          /mm/
/mm/                                          /mm/
/mmy                                          ymm/
+Nmms`                                      `smmN+
+MNmmd+.                                  .+dmmNM+
+MMMNmmmdhyssssssssssssssssssssssssssssyhdmmmNMMM+
:hhhhhyyyssssssssssssssssssssssssssssssssyyyhhhhh:
\n";

function dices($send, $coki){
$ch = curl_init('https://faucetpay.io/dice/play');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$headers = array();
	$headers[] = 'accept-encoding: json';
	$headers[] = 'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
	$headers[] = 'content-length: 136';
	$headers[] = 'content-type: application/x-www-form-urlencoded; charset=UTF-8';
	$headers[] = "cookie: ".$coki;
	$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36';
	$headers[] = 'x-requested-with: XMLHttpRequest';
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $send);
	$responses = curl_exec($ch);
	if ($responses == null){
 echo("failed");
    }else{
      return $responses;
   }
}
$pit = 0;
$pt = 10;
$jps = rand(110,150);
$mjake = number_format(5, 8);

system('clear');
echo $banner;
sleep(3);
system('clear');
echo "Config Dice For Faucetpay.io\n";
echo "Cookie : ";
$coki=trim(fgets(STDIN));
system('clear');
echo "Wait to Login ....\n";
sleep(3);
$bet = '0.00000001';
$wcs = number_format(rand(70,80),2);
$nas = 95 / $wcs;
$gp = number_format($nas, 5);
$prof = $gp * 100;
$prof = $prof / 100 * $bet;
$prof = (int)($prof*100000000) / 100000000;
$prof = number_format((float)$prof - $bet,8);
$send = "play=true&coin=DOGE&client_seed=RUUFuGsc5lQPgMXdOVo&bet_amt=".$bet."&profit=".$prof."&payout=".$gp."&winning_chance=".$wcs."&prediction=1";
$log = dices($send, $coki);
$login = json_decode($log);
$ese = number_format((float)$login->balance +((70 / 100) * $login->balance) ,8);
if($login->error == 0){
	$blk = $login->balance;
	system('clear');
	echo "Lgoin Success....\n";
	echo "\nExample Stop If Income : 70%\n";
	echo "Stop If Income : ";
	$income=trim(fgets(STDIN));
	$ese = number_format((float)$login->balance +(($income / 100) * $login->balance) ,8);
	echo "Warning This Script Only DogeCoin\n";
	echo "\nPlease Select Your Main Balance To Run This Script\n";
	echo "1. 1-50 DogeCoin\n2. 60-100 DogeCoin\n3. 200-500 DogeCoin\n4. 700-1000 DogeCoin\n";
	echo "Please Select a Main Balance Choice : ";
	$sal=trim(fgets(STDIN));
	if($sal == 1){
		$blk = $login->balance;
		$bets = number_format(0.001, 8);
		$cb = $jps;
		$wcmin = 20;
		$wcmax = 60;
		$sp = number_format(0.01, 5);
		$pr = rand(1,2);
	}
	if($sal == 2){
		$blk = $login->balance;
		$bets = number_format(0.003, 8);
		$cb = $jps;
		$wcmin = 20;
		$wcmax = 60;
		$sp = number_format(0.05, 5);
		$pr = rand(1,2);
	}
	if($sal == 3){
		$blk = $login->balance;
		$bets = number_format(0.008, 8);
		$cb = $jps;
		$wcmin = 20;
		$wcmax = 60;
		$sp = number_format(0.1, 5);
		$pr = rand(1,2);
	}
	if($sal == 4){
		$blk = $login->balance;
		$bets = number_format(0.01, 8);
		$cb = $jps;
		$wcmin = 20;
		$wcmax = 60;
		$sp = number_format(0.8, 5);
		$pr = rand(1,2);
	}
system('clear');
RBS:
while(true){
$bet = number_format($bets,8);
$wc = number_format(rand($wcmin,$wcmax),2);
$nas = 95 / $wc;
$gp = number_format($nas, 5);
$prof = $gp * 100;
$prof = $prof / 100 * $bet;
$prof = (int)($prof*100000000) / 100000000;
$prof = number_format((float)$prof - $bet,8);
$predic = $pr;
$send = "play=true&coin=DOGE&client_seed=RUUFuGsc5lQPgMXdOVo&bet_amt=".$bet."&profit=".$prof."&payout=".$gp."&winning_chance=".$wc."&prediction=".$predic;
$ga = json_decode(dices($send, $coki),true);
$tot = number_format($ga['balance'] - $blk, 8);
$getpre = number_format(($tot / $blk) * 100, 2);
	if($ga['balance'] >= $ese){
			echo"\nHappy Today You Are The Lucky One\nCome back tomorrow, don't push too hard\n";
			$getpre = number_format(($tot / $blk) * 100, 2);
			echo"\nPrevious balance : ".$blk." -> Balance Now : ".$ga['balance']."\n\n";
			exit();
	}
	if($ga['error'] == 1){
			echo "\nToday Is Your Bad Day, Try Again Tomorrow\nYour balance is not enough\n";
			exit();
	}
	if($ga['win'] == 1){
		$pits = number_format($pit + $prof, 8);
		$tot = number_format($ga['balance'] - $blk, 8);
		$getpre = number_format(($tot / $blk) * 100, 2);
		echo "WIN	|| Profit : ".$pits." DOGE	|| Ballance : ".$ga['balance']." DOGE\n";
		if($pits >= $sp){
			echo "Refresh......\n";
			if($pits >= $mjake){
				echo "\nCongratulation Your Get Jakepot \nTotal Income : ".$getpre."% or ".$tot."\n\n";
				sleep($pr);
				goto RBS;
			}
			goto RBS;
		}
		if($ga['balance'] >= $ese){
			echo"\nHappy Today You Are The Lucky One\nCome back tomorrow, don't push too hard\n";
			$getpre = number_format(($tot / $blk) * 100, 2);
			echo"\nPrevious balance : ".$blk." -> Balance Now : ".$ga['balance']."\n\n";
			exit();
		}
		if($ga['error'] == 1){
			echo "\nToday Is Your Bad Day, Try Again Tomorrow\nYour balance is not enough\n";
			exit();
		}
	}
	if($ga['win'] == 0){
		$pits = number_format($pit - $bet, 8);
		$tot = number_format($ga['balance'] - $blk, 8);
		$getpre = number_format(($tot / $blk) * 100, 2);
		echo "LOSE	|| Profit : ".$pits." DOGE	|| Ballance : ".$ga['balance']." DOGE\n";
		if($pits >= $sp){
			echo "Refresh......\n";
			if($pits >= $mjake){
				echo "\nCongratulation Your Get Jakepot \nTotal Income : ".$getpre."% or ".$tot."\n\n";
				sleep($pr);
				goto RBS;
			}
			goto RBS;
		}
		if($ga['balance'] >= $ese){
			echo"\nHappy Today You Are The Lucky One\nCome back tomorrow, don't push too hard\n";
			$getpre = number_format(($tot / $blk) * 100, 2);
			echo"\nPrevious balance : ".$blk." -> Balance Now : ".$ga['balance']."\n\n";
			exit();
		}
		if($ga['error'] == 1){
			echo "\nToday Is Your Bad Day, Try Again Tomorrow\nYour balance is not enough\n";
			exit();
		}
		
			$bet = number_format($bets,8);
			for ($i= 1; $i <= 100; $i++) { 
					$bet = number_format((float)$bet +(($cb / 100) * $bet) ,8);
					$wc = number_format(rand($wcmin,$wcmax),2);
					$nas = 95 / $wc;
					$gp = number_format($nas, 5);
					$prof = $gp * 100;
					$prof = $prof / 100 * $bet;
					$prof = (int)($prof*100000000) / 100000000;
					$prof = number_format((float)$prof - $bet,8);
					$send = "play=true&coin=DOGE&client_seed=RUUFuGsc5lQPgMXdOVo&bet_amt=".$bet."&profit=".$prof."&payout=".$gp."&winning_chance=".$wc."&prediction=1";
					$ga = json_decode(dices($send, $coki),true);
					$getpre = number_format(($tot / $blk) * 100, 2);
					if($ga['balance'] >= $ese){
						echo"\nHappy Today You Are The Lucky One\nCome back tomorrow, don't push too hard\n";
						$getpre = number_format(($tot / $blk) * 100, 2);
						echo"\nPrevious balance : ".$blk." -> Balance Now : ".$ga['balance']."\n\n";
						exit();
					}
					if($ga['error'] == 1){
						echo "\nToday Is Your Bad Day, Try Again Tomorrow\nYour balance is not enough\n";
						exit();
					}
					if($ga['win'] == 1){
						$pits = number_format($pit + $prof, 8);
						$tot = number_format($ga['balance'] - $blk, 8);
						$getpre = number_format(($tot / $blk) * 100, 2);
						echo "WIN	|| Profit : ".$pits." DOGE	|| Ballance : ".$ga['balance']." DOGE\n";
							if($pits >= $sp){
								echo "Refresh......\n";
								if($pits >= $mjake){
									echo "\nCongratulation Your Get Jakepot \nTotal Income : ".$getpre."% or ".$tot."\n\n";
									sleep($pr);
									goto RBS;
								}
								goto RBS;
							}
							if($ga['balance'] >= $ese){
								echo"\nHappy Today You Are The Lucky One\nCome back tomorrow, don't push too hard\n";
								$getpre = number_format(($tot / $blk) * 100, 2);
								echo"\nPrevious balance : ".$blk." -> Balance Now : ".$ga['balance']."\n\n";
								exit();
							}
							if($ga['error'] == 1){
								echo "\nToday Is Your Bad Day, Try Again Tomorrow\nYour balance is not enough\n";
								exit();
							}
						}
					if($ga['win'] == 0){
						$pits = number_format($pit - $bet, 8);
						$tot = number_format($ga['balance'] - $blk, 8);
						$getpre = number_format(($tot / $blk) * 100, 2);
						echo "LOSE	|| Profit : ".$pits." DOGE	|| Ballance : ".$ga['balance']." DOGE\n";
							if($pits >= $sp){
								echo "Refresh......\n";
								if($pits >= $mjake){
									echo "\nCongratulation Your Get Jakepot \nTotal Income : ".$getpre."% or ".$tot."\n\n";
									sleep($pr);
									goto RBS;
								}
								goto RBS;
							}
							if($ga['balance'] >= $ese){
								echo"\nHappy Today You Are The Lucky One\nCome back tomorrow, don't push too hard\n";
								$getpre = number_format(($tot / $blk) * 100, 2);
								echo"\nPrevious balance : ".$blk." -> Balance Now : ".$ga['balance']."\n\n";
								exit();
							}
							if($ga['error'] == 1){
								echo "\nToday Is Your Bad Day, Try Again Tomorrow\nYour balance is not enough\n";
								exit();
							}
					}
			}
	}
	if($ga['error'] == 1){
		echo "\nToday Is Your Bad Day, Try Again Tomorrow\nYour balance is not enough\n";
		exit();
	}
}
}else{
	echo "\nLogin Failed\n";
	exit();
}


?>
