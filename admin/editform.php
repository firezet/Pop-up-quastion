<?php
	require_once ('inc/header.php');
	require_once('classes/Auth.php');
	require_once('classes/Comment.php');
?>
<body>
<div class="wrap">
	<div class="row">
		<div class="col-xs-3 aside">
			<ul class="nav nav-pills nav-stacked">
				<li><a href="/markup/comments.html"><span class="glyphicon glyphicon-comment"></span> Комментарии</a></li>
				<li class="active"><a href="/markup/editform.html"><span class="glyphicon glyphicon-pencil"></span> Редактировать форму</a></li>
			</ul>
		</div>
		<div class="col-xs-9 content">
			<div class="row">
				<div class="col-xs-7 comment-list">
					<ul class="comment">
						<li class="item">
							<h2>Редактор форм</h2>
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label for="inputPassword3" class="col-sm-2 control-label">Форма</label>
									<div class="col-sm-10">
										<textarea class="form-control" id="inputPassword3" cols="30" rows="10">
											<pre>
												<form class="form-horizontal" role="form">
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
														<div class="col-sm-10">
															<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
														</div>
													</div>
												</form>
											</pre>
										</textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" class="btn btn-primary">Сохранить</button>
									</div>
								</div>
							</form>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
 