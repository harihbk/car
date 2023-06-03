<div class="table-responsive">
    <table class="table" id="cars-table">
        <thead>
        <tr>
            <th>Price</th>
        <th>Make</th>
        <th>Modelc</th>
        <th>Kmdriven</th>
        <th>Transmission</th>
        <th>Fueltype</th>
        <th>Registrationyear</th>
        <th>Noofowner</th>
        <th>Insurancevalidity</th>
        <th>Insurancetype</th>
        <th>Rto</th>
        <th>Carlocation</th>
        <th>Makeyear</th>
        <th>Price</th>
        <th>Emi</th>
        <th>Address</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cars as $car)
            <tr>
                <td>{{ $car->price }}</td>
            <td>{{ $car->make }}</td>
            <td>{{ $car->modelc }}</td>
            <td>{{ $car->kmdriven }}</td>
            <td>{{ $car->transmission }}</td>
            <td>{{ $car->fueltype }}</td>
            <td>{{ $car->registrationyear }}</td>
            <td>{{ $car->noofowner }}</td>
            <td>{{ $car->insurancevalidity }}</td>
            <td>{{ $car->insurancetype }}</td>
            <td>{{ $car->rto }}</td>
            <td>{{ $car->carlocation }}</td>
            <td>{{ $car->makeyear }}</td>
            <td>{{ $car->price }}</td>
            <td>{{ $car->emi }}</td>
            <td>{{ $car->address }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['cars.destroy', $car->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cars.show', [$car->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('cars.edit', [$car->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
