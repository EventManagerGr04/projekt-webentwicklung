<div class="page-header">
	<h1>Location anlegen</h1>
</div>

<div class="row">
	<div class="col-md-12">
		
		<?php
		
		if(isset($_POST['anlegen'])) {
			$name = $_POST['name'];
			$strasse = $_POST['strasse'];
			$nr = $_POST['nr'];
			$ort = $_POST['ort'];
			$beschreibung = $_POST['beschreibung'];
			
			if($db->createLocation($name, $strasse, $nr, $ort, $beschreibung)) {
				echo "<div class='panel panel-default'>";
				echo "Location wurde gespeichert";
				echo "</div>";
			} else {
				echo "<div class='panel panel-default'>";
				echo "Fehler beim Speichern der Location";
				echo "</div>";
			}
		}
		
		?>
		<form class="form-horizontal" action="index.php?section=createlocation" method="POST">
			<div class="panel panel-default" id="panel-create-ev">
				<div class="panel-heading" id="create-ev-head">Location Details</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="input1" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="input1" name="name" placeholder="Name der Location" required>
						</div>
					</div>
					<div class="form-group">
						<label for="input2" class="col-sm-2 control-label">Strasse</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="input2" name="strasse" placeholder="Strasse" required>
						</div>
					</div>
					<div class="form-group">
						<label for="input3" class="col-sm-2 control-label">Hausnummer</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="input3" name="nr" placeholder="Hausnummer" required>
						</div>
					</div>
					<div class="form-group">
						<label for="input4" class="col-sm-2 control-label">PLZ & Ort</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="input4" name="ort" placeholder="PLZ und Ort" required>
						</div>
					</div>
					<div class="form-group">
						<label for="input5" class="col-sm-2 control-label create-ev1">Beschreibung</label>
						<div class="col-sm-10">
							<textarea class="form-control create-ev2" id="input5" name="beschreibung" rows="10"></textarea>
						</div>
					</div>
				</div>
				<div class="panel-footer text-right">
					<a href="index.php" class="btn btn-default">Abbrechen</a>
					<button type="submit" class="btn btn-primary" name="anlegen">Anlegen</button>
				</div>
			</div>
		</form>
	</div>
</div>
