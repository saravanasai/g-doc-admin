<div class="bd-example table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($contacts as $key =>  $contact)
                <tr wire:key="todo_table_{{ $key }}">
                    <th scope="row"> {{ ($contacts->currentpage() - 1) * $contacts->perpage() + $key + 1 }}</th>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->phone_number }}</td>
                    <td>{{ $contact->email ? $contact->email : '---' }}</td>
                </tr>
            @empty
                <tr>
                    <td span="4">No Contacts</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="float-end">
        {{ $contacts->links() }}
    </div>
</div>
