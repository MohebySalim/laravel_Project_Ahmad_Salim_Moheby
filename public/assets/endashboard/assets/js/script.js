// Toolbar extra buttons
			var btnFinish = $('<button></button>').text('Finish').addClass('btn btn-info').on('click', function () {
				alert('Finish Clicked');
			});
			var btnCancel = $('<button></button>').text('Cancel').addClass('btn btn-danger').on('click', function () {
				$('#smartwizard').smartWizard("reset");
			});
			// Step show event
			$("#smartwizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection, stepPosition) {
				$("#prev-btn").removeClass('disabled');
				$("#next-btn").removeClass('disabled');
				if (stepPosition === 'first') {
					$("#prev-btn").addClass('disabled');
				} else if (stepPosition === 'last') {
					$("#next-btn").addClass('disabled');
				} else {
					$("#prev-btn").removeClass('disabled');
					$("#next-btn").removeClass('disabled');
				}
			});
			// Smart Wizard
			$('.single-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
		$('.multiple-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
			$('#smartwizard').smartWizard({
				selected: 0,
				theme: 'arrows',
				transition: {
					animation: 'slide-horizontal', // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing
				},
				toolbarSettings: {
					toolbarPosition: 'both', // both bottom
					toolbarExtraButtons: [btnFinish, btnCancel]
				}
			});
			// External Button Events
			$("#reset-btn").on("click", function () {
				// Reset wizard
				$('#smartwizard').smartWizard("reset");
				return true;
			});
			$("#prev-btn").on("click", function () {
				// Navigate previous
				$('#smartwizard').smartWizard("prev");
				return true;
			});
			$("#next-btn").on("click", function () {
				// Navigate next
				$('#smartwizard').smartWizard("next");
				return true;
			});
			// Demo Button Events
			$("#got_to_step").on("change", function () {
				// Go to step
				var step_index = $(this).val() - 1;
				$('#smartwizard').smartWizard("goToStep", step_index);
				return true;
			});
			$("#is_justified").on("click", function () {
				// Change Justify
				var options = {
					justified: $(this).prop("checked")
				};
				$('#smartwizard').smartWizard("setOptions", options);
				return true;
			});
			$("#animation").on("change", function () {
				// Change theme
				var options = {
					transition: {
						animation: $(this).val()
					},
				};
				$('#smartwizard').smartWizard("setOptions", options);
				return true;
			});
			$("#theme_selector").on("change", function () {
				// Change theme
				var options = {
					theme: $(this).val()
				};
				$('#smartwizard').smartWizard("setOptions", options);
				return true;
			});

			// Example starter JavaScript for disabling form submissions if there are invalid fields
			(function () {
			  'use strict'
	
			  // Fetch all the forms we want to apply custom Bootstrap validation styles to
			  var forms = document.querySelectorAll('.needs-validation')
	
			  // Loop over them and prevent submission
			  Array.prototype.slice.call(forms)
				.forEach(function (form) {
				  form.addEventListener('submit', function (event) {
					if (!form.checkValidity()) {
					  event.preventDefault()
					  event.stopPropagation()
					}
	
					form.classList.add('was-validated')
				  }, false)
				})
			})()

			function isNumber(evt) {
             evt = (evt) ? evt : window.event;
             var charCode = (evt.which) ? evt.which : evt.keyCode;
             if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                 return false;
             }
             return true;
         }
		