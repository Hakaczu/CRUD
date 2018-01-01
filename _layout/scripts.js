<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
    $('#del').on('show.bs.modal', function (e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
    });
</script>
