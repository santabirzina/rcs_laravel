@extends('layouts.layout')

@section('content')

   

<div class="container book-flight">


    <div class="row">
    <div class="col-md-6 p-4">
    <h2 class="text-orange mb-2">Book your flight</h2>
   

    <form action="store" method="post">

         @csrf
       
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="inputName" placeholder="John" value="" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last name</label>
                <input type="text" name="last_name" class="form-control" id="inputLname" placeholder="Doe" value="" required>
            </div>       
           
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="john.doe@email.com" value="" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone number</label>
                <input type="phone" name="phone" class="form-control" id="inputPhone" placeholder="+371 22222222" value="" required>
            </div>
        

        <button class="btn btn-success submit-button-text ml-auto" type="submit" name="submit" value="submit">Submit</button>
    </form>

    </div>
        <div class="col-md-6">
           
            @if($message)
            
            <div class="submit-success align-middle">
            {{$message}}
            </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
    </div>


</div>




@endsection