<!DOCTYPE html>
<html lang="en-US">
<head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
       
        <meta name="description" content="Live Demo at CodexWorld - Inline Table Data Editing with PHP and MySQL by CodexWorld">
        <meta name="keywords" content="demo, codexworld demo, project demo, live demo, tutorials, programming, coding">
        <meta name="author" content="CodexWorld">
        <title></title>
		<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">

        <link href="css/material-fonts.css" rel="stylesheet">
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/global.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <script src="js/jquery.min.js"></script>
		
		<!-- Bootstrap library -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- Custom stylesheet file -->
		<link rel="stylesheet" href="css/style.css">

</head>

<body>
        <header class="header_outer">
            <div class="hdr_top">
                <div class="containerDM-fluid">
                    <div class="top_menuOuter">
                        <div class="top_menuLft">
                            <div class="innr_menubody">
                                <div class="menu_innr">
                                    <ul>
                                        <li>
                                            <a href="pdf_data2" title="CodexWorld">
                                                <i class="material-icons-outlined">home </i>
                                                <span>Home</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="pdf_data2" title="Questions and answers community">
                                                <i class="material-icons-outlined">location_on </i>
                                                <span>Geo Tools</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="pdf_data2" title="Web development tools">
                                                <i class="material-icons-outlined">construction </i>
                                                <span>Web Tools</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="material-icons-outlined">work_outline </i>
                                                <span>jobs</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="material-icons-outlined">business </i>
                                                <span>business</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="top_menuright">
                            <div class="links_right">
                            </div>
                            <div class="hdr_social">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank" title="Follow CodexWorld on Facebook">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                                        </a>
                                    </li>
                                        <li>
                                        <a href="#" target="_blank" title="Follow CodexWorld on Twitter">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" title="Subscribe CodexWorld on YouTube">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg>
                                        </a>
                                    </li>
                                        <li>
                                        <a href="#" target="_blank" title="Follow CodexWorld on LinkedIn">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hdr_bttm">
                <div class="containerDM-fluid">
                    <div class="bttm_menuOuter">
                        <div class="hdr_logo">
                            <a href="#" class="logo"><img src="" alt=" Demos" /></a>
                        </div>
						<div class="menu_innr">
                                    <ul>
						<li>
                                            <a href="pdf_data2" title="CodexWorld">
                                                <i class="material-icons-outlined">home </i>
                                                <span>Home</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="pdf_data2" title="Questions and answers community">
                                                <i class="material-icons-outlined">location_on </i>
                                                <span>Geo Tools</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="pdf_data2" title="Web development tools">
                                                <i class="material-icons-outlined">construction </i>
                                                <span>Web Tools</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="material-icons-outlined">work_outline </i>
                                                <span>jobs</span>
                                            </a>
                                        </li>
                        </ul>
						</div>
                        <?php include_once('menu.php');?>
                    </div>
                </div>
            </div>
            <!--<div class="overlay"></div>-->
        </header>
        <section class="banner_sec">
            <div class="containerDM-fluid">
                <div class="baner_content">
                 <h1><span></span>View Seminar Details</h1>
                </div>
            </div>
        </section>
<section class="home_blogArea">
<div class="bar-header">
	
	<div class="hdr_bttm">
	<div class="containerDM-fluid">
	<div class="">
								
		<div class="right_srch_login">
			<div class="header_login" id="header_login">
				<div>
				<input type="file" class="login_btn form-control" style="width: 300px;">
				 </div><div>
				 <a href="#" class="login_btn border_btn downld">
				<i class="material-icons-outlined">upload</i>
				<span>Upload  Excell</span>
				</a>
				</div><div>
				<a href="#" class="login_btn border_btn downld">
					<i class="material-icons-outlined">download</i>
					<span>Download  Excell</span>
				</a>
				</div><div>
				<a href="javascript:;" class="login_btn border_btn downld" onclick="addTableRow()">
					<i class="material-icons-outlined">add</i>
					<span>Add New Row</span>
				</a>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
</div>

