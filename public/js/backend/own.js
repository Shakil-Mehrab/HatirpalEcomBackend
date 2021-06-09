alert('ik')
        $(function() {
            $('#dataTable').on('change', '#per_page', function() {
                var model = $(this).data('model');
                var per_page = $(this).val();
                console.log(model)
                if (per_page) {
                    $.get("{{URL::to('/admin/view')}}"+'/'+model+'?per-page=' + per_page, function(data) {
                        $('#newData').html(data);
                    });
                }
            });
        });
        $(function() {
            $('#dataTable').on('keyup', '#search', function() {
                var model=$(this).data('model');
                var query = $(this).val();
                $.get("{{URL::to('/admin/search')}}"+'/'+model+'?query=' + query, function(data) {
                    $('#newData').html(data);
                });
            });
        });
        $(function() {
            $('#newData').on('click', '.paginate_reload_prevent a', function(e) {
                e.preventDefault();
                var url = $(this).attr('href');
                console.log(url)
                if (url) {
                    $.get(url, function(data) {
                        $('#newData').empty().append(data);
                    });
                }
            });
        });
        $(function() {
            $('#newData').on('click', '.delete', function(e) {
                e.preventDefault();
                var link = $(this).attr("href");
                console.log(link)
                bootbox.confirm("Are you sure to delete", function(confirmed) {
                    if (confirmed) {
                        $.get(link,function(data){
                        // window.location.href = link;
                    $('#newData').empty().append(data);

                        const Toast = Swal.mixin({
                          toast: true,
                          position: 'bottom-end',
                          showConfirmButton: false,
                          timer: 3000,
                        })
                        if($.isEmptyObject(data.error)){
                            Toast.fire({
                                icon: 'success',
                                title: 'Deleted Successfully!'
                            })
                        }else{
                            Toast.fire({
                                icon: 'error',
                                title: 'Not Deleted!'
                            })
                        }
                    });
                    };
                });
            });
        });
 