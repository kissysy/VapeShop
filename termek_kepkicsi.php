<?

header("Content-type: image/jpeg");
$kep = imagecreatefromjpeg($cel);

$cel2 = imagecreatetruecolor(120,120);
$kiskepnev = $_POST['ter-nev'];
$kiskepmarka  = $_POST[ 'ter-marka' ];

	$fy = imagesy( $kep );
	$fx = imagesx( $kep );
	if($fx > $fy)
	{
		$cx = 120;
		$cy = 120*$fy/$fx;


	}
	else
	{

		$cy = 120;
		$cx = 120*$fx/$fy;

	}

	imagecopyresampled($cel2,$kep,0,0,0,0,$cx,$cy,$fx,$fy);


imagejpeg($kep , './kep_kicsi/' . $kiskepnev . '.jpg');

	imagedestroy($kep);

















?>
