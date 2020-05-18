var Demo = (function() {

	function popupResult(result) {
		var html;
		if (result.html) {
			html = result.html;
		}
		if (result.src) {
			html = '<img src="' + result.src + '" />';
		}
	}
	function demoUpload() {
		var $uploadCrop;
		function readFile(input) {
 			if (input.files && input.files[0]) {
	            var reader = new FileReader();
	            
	            reader.onload = function (e) {
					$('.upload-demo').addClass('ready');
	            	$uploadCrop.croppie('bind', {
	            		url: e.target.result
	            	}).then(function(){
	            		console.log('jQuery bind complete');
	            	});
	            	
	            }
	            
	            reader.readAsDataURL(input.files[0]);
	        }
	        else {
		        // swal("Sorry - you're browser doesn't support the FileReader API");
		    }
		}

		$uploadCrop = $('#upload-demo').croppie({
			viewport: {
				width: 1200,
				height: 630,
				type: 'square'
			},
			boundary: { width: 1300, height: 730 },
			showZoomer: true,
			enableExif: true
		});

		$('#upload').on('change', function () { readFile(this); });
		$('.upload-result').on('click', function (ev) {
			// $uploadCrop.result('blob').then(function(blob) {
			//     // do something with cropped blob
			//     $('#result').html(blob)
			// });
			$uploadCrop.croppie('result', 'blob').then(function(html) {
			    // html is div (overflow hidden)
			    // with img positioned inside.
			    // $('#result').html(html);
			    // fn = 'image1.jpg'
			    // filename = 'demo/'+fn;
			    // html.toBlob(function(html) {
				    saveAs(html, 'im.jpg');
				// });
			});
		});
	}
	function init() {
		demoUpload();
	}
	return {
		init: init
	};
})();