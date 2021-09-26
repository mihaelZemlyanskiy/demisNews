<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	mb_internal_encoding('UTF-8');	
	require_once 'connect.php';
				$arrNews = mysqli_query($connect,"SELECT * FROM  `testnews`");
				$arrNews = mysqli_fetch_all($arrNews);							/*Массив со всеми данными*/
	
	function AllNews($arrNews){													/*Вывод всех новостей на страничку*/
				foreach($arrNews as $arrValues){

					$arrTime=explode('-',$arrValues[4]);
					$timeStampDate=mktime(0,0,0,$arrTime[1],$arrTime[2],$arrTime[0]);
					

					echo "
					<a href=''>
						<img src=img/".$arrValues[3].">
							<div><p class='title'>".$arrValues[1]."</p>
								<p class='time'>".date('d.m.Y',$timeStampDate)."</p>
								<p class='text'>".$arrValues[2]."</p>
							</div>
					</a>";

				}
	}
	function LastNews($arrNews){												/*Вывод последних новостей на страничку*/


		$newsone=0;		/*ключ к первой новости*/
		$newstwo=0;		/*ключ ко второй новости */
		$newsthree=0;	/*ключ к третьей новости*/
		
		$idone=0;		
		$idtwo=0;

		$reslut=0;		/*массив для трех последних новостей*/
		
	

		foreach($arrNews as $arrValues){
			$arrTime=explode('-',$arrValues[4]);
			$timeStampDate=mktime(0,0,0,$arrTime[1],$arrTime[2],$arrTime[0]);
			if($newsone<$timeStampDate){
				$idone=$arrValues[0];
				$newsone=$timeStampDate;
				$arrone=$arrValues;	
				$time[0]=date('d.m.Y',$timeStampDate);
			}
		}

		foreach($arrNews as $arrValues){		
			$arrTime=explode('-',$arrValues[4]);
			$timeStampDate=mktime(0,0,0,$arrTime[1],$arrTime[2],$arrTime[0]);
			if($newstwo<$timeStampDate and $idone!=$arrValues[0]){
				$idtwo=$arrValues[0];
				$newstwo=$timeStampDate;
				$arrtwo=$arrValues;
				$time[1]=date('d.m.Y',$timeStampDate);				
			}
		}

		foreach($arrNews as $arrValues){
			$arrTime=explode('-',$arrValues[4]);
			$timeStampDate=mktime(0,0,0,$arrTime[1],$arrTime[2],$arrTime[0]);
			if($newsthree<$timeStampDate and $idone!=$arrValues[0] and $idtwo!=$arrValues[0]){		
				$newsthree=$timeStampDate;
				$arrthree=$arrValues;
				$time[2]=date('d.m.Y',$timeStampDate);				
			}
		}

		$result[0]=$arrone;
		$result[1]=$arrtwo;
		$result[2]=$arrthree;
		
		for($i=0;$i<count($result);$i++){
					echo "
<a href=''>
	<img src=img/".$result[$i][3].">
	<div><p class='title'>".$result[$i][1]."</p>
		<p class='time'>".$time[$i]."</p>
		<p class='text'>".$result[$i][2]."</p>
	</div>
</a>";



		}
	}	

	



?>