<body>
<!-- Begin header -->
<div class="header_wrapper">
	<div class="header">
	
		<div class="row">
 			 <div class="large-9 columns">
 			 	<h1> <span class="UML">UML</span> CHECKER</h1>
 			 	<h2>check your UML files</h2>
 			 </div> <!-- end large 9 columns -->
 			 <div class="large-3 columns koptekst">
 			 	<span> Welcome <a href="<?php echo $base_url;?>dashboard/update_user_account/<?php echo $currentuser['uacc_id']; ?>"> <?php echo $currentuser['upro_first_name'].' '.$currentuser['upro_last_name']; ?></a></span> <br/> <br/>
 			 	<a href="<?php echo site_url('logout') ?>">Logout</a> 

 			 </div> <!-- end large 3 columns --> 
		</div> <!-- end row -->

	</div> <!-- end header --> 
	
</div>
<!-- end header wrapper -->
	
<div id="container">	
	<div class="row">
		<nav class="top-bar">
  			<ul class="title-area">
   			 <!-- Title Area -->
    		<li class="name">
      	<h1><a href="<?php echo $base_url; ?>">UML Checker </a></h1>
    		</li>
   		 <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
   		 <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  			</ul>

  			<section class="top-bar-section">
    		<!-- Left Nav Section -->
    		<ul class="left">
      		<li class="divider"></li>
      		<li><a href="<?php echo $base_url; ?>">Dashboard</a></li>
      		<li class="divider"></li>
      		<li><a href="<?php echo site_url('assignments') ?>">Assignments</a></li>
      		<li class="divider"></li>
      		<li><a href="<?php echo site_url('dashboard/manage_deadlines') ?>">Deadlines</a></li>
      		<li class="divider"></li>
      		<li><a href="#">Archive</a></li>
      		<li class="divider"></li>
      
      <!-- 
      <li class="has-dropdown"><a href="#">Main Item 3</a>

        <ul class="dropdown">
          <li class="has-dropdown"><a href="#">Dropdown Level 1a</a>

            <ul class="dropdown">
              <li><label>Dropdown Level 2 Label</label></li>
              <li><a href="#">Dropdown Level 2a</a></li>
              <li><a href="#">Dropdown Level 2b</a></li>
              <li class="has-dropdown"><a href="#">Dropdown Level 2c</a>

                <ul class="dropdown">
                  <li><label>Dropdown Level 3 Label</label></li>
                  <li><a href="#">Dropdown Level 3a</a></li>
                  <li><a href="#">Dropdown Level 3b</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Dropdown Level 3c</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown Level 2d</a></li>
              <li><a href="#">Dropdown Level 2e</a></li>
              <li><a href="#">Dropdown Level 2f</a></li>
            </ul>
          </li>
          <li><a href="#">Dropdown Level 1b</a></li>
          <li><a href="#">Dropdown Level 1c</a></li>
          <li class="divider"></li>
          <li><a href="#">Dropdown Level 1d</a></li>
          <li><a href="#">Dropdown Level 1e</a></li>
          <li><a href="#">Dropdown Level 1f</a></li>
          <li class="divider"></li>
          <li><a href="#">See all &rarr;</a></li>
        </ul>
      </li>
      <li class="divider"></li>
      -->
    </ul>

    <!-- Right Nav Section -->
    <ul class="right">
      <li class="divider hide-for-small"></li>
      <li><a href="#">User Details</a></li>
      <li class="divider"></li>
      
      <!--  
      <li class="has-dropdown"><a href="#">Main Item 4</a>

        <ul class="dropdown">
          <li><label>Dropdown Level 1 Label</label></li>
          <li class="has-dropdown"><a href="#" class="">Dropdown Level 1a</a>

            <ul class="dropdown">
              <li><a href="#">Dropdown Level 2a</a></li>
              <li><a href="#">Dropdown Level 2b</a></li>
              <li class="has-dropdown"><a href="#">Dropdown Level 2c</a>

                <ul class="dropdown">
                  <li><a href="#">Dropdown Level 3a</a></li>
                  <li><a href="#">Dropdown Level 3b</a></li>
                  <li><a href="#">Dropdown Level 3c</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown Level 2d</a></li>
              <li><a href="#">Dropdown Level 2e</a></li>
              <li><a href="#">Dropdown Level 2f</a></li>
            </ul>
          </li>
          <li><a href="#">Dropdown Level 1b</a></li>
          <li><a href="#">Dropdown Level 1c</a></li>
          <li class="divider"></li>
          <li><label>Dropdown Level 1 Label</label></li>
          <li><a href="#">Dropdown Level 1d</a></li>
          <li><a href="#">Dropdown Level 1e</a></li>
          <li><a href="#">Dropdown Level 1f</a></li>
          <li class="divider"></li>
          <li><a href="#">See all &rarr;</a></li>
        </ul>
      </li>
      <li class="divider"></li>
      <li class="has-form">
        <form>
          <div class="row collapse">
            <div class="small-8 columns">
              <input type="text">
            </div>
            <div class="small-4 columns">
              <a href="#" class="alert button">Search</a>
            </div>
          </div>
        </form>
      </li>
      <li class="divider show-for-small"></li>
      <li class="has-form">
        <a class="button" href="#">Button!</a>
      </li>
      -->
    </ul>
    <!-- end right nav section -->
  </section>
</nav>
