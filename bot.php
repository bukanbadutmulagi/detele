<?php
include 'token.php';
//@ system("clear");
//@ error_reporting();
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
//@ =======================================
system("clear");
system ("figlet Lunar Bot");
$file = fopen('lunar.txt','a');
/** **********************************************************************************
 * Generate hundreds of thousands of unique mobile & desktop User Agents that are 100% authentic.
 * Supports Hundreds of Android devices, 32 & 64 bit versions of Windows XP-10.5, Linux 540-686, and Mac 7-10.12
 * as well as browsers Firefox, Chrome, and Internet Explorer.
 */
class userAgent {
    /**
     * Windows Operating System list with dynamic versioning
     * @var array $windows_os
     */
    public $windows_os = [ '[Windows; |Windows; U; |]Windows NT 6.:number0-3:;[ Win64; x64| WOW64| x64|]',
                           '[Windows; |Windows; U; |]Windows NT 10.:number0-5:;[ Win64; x64| WOW64| x64|]', ];
    /**
     * Linux Operating Systems [limited]
     * @var array $linux_os
     */
    public $linux_os = [ '[Linux; |][U; |]Linux x86_64',
                         '[Linux; |][U; |]Linux i:number5-6::number4-8::number0-6: [x86_64|]' ];
    /**
     * Mac Operating System (OS X) with dynamic versioning
     * @var array $mac_os
     */
    public $mac_os = [ 'Macintosh; [U; |]Intel Mac OS X :number7-9:_:number0-9:_:number0-9:',
                       'Macintosh; [U; |]Intel Mac OS X 10_:number0-12:_:number0-9:' ];
    /**
     * Versions of Android to be used
     * @var array $androidVersions
     */
    public $androidVersions = [ '4.3.1',
                                '4.4',
                                '4.4.1',
                                '4.4.4',
                                '5.0',
                                '5.0.1',
                                '5.0.2',
                                '5.1',
                                '5.1.1',
                                '6.0',
                                '6.0.1',
                                '7.0',
                                '7.1',
                                '7.1.1' ];
    /**
     * Holds the version of android for the User Agent being generated
     * @property string $androidVersion
     */
    public $androidVersion;
    /**
     * Android devices and for specific android versions
     * @var array $androidDevices
     */
    public $androidDevices = [ '4.3' => [ 'GT-I9:number2-5:00 Build/JDQ39',
                                          'Nokia 3:number1-3:[10|15] Build/IMM76D',
                                          '[SAMSUNG |]SM-G3:number1-5:0[R5|I|V|A|T|S] Build/JLS36C',
                                          'Ascend G3:number0-3:0 Build/JLS36I',
                                          '[SAMSUNG |]SM-G3:number3-6::number1-8::number0-9:[V|A|T|S|I|R5] Build/JLS36C',
                                          'HUAWEI G6-L:number10-11: Build/HuaweiG6-L:number10-11:',
                                          '[SAMSUNG |]SM-[G|N]:number7-9:1:number0-8:[S|A|V|T] Build/[JLS36C|JSS15J]',
                                          '[SAMSUNG |]SGH-N0:number6-9:5[T|V|A|S] Build/JSS15J',
                                          'Samsung Galaxy S[4|IV] Mega GT-I:number89-95:00 Build/JDQ39',
                                          'SAMSUNG SM-T:number24-28:5[s|a|t|v] Build/[JLS36C|JSS15J]',
                                          'HP :number63-73:5 Notebook PC Build/[JLS36C|JSS15J]',
                                          'HP Compaq 2:number1-3:10b Build/[JLS36C|JSS15J]',
                                          'HTC One 801[s|e] Build/[JLS36C|JSS15J]',
                                          'HTC One max Build/[JLS36C|JSS15J]',
                                          'HTC Xplorer A:number28-34:0[e|s] Build/GRJ90', ],
                               '4.4' => [ 'XT10:number5-8:0 Build/SU6-7.3',
                                          'XT10:number12-52: Build/[KXB20.9|KXC21.5]',
                                          'Nokia :number30-34:10 Build/IMM76D',
                                          'E:number:20-23::number0-3::number0-4: Build/24.0.[A|B].1.34',
                                          '[SAMSUNG |]SM-E500[F|L] Build/KTU84P',
                                          'LG Optimus G Build/KRT16M',
                                          'LG-E98:number7-9: Build/KOT49I',
                                          'Elephone P:number2-6:000 Build/KTU84P',
                                          'IQ450:number0-4: Quad Build/KOT49H',
                                          'LG-F:number2-5:00[K|S|L] Build/KOT49[I|H]',
                                          'LG-V:number3-7::number0-1:0 Build/KOT49I',
                                          '[SAMSUNG |]SM-J:number1-2::number0-1:0[G|F] Build/KTU84P',
                                          '[SAMSUNG |]SM-N80:number0-1:0 Build/[KVT49L|JZO54K]',
                                          '[SAMSUNG |]SM-N900:number5-8: Build/KOT49H',
                                          '[SAMSUNG-|]SGH-I337[|M] Build/[JSS15J|KOT49H]',
                                          '[SAMSUNG |]SM-G900[W8|9D|FD|H|V|FG|A|T] Build/KOT49H',
                                          '[SAMSUNG |]SM-T5:number30-35: Build/[KOT49H|KTU84P]',
                                          '[Google |]Nexus :number5-7: Build/KOT49H',
                                          'LG-H2:number0-2:0 Build/KOT49[I|H]',
                                          'HTC One[_M8|_M9|0P6B|801e|809d|0P8B2|mini 2|S][ dual sim|] Build/[KOT49H|KTU84L]',
                                          '[SAMSUNG |]GT-I9:number3-5:0:number0-6:[V|I|T|N] Build/KOT49H',
                                          'Lenovo P7:number7-8::number1-6: Build/[Lenovo|JRO03C]',
                                          'LG-D95:number1-8: Build/KOT49[I|H]',
                                          'LG-D:number1-8::number0-8:0 Build/KOT49[I|H]',
                                          'Nexus5 V:number6-7:.1 Build/KOT49H',
                                          'Nexus[_|] :number4-10: Build/[KOT49H|KTU84P]',
                                          'Nexus[_S_| S ][4G |]Build/GRJ22',
                                          '[HM NOTE|NOTE-III|NOTE2 1LTE[TD|W|T]',
                                          'ALCATEL ONE[| ]TOUCH 70:number2-4::number0-9:[X|D|E|A] Build/KOT49H',
                                          'MOTOROLA [MOTOG|MSM8960|RAZR] Build/KVT49L' ],
                               '5.0' => [ 'Nokia :number10-11:00 [wifi|4G|LTE] Build/GRK39F',
                                          'HTC 80:number1-2[s|w|e|t] Build/[LRX22G|JSS15J]',
                                          'Lenovo A7000-a Build/LRX21M;',
                                          'HTC Butterfly S [901|919][s|d|] Build/LRX22G',
                                          'HTC [M8|M9|M8 Pro Build/LRX22G',
                                          'LG-D3:number25-37: Build/LRX22G',
                                          'LG-D72:number0-9: Build/LRX22G',
                                          '[SAMSUNG |]SM-G4:number0-9:0 Build/LRX22[G|C]',
                                          '[|SAMSUNG ]SM-G9[00|25|20][FD|8|F|F-ORANGE|FG|FQ|H|I|L|M|S|T] Build/[LRX21T|KTU84F|KOT49H]',
                                          '[SAMSUNG |]SM-A:number7-8:00[F|I|T|H|] Build/[LRX22G|LMY47X]',
                                          '[SAMSUNG-|]SM-N91[0|5][A|V|F|G|FY] Build/LRX22C',
                                          '[SAMSUNG |]SM-[T|P][350|550|555|355|805|800|710|810|815] Build/LRX22G',
                                          'LG-D7:number0-2::number0-9: Build/LRX22G',
                                          '[LG|SM]-[D|G]:number8-9::number0-5::number0-9:[|P|K|T|I|F|T1] Build/[LRX22G|KOT49I|KVT49L|LMY47X]' ],
                               '5.1' => [ 'Nexus :number5-9: Build/[LMY48B|LRX22C]',
                                          '[|SAMSUNG ]SM-G9[28|25|20][X|FD|8|F|F-ORANGE|FG|FQ|H|I|L|M|S|T] Build/[LRX22G|LMY47X]',
                                          '[|SAMSUNG ]SM-G9[35|350][X|FD|8|F|F-ORANGE|FG|FQ|H|I|L|M|S|T] Build/[MMB29M|LMY47X]',
                                          '[MOTOROLA |][MOTO G|MOTO G XT1068|XT1021|MOTO E XT1021|MOTO XT1580|MOTO X FORCE XT1580|MOTO X PLAY XT1562|MOTO XT1562|MOTO XT1575|MOTO X PURE XT1575|MOTO XT1570 MOTO X STYLE] Build/[LXB22|LMY47Z|LPC23|LPK23|LPD23|LPH223]' ],
                               '6.0' => [ '[SAMSUNG |]SM-[G|D][920|925|928|9350][V|F|I|L|M|S|8|I] Build/[MMB29K|MMB29V|MDB08I|MDB08L]',
                                          'Nexus :number5-7:[P|X|] Build/[MMB29K|MMB29V|MDB08I|MDB08L]',
                                          'HTC One[_| ][M9|M8|M8 Pro] Build/MRA58K',
                                          'HTC One[_M8|_M9|0P6B|801e|809d|0P8B2|mini 2|S][ dual sim|] Build/MRA58K' ],
                               '7.0' => [ 'Pixel [XL|C] Build/[NRD90M|NME91E]',
                                          'Nexus :number5-9:[X|P|] Build/[NPD90G|NME91E]',
                                          '[SAMSUNG |]GT-I:number91-98:00 Build/KTU84P',
                                          'Xperia [V |]Build/NDE63X',
                                          'LG-H:number90-93:0 Build/NRD90[C|M]' ],
                               '7.1' => [ 'Pixel [XL|C] Build/[NRD90M|NME91E]',
                                          'Nexus :number5-9:[X|P|] Build/[NPD90G|NME91E]',
                                          '[SAMSUNG |]GT-I:number91-98:00 Build/KTU84P',
                                          'Xperia [V |]Build/NDE63X',
                                          'LG-H:number90-93:0 Build/NRD90[C|M]' ] ];
    /**
     * List of "OS" strings used for android
     * @var array $android_os
     */
    public $android_os = [ 'Linux; Android :androidVersion:; :androidDevice:',
                           //TODO: Add a $windowsDevices variable that does the same as androidDevice
                           //'Windows Phone 10.0; Android :androidVersion:; :windowsDevice:',
                           'Linux; U; Android :androidVersion:; :androidDevice:',
                           'Android; Android :androidVersion:; :androidDevice:', ];
    /**
     * List of "OS" strings used for iOS
     * @var array $mobile_ios
     */
    public $mobile_ios = [ 'iphone' => 'iPhone; CPU iPhone OS :number7-11:_:number0-9:_:number0-9:; like Mac OS X;',
                           'ipad' => 'iPad; CPU iPad OS :number7-11:_:number0-9:_:number0-9: like Mac OS X;',
                           'ipod' => 'iPod; CPU iPod OS :number7-11:_:number0-9:_:number0-9:; like Mac OS X;', ];
    
