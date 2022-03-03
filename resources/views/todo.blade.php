<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>TO DO</title>
</head>
<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-7">
              <div class="card rounded-3">
                <div class="card-body p-4">
      
                  <h4 class="text-center my-3 pb-3">To Do App</h4>
                  
                  <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2" action="{{ url('/') }}/register" method="post">
                    @csrf
                    <div class="col-12">
                      <div class="form-outline">
                        {{-- <label class="form-label" for="form1">Enter a task here</label> --}}
                        <input type="text" id="form1" class="form-control" name="task" />
                      </div>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                  </form>
      
                  <table class="table mb-4">
                    <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Todo item</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($newTasks as $task)
                      <tr>
                        <th scope="row">{{ $task->id }}</th>
                        <td>{{ $task->task_name }}</td>
                        <td>
                          @if($task->status=='false')
                            <p style="color: rgb(206, 139, 15)">In Progress</p>
                          @else
                           <p style="color:green">Completed</p>
                          @endif
                        </td>
                        <td>
                          <a href="{{ url('/task/view/delete') }}/{{ $task->id }}">
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </a>
                        <a href="{{ url('/task/status') }}/{{ $task->id }}">
                          <button type="submit" class="btn btn-success ms-1">Finished</button>
                        </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
</body>
</html>