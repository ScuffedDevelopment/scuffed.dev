<!DOCTYPE html>
<html class="full-height" lang="en">

<head>
    <?php $root = $_SERVER['DOCUMENT_ROOT'] ?>
    <?php include($root . "/res/includes/header.php"); ?>
    <title>Scuffed Development</title>
</head>

<body class="background full-height bg-black w-100">
    <br>
    <h1 class="txc cwhite">Our Scuffed Games.</h1>
    <div class="container">
        <?php
		$dir = $root . '/Games/Lists/';
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
                        <div class="col-lg-4 fade-in gamebox ">
                            <div class="bg-black2 box-container-shadow mt-4 pb-2 gamebox2">
                                <img src="/Games/Lists/' . $metadata["id"] . '/image.jpg" style="width: 100%" class="center"></img>
                                <h3><a href="' . $metadata["id"] . '/"></h3>
                                <h3 style="text-align:center;">' . $metadata['name'] . '</a></h3>
								<div class="row center" style="width:90%; position: absolute; bottom:0; padding-right:1.1rem">
                                	<a href="' . $metadata["id"] . '/" class="btn rred gameboxbutton" style="width:27%;margin-left: 1.3rem !important;">Info</a>
									<a href="' . $metadata["Steam"] . '/" class="btn rblue gameboxbutton" style="width:29%;">Steam</a>';
				if (isset($metadata['Mobile'])) {
					$html = $html .  '<a href="' . $metadata["Mobile"] . '/" class="btn rgreen gameboxbutton" style="width:29%;text-align:center">Mobile</a>';
				}
				if (isset($metadata['PlayWebGL'])) {
					$html = $html .  '<a href="' . $metadata["PlayWebGL"] . '/" class="btn rorange gameboxbutton" style="width:29%;text-align:center">Play on Web</a>';
				}
				$html = $html . '
								</div>
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