<?php
/**
 * @FileName: pregMatch.php
 * @Desc: 
 * @Author: Faithlee098
 * @Mail: lijiabin098@126.com 
 * @CTime: Tue 19 Aug 2014 10:31:05 PM CST
 */

//如果正则表达式是无效的，则会返回false
//invalid
$regexp = 'php';

//valid
$regexp = '|php|i';

if (preg_match($regexp, '') === false ) {
	throw new Exception('invalid regexp expression');
}

//foreach循环替换字符串

class Format {
	const DEFAULT_FORMAT = "%timestamp% %priorityName% (%priority%) %message%";

	public function foreachFormat($formatter)
	{
		$output = self::DEFAULT_FORMAT;		

		foreach ($formatter as $key => $name) {
			$output = str_replace("%{$key}%", $name, $output);
		}

		echo $output;
	}
}


$formatter1 = array(
	'timestamp'	=> date('c'),
	'priorityName' => 'WARNING',
	'priority' => 4,
	'message' => 'THIS IS A WARNING'
);
//print_r($formatter);

$format = new Format();
$format->foreachFormat($formatter1);




