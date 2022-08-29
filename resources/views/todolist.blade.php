<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <div class="row my-5">
        <div class="col-md-12 col-lg-12 my-5">
            <div class="container border border-info m-l-3 m-r-3 my-5">
                <h3 class="text-success text-center my-2 ">Todo List</h3>
                <div class="row">
                    <div class="col-md-12 col-lg-12 my-2">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 "></div>
                            <div class="col-md-6 col-lg-6 d-flex justify-content-center my-5">
                                <form action="{{route('list.create')}}" method="get">
                                    <input type="text" name="task" id="task" placeholder="Enter your Task">
                                    <button type="submit" class="btn btn-success btn-sm m-l-3">Create Task</button>
                                </form>
                            </div>
                            <div class="col-md-3 col-lg-3 "></div>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <!-- Todo List -->
                    <div class="col-md-4 col-lg-4">
                        <div class="card text-center">
                            <div class="card-header">Todo List</div>
                            <div class="card-body">
                                @foreach($todolist as $key=>$list)
                                <form action="{{route('list.update', $list->id)}}" method="get">
                                    <span>{{$key+1}}.  {{$list->task}} </span>
                                    <select name="process" class="form-select" aria-label="">
                                        <option selected disabled>Progress || Done</option>
                                        <option value="inprogress">In progress</option>
                                        <option value="done">Done</option>
                                    </select>
                                    <button type="submit" class="btn btn-sm">Move</button>
                                </form>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- In Progress List -->
                    <div class="col-md-4 col-lg-4">
                        <div class="card text-center">
                            <div class="card-header">Inprogress List</div>
                            <div class="card-body">
                                @foreach($inprogresslist as $key=>$list)
                                <form action="{{route('progress.update', $list->id)}}" method="get">
                                    <span>{{$key+1}}.  {{$list->task}} </span>
                                    <select name="process" class="form-select" aria-label="">
                                        <option selected disabled>Process</option>
                                        <option value="waiting">Todo List</option>
                                        <option value="done">Done</option>
                                    </select>
                                    <button type="submit" class="btn btn-sm">Move</button>
                                </form>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Done List -->
                    <div class="col-md-4 col-lg-4">
                        <div class="card text-center">
                            <div class="card-header">Done List</div>
                            <div class="card-body">
                            @foreach($donelist as $key=>$list)
                                <form action="{{route('done.update', $list->id)}}" method="get">
                                    <span>{{$key+1}}.  {{$list->task}} </span>
                                    <select name="process" class="form-select" aria-label="">
                                        <option selected disabled>Inprogress || Todo List</option>
                                        <option value="inprogress">In progress</option>
                                        <option value="waiting">Todo List</option>
                                    </select>
                                    <button type="submit" class="btn btn-sm">Move</button>
                                </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