    /**
     * Get a random operating system
     * @param null|string $os
     * @return string *
     */
    public function getOS($os = NULL) {
        $_os = [];
        if($os === NULL || in_array($os, [ 'chrome', 'firefox', 'explorer' ])) {
            $_os = $os === 'explorer' ? $this->windows_os : array_merge($this->windows_os, $this->linux_os, $this->mac_os);
        } else {
            $_os += $this->{$os . '_os'};
        }
        // randomly select on operating system
        $selected_os = rtrim($_os[random_int(0, count($_os) - 1)], ';');
        
        // check for spin syntax
        if(strpos($selected_os, '[') !== FALSE) {
            $selected_os = self::processSpinSyntax($selected_os);
        }
        
        // check for random number syntax
        if(strpos($selected_os, ':number') !== FALSE) {
            $selected_os = self::processRandomNumbers($selected_os);
        }
        
        if(random_int(1, 100) > 50) {
            $selected_os .= '; en-US';
        }
        return $selected_os;
    }
    
    /**
     * Get Mobile OS
     * @param null|string $os Can specifiy android, iphone, ipad, ipod, or null/blank for random
     * @return string *
     */
    public function getMobileOS($os = NULL) {
        $os = strtolower($os);
        $_os = [];
        switch( $os ) {
            case'android':
                $_os += $this->android_os;
            break;
            case 'iphone':
            case 'ipad':
            case 'ipod':
                $_os[] = $this->mobile_ios[$os];
            break;
            default:
                $_os = array_merge($this->android_os, array_values($this->mobile_ios));
        }
        // select random mobile os
        $selected_os = rtrim($_os[random_int(0, count($_os) - 1)], ';');
        if(strpos($selected_os, ':androidVersion:') !== FALSE) {
            $selected_os = $this->processAndroidVersion($selected_os);
        }
        if(strpos($selected_os, ':androidDevice:') !== FALSE) {
            $selected_os = $this->addAndroidDevice($selected_os);
        }
        if(strpos($selected_os, ':number') !== FALSE) {
            $selected_os = self::processRandomNumbers($selected_os);
        }
        return $selected_os;
    }
    
