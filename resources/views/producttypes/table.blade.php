<div class="table-responsive">
    <table class="table" id="producttypes-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Types</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($producttypes as $producttype)
            <tr>
                <td>{{ $producttype->name }}</td>
            <td>{{ $producttype->types }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['producttypes.destroy', $producttype->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('producttypes.show', [$producttype->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('producttypes.edit', [$producttype->id]) }}"
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
