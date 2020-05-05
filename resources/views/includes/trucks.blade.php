<div class="card col-md-8 m-auto">
    <div class="card-header">
        <h3>Truck Details</h3>
    </div>
    <div class="card-body">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                
                <th scope="col">Truck Name</th>
                <th scope="col">Truck Type</th>
                <th scope="col">Truck Size</th>
                <th scope="col">Truck Location</th>
              </tr>
            </thead>
            <tbody>
            @foreach (Auth::user()->trucks as $truck)
            <tr>
              <td>{{ $truck->truck_name }}</td>
              <td>{{ $truck->truck_type }}</td>
              <td>{{ $truck->truck_size }}</td>
              <td>{{ $truck->truck_location }}</td>
            </tr>


            @endforeach
          </table>
          
    </div>
</div>
  