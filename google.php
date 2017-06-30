<?php
//echo 'perla';
/*
merchantrefno=11111122118673195573
&merchantcode=GNS
&username=GNS_01
&userpass=GNS_01
&paymentprovider=GNS
&paymentmode=CA
&channelcode=INR
&servicecode=MR
&storecode=GNS_01
&terminalcode=GNS_01
&customerid=GNS_11111
&tcflag=1
&optional1=
&optional2=
&optional3=
&optional4=
&optional5=
&consumerno=919930310679
&amount=20
&spcode=VOD
&webuser=
*/

$key = 'abcdefgh12345678';
	$data = 'merchantrefno=11111122118673195573&merchantcode=GNS&username=GNS_01&userpass=GNS_01&paymentprovider=GNS&paymentmode=CA&channelcode=INR&servicecode=MR&storecode=GNS_01&terminalcode=GNS_01&customerid=GNS_11111&tcflag=1&optional1=&optional2=&optional3=&optional4=&optional5=&consumerno=919930310679&amount=20&spcode=VOD&webuser=';
 $encData = mcrypt_encrypt('tripledes', $key, $data, 'ecb');
$data = 'BU1vQY/VZN8E7JKkk9gp5ql3yCChMiW7yAn9lyGdR8X+CyP63B80+ItUsbqRY1zLBeefoJqrZjEo7cBoY9Mt04rsOJz/AGJ2OGKcH8EyMtA7jaSS8ILiKmCIA1scOW4FGeIDsk8FhyixC2MmG7FT9spZ0jolmmLDqc5yCl3PaKFlIPo8WBu1TvhZQmW3Vn/7Kg6k9x2JTkCNu4c5Ka+EnnsD+d8i3xYJLJ2MdFNXzerOSkWiwt5rYT/8ntoZGFCu3brBQQ6WiQWcps9hX0sAiUA9LMXXMo4tN3YDlYSSpR0PMoJpvUcci9eEEtkktiHR7ncP4BJ2EZgncGYoM+bg4tjjlhdFvbVGGeDPVLx5/sVZlwOfZeyQ/U1fpZ2NBOmd9xl1CIpq+lYqn7tquW3lA3p4ElhH6ONCVy3kq+mQKwq/BcrQulTTyw==';
//echo $encData;
echo $url = "https://invas01.euronetworldwide.com/VASRechargeTest/Process.aspx?merchantrefno=11111122118673195573&merchantcode=GNS&RequestType=service&MSG=$data";

