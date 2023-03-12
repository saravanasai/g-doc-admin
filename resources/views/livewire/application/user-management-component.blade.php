<div class="bd-example table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($users as $key =>  $user)
                <tr wire:key="user_table_{{ $key }}">
                    <th scope="row"> {{ ($users->currentpage() - 1) * $users->perpage() + $key + 1 }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <span
                            class="badge rounded-pill bg-{{ $user->is_blocked == 0 ? 'success' : 'danger' }}">{{ $user->is_blocked == 0 ? 'Active' : 'InActive' }}</span>

                    </td>
                    <td>
                        <div class="flex align-items-center list-user-action">
                            <a wire:click="toggleStatus({{ $user->id }})"
                                class="btn btn-sm btn-icon btn-{{ $user->is_blocked == 0 ? 'danger' : 'success' }}"
                                data-bs-toggle="tooltip" data-bs-placement="top" href="#" aria-label="Add"
                                data-bs-original-title="{{ $user->is_blocked == 0 ? 'Disable' : 'Active' }}">
                                <span class="btn-inner">
                                    <svg class="icon-32" width="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M19.2013 4.32867C19.9461 4.57382 20.4493 5.26122 20.4493 6.02608L20.4997 12.6637C20.5097 14.674 19.775 16.6253 18.4263 18.1561C17.8123 18.8621 17.0172 19.4603 16.0107 19.9996L12.4377 21.9117C12.327 21.9706 12.2062 22 12.0855 22C11.9647 22 11.8338 21.9706 11.7231 21.9117L8.11991 20.0486C7.10336 19.5191 6.30824 18.9307 5.68422 18.2345C4.3154 16.7244 3.55047 14.773 3.54041 12.7628L3.50015 6.12316C3.49008 5.3583 3.99333 4.67286 4.72806 4.41693L11.3407 2.1037C11.7332 1.96543 12.166 1.96543 12.5686 2.1037L19.2013 4.32867ZM14.4205 14.0866C14.7124 13.8022 14.7124 13.3315 14.4205 13.0472L13.0617 11.7224L14.4205 10.3995C14.7124 10.1152 14.7124 9.65429 14.4205 9.35913C14.1286 9.07476 13.6455 9.07476 13.3536 9.35913L11.9949 10.6839L10.6361 9.35913C10.3442 9.07476 9.87119 9.07476 9.56924 9.35913C9.27736 9.65429 9.27736 10.1152 9.56924 10.3995L10.928 11.7224L9.56924 13.0472C9.27736 13.3315 9.27736 13.8022 9.56924 14.0866C9.72022 14.2337 9.91145 14.3013 10.1027 14.3013C10.304 14.3013 10.4952 14.2337 10.6361 14.0866L11.9949 12.7628L13.3536 14.0866C13.5046 14.2337 13.6958 14.3013 13.8871 14.3013C14.0783 14.3013 14.2796 14.2337 14.4205 14.0866Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </a>
                            <a wire:click="resetUserPassword({{ $user->id }})"
                                class="btn btn-sm btn-icon btn-warning"
                                data-bs-toggle="tooltip" data-bs-placement="top" href="#" aria-label="Add"
                                data-bs-original-title="reset password">
                                <span class="btn-inner">
                                    <svg class="icon-32" width="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M14.4773 4.44209L21.746 17.0572C21.906 17.4338 21.976 17.7399 21.996 18.058C22.036 18.8012 21.776 19.5236 21.2661 20.0795C20.7562 20.6334 20.0663 20.9604 19.3164 21H4.6789C4.36896 20.9812 4.05901 20.9108 3.76906 20.8018C2.3193 20.2172 1.61942 18.5723 2.20932 17.1464L9.52809 4.43317C9.77804 3.98628 10.158 3.60082 10.6279 3.35309C11.9877 2.59902 13.7174 3.09447 14.4773 4.44209ZM12.8675 12.7557C12.8675 13.2314 12.4776 13.6287 11.9977 13.6287C11.5178 13.6287 11.1178 13.2314 11.1178 12.7557V9.95248C11.1178 9.47585 11.5178 9.09039 11.9977 9.09039C12.4776 9.09039 12.8675 9.47585 12.8675 9.95248V12.7557ZM11.9977 17.0176C11.5178 17.0176 11.1178 16.6202 11.1178 16.1456C11.1178 15.669 11.5178 15.2726 11.9977 15.2726C12.4776 15.2726 12.8675 15.6601 12.8675 16.1347C12.8675 16.6202 12.4776 17.0176 11.9977 17.0176Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </a>

                            <a class="btn btn-sm btn-icon btn-success" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-original-title="view" href="{{ route('app.user.show', $user->id) }}"
                                aria-label="view" data-bs-original-title="view">
                                <svg class="icon-32" width="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8.09756 12C8.09756 14.1333 9.8439 15.8691 12 15.8691C14.1463 15.8691 15.8927 14.1333 15.8927 12C15.8927 9.85697 14.1463 8.12121 12 8.12121C9.8439 8.12121 8.09756 9.85697 8.09756 12ZM17.7366 6.04606C19.4439 7.36485 20.8976 9.29455 21.9415 11.7091C22.0195 11.8933 22.0195 12.1067 21.9415 12.2812C19.8537 17.1103 16.1366 20 12 20H11.9902C7.86341 20 4.14634 17.1103 2.05854 12.2812C1.98049 12.1067 1.98049 11.8933 2.05854 11.7091C4.14634 6.88 7.86341 4 11.9902 4H12C14.0683 4 16.0293 4.71758 17.7366 6.04606ZM12.0012 14.4124C13.3378 14.4124 14.4304 13.3264 14.4304 11.9979C14.4304 10.6597 13.3378 9.57362 12.0012 9.57362C11.8841 9.57362 11.767 9.58332 11.6597 9.60272C11.6207 10.6694 10.7426 11.5227 9.65971 11.5227H9.61093C9.58166 11.6779 9.56215 11.833 9.56215 11.9979C9.56215 13.3264 10.6548 14.4124 12.0012 14.4124Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td span="4">No Users</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="float-end">
        {{ $users->links() }}
    </div>
</div>
