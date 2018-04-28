<?php
	include'BMHeader.php';
?>

<div class="container">
<div class="page-header">
    <h1 id="title" style="text-align: center;">Notice Upload Control</h1>
</div>

<!-- Bootstrap Upload Control - START -->
<div class="container">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    	<div id="form">
    		<form method="post" action="upload.php" enctype="multipart/form-data">
    			<h3 id="selectFile"><u>Select File</u> </h3>
    			<label><span style="font-size: 17px">Title</span></label><br>
    			<input type="text" name="fileName"; id="doc">
    			<div class="file btn btn-md btn-default" id="div1">
					Select File
					<input type="file" name="myFile" id="input1" />
				</div>
            	<p style="text-align: center; margin-top: 20px; ">
                	<input type="submit" value="Upload File" class="btn btn-md btn-primary" name="submit" />
	            </p>
        </form>
    	</div>
    </div>
    <div class="col-md-4"></div>
</div>
</div>
<?php
	include'BMFooter.php';
?>