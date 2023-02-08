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
                                <img src="/Games/Lists/' . $metadata["id"] . '/'.$metadata["image"].'" style="width: 100%"></img>
                                <h3 style="text-align:center;"><a href="' . $metadata['id'] .'">' . $metadata['name'] . '</a></h3>
								<div class="row" style="width:90%;margin-left:5%;margin-right:5%; position: absolute; bottom:0; ">
                                	<a href="' . $metadata["id"] . '/" class="btn rred gameboxbutton" style="width:90%;">Info</a>';
									if (isset($metadata['itch'])) {
										$html = $html . '<a href="' . $metadata["itch"] . '/" class="btn rblue gameboxbutton" style="width:29%;">itch.io</a>';
									}
									if (isset($metadata['Steam'])) {
										$html = $html . '<a href="' . $metadata["Steam"] . '/" class="btn rblue gameboxbutton " style="width:29%;">Steam</a>';
									}
									if (isset($metadata['Mobile'])) {
										$html = $html .  '<a href="' . $metadata["Mobile"] . '/" class="btn rgreen gameboxbutton " style="width:29%;text-align:center">Mobile</a>';
									}
									if (isset($metadata['PlayWebGL'])) {
										$html = $html .  '<a href="' . $metadata["PlayWebGL"] . '/" class="btn rorangesoda gameboxbutton " style="width:29%;text-align:center">WebGL</a>';
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
<?php include($root . "/res/includes/footer.php"); ?>

</html>