    /**
     *  static::processRandomNumbers
     * @param $selected_os
     * @return null|string|string[] *
     */
    public static function processRandomNumbers($selected_os) {
        return preg_replace_callback('/:number(\d+)-(\d+):/i', function($matches) { return random_int($matches[1], $matches[2]); }, $selected_os);
    }
    
    /**
     *  static::processSpinSyntax
     * @param $selected_os
     * @return null|string|string[] *
     */
    public static function processSpinSyntax($selected_os) {
        return preg_replace_callback('/\[([\w\-\s|;]*?)\]/i', function($matches) {
            $shuffle = explode('|', $matches[1]);
            return $shuffle[array_rand($shuffle)];
        }, $selected_os);
    }
    
    /**
     * processAndroidVersion
     * @param $selected_os
     * @return null|string|string[] *
     */
    public function processAndroidVersion($selected_os) {
        $this->androidVersion = $version = $this->androidVersions[array_rand($this->androidVersions)];
        return preg_replace_callback('/:androidVersion:/i', function($matches) use ($version) { return $version; }, $selected_os);
    }
    
    /**
     * addAndroidDevice
     * @param $selected_os
     * @return null|string|string[] *
     */
    public function addAndroidDevice($selected_os) {
        $devices = $this->androidDevices[substr($this->androidVersion, 0, 3)];
        $device  = $devices[array_rand($devices)];
        
        $device = self::processSpinSyntax($device);
        return preg_replace_callback('/:androidDevice:/i', function($matches) use ($device) { return $device; }, $selected_os);
    }
    
