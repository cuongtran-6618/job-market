@extends("layouts/layout")
@section("content")
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <h1 class="text-center">Job list </h1>
    <div class="container flex flex-col my-0 mx-auto">
        <table class="flex mx-auto container">
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Customer</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
            @foreach ($jobs as $job)
            <tr>
                <td><span>{{ $job->id }}</span></td>
                <td><span>{{ $job->description }}</span></td>
                <td><span>{{ $job->customer_id }}</span></td>
                <td><span>{{ $job->category_id }}</span></td>
                <td>
                    <form method="post" action="{{ route('user.delete', [ $job]) }}">
                        @csrf
                        @method('delete')
                        <input class="button btn-delete" type="submit" value="Delete"/>
                    </form>
            </tr>
            @endforeach
        </table>
    </div>
</body>
@stop
