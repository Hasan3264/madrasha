<script>
    function institue() {
        var institue = document.getElementById("institue");
        var general = document.getElementById("general");

        institue.style.display = "block";
        general.style.display = "none";
    }

    function general() {
        var institue = document.getElementById("institue");
        var general = document.getElementById("general");

        general.style.display = "block";
        institue.style.display = "none";
    }
</script>
<script>
    var preload = document.querySelector(".preload");
    var preloaderst2 = document.querySelectorAll(".st2");
    var preloaderst3 = document.querySelectorAll(".st3");
    var preloaderst4 = document.querySelectorAll(".st4");

    for (let i = 0; i < preloaderst2.length; i++) {
        preloaderst2[i].style.fill = "#0E3E67";
    }
    for (let i = 0; i < preloaderst3.length; i++) {
        preloaderst3[i].style.fill = "#FF9324";
    }
    for (let i = 0; i < preloaderst4.length; i++) {
        preloaderst4[i].style.fill = "#0E3E67";
    }

    function counter() {
        var counts = setInterval(() => {
            var c = parseInt($('.count').text());
            $('.count').text((++c).toString());
            if (c == 100) {
                clearInterval(counts);
            }
        }, 60);
    }
    counter();

    window.addEventListener("load", function() {
        preload.style.display = "none";
    })
</script>

<!-- Global Vendor -->
<script src="{{asset('AdminAssets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('AdminAssets/vendor/jquery-migrate/jquery-migrate.min.js')}}"></script>
<script src="{{asset('AdminAssets/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('AdminAssets/vendor/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('AdminAssets/js/mainck.js')}}"></script>
<script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Plugins -->
<script src="{{asset('AdminAssets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}">
</script>
<script src="{{asset('AdminAssets/vendor/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('AdminAssets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('AdminAssets/js/jquery-ui.min.js')}}"></script>
<!-- data table -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<!-- data table -->
<!-- Initialization  -->
<script src="{{asset('AdminAssets/js/sidebar-nav.js')}}"></script>
<script src="{{asset('AdminAssets/js/main.js')}}"></script>
<script src="{{asset('AdminAssets/js/dashboard-page-scripts.js')}}"></script>
<!--<script src="assets/js/scripts.js')}}"></script>-->
<script>
    $('#example').tooltip(options);
</script>

<!-- Sweetalert--->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset('AdminAssets/js/sweet_alert.js') }}"></script>
<!-- End Sweetalert--->


<!-- Toaster Message -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch (type) {
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
    }
    @endif
</script>


<script>
    $("#files").on("change", function() {
        //   /* Current this object refer to input element */
        var $input = $(this);
        var reader = new FileReader();
        reader.onload = function() {
            $("#image-container").attr("src", reader.result);
        }
        reader.readAsDataURL($input[0].files[0]);
    });
    $("#files1").on("change", function() {
        //   /* Current this object refer to input element */
        var $input = $(this);
        var reader = new FileReader();
        reader.onload = function() {
            $("#image-container1").attr("src", reader.result);
        }
        reader.readAsDataURL($input[0].files[0]);
    });
    $("#files2").on("change", function() {
        //   /* Current this object refer to input element */
        var $input = $(this);
        var reader = new FileReader();
        reader.onload = function() {
            $("#image-container2").attr("src", reader.result);
        }
        reader.readAsDataURL($input[0].files[0]);
    });
</script>

