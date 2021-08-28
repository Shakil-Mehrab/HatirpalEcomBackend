<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .pager-nav span {
            display: inline-block;
            padding: 4px 8px;
            margin: 1px;
            cursor: pointer;
            font-size: 14px;
            background-color: #FFFFFF;
            border: 1px solid #e1e1e1;
            border-radius: 3px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .04);
        }

        .pager-nav span:hover,
        .pager-nav .pg-selected {
            background-color: blue;
            border: 1px solid #CCCCCC;
        }

    </style>

</head>
<body>
    <div>
        <ul id="test">
            <li>dfd</li>
            <li> dfd</li>
        </ul>
    </div>

    <table id="pager">
        <thead>
            <tr>
                <th>Column #1</th>
                <th>Column #2</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($regions as $rg)
            <tr>
                <td>{{ $rg->name }}</td>
                <td>{{ $rg->slug }}</td>

            </tr>
            @empty

            @endforelse
        </tbody>
    </table>

    <div id="pageNavPosition" class="pager-nav"></div>


    <script src="{{ asset('page.js') }}"></script>

</body>
</html>
