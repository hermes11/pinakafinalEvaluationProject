<?php
//fetch_poll_data.php
include('database_connection.php');
$q11_choices = array("YES", "NO");
$total_q11_row = get_total_rows($connect);
$output = '';
if($total_q11_row > 0)
{
	foreach($q11_choices as $row)
	{
		$query = "SELECT * FROM tbl_q11 WHERE q11_choices = '".$row."'";
		$statement = $connect->prepare($query);
		$statement->execute();
		$total_row = $statement->rowCount();
		$percentage_vote = round(($total_row/$total_q11_row)*100);
		$progress_bar_class = '';
		if($percentage_vote >= 40)
		{
			$progress_bar_class = 'progress-bar-success';
		}
		else if($percentage_vote >= 25 && $percentage_vote < 40)
		{
			$progress_bar_class = 'progress-bar-info';
		}
		else if($percentage_vote >= 10 && $percentage_vote < 25)
		{
			$progress_bar_class = 'progress-bar-warning';
		}
		else
		{
			$progress_bar_class = 'progress-bar-danger';
		}
		$output .= '
		<div class="row">
			<div class="col-md-2" align="right">
				<label>'.$row.'</label>
			</div>
			<div class="col-md-10">
				<div class="progress">
					<div class="progress-bar '.$progress_bar_class.'" role="progressbar" aria-valuenow="'.$percentage_vote.'" aria-valuemin="0" aria-valuemax="100" style="width:'.$percentage_vote.'%">
						'.$percentage_vote.' % students voted <b>'.$row.'</b> .
					</div>
				</div>
			</div>
		</div>
		
		';
	}
}
echo $output;
function get_total_rows($connect)
{
	$query = "SELECT * FROM tbl_q11";
	$statement = $connect->prepare($query);
	$statement->execute();
	return $statement->rowCount();
}
?>
