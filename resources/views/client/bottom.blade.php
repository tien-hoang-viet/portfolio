@jquery
@toastr_js
@toastr_render
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="assets_home/js/scrollreveal.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<!-- <script src="https://unpkg.com/scrollreveal"></script> -->
<!--=============== SWIPER JS ===============-->
<script src="assets_home/js/swiper-bundle.min.js"></script>

<!--=============== MIXITUP FILTER ===============-->
<script src="assets_home/js/mixitup.min.js"></script>

<!--=============== MAIN JS ===============-->
<script src="assets_home/js/main.js"></script>

