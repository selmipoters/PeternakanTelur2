<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/additional-methods.js"></script>

<form id="update_profile" method="post" action="">
  <input type="file" name="image" />
  <input type="submit" value="Save" />
</form>
<script>
$.validator.addMethod('filesize', function (value, element, param) {
    return this.optional(element) || (element.files[0].size <= param)
}, 'File size must be less than {0}');

jQuery(function ($) {
    "use strict";
    $('#update_profile').validate({
        rules: {
            FirstName: {
                required: true,
                maxlength: 20
            },
            image: {
                required: true,
                extension: "pdf,xls,doc,docx,jpg,jpeg",
                filesize: 204800,
            }
        },
				messages: {
                image:{
                    filesize:
																swal({
											title: "Gagal",
											text: "File Tidak Boleh Lebih Besar dari 200kb",
											icon: "warning",
											button: "Oke",
										}),
                    accept:"Please upload .jpg or .png or .pdf file of notice.",
                    required:"Please upload file."
                }
        }
    });
});
</script>