<div class="containerDM-fluid">
	<div class="demo_pnlouter">
		<div class="rowDM">
			<div class="col-lg-12-DM">

                        
 <div class="card">
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>            
            <th>Email</th>
			<th>Mobile</th>
			<th>Job Profiles</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody id="userData">
    <?php 
        // Load and initialize database class 
        require_once 'DB.class.php'; 
        $db = new DB(); 
 
        // Get members data from database 
        $members = $db->getRows(); 
 
        if(!empty($members)){ 
            foreach($members as $row){ 
        ?>
            <tr id="<?php echo $row['id']; ?>">
                <td><?php echo $row['id']; ?></td>
                <td>
                    <span class="editSpan first_name"><?php echo $row['first_name']; ?></span>
                    <input class="form-control editInput first_name" type="text" name="first_name" value="<?php echo $row['first_name']; ?>" style="display: none;">
                </td>
				<td>
                    <span class="editSpan email"><?php echo $row['email']; ?></span>
                    <input class="form-control editInput email" type="text" name="email" value="<?php echo $row['email']; ?>" style="display: none;">
                </td>
				<td>
                    <span class="editSpan mobile"><?php echo $row['mobile']; ?></span>
                    <input class="form-control editInput mobile" type="text" name="mobile" value="<?php echo $row['mobile']; ?>" style="display: none;">
                </td>
                <td>
                    <span class="editSpan job_profile"><?php echo $row['job_profile']; ?></span>
                    <input class="form-control editInput job_profile" type="text" name="job_profile" value="<?php echo $row['job_profile']; ?>" style="display: none;">
                </td>
                
                <td>
                    <span class="editSpan status"><?php echo ($row['status']=='Y')?'Active':'Inactive'; ?></span>
                    <select class="form-control editInput status" name="status" style="display: none;">
                        <option value="Y" <?php echo $row['status'] == 'Y'?'selected':''; ?>>Active</option>
                        <option value="N" <?php echo $row['status'] == 'N'?'selected':''; ?>>Inactive</option>
                    </select>
                </td>
                <td>
                    <button type="button" class="btn btn-default activateBtn"><i class="active"></i></button>
					<button type="button" class="btn btn-default editBtn"><i class="pencil"></i></button>
                    <button type="button" class="btn btn-default deleteBtn"><i class="trash"></i></button>
                    
                    <button type="button" class="btn btn-success updateBtn" style="display: none;">Save</button>
                    <button type="button" class="btn btn-danger confirmBtn" style="display: none;">Confirm</button>
                    <button type="button" class="btn btn-secondary cancelBtn" style="display: none;">Cancel</button>
                </td>
            </tr>
        <?php 
            } 
        }else{ 
            echo '<tr><td colspan="6">No record(s) found...</td></tr>'; 
        } 
    ?>
    </tbody>
</table>
</table>
        </div>
			</div>
		</div>
	</div>
</div>

<div class="bar-footer">
	
	
</div>

 <footer class="footer_sec">
            <div class="footer_top">
			</div>
<div class="footer_bttm">
		<div class="containerDM-fluid">
			<div class="copyright_outer">
				<div class="copyright_text">
					<p>Copyright &copy; 2024 <a href="#" title="Programming and Web Development Tutorials and Demos">Online Edit</a>. All rights reserved.</p>
				</div>
				<div class="privacy_links">
					<ul>
						<li>
							<a href="#" title="Terms and Conditions">
								<i class="material-icons-outlined">Company</i>
								<span>terms & condition</span>
							</a>
						</li>
						<li>
							<a href="#" title="Privacy Policy">
								<i class="material-icons-outlined">Nitya Nand</i>
								<span>privacy policy</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script>
$(window).scroll(function() {
	if ( $(document).scrollTop() > $(".hdr_top").outerHeight() ) {
	$('.header_outer').addClass('shrink');
	} else {
	$('.header_outer').removeClass('shrink');
	}
});


