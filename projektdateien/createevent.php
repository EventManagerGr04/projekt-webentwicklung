<div class="page-header">
	<h1>Event anlegen</h1>
</div>

<div class="row">
	<div class="col-md-12">
		<?php
		
		if(isset($_POST['anlegen'])) {
			$name = $_POST['name'];
			$datum = $_POST['datum'];
			$location = $_POST['location'];
			$beschreibung = $_POST['beschreibung'];
			
			if($db->createEvent($name, $datum, $location, $beschreibung)) {
				echo "<div class='panel panel-default'>";
				echo "Event wurde gespeichert";
				echo "</div>";
			} else {
				echo "<div class='panel panel-default'>";
				echo "Fehler beim Speichern des Events";
				echo "</div>";
			}
		}
		
		?>
		<form class="form-horizontal" action="eventdetails.html">
			<div class="panel panel-default" id="panel-create-ev">
				<div class="panel-heading" id="create-ev-head">Event Details</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="input1" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="input1" placeholder="Name" name="name">
						</div>
					</div>
					<div class="form-group">
						<label for="input2" class="col-sm-2 control-label">Datum</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="input2" placeholder="Datum" name="datum">
						</div>
					</div>
					<div class="form-group">
						<label for="input3" class="col-sm-2 control-label">Location</label>
						<div class="col-sm-10">
							<select class="form-control create-ev2" id="input3" name="location">
								<option>-- Bitte auswählen --</option>
								<option value="1">Malles Home</option>
								<option value="2">Palmers FC Clubheim</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="input4" class="col-sm-2 control-label create-ev1">Beschreibung</label>
						<div class="col-sm-10">
							<textarea class="form-control create-ev2" id="input4" rows="10" name="beschreibung"></textarea>
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
