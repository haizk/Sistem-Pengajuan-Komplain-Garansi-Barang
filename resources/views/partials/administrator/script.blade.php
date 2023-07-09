<script src="{{ asset('dist/assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('dist/assets/js/app.js') }}"></script>
    
<!-- Need: Apexcharts -->
<script src="{{ asset('dist/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('dist/assets/js/pages/dashboard.js') }}"></script>

<script>
    function submitCreate(){
        $('#createSubmit').click();
    }

    function submitEdit(){
        $('#editSubmit').click();
    }

    function submitDelete(){
        $('#deleteSubmit').click();
    }

    function submitForm(){
        document.getElementById("formEdit").submit();
    }
</script>