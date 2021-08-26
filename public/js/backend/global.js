        const Toast = Swal.mixin({
            toast: true,
            position: 'bottom-end',
            showConfirmButton: false,
            timer: 3000,
        });
        $(function() {
            $('.navbar-toggler').on('click', function() {
                var click = document.getElementById('toggle_left_navigation');
                click.classList.toggle("toggle_left_navigation");
            })
        })
        $(function() {
            $('#dataTable').on('change', '#per_page', function() {
                var model = $(this).data('model');
                var total = $(this).data('total');
                var per_page = $(this).val();
                var page = $('.paginate_reload_prevent.active a').data('id');
                var lastpage = Math.ceil(total / per_page)
                if (lastpage < page) {
                    page = lastpage;
                }
                var link = '/admin/' + model + '?per-page=' + per_page + '&&page=' + page;
                if (per_page) {
                    $.get(link, function(data) {
                        $('#newData').html(data);
                    });
                }
            });
        });
        $(function() {
            $('#division_id').on('change', function() {
                var id = $(this).val();
                if (id) {
                    $.get("{{ url('admin/division?id=') }}" + id, function(data) {
                        var s = '<option></option>';
                        data.forEach(function(row) {
                            s += '<option value="' + row.id + '">' + row.name + '</option>'
                        })
                        $('#district_id').removeAttr('disabled');
                        $('#district_id').html(s);
                    });
                } else {
                    $('#district_id').attr('disabled', 'disabled');
                    s = '<option></option>'
                    $('#district_id').html(s);
                }
            })
        });

        $(function() {
            $('#district_id').on('change', function() {
                var id = $(this).val();
                if (id) {
                    $.get("{{ url('admin/district?id=') }}" + id, function(data) {
                        var s = '<option></option>';
                        data.forEach(function(row) {
                            s += '<option value="' + row.id + '">' + row.name + '</option>'
                        })
                        $('#checking_place_id').removeAttr('disabled');
                        $('#checking_place_id').html(s);
                    });

                } else {
                    $('#checking_place_id').attr('disabled', 'disabled');
                    s = '<option></option>'
                    $('#checking_place_id').html(s);
                }

            })
        });
        $(function() {
            $('#newData').on('click', '.paginate_reload_prevent a', function(e) {
                e.preventDefault();
                var url = $(this).attr('href');
                var per_page = $('#per_page').val();
                if (url) {
                    $.get(url + '&&per-page=' + per_page, function(data) {
                        $('#newData').empty().append(data);
                    });
                }
            });
        });
        // $(function() {
        //     $('#dataTable').on('keyup', '#search', function() {
        //         var model = $(this).data('model');
        //         var query = $(this).val();
        //         $.get("{{ URL::to('/admin/search') }}" + '?model=' + model + '&query=' + query, function(data) {
        //             $('#newData').html(data);
        //         });
        //     });
        // });
        $(function() {
            $('#newData').on('click', '#selectallboxes', function(event) {
                if (this.checked) {
                    $('.selectall').each(function() {
                        this.checked = true;
                    });
                } else {
                    $('.selectall').each(function() {
                        this.checked = false;
                    });
                }
            });
        });

        $(function() {
            $('#newData').on('submit', '#bulkDelete', function(e) {
                e.preventDefault();
                var frmdata = $(this).serialize();
                $.ajax({
                        url: "{{ url('admin/bulk/delete') }}",
                        type: 'POST',
                        data: frmdata,
                    })
                    .done(function(data) {
                        $('#newData').html(data);
                        Toast.fire({
                            icon: 'success',
                            title: 'Deleted Successfully!'
                        })
                    })
                    .fail(function(error) {
                        Toast.fire({
                            icon: 'error',
                            title: 'Please check the boxes and select the method!'
                        })
                    });
            });
        });

        $(function() {
            $('#newData').on('click', '.delete', function(e) {
                e.preventDefault();
                var model = $(this).data("model");
                var link = $(this).attr("href") + '?model=' + model;
                console.log(link);
                bootbox.confirm("Are you sure to delete", function(confirmed) {
                    console.log(link);
                    if (confirmed) {
                        $.ajax({
                                url: link,
                                type: 'DELETE',
                                data: {
                                    "_token": "{{ csrf_token() }}"
                                },
                            })
                            .done(function(data) {
                                $('#newData').empty().append(data);
                                Toast.fire({
                                    icon: 'success',
                                    title: 'Deleted Successfully!'
                                })
                            })
                            .fail(function(error) {
                                Toast.fire({
                                    icon: 'error',
                                    title: 'Something Wrong!'
                                })
                            });
                    };
                });
            });
        });
        $(function() {
            $("#search").keyup(function() {
                var value = this.value.toLowerCase().trim();
                $("table tr").each(function(index) {
                    if (!index) return;
                    $(this).find("td").each(function() {
                        var id = $(this).text().toLowerCase().trim();
                        var not_found = (id.indexOf(value) == -1);
                        $(this).closest('tr').toggle(!not_found);
                        return not_found;
                    });
                });
            });
        });
        $(function() {
            $('#newData').on('change', '.status', function(e) {
                e.preventDefault();
                var status = $(this).val();
                var link = $(this).data("link");
                var dfdfd = link + '&status=' + status;
                console.log(dfdfd)
                if (status) {
                    $.get(link + '&status=' + status, function(data) {
                        $('#newData').empty().append(data);
                        if ($.isEmptyObject(data.error)) {
                            Toast.fire({
                                icon: 'success',
                                title: 'Stutus Changed Successfully!'
                            })
                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: 'Status Not Changed!'
                            })
                        }
                    });
                };

            });
        });

        function toggleMenu(parameter) {
            console.log(parameter)
            $('.toggle_div_' + parameter).toggleClass('hidden');
        }
        $(function() {
            window.fbAsyncInit = function() {
                FB.init({
                    appId: '451585265723432',
                    xfbml: true,
                    version: 'v2.8'
                });
                FB.AppEvents.logPageView();
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        });