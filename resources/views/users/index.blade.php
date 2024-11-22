@extends("layouts/layout")
@section("content")
<div class="container flex flex-col my-0 mx-auto">
    <table class="flex mx-auto container">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Actions</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td><span>{{ $user->id }}</span></td>
            <td><span>{{ $user->name }}</span></td>
            <td><span>{{ $user->email }}</span></td>
            <td><span>{{ $user->password }}</span></td>
            <td>
                <form method="post" action="{{ route('user.delete', [ $user]) }}">
                    @csrf
                    @method('delete')
                    <input class="button btn-delete" type="submit" value="Delete"/>
                </form>
        </tr>
        @endforeach
    </table>
</div>
@stop

