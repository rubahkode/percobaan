
<?php

//action.php

if(isset($_POST['action']))
{
	$file = 'data.json';

	if($_POST['action'] == 'Add')
	{
		$data = array();

		$data['id']	= time();
		$data['nama'] = trim($_POST['nama']);
		$data['ucapan'] = trim($_POST['pesan']);

	
		if($_POST['action'] == 'Add')
		{
			$file_data = json_decode(file_get_contents($file), true);

			//print_r($file_data);

			$file_data[] = $data;

			file_put_contents($file, json_encode($file_data));
			$output = array(
				'success'	=>	'Data Added'
			);
		}
		
		echo json_encode($output);
	}

}

?>