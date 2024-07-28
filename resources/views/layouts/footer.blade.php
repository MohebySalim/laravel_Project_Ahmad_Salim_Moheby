
<!-- Bootstrap JS -->
<script src="{{ asset('/assets/endashboard/assets/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins-->


<script src="{{ asset('/assets/endashboard/assets/js/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('/assets/endashboard/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('/assets/endashboard/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('/assets/endashboard/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('/assets/endashboard/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
<script src="{{ asset('/assets/endashboard/assets/plugins/chartjs/js/Chart.extension.js') }}"></script>
<script src="{{ asset('/assets/endashboard/assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
<!--Morris JavaScript -->
{{--<script src="{{ asset('/assets/endashboard/assets/plugins/raphael/raphael-min.js') }}"></script>--}}
{{--<script src="{{ asset('/assets/endashboard/assets/plugins/morris/js/morris.js') }}"></script>--}}
{{--<script src="{{ asset('/assets/endashboard/assets/js/index2.js') }}"></script>--}}
<!--app JS-->
<script src="{{ asset('/assets/endashboard/assets/js/app.js') }}"></script>

{{--<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>--}}
<script>

    $(document).ready(function() {

        const forms = document.querySelectorAll('.needs-validation');
        forms.forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                Array.from(form.elements).forEach(input => {
                    if (input.classList.contains('form-select')) {
                        input.style.boxShadow = 'none'; // Remove the focus box-shadow
                        input.style.borderColor = '#ced4da'; // Set the desired border color
                    }
                    if (input.classList.contains('form-control')) {
                        input.style.boxShadow = 'none'; // Remove the focus box-shadow
                        input.style.borderColor = '#ced4da'; // Set the desired border color
                    }
                    if (input.type === 'checkbox' || input.type === 'radio') {
                        // Remove the checkmark by resetting the appearance property
                        input.style.appearance = 'none';
                    }
                });
                form.classList.add('was-validated');
            }, false);
        });
    });

    $(document).ready(function(){
    $('#menu').metisMenu();
});
</script>
@section('footer')
@show

