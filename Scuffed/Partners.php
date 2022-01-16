<!DOCTYPE html>
<html class="full-height" lang="en">

<head>
	<?php $root = $_SERVER['DOCUMENT_ROOT'] ?>
	<?php include($root . "/res/includes/header.php"); ?>
	<title>Scuffed Development</title>
</head>

<body class="background full-height bg-black w-100">
	<br>
	<h1 class="txc cwhite">Our Scuffed Partners and Collab.</h1>
	<div class="container">
		<?php
		$dir = $root . '/Scuffed/partners/';
		$modsDirs = array_slice(scandir($dir), 2);
		?>
		<div class="row">
			<?php
			$modsMeta = array();
			foreach ($modsDirs as $modDir) {
				$metadata = json_decode(file_get_contents($dir . $modDir . '/metadata.json'), true);
				$metadata["id"] = $modDir;
				array_push($modsMeta, $metadata);
			}
			foreach ($modsMeta as $metadata) {
				$html = '
                        <div class="col-lg-4 fade-in">
                            <div class="bg-black2 box-container-shadow mt-4 pb-2" style="height: 150px">
                                <h3 style="padding-top:10px"><a href="' . $metadata["website"] . '"></h3>
                                <h3 style="text-align:center;">' . $metadata['name'] . '</a></h3>
                                <a href="' . $metadata["website"] . '" class="btn rblue center" style="width:50%">Website</a>
                            </div>
                        </div>';
				echo ($html);
			}
			?>
		</div>
	</div>
</body>
<br>
<?php include("../res/includes/footer.php"); ?>

</html>