    /**
     *  static::chromeVersion
     * @param $version
     * @return string *
     */
    public static function chromeVersion($version) {
        return random_int($version['min'], $version['max']) . '.0.' . random_int(1000, 4000) . '.' . random_int(100, 400);
    }
    
    /**
     *  static::firefoxVersion
     * @param $version
     * @return string *
     */
    public static function firefoxVersion($version) {
        return random_int($version['min'], $version['max']) . '.' . random_int(0, 9);
    }
    
    /**
     *  static::windows
     * @param $version
     * @return string *
     */
    public static function windows($version) {
        return random_int($version['min'], $version['max']) . '.' . random_int(0, 9);
    }
    
    /**
     * generate
     * @param null $userAgent
     * @return string *
     */
    public function generate($userAgent = NULL) {
        if($userAgent === NULL) {
            $r = random_int(0, 100);
            if($r >= 44) {
                $userAgent = array_rand([ 'firefox' => 1, 'chrome' => 1, 'explorer' => 1 ]);
            } else {
                $userAgent = array_rand([ 'iphone' => 1, 'android' => 1, 'mobile' => 1 ]);
            }
        } elseif($userAgent == 'windows' || $userAgent == 'mac' || $userAgent == 'linux') {
            $agents = [ 'firefox' => 1, 'chrome' => 1 ];
            if($userAgent == 'windows') {
                $agents['explorer'] = 1;
            }
            $userAgent = array_rand($agents);
        }
        $_SESSION['agent'] = $userAgent;
        if($userAgent == 'chrome') {
            return 'Mozilla/5.0 (' . $this->getOS($userAgent) . ') AppleWebKit/' . (random_int(1, 100) > 50 ? random_int(533, 537) : random_int(600, 603)) . '.' . random_int(1, 50) . ' (KHTML, like Gecko) Chrome/' . self::chromeVersion([ 'min' => 47,
                                                                                                                                                                                                                                              'max' => 55 ]) . ' Safari/' . (random_int(1, 100) > 50 ? random_int(533, 537) : random_int(600, 603));
        } elseif($userAgent == 'firefox') {
            
            return 'Mozilla/5.0 (' . $this->getOS($userAgent) . ') Gecko/' . (random_int(1, 100) > 30 ? '20100101' : '20130401') . ' Firefox/' . self::firefoxVersion([ 'min' => 45,
                                                                                                                                                                        'max' => 74 ]);
        } elseif($userAgent == 'explorer') {
            
            return 'Mozilla / 5.0 (compatible; MSIE ' . ($int = random_int(7, 11)) . '.0; ' . $this->getOS('windows') . ' Trident / ' . ($int == 7 || $int == 8 ? '4' : ($int == 9 ? '5' : ($int == 10 ? '6' : '7'))) . '.0)';
        } elseif($userAgent == 'mobile' || $userAgent == 'android' || $userAgent == 'iphone' || $userAgent == 'ipad' || $userAgent == 'ipod') {
            
            return 'Mozilla/5.0 (' . $this->getMobileOS($userAgent) . ') AppleWebKit/' . (random_int(1, 100) > 50 ? random_int(533, 537) : random_int(600, 603)) . '.' . random_int(1, 50) . ' (KHTML, like Gecko)  Chrome/' . self::chromeVersion([ 'min' => 47,
                                                                                                                                                                                                                                                     'max' => 55 ]) . ' Mobile Safari/' . (random_int(1, 100) > 50 ? random_int(533, 537) : random_int(600, 603)) . '.' . random_int(0, 9);
        } else {
            new Exception('Unable to determine user agent to generate');
        }
    }
}
// @*Return -------------------------------------------------
// @*Get Refferal Code
// @*Return Gen


