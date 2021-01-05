
<div class="card mb-3">
    <img src="https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX20743324.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">List of clients</h5>
        <p class="card-text">You can find here all the informatins about our clients in the system</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">CIN</th>
                <th scope="col">First name</th>
                <th scope="col">Second Name</th>
                <th scope="col">PhoneNumber</th>

            </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
            <tr>
                <td>{{ $client->CIN }}</td>
                <td>{{ $client->firstName }}</td>
                <td>{{ $client->secondName }}</td>
                <td>{{ $client->PhoneNumber }}</td>
                <td>

                    <a href="{{ url('/edit/'.$client->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ url('/destroy/'.$client->id) }}" class="btn btn-sm btn-danger">Delete</a>


                </td>


            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>






