<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel CRUD</title>

        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
        <!-- MDB -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
        rel="stylesheet"
        />
    </head>
    <body>


    <div class="container mt-3">

        <!-- Button trigger modal -->
        <a href="/">
            <button type="button" class="btn btn-primary mb-3" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                Back to Home
            </button>
        </a>

            <div class="card">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Customer Name</th>
                            <td>{{ $customer->name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Customer Email</th>
                            <td>{{ $customer->email }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Customer Phone</th>
                            <td>{{ $customer->phone }}</td>
                        </tr>
                    </tbody>
                </table>   
            </div>

    </div>



<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
></script>
        
    </body>
</html>
