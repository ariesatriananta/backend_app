
    <?php function info_tanggal(){
		$hari=array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");
		$bulan=array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
		$bln=array("","01","02","03","04","05","06","07","08","09","10","11","12");
		$tgl=getdate();
		$_SESSION['bln']=$bln[$tgl['mon']];
		echo $hari[$tgl['wday']].", $tgl[mday] ".$bulan[$tgl['mon']]." $tgl[year]"; }  ?>
    