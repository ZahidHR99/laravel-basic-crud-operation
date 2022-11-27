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
        <button type="button" class="btn btn-primary mb-3" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
        Add New Data
        </button>

        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Zahid HR</td>
                    <td>zahidhr99@gmail.com</td>
                    <td>01986686158</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm btn-rounded">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm btn-rounded">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Data</h5>
                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-outline mb-3">
                                <input type="text" id="form12" class="form-control" />
                                <label class="form-label" for="form12">Your Name</label>
                            </div>
                            <div class="form-outline mb-3">
                                <input type="text" id="form12" class="form-control" />
                                <label class="form-label" for="form12">Your Email</label>
                            </div>
                            <div class="form-outline mb-3">
                                <input type="text" id="form12" class="form-control" />
                                <label class="form-label" for="form12">Your Phone</label>
                            </div>
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>



<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
></script>
        
    </body>
</html>
