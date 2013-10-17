<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300' rel='stylesheet' type='text/css'>
	<link href='upload.css' rel='stylesheet'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="filedrop.js"></script>
	
	<script>
		
		var template = '<div class="preview">'+
								'<div class="imageHolder">'+
									'<img />'+
									'<div class="uploaded"></div>'+
								'</div>'+
								'<div class="progressHolder">'+
									'<div class="progress"></div>'+
								'</div>'+
							'</div>'; 

		function createImage(file) {

			var preview = $(template),
				image = $('img', preview);

			var reader = new FileReader();

			reader.onload = function(e){

				// e.target.result holds the DataURL which
				// can be used as a source of the image:

				image.attr('src',e.target.result);
			};

			// Reading the file as a DataURL. When finished,
			// this will trigger the onload function above:
			reader.readAsDataURL(file);

			preview.prependTo($('#uploads'));
			preview.fadeIn('slow');

			// Associating a preview container
			// with the file, using jQuery's $.data():

			$.data(file,preview);
		}

		$(document).ready(function() {

			$('#dropbox').css('height', $(window).outerHeight());

			$('#dropbox').filedrop({
			    fallback_id: 'upload_button',   		// an identifier of a standard file input element
			    url: 'file_upload.php',              	// upload handler, handles each file separately, can also be a function returning a url
			    paramname: 'pic',          				// POST parameter name used on serverside to reference file
			    error: function(err, file) {
			        switch(err) {
			            case 'BrowserNotSupported':
			                alert('browser does not support html5 drag and drop')
			                break;
			            case 'TooManyFiles':
			                // user uploaded more than 'maxfiles'
			                break;
			            case 'FileTooLarge':
			                // program encountered a file whose size is greater than 'maxfilesize'
			                // FileTooLarge also has access to the file which was too large
			                // use file.name to reference the filename of the culprit file
			                break;
			            case 'FileTypeNotAllowed':
			                // The file type is not in the specified list 'allowedfiletypes'
			            default:
			                break;
			        }
			    },
			    allowedfiletypes: [],   // filetypes allowed by Content-Type.  Empty array means no restrictions
			    maxfiles: 25,
			    maxfilesize: 1000,    // max file size in MBs
			    
			    drop: function() {
			    	$('#dropbox').hide();
			    	$('#uploads').show();
			    },
			    docOver: function() {
			    	$('#dropbox').addClass("active");
			    },
			    dragLeave: function() {
			    	$('#dropbox').removeClass("active");
			    },

			    uploadStarted: function(i, file, len){

			    },
			    uploadFinished: function(i, file, response, time) {
			        $.data(file).find('.progress').width('100%');
			        alert(response.status);
			    },
			    progressUpdated: function(i, file, progress) {
			        $.data(file).find('.progress').width(progress + '%');
			    },
			    globalProgressUpdated: function(progress) {
			        // progress for all the files uploaded on the current instance (percentage)
			        // ex: $('#progress div').width(progress+"%");
			    },
			    speedUpdated: function(i, file, speed) {
			        // speed in kb/s
			    },
			    rename: function(name) {
			        // name in string format
			        // must return alternate name as string
			    },
			    beforeEach: function(file) {
			        
			    },
			    beforeSend: function(file, i, done) {
			        // file is a file object
			        // i is the file index
			        // call done() to start the upload
			        createImage(file);
			        done();
			    },
			    afterAll: function() {
			        // runs after all files have been uploaded or otherwise dealt with
			    }
			});

		});
	</script>

</head>
<body>
<div id="dropbox"><h1>Drop your lovely stuff here.</h1></div>
<div id="uploads"><div style="clear: both;"></div></div>
</body>
</html>