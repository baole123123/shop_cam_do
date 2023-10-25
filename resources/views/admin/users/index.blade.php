<style>
    .table {
        width: 100%;
        border-collapse: collapse;
    }
  
    .table thead th {
        background-color: rgb(178, 140, 240);
        color:white;
        border-bottom: 2px solid #dee2e6;
        padding: 10px;
        text-align: left;
    }
    th {
      color:black;
    }
  
    .table tbody td {
        border-bottom: 1px solid #dee2e6;
        padding: 10px;
    }
  
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f1f1f1;
    }
  
    .table-success thead th {
        background-color: #d4edda;
        color: #155724;
    }
    .btn-custom {
          padding: 6px 12px;
          font-size: 14px;
          border-radius: 4px;
          text-decoration: none;
          transition: background-color 0.3s ease;
      }
  
      .btn-custom.primary {
          background-color: #007bff;
          color: black;
      }
  
      .btn-custom.secondary {
          background-color: #6c757d;
          color: #fff;
      }
  
      .btn-custom.danger {
          background-color: #dc3545;
          color: #fff;
      }
  
      .btn-custom i {
          margin-right: 5px;
      }
      .button-group {
                  display: flex;
                  flex-direction: row;
                  align-items: center;
              }
          
      .button-group .btn {
                  margin-right: 8px;
              }
      body {
          background-color: white;
      }
  </style>
  @extends('admin.layouts.master')
  @section('content')
  <div class="col-md-12 mb-5">
      <div class="card ">
          <div class="card-header">
              <h4 style="text-align: center;" class="card-title"> INDEX</h4>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <a href="{{ route('users.create') }}">
                    <button class="btn btn-success">
                        <i class='bx bx-user-plus'></i>
                      </button>
                </a>
                  <table class="table tablesorter " id="simple-table">
                     
                      <thead class=" text-primary">
                          <tr>
                              <th>
                                  STT
                              </th>
                              <th>
                                  Name
                              </th>
                              <th>
                                  Email
                              </th>
                            <th>
                                Phone
                            </th>
                            <th>
                                Address
                            </th>
                              <th class="text-center">
                                  Action
                              </th>
                          </tr>
                      </thead>
                      
                      @foreach($users as $index => $user)
                      <tbody>
                          <tr>
                              <td>
                                  {{ $index + 1 }}
                              </td>
                              <td>
                                  {{ $user->name }}
                                  
                              </td>
                              <td>
                                  {{ $user->email }}
                              </td>
                              <td>
                                {{ $user->phone}}
                              </td>
                              <td>
                                {{ $user->address}}
                              </td>
                              <td class="text-center">
                                  <div class="button-group">
                                      <a href="{{ route('users.edit', ['user' => $user->id]) }}">
                                          <button class="btn btn-primary">
                                            <i class='bx bxs-edit-alt'></i>
                                          </button>
                                      </a>
                                      <a href="{{ route('users.show', ['user' => $user->id]) }}">
                                          <button class="btn btn-secondary">
                                            <i class='bx bxs-show'></i>
                                          </button>
                                      </a>
                                      <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-danger">
                                            <i class='bx bxs-trash'></i>
                                          </button>
                                      </form>
                                  </div>
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                  {{-- <div class="pagination justify-content-center mt-4">
                      {{ $users->links() }}
                  </div> --}}
              </div>
          </div>
      </div>
  </div>
  @endsection