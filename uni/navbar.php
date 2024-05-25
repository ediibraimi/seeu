<div class="menu-links navbar-collapse collapse justify-content-start " id="menuDropdown">
	<div class="menu-logo">
		<a href="index.php"><img src="assets/images/logo.png" alt=""></a>
	</div>
	<ul class="nav navbar-nav">
		<li class="active"><a href="index.php" href="javascript:;">Home </a>

		</li>
		<li><a href="blog.php" href="javascript:;">Blog </a>

		</li>
		<li><a href="javascript:;">Pages <i class="fa fa-chevron-down"></i></a>
			<ul class="sub-menu">
				<li><a href="about.php" href="javascript:;">About</a>

				</li>

				<li><a href="faq.php" href="javascript:;">FAQ</a>

				</li>
				<li><a href="contact.php" href="javascript:;">Contact Us</a>

				</li>
				
			
				<li><a href="membership.php">Scholarships</a></li>
		
				<li><a href="javascript:;">Event<i class="fa fa-angle-right"></i></a>
					<ul class="sub-menu">
						<li><a href="event.php">Event</a></li>
						<li><a href="events-details.php">Events Details</a></li>
					</ul>
				</li>
			</ul>
		</li>

		<li class="add-mega-menu"><a href="javascript:;">Our Courses <i class="fa fa-chevron-down"></i></a>
			<ul class="sub-menu add-menu">
				<li class="add-menu-left">
					<h5 class="menu-adv-title">Our Courses</h5>
					<ul>
						<li><a href="courses.php">Courses </a></li>
						<li><a href="courses-details.php">Courses Details</a></li>
						<li><a href="profile.php">Instructor Profile</a></li>
						<li><a href="event.php">Upcoming Event</a></li>
						<li><a href="membership.php">Scho</a></li>
					</ul>
				</li>
				<li class="add-menu-right">
					<img src="assets/images/adv/adv.jpg" alt="" />
				</li>
			</ul>
		</li>
		<?php if (isset($_SESSION['username'])) { ?>
			<?php if ($_SESSION['is_admin'] == 'true') { ?>

				<li class="nav-dashboard"><a href="javascript:;">Dashboard <i class="fa fa-chevron-down"></i></a>
					<ul class="sub-menu">
						<li><a href="admin/index.php">Dashboard</a></li>
						<li><a href="admin/add-listing.php">Add Listing</a></li>
						<li><a href="admin/bookmark.php">Bookmark</a></li>
						<li><a href="admin/courses.php">Courses</a></li>
						<li><a href="admin/review.php">Review</a></li>
						<li><a href="admin/teacher-profile.php">Teacher Profile</a></li>
						<li><a href="admin/user-profile.php">User Profile</a></li>
						<li><a href="javascript:;">Calendar<i class="fa fa-angle-right"></i></a>
							<ul class="sub-menu">
								<li><a href="admin/basic-calendar.php">Basic Calendar</a></li>
								<li><a href="admin/list-view-calendar.php">List View Calendar</a></li>
							</ul>
						</li>
						<li><a href="javascript:;">Mailbox<i class="fa fa-angle-right"></i></a>
							<ul class="sub-menu">
								<li><a href="admin/mailbox.php">Mailbox</a></li>
								<li><a href="admin/mailbox-compose.php">Compose</a></li>
								<li><a href="admin/mailbox-read.php">Mail Read</a></li>
							</ul>
						</li>

					</ul>
				</li>

			<?php } ?>
		<?php } ?>
	</ul>
	<div class="nav-social-link">
		<a href="javascript:;"><i class="fa fa-facebook"></i></a>
		<a href="javascript:;"><i class="fa fa-google-plus"></i></a>
		<a href="javascript:;"><i class="fa fa-linkedin"></i></a>
	</div>
</div>