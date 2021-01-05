<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Clients management system</title>
</head>
<body>
@include("navbar")




<div class="row header-container justify-content-center">
    <div class="header">
        <h1>Clients Management System</h1>
    </div>
</div>

@if($layout == 'index')
<div class="container-fluid mt-4">
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <section class="col-md-8">
                @include("Clientslist")
            </section>
        </div>
    </div>
</div>
@elseif($layout == 'create')
<div class="container-fluid mt-4 " id="create-form">
    <div class="row">
        <section class="col-md-7">
            @include("Clientslist")
        </section>
        <section class="col-md-5">

            <div class="card mb-3">
                <img src="https://i.postimg.cc/MpYqPG63/1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Enter the informations of the new client</h5>
                    <form action="{{ url('/store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>CNE</label>
                            <input name="CIN" type="text" class="form-control"  placeholder="Enter CIN">
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input name="firstName" type="text" class="form-control"  placeholder="Enter the first name">
                        </div>


                        <div class="form-group">
                            <label>second Name</label>
                            <input name="secondName" type="text" class="form-control"  placeholder="Enter second name">
                        </div>

                        <div class="form-group">
                            <label>Phone Number</label>
                            <input name="PhoneNumber" type="text" class="form-control"  placeholder="Enter the phone number">
                        </div>

                        <input type="submit" class="btn btn-info" value="Save">
                        <input type="reset" class="btn btn-warning" value="Reset">

                    </form>
                </div>
            </div>

        </section>
    </div>
</div>
@elseif($layout == 'show')
<div class="container-fluid mt-4">
    <div class="row">
        <section class="col">
            @include("Clientslist")
        </section>
        <section class="col"></section>
    </div>
</div>
@elseif($layout == 'edit')
<div class="container-fluid mt-4">
    <div class="row">
        <section class="col-md-7">
            @include("Clientslist")
        </section>
        <section class="col-md-5">

            <div class="card mb-3">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsBqpalg1Ph5WakkxS_ggluuI0OP8Qcx32OzgDBtbj5QagkyMLw-2-wCeWucwKQ16ED-HPNMiwBSmqVB4pprMjjY1MN4jgYek&usqp=CAU&ec=45725302" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Update informations of client</h5>
                    <form action="{{ url('/update/'.$client->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>CIN</label>
                            <input value="{{ $client->CIN }}" name="CIN" type="text" class="form-control"  placeholder="Enter CIN">
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input value="{{ $client->firstName }}" name="firstName" type="text" class="form-control"  placeholder="Enter the first name">
                        </div>
                        <div class="form-group">
                            <label>second Name</label>
                            <input value="{{ $client->secondName }}" name="secondName" type="text" class="form-control"  placeholder="Enter second name">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input value="{{ $client->PhoneNumber }}" name="PhoneNumber" type="text" class="form-control"  placeholder="Enter the phone number">
                        </div>

                        <input type="submit" class="btn btn-info" value="Update">
                        <input type="reset" class="btn btn-warning" value="Reset">

                    </form>
                </div>
            </div>

        </section>
    </div>
</div>

@endif
<footer></footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