function headerGen1($ua){
$headers = array();
$headers[] = 'Host: api.lunarcrush.com';
$headers[] = 'Origin: https://lunarcrush.com';
$headers[] = 'User-Agent: '. $ua;
$headers[] = 'Accept: */*';
$headers[] = 'Referer: https://lunarcrush.com/';
$headers[] = 'Accept-Encoding: gzip, deflate';
$headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
$headers[] = 'X-Requested-With: mark.via.gp';
return $headers;
}

function netGen1($headers,$url1)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
return $result;
}
function netGen2($headers,$url2)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
return $result;
}
function netGen3($headers,$url3)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url3);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
return $result;
}




echo "[*] Checker Account Key";
sleep(2);
getProfil:
$url50 = "https://api.lunarcrush.com/v2?data=user&action=get-profile&key=$tokenmu";
$body = "";
$headers = headerUtama($body);
$run = netUtama2($body,$headers,$url50);
$x = json_decode($run, true);
$ex = $x["config"]["data"];
if($ex=="user"){
	$nam = $x["data"]["email"];
	$eml = $x["data"]["name"];
echo "\n[*] Terdeteksi Account $eml";
echo "\n[*] Connected With Email $nam";
sleep(2);
echo "\n[*] Mengambil Kode Refferal $eml";
goto getPoin;
} else {
	echo "\n[*] Account tidak terdeteksi";
	echo "\n[*] Masukan Token diFile token.php";
	die;
	}
getPoin:
$url60 = "https://api.lunarcrush.com/v2?data=user&action=points&fresh=1&key=$tokenmu";
$body = "";
$headers = headerUtama($body);
$run = netUtama3($body,$headers,$url60);
$x = json_decode($run, true);
$ex = $x["config"]["data"];
if($ex=="user"){
	$po = $x["data"]["points"];
	$lvl = $x["data"]["level"];
	echo "\n[*] Points Kamu $po dengan level $lvl";
	goto getCodereff;
	} else {
		goto getPoin;
		}

getCodereff:
$url20 = "https://api.lunarcrush.com/v2?data=share&key=$tokenmu";
$body = '{"ratio":"square","share":"Referral","title":"Check out LunarCrush!","url":"/","tweet_text":"I use #LunarCrush to track social insights for cryptocurrencies. Check it out!\n\nhttps://lnr.app/s/{{shareId}} #LunarShare","description":"I use LunarCrush to track social insights for cryptocurrencies. Check it out!\n\nhttps://lnr.app/s/{{shareId}}","shareData":"\"url link\""}';
$headers = headerUtama($body);
$run = netUtama($body,$headers,$url20);
$ex = json_decode($run, true);
$x = $ex["config"]["data"];
if($x=="share"){
	$reff = $ex["data"];
	echo "\n[*] Link Refferal : https://lnr.app/s/$reff";
	goto ua;
	} else {
		echo "\n[*] Ceck Ulang Token key kamu";
		getCodereff;
		}
	////
