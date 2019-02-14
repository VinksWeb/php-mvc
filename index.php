<?php  

require 'Lib/Bootstrap.php';
require 'Lib/View.php';
require 'Lib/Controller.php';
require 'Lib/Model.php';
require 'Lib/Database.php';
require 'Lib/Session.php';

require 'Config/path.php';
require 'Config/database.php';

// $app = new Bootstrap;
// print_r($app);
Session::init();
?>

<!DOCTYPE html>
<html>
<head>
	<title> MVC </title>
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>Public/css/main.css">

	
</head>
<body>

<?php require './Views/Partials/header.php'; ?>

<p>
	<div id="content">
		<?php $app = new Bootstrap; ?>
	</div>
</p>

<?php require './Views/Partials/footer.php'; ?>

</body>
</html>