var FormValidation = function () {


    return {
        //main function to initiate the module
        init: function () {

            // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var form1 = $('#form_tambahuser');
            var error1 = $('.alert-error', form1);
            var success1 = $('.alert-success', form1);

            form1.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-inline', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",
                rules: {
                    username: {
                        required: true
                    },
					password: {
                        required: true,
                    },
                    kategori: {
                        required: true
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success1.hide();
                    error1.show();
                    App.scrollTo(error1, -200);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.help-inline').removeClass('ok'); // display OK icon
                    $(element)
                        .closest('.control-group').removeClass('success').addClass('error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change dony by hightlight
                    $(element)
                        .closest('.control-group').removeClass('error'); // set error class to the control group
                },

                success: function (label) {
                    label
                        .addClass('valid').addClass('help-inline ok') // mark the current input as valid and display OK icon
                    .closest('.control-group').removeClass('error').addClass('success'); // set success class to the control group
                },

                submitHandler: function (form) {
					$.ajax({
						url:"act/user_act.php",
						type:'POST',
						data:$("form#form_tambahuser").serialize(),
						success:function(resspon){
							$('#tambah_user').animate({'width':'100%'},1000);
							setTimeout(function(){
								//alert('Berhasil Disimpan');
								document.location="user.php";
								},2000);
						},
						error:function(resspon){
							alert('gagal resspon ke sqlnya');
							App.scrollTo(error1, -200);
						},
					});
		
                }
				
            });

			
			var form3 = $('#form_tambahkat');
            var error3 = $('.alert-error', form3);
            var success3 = $('.alert-success', form3);

            form3.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-inline', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",
                rules: {
                    nama: {
                        required: true
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success3.hide();
                    error3.show();
                    App.scrollTo(error3, -200);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.help-inline').removeClass('ok'); // display OK icon
                    $(element)
                        .closest('.control-group').removeClass('success').addClass('error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change dony by hightlight
                    $(element)
                        .closest('.control-group').removeClass('error'); // set error class to the control group
                },

                success: function (label) {
                    label
                        .addClass('valid').addClass('help-inline ok') // mark the current input as valid and display OK icon
                    .closest('.control-group').removeClass('error').addClass('success'); // set success class to the control group
                },

                submitHandler: function (form) {
					$.ajax({
						url:"act/kat_act.php",
						type:'POST',
						data:$("form#form_tambahkat").serialize(),
						success:function(resspon){
							$('#tambah_kat').animate({'width':'100%'},1000);
							setTimeout(function(){
								//alert('Berhasil Disimpan');
								document.location="user.php";
								},2000);
						},
						error:function(resspon){
							alert('gagal resspon ke sqlnya');
							App.scrollTo(error3, -200);
						},
					});
		
                }
				
            });
			
			
			
			var form5 = $('#form_tambahps');
            var error5 = $('.alert-error', form5);
            var success5 = $('.alert-success', form5);

            form5.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-inline', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",
                rules: {
                    nis: {
                        required: true,
						number: true
                    },
					umur: {
                        required: true,
						number: true
                    },
                    nama: {
                        required: true
                    },
					jk: {
                        required: true
                    },
					agama: {
                        required: true
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success5.hide();
                    error5.show();
                    App.scrollTo(error5, -200);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.help-inline').removeClass('ok'); // display OK icon
                    $(element)
                        .closest('.control-group').removeClass('success').addClass('error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change dony by hightlight
                    $(element)
                        .closest('.control-group').removeClass('error'); // set error class to the control group
                },

                success: function (label) {
                    label
                        .addClass('valid').addClass('help-inline ok') // mark the current input as valid and display OK icon
                    .closest('.control-group').removeClass('error').addClass('success'); // set success class to the control group
                },

                submitHandler: function (form) {
					$.ajax({
						url:"act/ps_act.php",
						type:'POST',
						data:$("form#form_tambahps").serialize(),
						success:function(resspon){
							$('#tambah_ps').animate({'width':'100%'},1000);
							setTimeout(function(){
								//alert('Berhasil Disimpan');
								document.location="transaksi.php";
								},2000);
						},
						error:function(resspon){
							alert('gagal resspon ke sqlnya');
							App.scrollTo(error5, -200);
						},
					});
		
                }
				
            });
			
			
			
			var form4 = $('#form_tambahjk');
            var error4 = $('.alert-error', form4);
            var success4 = $('.alert-success', form4);

            form4.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-inline', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",
                rules: {
                    jk: {
                        required: true
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success4.hide();
                    error4.show();
                    App.scrollTo(error4, -200);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.help-inline').removeClass('ok'); // display OK icon
                    $(element)
                        .closest('.control-group').removeClass('success').addClass('error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change dony by hightlight
                    $(element)
                        .closest('.control-group').removeClass('error'); // set error class to the control group
                },

                success: function (label) {
                    label
                        .addClass('valid').addClass('help-inline ok') // mark the current input as valid and display OK icon
                    .closest('.control-group').removeClass('error').addClass('success'); // set success class to the control group
                },

                submitHandler: function (form) {
					$.ajax({
						url:"act/jk_act.php",
						type:'POST',
						data:$("form#form_tambahjk").serialize(),
						success:function(resspon){
							$('#tambah_jk').animate({'width':'100%'},1000);
							setTimeout(function(){
								//alert('Berhasil Disimpan');
								document.location="master.php";
								},2000);
						},
						error:function(resspon){
							alert('gagal resspon ke sqlnya');
							App.scrollTo(error3, -200);
						},
					});
		
                }
				
            });
			
			
			
			

            //Sample 2
            var form2 = $('#form_tambahagm');
            var error2 = $('.alert-error', form2);
            var success2 = $('.alert-success', form2);

            form2.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-inline', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",
                rules: {
					agama: {
                        required: true
                    }
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    if (element.attr("name") == "education") { // for chosen elements, need to insert the error after the chosen container
                        error.insertAfter("#form_2_education_chzn");
                    } else if (element.attr("name") == "membership") { // for uniform radio buttons, insert the after the given container
                        error.addClass("no-left-padding").insertAfter("#form_2_membership_error");
                    } else if (element.attr("name") == "service") { // for uniform checkboxes, insert the after the given container
                        error.addClass("no-left-padding").insertAfter("#form_2_service_error");
                    } else {
                        error.insertAfter(element); // for other inputs, just perform default behavoir
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit   
                    success2.hide();
                    error2.show();
                    App.scrollTo(error2, -200);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.help-inline').removeClass('ok'); // display OK icon
                    $(element)
                        .closest('.control-group').removeClass('success').addClass('error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change dony by hightlight
                    $(element)
                        .closest('.control-group').removeClass('error'); // set error class to the control group
                },

                success: function (label) {
                    if (label.attr("for") == "service" || label.attr("for") == "membership") { // for checkboxes and radip buttons, no need to show OK icon
                        label
                            .closest('.control-group').removeClass('error').addClass('success');
                        label.remove(); // remove error label here
                    } else { // display success icon for other inputs
                        label
                            .addClass('valid').addClass('help-inline ok') // mark the current input as valid and display OK icon
                        .closest('.control-group').removeClass('error').addClass('success'); // set success class to the control group
                    }
                },

                submitHandler: function (form) {
                    $.ajax({
						url:"act/agama_act.php",
						type:'POST',
						data:$("form#form_tambahagm").serialize(),
						success:function(resspon){
							$('#tambah_agm').animate({'width':'100%'},1000);
							setTimeout(function(){
								//alert('Berhasil');
								document.location='master.php';
								},2000);
						},
						error:function(resspon){
							alert('gagal resspon');
						},
					});
                }

            });

            //apply validation on chosen dropdown value change, this only needed for chosen dropdown integration.
            $('.chosen, .chosen-with-diselect', form2).change(function () {
                form2.validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input
            });

        }

    };

}();