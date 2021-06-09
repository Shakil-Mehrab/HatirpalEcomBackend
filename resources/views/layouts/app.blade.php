<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ 'Hatirpal'}}</title>
    <!-- Scripts -->
    <!-- Fonts -->
    <link rel="icon" href="{{asset('images/default/favicon.png')}}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <script src="https://kit.fontawesome.com/bb2f33706c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/backend/nav_left_navigation.css')}}">
    <link rel="stylesheet" href="{{asset('css/backend/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/backend/googletranslator.css')}}">

    @yield('css')

</head>
<body>
    <div id="app">
        @include('layouts.includes.nav')
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4 left_navigation toggle_left_navigation" id="toggle_left_navigation">
                    @include('layouts.includes.leftNavigation')
                </div>
                <div class="col-lg-10 col-md-9 col-sm-8 main_content" style="margin-top: 55px;height:600px;overflow:scroll;">
                    @include('message.alert')
                    @yield('content')
                </div>
            </div>
        </div>
        <footer class="">
            <div class="text-center copyright">
                All Rights reserver by &copy; Admin
            </div>
        </footer>
    </div>
    <!-- google translator 
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript" src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- <script src="{{ asset('js/backend/own.js') }}" defer></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.js"></script>



    @yield('js')
    <script type="text/javascript">
        const Toast = Swal.mixin({
            toast: true,
            position: 'bottom-end',
            showConfirmButton: false,
            timer: 3000,
        });
        $(function(){
            $('.navbar-toggler').on('click',function(){
                var click=document.getElementById('toggle_left_navigation');
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
                if (per_page) {
                    $.get("{{URL::to('/admin/view')}}" + '/' + model + '?per-page=' + per_page + '&&page=' + page, function(data) {
                        $('#newData').html(data);
                    });
                }
            });
        });
        $(function() {
            $('#division_id').on('change', function() {
                var id = $(this).val();
                if (id) {
                    $.get("{{url('admin/division?id=')}}" + id, function(data) {
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
                    $.get("{{url('admin/district?id=')}}" + id, function(data) {
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
        $(function() {
            $('#dataTable').on('keyup', '#search', function() {
                var model = $(this).data('model');
                var query = $(this).val();
                $.get("{{URL::to('/admin/search')}}" + '/' + model + '?query=' + query, function(data) {
                    $('#newData').html(data);
                });
            });
        });
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
                        url: "{{url('admin/bulk/delete')}}",
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
                var link = $(this).attr("href");
                bootbox.confirm("Are you sure to delete", function(confirmed) {
                    if (confirmed) {
                        $.get(link, function(data) {
                            // window.location.href = link;
                            $('#newData').empty().append(data);
                            if ($.isEmptyObject(data.error)) {
                                Toast.fire({
                                    icon: 'success',
                                    title: 'Deleted Successfully!'
                                })
                            } else {
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
    </script>
</body>

</html>