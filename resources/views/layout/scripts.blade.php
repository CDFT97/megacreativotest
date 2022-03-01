<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<script>
    function alerta(){
        var option = confirm("Estas seguro?");
        var form = document.getElementById("destroy-form");
        var boton = document.getElementById("deleteConfirm");
        if (option == true) {
           form.addEventListener("click", function () {
            form.submit();
            });
        } else {
            form.addEventListener("click", function (e) {
                e.preventDefault();
            });
        }
    }
</script>