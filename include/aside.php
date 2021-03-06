
<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">




		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
                <button style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none;" type="button" id="kt_sweetalert_demo_81" href="index.php">
                <img alt="Logo" src="assets/media/logos/logo-2-sm.png" />
                </button>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
			</div>
		</div>

		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				<!-- begin:: Aside -->
				<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
				<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

					<!-- begin:: Aside -->
					<div class="kt-aside__brand kt-grid__item  " id="kt_aside_brand">
						<div class="kt-aside__brand-logo">

                            <?php

                            $link = $_SERVER['PHP_SELF'];
                            $link_array = explode('/',$link);
                            $page = end($link_array);

                            if ($page == "change_weight.php" || $page == "stats.php") { ?>

							<button style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none;" type="button" >
								<img alt="Logo" src="assets/media/logos/logo-4.png" />
                            </button>

                        <?php }else{ ?>
                                <button style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none;" type="button" id="kt_sweetalert_demo_8" href="index.php">
                                    <img alt="Logo" src="assets/media/logos/logo-4.png" />
                                </button>
                         <?php   } ?>


						</div>
					</div>



					<!-- end:: Aside -->

					<!-- begin:: Aside Menu -->
					<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
						<div id="" class="kt-aside-menu  kt-aside-menu--dropdown " data-ktmenu-vertical="1" data-ktmenu-dropdown="1" data-ktmenu-scroll="0">
							<ul class="kt-menu__nav ">

                                <?php

                                $link = $_SERVER['PHP_SELF'];
                                $link_array = explode('/',$link);
                                $page = end($link_array);

                                if ($page == "size.php") { ?>

                                    <li class="kt-menu__item " aria-haspopup="true"> <button style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none;" type="button" id="kt_sweetalert_demo_82" href="index.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-add-circular-button"></i><span class="kt-menu__link-text">Add New</span></button></li>
                                    <li class="kt-menu__item kt-menu__item--active" data-ktmenu-submenu-toggle="hover"><a href="size.php" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-arrows"></i><span class="kt-menu__link-text">Size</span></a></li>
                                    <li class="kt-menu__item"><a href="variables.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-interface-7"></i><span class="kt-menu__link-text">Variables</span></a></li>
                                    <li class="kt-menu__item "><a href="methods.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-map"></i><span class="kt-menu__link-text">Methods</span></a></li>
                                    <li class="kt-menu__item" data-ktmenu-submenu-toggle="hover"><a href="inheritance.php" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-layers"></i><span class="kt-menu__link-text">Inheritance</span></a></li>
                                    <li class="kt-menu__item "><a href="coupling.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-list-3"></i><span class="kt-menu__link-text">Coupling</span></a></li>
                                    <li class="kt-menu__item " ><a href="control_structures.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-cogwheel-2"></i><span class="kt-menu__link-text"><center>Control <br>Structures</center></span></a></li>


                                    <?php
                                }elseif ($page == "variables.php"){ ?>

                                    <li class="kt-menu__item " aria-haspopup="true"> <button style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none;" type="button" id="kt_sweetalert_demo_82" href="index.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-add-circular-button"></i><span class="kt-menu__link-text">Add New</span></button></li>
                                    <li class="kt-menu__item" data-ktmenu-submenu-toggle="hover"><a href="size.php" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-arrows"></i><span class="kt-menu__link-text">Size</span></a></li>
                                    <li class="kt-menu__item kt-menu__item--active"><a href="variables.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-interface-7"></i><span class="kt-menu__link-text">Variables</span></a></li>
                                    <li class="kt-menu__item"><a href="methods.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-map"></i><span class="kt-menu__link-text">Methods</span></a></li>
                                    <li class="kt-menu__item" data-ktmenu-submenu-toggle="hover"><a href="inheritance.php" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-layers"></i><span class="kt-menu__link-text">Inheritance</span></a></li>
                                    <li class="kt-menu__item"><a href="coupling.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-list-3"></i><span class="kt-menu__link-text">Coupling</span></a></li>
                                    <li class="kt-menu__item" ><a href="control_structures.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-cogwheel-2"></i><span class="kt-menu__link-text"><center>Control <br>Structures</center></span></a></li>


                                    <?php
                                }elseif ($page == "methods.php"){ ?>

                                    <li class="kt-menu__item " aria-haspopup="true"> <button style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none;" type="button" id="kt_sweetalert_demo_82" href="index.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-add-circular-button"></i><span class="kt-menu__link-text">Add New</span></button></li>
                                    <li class="kt-menu__item" data-ktmenu-submenu-toggle="hover"><a href="size.php" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-arrows"></i><span class="kt-menu__link-text">Size</span></a></li>
                                    <li class="kt-menu__item"><a href="variables.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-interface-7"></i><span class="kt-menu__link-text">Variables</span></a></li>
                                    <li class="kt-menu__item kt-menu__item--active"><a href="methods.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-map"></i><span class="kt-menu__link-text">Methods</span></a></li>
                                    <li class="kt-menu__item" data-ktmenu-submenu-toggle="hover"><a href="inheritance.php" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-layers"></i><span class="kt-menu__link-text">Inheritance</span></a></li>
                                    <li class="kt-menu__item"><a href="coupling.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-list-3"></i><span class="kt-menu__link-text">Coupling</span></a></li>
                                    <li class="kt-menu__item" ><a href="control_structures.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-cogwheel-2"></i><span class="kt-menu__link-text"><center>Control <br>Structures</center></span></a></li>


                                    <?php
                                }
                                elseif ($page == "inheritance.php"){ ?>

                                    <li class="kt-menu__item " aria-haspopup="true"> <button style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none;" type="button" id="kt_sweetalert_demo_82" href="index.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-add-circular-button"></i><span class="kt-menu__link-text">Add New</span></button></li>
                                    <li class="kt-menu__item" data-ktmenu-submenu-toggle="hover"><a href="size.php" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-arrows"></i><span class="kt-menu__link-text">Size</span></a></li>
                                    <li class="kt-menu__item"><a href="variables.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-interface-7"></i><span class="kt-menu__link-text">Variables</span></a></li>
                                    <li class="kt-menu__item"><a href="methods.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-map"></i><span class="kt-menu__link-text">Methods</span></a></li>
                                    <li class="kt-menu__item kt-menu__item--active" data-ktmenu-submenu-toggle="hover"><a href="inheritance.php" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-layers"></i><span class="kt-menu__link-text">Inheritance</span></a></li>
                                    <li class="kt-menu__item "><a href="coupling.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-list-3"></i><span class="kt-menu__link-text">Coupling</span></a></li>
                                    <li class="kt-menu__item " ><a href="control_structures.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-cogwheel-2"></i><span class="kt-menu__link-text"><center>Control <br>Structures</center></span></a></li>


                                    <?php
                                }elseif ($page == "coupling.php"){ ?>

                                    <li class="kt-menu__item " aria-haspopup="true"> <button style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none;" type="button" id="kt_sweetalert_demo_82" href="index.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-add-circular-button"></i><span class="kt-menu__link-text">Add New</span></button></li>
                                    <li class="kt-menu__item" data-ktmenu-submenu-toggle="hover"><a href="size.php" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-arrows"></i><span class="kt-menu__link-text">Size</span></a></li>
                                    <li class="kt-menu__item"><a href="variables.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-interface-7"></i><span class="kt-menu__link-text">Variables</span></a></li>
                                    <li class="kt-menu__item"><a href="methods.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-map"></i><span class="kt-menu__link-text">Methods</span></a></li>
                                    <li class="kt-menu__item" data-ktmenu-submenu-toggle="hover"><a href="inheritance.php" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-layers"></i><span class="kt-menu__link-text">Inheritance</span></a></li>
                                    <li class="kt-menu__item kt-menu__item--active"><a href="coupling.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-list-3"></i><span class="kt-menu__link-text">Coupling</span></a></li>
                                    <li class="kt-menu__item " ><a href="control_structures.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-cogwheel-2"></i><span class="kt-menu__link-text"><center>Control <br>Structures</center></span></a></li>


                                    <?php
                                }elseif ($page == "control_structures.php"){ ?>

                                    <li class="kt-menu__item " aria-haspopup="true"> <button style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none;" type="button" id="kt_sweetalert_demo_82" href="index.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-add-circular-button"></i><span class="kt-menu__link-text">Add New</span></button></li>
                                    <li class="kt-menu__item" data-ktmenu-submenu-toggle="hover"><a href="size.php" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-arrows"></i><span class="kt-menu__link-text">Size</span></a></li>
                                    <li class="kt-menu__item"><a href="variables.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-interface-7"></i><span class="kt-menu__link-text">Variables</span></a></li>
                                    <li class="kt-menu__item"><a href="methods.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-map"></i><span class="kt-menu__link-text">Methods</span></a></li>
                                    <li class="kt-menu__item" data-ktmenu-submenu-toggle="hover"><a href="inheritance.php" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-layers"></i><span class="kt-menu__link-text">Inheritance</span></a></li>
                                    <li class="kt-menu__item"><a href="coupling.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-list-3"></i><span class="kt-menu__link-text">Coupling</span></a></li>
                                    <li class="kt-menu__item kt-menu__item--active" ><a href="control_structures.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-cogwheel-2"></i><span class="kt-menu__link-text"><center>Control <br>Structures</center></span></a></li>


                                    <?php
                                }elseif ($page == "index.php"){ ?>

                                    <li class="kt-menu__item kt-menu__item--active" aria-haspopup="true"><a href="index.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-add-circular-button"></i><span class="kt-menu__link-text">Add New</span></a></li>
                                    <li class="kt-menu__item" data-ktmenu-submenu-toggle="hover"><a id="kt_sweetalert_demo_3_4" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-arrows"></i><span class="kt-menu__link-text">Size</span></a></li>
                                    <li class="kt-menu__item"><a id="kt_sweetalert_demo_3_4a" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-interface-7"></i><span class="kt-menu__link-text">Variables</span></a></li>
                                    <li class="kt-menu__item"><a id="kt_sweetalert_demo_3_4b" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-map"></i><span class="kt-menu__link-text">Methods</span></a></li>
                                    <li class="kt-menu__item" data-ktmenu-submenu-toggle="hover"><a id="kt_sweetalert_demo_3_4c" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-layers"></i><span class="kt-menu__link-text">Inheritance</span></a></li>
                                    <li class="kt-menu__item"><a id="kt_sweetalert_demo_3_4d" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-list-3"></i><span class="kt-menu__link-text">Coupling</span></a></li>
                                    <li class="kt-menu__item" ><a id="kt_sweetalert_demo_3_4e" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-cogwheel-2"></i><span class="kt-menu__link-text"><center>Control <br>Structures</center></span></a></li>

                                    <?php
                                }elseif ($page == "stats.php"){ ?>
                                    <li class="kt-menu__item kt-menu__item--active" aria-haspopup="true"><a href="index.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-add-circular-button"></i><span class="kt-menu__link-text">Add New</span></a></li>
                                    <li class="kt-menu__item" data-ktmenu-submenu-toggle="hover"><a id="kt_sweetalert_demo_3_4" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-arrows"></i><span class="kt-menu__link-text">Size</span></a></li>
                                    <li class="kt-menu__item"><a id="kt_sweetalert_demo_3_4a" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-interface-7"></i><span class="kt-menu__link-text">Variables</span></a></li>
                                    <li class="kt-menu__item "><a id="kt_sweetalert_demo_3_4b" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-map"></i><span class="kt-menu__link-text">Methods</span></a></li>
                                    <li class="kt-menu__item" data-ktmenu-submenu-toggle="hover"><a id="kt_sweetalert_demo_3_4c" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-layers"></i><span class="kt-menu__link-text">Inheritance</span></a></li>
                                    <li class="kt-menu__item "><a id="kt_sweetalert_demo_3_4d" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-list-3"></i><span class="kt-menu__link-text">Coupling</span></a></li>
                                    <li class="kt-menu__item " ><a id="kt_sweetalert_demo_3_4e" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-cogwheel-2"></i><span class="kt-menu__link-text"><center>Control <br>Structures</center></span></a></li>


                                    <?php
                                }elseif ($page == "change_weight.php"){ ?>
                                    <li class="kt-menu__item kt-menu__item--active" aria-haspopup="true"><a href="index.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-add-circular-button"></i><span class="kt-menu__link-text">Add New</span></a></li>
                                    <li class="kt-menu__item" data-ktmenu-submenu-toggle="hover"><a id="kt_sweetalert_demo_3_4" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-arrows"></i><span class="kt-menu__link-text">Size</span></a></li>
                                    <li class="kt-menu__item"><a id="kt_sweetalert_demo_3_4a" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-interface-7"></i><span class="kt-menu__link-text">Variables</span></a></li>
                                    <li class="kt-menu__item "><a id="kt_sweetalert_demo_3_4b" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-map"></i><span class="kt-menu__link-text">Methods</span></a></li>
                                    <li class="kt-menu__item" data-ktmenu-submenu-toggle="hover"><a id="kt_sweetalert_demo_3_4c" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-layers"></i><span class="kt-menu__link-text">Inheritance</span></a></li>
                                    <li class="kt-menu__item "><a id="kt_sweetalert_demo_3_4d" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-list-3"></i><span class="kt-menu__link-text">Coupling</span></a></li>
                                    <li class="kt-menu__item " ><a id="kt_sweetalert_demo_3_4e" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-cogwheel-2"></i><span class="kt-menu__link-text"><center>Control <br>Structures</center></span></a></li>


                                    <?php
                                }else{ ?>

                                    <li class="kt-menu__item " aria-haspopup="true"> <button style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none;" type="button" id="kt_sweetalert_demo_82" href="index.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-add-circular-button"></i><span class="kt-menu__link-text">Add New</span></button></li>
                                    <li class="kt-menu__item" data-ktmenu-submenu-toggle="hover"><a href="size.php" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-arrows"></i><span class="kt-menu__link-text">Size</span></a></li>
                                    <li class="kt-menu__item"><a href="variables.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-interface-7"></i><span class="kt-menu__link-text">Variables</span></a></li>
                                    <li class="kt-menu__item "><a href="methods.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-map"></i><span class="kt-menu__link-text">Methods</span></a></li>
                                    <li class="kt-menu__item" data-ktmenu-submenu-toggle="hover"><a href="inheritance.php" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-layers"></i><span class="kt-menu__link-text">Inheritance</span></a></li>
                                    <li class="kt-menu__item "><a href="coupling.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-list-3"></i><span class="kt-menu__link-text">Coupling</span></a></li>
                                    <li class="kt-menu__item " ><a href="control_structures.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-cogwheel-2"></i><span class="kt-menu__link-text"><center>Control <br>Structures</center></span></a></li>


                                    <?php
                                }
                                ?>

            
                                

							</ul>
						</div>
					</div>

					<!-- end:: Aside Menu -->
				</div>

				<!-- end:: Aside -->

                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                    <!-- begin:: Header -->
                    <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

                        <!-- begin: Header Menu -->
                        <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                        <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                            <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-tab ">
                                <ul class="kt-menu__nav ">

                                    <li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="https://github.com/itpmcde/Code-Complexity-Tool" target="_blank" class="kt-menu__link "><span style="font-size: 20px;font-family: 'Fira Code'" class="kt-menu__link-text">Code Complexity Measuring Tool</span></a></li>
                                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel " data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a class="kt-menu__link kt-menu__toggle "><span class="kt-menu__link-text">C++ and Java</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                    </li>

                                </ul>


                            </div>
                        </div>

                        <!-- end: Header Menu -->

                        <!-- begin:: Header Topbar -->
                        <div class="kt-header__topbar">






                            <!--begin: User Bar -->
                            <div class="kt-header__topbar-item kt-header__topbar-item--user">
                                <div class="kt-header__topbar-wrapper" data-toggle="" data-offset="0px,0px">
                                    <div class="kt-header__topbar-user">

                                        <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                        <span onclick="toggleFullScreen()" class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder"><i class="flaticon-arrows"></i></span>
                                    </div>
                                </div>
                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

                                    <!--begin: Head -->
                                    <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(assets/media/misc/bg-1.jpg)">
                                        <div class="kt-user-card__avatar">
                                            <img class="kt-hidden" alt="Pic" src="assets/media/users/300_25.jpg" />

                                            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                            <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">U</span>
                                        </div>
                                        <div class="kt-user-card__name">
                                            ULIDU THEERAKE
                                        </div>

                                    </div>

                                    <!--end: Head -->

                                    <!--begin: Navigation -->
                                    <div class="kt-notification">
                                        <a href="account_details.php" class="kt-notification__item">
                                            <div class="kt-notification__item-icon">
                                                <i class="flaticon2-calendar-3 kt-font-success"></i>
                                            </div>
                                            <div class="kt-notification__item-details">
                                                <div class="kt-notification__item-title kt-font-bold">
                                                    My Profile
                                                </div>
                                                <div class="kt-notification__item-time">
                                                    Account settings and more
                                                </div>
                                            </div>
                                        </a>
                                        <div class="kt-notification__custom kt-space-between">
                                            <a href="login.php" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>

                                        </div>
                                    </div>

                                    <!--end: Navigation -->
                                </div>
                            </div>

                            <!--end: User Bar -->
                        </div>

                        <!-- end:: Header Topbar -->
                    </div>

                    <!-- end:: Header -->


