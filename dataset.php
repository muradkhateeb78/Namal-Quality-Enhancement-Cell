<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<title>Sentiment-analyzable Dataset </title>
	</head>
	<body>
		<div class="container auth" style="padding-top:10px;">
			<div>
				<h1 class="text-center" align="center">Computational Simeotics Lab
					
				</h1>
			</div>
			<div id="big-form" class="well auth-box">
				<form action="download.php" method="post">
					<fieldset style="padding-top:10px;">
						<div class="form-group">
							<label>Name*</label>
							<input class="form-control inputField" id="name" name="name" pattern="[A-Za-z]{3,}" title="Please provide a correct name." required>
						</div>
						<div class="form-group">
							<label>Email*</label>
							<input class="form-control inputField" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
						</div>
						<div class="form-group">
							<label>Download Purpose</label>
							<input class="form-control inputField" id="reason" name="reason">
						</div>
						<div class="form-group" style="padding-top:10px; padding-bottom:-10px;">
							<div align="center">
								<button id="download" name="downloadBtn" class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-download-alt" color="white;"></span>&nbsp&nbspDownload</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</body>
</html>