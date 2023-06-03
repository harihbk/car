<div class="table-responsive">
    <table class="table" id="carimages-table">
        <thead>
        <tr>
            <th>Car</th>
        <th>Images</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($carimages as $carimage)
            <tr>
                <td>{{ $carimage->car }}</td>
                <td>  <img src="{{ asset('public/'.$carimage->images) }}" alt="" title="" width="50" height="50"/></td>

            {{-- <td>{{ $carimage->images }}</td> --}}
                <td width="120">
                    {!! Form::open(['route' => ['carimages.destroy', $carimage->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('carimages.show', [$carimage->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('carimages.edit', [$carimage->id]) }}"
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