ua:
$agent = new userAgent();
$ua= $agent->generate('android');
echo "\n[*] Mengambil User Agent";
sleep(1);
echo "\n[*] Connected https://user-agents.net/random";
sleep(1);
echo "\n[*] Succesfully Connected https://user-agents.net/random";
sleep(1);
echo "\n[*] Getting Random Mozilla Firefox";
sleep(3);
echo "\n[*] Success Random User Agent";
goto emel1;
// @*Return -------------------------------------------------
// @*Get Refferal Code
// @*Return Gen

function headerUtama($body){
$headers = array();
$headers[] = 'Host: api.lunarcrush.com';
$headers[] = 'Content-Length: '. strlen($body);
$headers[] = 'Sec-Ch-Ua: Chromium\";v=\"94\",';
$headers[] = 'Sec-Ch-Ua-Mobile: ?1';
$headers[] = 'Save-Data: on';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 10 (QCOMIXM); Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.85 Mobile Safari/537.36';
$headers[] = 'Sec-Ch-Ua-Platform: Android\"\"';
$headers[] = 'Content-Type: text/plain;charset=UTF-8';
$headers[] = 'Accept: */*';
$headers[] = 'Origin: https://lunarcrush.com';
$headers[] = 'Sec-Fetch-Site: same-site';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Referer: https://lunarcrush.com/';
$headers[] = 'Accept-Encoding: gzip, deflate, br';
$headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
return $headers;
}
function headerUtama1(){
$headers = array();
$headers[] = 'Host: api.lunarcrush.com';
$headers[] = 'Sec-Ch-Ua: Chromium\";v=\"94\",';
$headers[] = 'Sec-Ch-Ua-Mobile: ?1';
$headers[] = 'Save-Data: on';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 10 (QCOMIXM); Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.85 Mobile Safari/537.36';
$headers[] = 'Sec-Ch-Ua-Platform: Android\"\"';
$headers[] = 'Accept: */*';
$headers[] = 'Origin: https://lunarcrush.com';
$headers[] = 'Sec-Fetch-Site: same-site';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Referer: https://lunarcrush.com/';
$headers[] = 'Accept-Encoding: gzip, deflate, br';
$headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
return $headers;
}
function netUtama($body,$headers,$url20)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url20);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
return $result;
}

function netUtama1($body,$headers,$url10)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url10);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
return $result;
}
function netUtama2($body,$headers,$url50)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url50);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
return $result;
}
function netUtama3($body,$headers,$url60)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
return $result;
}

function headerEmail($email){
$headers = array();
$headers[] = 'Host: tempmail.plus';
$headers[] = 'Accept: application/json, text/javascript, */*; q=0.01';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 10 (QCOMIXM); Redmi Note 8 Build/QKQ1.190918.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.186 Mobile Safari/537.36';
$headers[] = 'Referer: https://tempmail.plus/en/';
$headers[] = 'Accept-Encoding: gzip, deflate';
$headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
$headers[] = 'Cookie: _ga=GA1.2.384643898.1635408885;_gid=GA1.2.412210743.1635408885;_gat_UA-163460391-1=1;__gads=ID=277a76f3798dfb96-22b096cbe4cc0082:T=1635408886:RT=1635408886:S=ALNI_MZH-i7F3NvhCAD1m1sTXXhIuv8xLQ;_ym_uid=163540888812784903;_ym_d=1635408888;_ym_isad=2;_ym_visorc=w';
$headers[] = 'Cookie: email='. $email;
return $headers;
}
	

function netEmail1($headers,$url1)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
return $result;
}


function netEmail2($headers,$url2)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
return $result;
}
function netEmail3($headers,$url3)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url3);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
return $result;
}
function hEmail(){
$headers = array();
$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:87.0) Gecko/20100101 Firefox/87.0";
$headers[] = "Accept: application/json, text/plain, */*";
$headers[] = "Accept-Language: id,en-US;q=0.7,en;q=0.3";
$headers[] = "Accept-Encoding: gzip, deflate";
$headers[] = "Application-Name: web";
$headers[] = "Application-Version: 2.2.14";
$headers[] = "Dnt: 1";
$headers[] = "Te: trailers";
return $headers;
}
function nEmail1($body,$headers,$u1)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $u1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
return $result;
}
function nEmail2($body,$headers,$u2)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $u2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
return $result;
}
function getstr($str, $exp1, $exp2)
{
    $a = explode($exp1, $str)[1];
    return explode($exp2, $a)[0];
}


