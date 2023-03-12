<div class="bd-example table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tittle</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($todos as $key =>  $todo)
                <tr wire:key="todo_table_{{ $key }}">
                    <th scope="row"> {{ ($todos->currentpage() - 1) * $todos->perpage() + $key + 1 }}</th>
                    <td>{{ $todo->tittle }}</td>
                    <td>{{ $todo->description ?? '---' }}</td>
                    <td>
                        <span
                            class="badge rounded-pill bg-{{ $todo->is_completed == 0 ? 'primary' : 'success' }}">{{ $todo->is_completed == 0 ? 'Incomplete' : 'Completed' }}
                        </span>
                    </td>

                </tr>
            @empty
                <tr>
                    <td span="4">No Todos</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="float-end">
        {{ $todos->links() }}
    </div>
</div>
