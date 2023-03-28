<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>
	<h1><?php esc_attr_e( 'Gly Badges', 'WpAdminStyle' ); ?></h1>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">

			<div class="meta-box-sortables ui-sortable">

					<div class="postbox">

						<button type="button" class="handlediv" aria-expanded="true" >
							<span class="screen-reader-text">Toggle panel</span>
							<span class="toggle-indicator" aria-hidden="true"></span>
						</button>
						<!-- Toggle -->

						<h2 class="hndle"><span><?php esc_attr_e( 'My Badges', 'WpAdminStyle' ); ?></span>
						</h2>

						<div class="inside">
							<p>
                                <form name="gly_email_form" method="post" action="">
									<input type="hidden" name="gly_form_submitted" value="yes">
									<input type="text" value="<?php echo $form_email ?>" class="regular-text" name="gly_form_email"/>
									<input class="button-primary" type="submit" name="gly_form_btn_sumbit" value="<?php esc_attr_e( 'Save' ); ?>" />
								</form>
                            </p>
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->


					<div class="postbox">

						<button type="button" class="handlediv" aria-expanded="true" >
							<span class="screen-reader-text">Toggle panel</span>
							<span class="toggle-indicator" aria-hidden="true"></span>
						</button>
						<!-- Toggle -->

						<h2 class="hndle"><span><?php esc_attr_e( 'My Badges', 'WpAdminStyle' ); ?></span>
						</h2>

						<div class="inside">
							<p>
                                <ul class="gly-badges">
                                    <li>
                                    <?php for ($i=0; $i < 20; $i++): ?>
                                        <ul>
                                            <li>
                                                <img src="<?php echo $badge_url . 'images/img.jpg' ?>" alt="">
                                            </li>
                                            <li>
                                                <a href="#">WebLink</a>
                                            </li>
                                        </ul>
                                    <?php endfor; ?>
                                    </li>
                                </ul>
                            </p>
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables .ui-sortable -->

			</div>
			<!-- post-body-content -->

			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">

				<div class="meta-box-sortables">

					<div class="postbox">

						<button type="button" class="handlediv" aria-expanded="true" >
							<span class="screen-reader-text">Toggle panel</span>
							<span class="toggle-indicator" aria-hidden="true"></span>
						</button>
						<!-- Toggle -->

						<h2 class="hndle"><span><?php esc_attr_e(
									'Profile', 'WpAdminStyle'
								); ?></span></h2>

						<div class="inside">
							<p><!-- --></p>
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables -->

			</div>
			<!-- #postbox-container-1 .postbox-container -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->