emel1:
$rand = 'abcdefghijklmnopqrstuvwxyz1234567890';
$a= substr(str_shuffle($rand), 0, 10);
$email = "$a@mailto.plus";
$url1 = "https://tempmail.plus/api/mails?email=$email&limit=20&epin=";
$headers = headerEmail($email);
$run = netEmail1($headers,$url1);
$x = json_decode($run, true);
$r = $x["result"];
if($r==true){
echo "\n[*] Registered Use email $email";
goto regisLunar;
} else {
goto emel1;
}
emel2:
$url2 = "https://tempmail.plus/api/mails?email=$email&first_id=0&epin=";
$headers = headerEmail($email);
$run = netEmail2($headers,$url2);
$x = json_decode($run, true);
$fid = $x["first_id"];
if($fid==0){
goto emel2;
} else {
goto emel3;
}
emel3:
$url3 = "https://tempmail.plus/api/mails/$fid?email=$email&epin=";
$headers = headerEmail($email);
$run = netEmail3($headers,$url3);
$x = json_decode($run, true);
$ex = $x["from"];
if($ex=="noreply@lunarcrush.com"){
$text = $x["text"];
if(strpos($run, 'There is a request to sign in to your account from')!==false)
{
    $otp = getstr($run, 'device.*\n\n','\n\nTeam');
    echo "\n[*] Berhasil Mendapatkan OTP : $otp\n";
    goto regisLunar2;
}
else
{
    goto emel3;
}
echo "\n[*] Isi Text Pesan : $text";
goto regisLunar2;
} else {
goto emel3;
}

regisLunar:
$i = rand(111,999);
$url1 = "https://api.lunarcrush.com/v2?requestAccess=lunar&platform=web&device=Safari&deviceId=LDID-32686c77-a355-4d86-a12a-a940fbb37f32&validator=TvwZwSOO0T55nrZw0fv00pn0huuTOhTv&clientVersion=lunar-20211013&userAgent=Mozilla%2F5.0%20(Linux%3B%20Android%2010%20(QCOMIXM)%3B%20Redmi%20Note%20$i%20Build%2FQKQ1.190918.001%3B%20wv)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Version%2F4.0%20Chrome%2F74.0.3729.186%20Mobile%20Safari%2F537.36&viewportSize=424x802&screenSize=424x918&locale=id-ID&token=null";
$headers = headerGen1($ua);
$run = netGen1($headers,$url1);
$ex = json_decode($run, true);
$x = $ex["duration"];
if($x==600){
	$token = $ex["token"];
	$sid = $ex["seed"];
	echo "\n[*] Token Berhasil diambil";
	goto regisLunar1;
	} else {
		regisLunar;
		}
regisLunar1:
$url2 = "https://api.lunarcrush.com/v2?data=auth&version=asx33jf2&action=get-code&seed=$sid&email=$email&key=$token";
$headers = headerUtama1();
$run = netGen2($headers,$url2);
$ex = json_decode($run, true);
$x = $ex["config"]["data"];
if($x=="auth"){
	$id = $ex["data"]["id"];
	$vtoken = $ex["data"]["verify_token"];
	$ccode = $ex["data"]["challenge_code"];
	echo "\n[*] Verify Token Berhasil";
	sleep(1);
	echo "\n[*] Menunggu Email Masuk ";
	goto emel2;
	} else {
		regisLunar1;
		}
regisLunar2:
$url3 = "https://api.lunarcrush.com/v2?data=auth&action=login&challenge=$id&code=$otp&share=$reff&referral=$reff&key=$token";
$headers = headerGen1($ua);
$run = netGen3($headers,$url3);
$ex = json_decode($run, true);
$x = $ex["data"]["success"];
if($x==true){
       $token = $ex["data"]["token"];
       echo "[*] Succesfully Reff https://lnr.app/s/$reff";
       echo "\n[*] Token : $token";
       fputs($file,"$token" . "\r\n");
       goto regisLunarr;
       } else {
       	goto regisLunar2;
       }
regisLunarr:
$url10 = "https://api.lunarcrush.com/v2?data=user&action=update-profile&key=$token";
$nim = "Guests". rand(11111,99999);
$body = '{"updates":{"name":"'.$nim.'"}}';
$headers = headerUtama($body);
$run = netUtama1($body,$headers,$url10);
$ex = json_decode($run, true);
$x = $ex["data"]["success"];
if($x==true){
	echo "\n[*] Welcome New User $nim";
	goto emel1;
     } else {
     	regisLunarr;
     }















