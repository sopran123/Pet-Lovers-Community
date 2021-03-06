<?php $user = $this->session->userdata('username');
            if($user == ''){
              echo "<script>
                alert('Login first!');
                window.location.href='home';
                </script>";
            }
            else if($user == 'Mismatch!'){
              echo "<script>
                alert('Login first!');
                window.location.href='home';
                </script>";
            }
      ?>
	<title>Pet Lovers Community</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/user.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/usertab.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>" />
  <!-- <style>
    #petpost{
      display: block;
      }
      #itempost, #servpost{
      display: none;
    }
  </style> -->
	</head>

     <body style="background-color: #E0E0E0">

    <nav class="navbar navbar-expand-lg sticky-top" id="mainNav" style="background-color: black">
       <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('home'); ?>">Pet Lovers Community</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('featured');?>">Community</a>
            </li>
			<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="user"><?php echo $user;?></a>
			  <ul class="dropdown-menu">
						<li><a class="dropdown-item"  style="color:black;" href="<?php echo base_url('donations'); ?>">Donations</a></li>
                        <li><a class="dropdown-item"  style="color:black;" href="">Notifications</a></li>
                        <li><a class="dropdown-item"  style="color:black;" href="">Activity Log</a></li>
						<li><a class="dropdown-item"  style="color:black;" href="">Settings</a></li>
						<li><a class="dropdown-item"  style="color:black;" href="<?php echo base_url('');?>logout">Sign Out</a></li>
						</ul>
            </li>
          </ul>
        </div>
      </div>

	</nav>
        <!-- Top content -->
		<br>
       <div class="container" >
    <div class="row profile" >
		<div class="col-md-3 " style="background-color:white">
			<div class="profile-sidebar " >
				<!-- SIDEBAR USERPIC -->

				<div>
					<br><center><img style="border-radius:50%; width:100px;" src="assets/img/img_avatar.png"  alt=""></center>
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle" >
					<center><div class="profile-usertitle-name">
						<?php echo $user;?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
				<center>	<button type="button" class="btn btn-success btn-sm">Edit Profile</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="biotext text-left">
					<br>
					<p>Describe Yourself Now! Click the Edit Profile Button.</p>
					<footer class="blockquote-footer"><?php echo $user;?></footer>

				</div>
				<!-- END MENU -->
			</div>
		</div>
			<div class="col-md-9 tab-content "style="background-color: white" >
			  <ul class="navigation nav">
						<li class="nav-item active">
							<a class="nav-link" style="color:grey" data-toggle="tab" href="#information">
								<span class="fa fa-user"></span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" style="color:grey" data-toggle="tab" href="#settings">
								<span class="fa fa-photo"></span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" style="color:grey" data-toggle="tab" href="#email">
								<span class="fa fa-envelope"></span>
							</a>
						</li>
					</ul>
					<div class="user-body">
						<div class="tab-content">
							<div id="information" class="tab-pane active">
								<h4>Posts</h4>
								<div class="row justify-content-center">
									<div class="col-md-12" >
										<br><div class="card card-primary text-right">
                      <!-- <?php echo form_open('plcpost/posting');?></br>
                      <form>
										<div class="card-body text-center">
										<input type="post" class="form-control" name="caption" placeholder="What are you up to?"></input>
										</div>
										<div class="card-body">
										<label class="mr-sm" for="inlineFormCustomSelect">Post Type*: </label>
											<select class="custom-select col-lg-2" id="inlineFormCustomSelect" oninput="check()" name="category">
												<option selected>Choose...</option>
												<option>Pet</option>
												<option>Item</option>
												<option>Service</option>
											</select>
										<button type="submit" class="btn btn-dark btn-md">Post</button>
										</div>
                    <div id="petpost">
                        <div class="container">
                                    <p class="brand-text">"POST A PET FOR ADOPTION"</p>
                                   </div>
                                 <div class="group row">
                                     <div class="col-lg-6">
                                 <label for="exampleInput">Breed*</label>
                                 <input type="text" class="form-control col-lg-12" name="petbreed" id="exampleInput" placeholder="" >
                                 <label for="exampleInput">Type*</label>
                                 <input type="text" class="form-control col-lg-12" name="petype" id="exampleInput" placeholder="" >
                                 <label for="exampleInput">Name*</label>
                                 <input type="text" class="form-control col-lg-12" name="petname" id="exampleInput" placeholder="" >
                                 <label for="exampleInput">Age*</label>
                                 <input type="text" class="form-control col-lg-12" name="petage" id="exampleInput" placeholder="" >
                                 </div>
                                     <div class="col-lg-6">
                                 <label for="exampleInput">Record*</label>
                                 <input type="text" class="form-control col-lg-12" name="ptrcrd" id="exampleInput" placeholder="" >
                                 <label for="exampleInput">Size*</label>
                                 <input type="text" class="form-control col-lg-12" name="petsize" id="exampleInput" placeholder="" >
                                 <label for="exampleInput">Gender*</label>
                                 <input type="text" class="form-control col-lg-12" name="petgender" id="exampleInput" placeholder="" >
                                 <div class="thumbnail">
                                 <label for="exampleInput">Image</label>
                                 <input type="file" class="form-control col-lg-12" name="image" id="exampleInput">
                                 </div>
                                 </div>
                               </div>
                      <!-- <center><h3>Pet Info: </h3></center>
                      <div class="col-md-8"><label>Pet Type: </label><input type='text' name='pttyp' placeholder='Type'/><br/>
                      <label>Pet Name: </label><input type='text' name='ptnm' /><br/>
                      <label>Pet Breed: </label><input type='text' name='ptbrd' /><br/>
                      <label>Pet Age: </label><input type='text' name='ptage' /><br/>
                      <label>Pet Gender: </label><input type='text' name='ptgndr' />
                    </div> -->
                  <!-- </div>
                    <div id="itempost">
                                     <div class="container">
                                                 <p class="brand-text">POST AN ITEM FOR:</p>
                                                <label class="col-lg-4" for="inlineFormCustomSelect"></label>
                                                <select class="custom-select col-lg-4" id="inlineFormCustomSelect" name="ctgry">
                                                      <option selected>Dogs</option>
                                                      <option>Cats</option>
                                                      <option>Birds</option>
                                                      <option>Hamsters</option>
                                                     <option>Others</option>
                                                    </select>
                                                </div>
                                              <div class="group row">
                                                  <div class="col-lg-12">
                                              <label for="exampleInput">Description*</label>
                                              <input type="text" class="form-control col-lg-12" name="description" id="exampleInput" aria-describedby="emailHelp" placeholder="Enter description" >
                                              <label for="exampleInput">Price*</label>
                                              <input type="number" class="form-control col-lg-12" name="price" id="exampleInput" placeholder="Price" >
                                               <label for="exampleInput">Contact Number*</label>
                                               <input type="text" class="form-control col-lg-12" name="contact" id="exampleInput" aria-describedby="emailHelp" placeholder="Contact Number" >
                                              <label for="exampleInput">Location*</label>
                                              <input type="text" class="form-control col-lg-12" name="location" id="exampleInput" placeholder="Location" >
                                               <label for="exampleInput">Image*</label>
                                              <input type="file" class="form-control col-lg-12" name="mage" id="exampleInput">
                                            </div>
                                            </div> -->
                      <!-- <center><h3>Item Info: </h3></center>
					  <div class="col-md-8">
                        <label>Item Type: </label><input type='text' name='itmtyp' /><br/>
                        <label><br>Item Price: </label><input type='text' name='itmprc' /></br>
                        <label><br>Item Description: </label><input type='text' name='itminf' /></br>
                      </div> -->
                    <!-- </div>
                    <div id="servpost">
                      <div class="container">
                                  <p class="brand-text">WHAT SERVICE WOULD YOU LIKE TO POST?</p>
                                 <label class="col-lg-4" for="inlineFormCustomSelect"></label>
                                 <select required class="custom-select col-lg-4" id="inlineCustomSelect" name="service">
                                       <option selected>Grooming</option>
                                       <option>Training</option>
                                       <option>Pet Sitting</option>
                                       <option>Veterinary</option>
                                       <option>Others</option>
                                     </select>
                                 </div>
                               <div class="group row">
                                   <div class="col-lg-12">
                               <label for="exampleInput">Caption*</label>
                               <input required type="text" class="form-control col-lg-12" name="caption" id="exampleInput" placeholder="Enter Caption" >
                           <label for="exampleInput">Name*</label>
                           <input required type="text" class="form-control col-lg-12" name="name" id="exampleInput" placeholder="Enter Name" >
                               <label for="exampleInput">Description*</label>
                               <input required type="text" class="form-control col-lg-12" name="description" id="exampleInput" placeholder="Enter description" >
                               <label for="exampleInput">Contact Number*</label>
                               <input required type="text" class="form-control col-lg-12" name="contact" id="exampleInput" placeholder="Contact Number" >
                               <label for="exampleInput">Address*</label>
                               <input required type="text" class="form-control col-lg-12" name="address" id="exampleInput" placeholder="Address" >
                               <div class="thumbnail">
                               <label for="exampleInput">Image*</label>
                               <input type="file" class="form-control col-lg-12" name="image" id="exampleInput">
                               </div>
                                   </div>
                             </div> -->
                      <!-- <center><h3>Service Info: </h3></center>
					  <div class="col-md-8">
                        <label>Service Type: </label><input type='text' name='srvctyp' /><br/>
                        <label>Service Name: </label><input type='text' name='srvcnm' /><br/>
                        <label>Service Contact: </label><input type='text' name='srvccntct' /><br/>
                        <label>Service Address: </label><input type='text' name='srvcadd'/><br/>
                      </div>
                      </div> -->

                  <!-- </form>  -->
										</div><br>
									</div>
								</div>
							</div>
              <div id="posting">
              <?php foreach($post as $cntnt):?>
              <div class="container">
                  <div class="row">
                      <div class="col-md-3"></div>
                      <div class="col-md-6"  id="itpost">
                          <p>You posted: </p>
                          <label><?php echo $cntnt['PostComment'];?></label><br/>
                          <p>Posted on: <?php echo $cntnt['PostDate'];?></p>
                          <button class="btn btn-dark"><a href="<?php echo site_url('user/read/'.$cntnt['PostID']);?>">See More...</a></button>
                          <button class="btn btn-success"><a href="<?php echo site_url('user/edit/'.$cntnt['PostID']);?>">Edit</a></button>
                          <button class="btn btn-danger"><a href="<?php echo site_url('user/delete/'.$cntnt['PostID']);?>">Delete</a></button>
                      </div>
                      <div class="col-md-3"></div>
                  </div>
              </div>
              <?php endforeach;?>
            </div>
							<!-- <div id="settings" class="tab-pane">
								<h4>Photos</h4>
							</div>
							<div id="email" class="tab-pane">
								<h4>Messages</h4>
							</div> -->
						</div>
					</div>
			</div>
			</div>
	</div>
<br>
<br>
<!-- <script>
  function check(){
  if(document.getElementById('inlineFormCustomSelect').value == 'Pet'){
    document.getElementById('petpost').style.display = 'block';
    document.getElementById('itempost').style.display = 'none';
    document.getElementById('servpost').style.display = 'none';
  }
  else if(document.getElementById('inlineFormCustomSelect').value == 'Item'){
    document.getElementById('petpost').style.display = 'none';
    document.getElementById('itempost').style.display = 'block';
    document.getElementById('servpost').style.display = 'none';
  }
  else if(document.getElementById('inlineFormCustomSelect').value == 'Service'){
    document.getElementById('petpost').style.display = 'none';
    document.getElementById('itempost').style.display = 'none';
    document.getElementById('servpost').style.display = 'block';
  }
} -->
</script>
