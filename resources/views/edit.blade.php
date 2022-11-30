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

        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif


            <div class="card">
                <div class="card-body">
                    <form action="{{ route('customer.update',$customer->id) }}" method="post">
                        @csrf
                       
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label" for="form12">Your Name</label>
                                <input type="text" id="form12" name="name" value="{{ $customer->name }}" class="form-control" required/>
                               
                                @error('name')
                                    <strong>{{ $message }}</strong>    
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="form12">Your Email</label>
                                <input type="email" id="form12" name="email" value="{{ $customer->email }}" class="form-control" required/>
                                @error('email')
                                    <strong>{{ $message }}</strong>    
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="form12">Your Phone</label>
                                <input type="number" id="form12" name="phone" value="{{ $customer->phone }}" class="form-control" required/> 
                                @error('phone')
                                    <strong>{{ $message }}</strong>    
                                @enderror
                            </div>
                        </div>

                        <input type="hidden" name="id" value="{{ $customer->id }}">
                        <input type="hidden" name="_method" value="PATCH">
                  
                            <button type="submit" class="btn btn-primary">Update</button>
                       
                    </form>
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
