<x-app-layout>
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="container">

                <div class="card">
                    <div class="card-header">
                        <h3>List of tasks</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="list_tasks" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Date Created</th>
                                        <th>Status</th>
                                        <th>Mark</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td>{{ $task->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $task->title }}</td>
                                        <td>{{ $task->description }}</td>
                                        <td>{{ $task->created_at }}</td>
                                        <td><div class="badge badge-success">Completed</div></td>
                                        <td>
                                            <input type="checkbox" name="" id="">
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <a href="" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    $(document).ready(function() {
        $('#list_tasks').DataTable();
    });


</script>
