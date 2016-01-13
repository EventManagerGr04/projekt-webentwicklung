<div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" action="register.php" method="POST">
			<div class="panel panel-default">
				<div class="panel-heading">Registrieren</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="input1" class="col-sm-2 control-label">Nickname</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="input1" name="nickname" placeholder="Nickname" required />
						</div>
					</div>
					<div class="form-group">
						<label for="input2" class="col-sm-2 control-label">E-Mail</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="input2" name="email" placeholder="E-Mail" required />
						</div>
					</div>
					<div class="form-group">
						<label for="input3" class="col-sm-2 control-label">Passwort</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="input3" name="password" placeholder="Passwort" required />
						</div>
					</div>
					<div class="form-group">
						<label for="input4" class="col-sm-2 control-label">Passwort wiederholen</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="input4" name="password2" placeholder="Passwort wiederholen" required />
						</div>
					</div>
				</div>
				<div class="panel-footer text-right">
					<button type="submit" class="btn btn-primary" name="registrieren">Registrieren</button>
				</div>
			</div>
		</form>
	</div>
</div>