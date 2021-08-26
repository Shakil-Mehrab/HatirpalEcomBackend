<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Unique ID</th>
                        <th>Random ID</th>
                        <th>Price</th>

                    </tr>
                    @forelse ($regions as $cat)


                    <tr>
                        <td>{{$cat->name}}</td>

                        <td>{{$cat->slug}}</td>
                        <td>{{$cat->price}}</td>



                    </tr>


                    @empty

                    @endforelse



                </table>
                <br />
                <input type="text" class="form-control" id="search" placeholder="live search" @onclick.keyup=search_table()>


            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script>
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


        //         function search_table() {
        //             alert('hi')
        //             // Declare variables
        //             var input, filter, table, tr, td, i;
        //             input = document.getElementById("search_field_input");
        //             filter = input.value.toUpperCase();
        //             table = document.getElementById("table_id");
        //             tr = table.getElementsByTagName("tr");
        //
        //             // Loop through all table rows, and hide those who don't match the search query
        //             for (i = 0; i < tr.length; i++) {
        //                 td = tr[i].getElementsByTagName("td");
        //                 for (j = 0; j < td.length; j++) {
        //                     let tdata = td[j];
        //                     if (tdata) {
        //                         if (tdata.innerHTML.toUpperCase().indexOf(filter) > -1) {
        //                             tr[i].style.display = "";
        //                             break;
        //                         } else {
        //                             tr[i].style.display = "none";
        //                         }
        //                     }
        //                 }
        //             }
        //         }

    </script>

</body>
</html>