$(document).ready(function(){
    $('.editBtn').on('click',function(){
        //hide edit span
        $(this).closest("tr").find(".editSpan").hide();

        //show edit input
        $(this).closest("tr").find(".editInput").show();

        //hide edit button
        $(this).closest("tr").find(".editBtn").hide();

        //hide delete button
        $(this).closest("tr").find(".deleteBtn").hide();
		
		//hide activate button
        $(this).closest("tr").find(".activateBtn").hide();
        
        //show save button
        $(this).closest("tr").find(".updateBtn").show();

        //show cancel button
        $(this).closest("tr").find(".cancelBtn").show();
        
    });
    
	
    $('.updateBtn').on('click',function(){
        $('pdf_data2userData').css('opacity', '.5');

        var trObj = $(this).closest("tr");
        var ID = $(this).closest("tr").attr('id');
        var inputData = $(this).closest("tr").find(".editInput").serialize();
        $.ajax({
            type:'POST',
            url:'userAction.php',
            dataType: "json",
            data:'action=edit&id='+ID+'&'+inputData,
            success:function(response){
				
                if(response.status == 1){
                    var status= (response.data.status=='Y')?'Active':'Inactive';
                    //alert(response.data.mobile);
                    trObj.find(".editSpan.first_name").text(response.data.first_name);
					trObj.find(".editSpan.email").text(response.data.email);
                    trObj.find(".editSpan.job_profile").text(response.data.job_profile);                    
					trObj.find(".editSpan.mobile").text(response.data.mobile);
                    trObj.find(".editSpan.status").text(status);
                    
                    trObj.find(".editInput").hide();
                    trObj.find(".editSpan").show();
                    trObj.find(".updateBtn").hide();
                    trObj.find(".cancelBtn").hide();
                    trObj.find(".editBtn").show();
                    trObj.find(".deleteBtn").show();					
					trObj.find(".activateBtn").show();
                }else{
                    alert(response.msg);
                }
                $('pdf_data2userData').css('opacity', '');
            }
        });
    });
	
	$(document).on("click",'.saveBtn',function(){
        
		$('userData').css('opacity', '.5');
		
		var trObj = $(this).closest("tr");
		var ID = trObj.attr('id');
		var inputData = $(this).closest("tr").find(".editInput").serialize();
		// Initialize a flag for validation
		var isValid = true;

		// Validate only required input fields
		trObj.find(".editInput[required]").each(function() {
			if ($(this).val().trim() === "") { // Check if the input is empty
				isValid = false; // Set the flag to false
				$(this).addClass('is-invalid'); // Add an invalid class for styling
			} else {
				$(this).removeClass('is-invalid'); // Remove invalid class if the input is valid
			}
		});

		// If validation fails, show an alert and return early
		if (!isValid) {
			alert("Please fill out all required fields.");
			$('#userData').css('opacity', ''); // Reset opacity
			return; // Exit the function
		}
		
        
        
        $.ajax({
            type:'POST',
            url:'userAction.php',
            dataType: "json",
            data:'action=addNew&'+inputData,
            success:function(response){
				
                if(response.status == 1){
                    
                    //alert(response.data.mobile);
                    trObj.find(".editSpan.first_name").text(response.data.first_name);
					trObj.find(".editSpan.email").text(response.data.email);
                    trObj.find(".editSpan.job_profile").text(response.data.job_profile);                    
					trObj.find(".editSpan.mobile").text(response.data.mobile);
                    trObj.find(".editSpan.status").text(response.data.status);
                    
                   
                }else{
                    alert(response.msg);
                }
                $('pdf_data2userData').css('opacity', '');
            }
        });
    });
    $('.cancelBtn').on('click',function(){
        //hide & show buttons
        $(this).closest("tr").find(".updateBtn").hide();
        $(this).closest("tr").find(".cancelBtn").hide();
        $(this).closest("tr").find(".confirmBtn").hide();
        $(this).closest("tr").find(".editBtn").show();
        $(this).closest("tr").find(".deleteBtn").show();		
        $(this).closest("tr").find(".activateBtn").show();

        //hide input and show values
        $(this).closest("tr").find(".editInput").hide();
        $(this).closest("tr").find(".editSpan").show();
    });
    
    $('.deleteBtn').on('click',function(){
        //hide edit & delete button
        $(this).closest("tr").find(".editBtn").hide();
        $(this).closest("tr").find(".deleteBtn").hide();        
        $(this).closest("tr").find(".activateBtn").hide();
		
        //show confirm & cancel button
        $(this).closest("tr").find(".confirmBtn").show();
        $(this).closest("tr").find(".cancelBtn").show();
    });
    
    $('.confirmBtn').on('click',function(){
        $('pdf_data2userData').css('opacity', '.5');

        var trObj = $(this).closest("tr");
        var ID = $(this).closest("tr").attr('id');
        $.ajax({
            type:'POST',
            url:'userAction.php',
            dataType: "json",
            data:'action=delete&id='+ID,
            success:function(response){
                if(response.status == 1){
                    trObj.remove();
                }else{
                    trObj.find(".confirmBtn").hide();
                    trObj.find(".cancelBtn").hide();
                    trObj.find(".editBtn").show();
                    trObj.find(".deleteBtn").show();
                    alert(response.msg);	
                }
                $('pdf_data2userData').css('opacity', '');
            }
        });
    });
});

function addTableRow() {
	// Create a new table row
	const newRow = document.createElement("tr");
	newRow.innerHTML = `
		<td>
			#
		</td>
		<td>
			<input type="text" class="form-control editInput" name="first_name"  id="first_name"  placeholder="Full Name" required>
		</td>
		<td>
			<input type="text" class="form-control editInput" name="email" id="email" placeholder="Email" required>
		</td>
		<td>
			<input type="text" class="form-control editInput" name="mobile" id="mobile"  placeholder="Mobile" required>
		</td>
		<td>
			<input type="text" class="form-control editInput" name="job_profile" id="job_profile"  placeholder="Job Profiles">
		</td>
		<td>
			<select class="form-control editInput status editInput" name="status" >
				<option value="Y" <?php echo $row['status'] == 'Y'?'selected':''; ?>>Active</option>
				<option value="N" <?php echo $row['status'] == 'N'?'selected':''; ?>>Inactive</option>
			</select>
		</td>
		<td>
			<button type="button" class="btn btn-success saveBtn" >Save</button>		
			<button type="button" class="btn btn-secondary" onclick="removeTableRow(this)" >Cancel</button>
		</td>
	`;

	// Add the new row to the top of the table body
	const tableBody = document.getElementById("userData");
	tableBody.insertBefore(newRow, tableBody.firstChild);
}

function removeTableRow(button) {
	// Remove the row containing the clicked "Remove" button
	button.closest("tr").remove();
}
</script>
</body>
</html>