<?php
	include'BMHeader.php';
?>

<div class="container">
<div class="page-header">
    <h1 id="title" style="text-align: center;">Notice Upload</h1>
</div>

<!-- Bootstrap Upload Control - START -->
<div class="container">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    	<div id="form">
    		<form method="post" name="noticeForm" onsubmit="return validateForm()" action="upload.php" enctype="multipart/form-data">

    			<h3 id="selectFile"><u>Select File</u> </h3>

    			<label><span style="font-size: 17px">Title</span></label><br>
    			<input type="text" name="fileName"; id="doc">
                <p id="name-alert" style="margin-left: 20px"></p>

    			<div class="file btn btn-md btn-default" id="div1">
					<p id="select">Select File</p>
					<input type="file" name="myFile" id="input1" />
				</div>
                <p id="file-alert" style="margin-left: 20px" ></p>

            	<p style="text-align: center; margin-top: 20px; ">
                	<input type="submit"  value="Upload File" class="btn btn-md btn-primary" name="submit" />
	            </p>
        </form>
    	</div>
    </div>
    <div class="col-md-4"></div>
</div>
</div>

<script type="text/javascript">
    function validateForm(){
        var name =  document.forms['noticeForm']['fileName'].value;
        var file =  document.forms['noticeForm']['myFile'].value;
        var isError = 0;

        if(name == "" || name == null){
            document.getElementById("name-alert").innerHTML="Please fill the title field";
            isError=1;
        }
        if(file == "" || file == null){
            document.getElementById("file-alert").innerHTML="Please Select A PDF File";
            isError=1;
        }else{
            document.getElementById("select").innerHTML="File Selected";
        }

        if(isError == 1){
            return false;
        }else{
            return true;   
        }
    }
</script>

<?php
	include'BMFooter.php';
?>