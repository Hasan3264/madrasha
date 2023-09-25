
<script>
    $('#medium').change(function () {
        var medium_ids = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "{{route('getshiftbymedium')}}",
            data: {
                'medium_ids': medium_ids
            },
            success: function (data) {
                $('#shift').html(data);
            }
        });
    });

</script>
