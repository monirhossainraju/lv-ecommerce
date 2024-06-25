<!DOCTYPE html>
    <html>
      <head> 
        @include('admin.css')
      </head>
      <body>
        <header class="header">   
          @include('admin.header')
        </header>
        <div class="d-flex align-items-stretch">
          <!-- Sidebar Navigation-->
            @include('admin.sidebar')
          <!-- Sidebar Navigation end-->
          <div class="page-content">
            <div class="page-header">
              <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Dashboard</h2>
              </div>
            </div>
            <section class="no-padding-top no-padding-bottom">
              <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-6">                           
                        <div class="block">
                          <div class="title"><strong>Add Category </strong></div>
                          <div class="block-body">
                            <form action="{{url('add_category')}}" method="POST" class="form-inline" >
                                @csrf
                              <div class="form-group">
                                <input id="inlineFormInput" type="text" name="category_name" placeholder="Type Category Name Here.." class="mr-sm-3 form-control">
                              </div>
                              
                              <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-success">
                              </div>
                            </form>
                          </div>
                        </div>
                    </div>
                    
                    {{-- table --}}
                    <div class="col-lg-6">
                        <div class="block">
                          <div class="title"><strong>Category List</strong></div>
                          <div class="table-responsive"> 
                            <table class="table table-striped table-sm">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Category Name</th>
                                  <th>Action</th>
                                
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($data as $data )
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $data->category_name }}</td>
                                    <td><a href="{{ url('delete_category',$data->id) }}" onclick="confirmation(event)" class="btn btn-danger">Delete</a></td>
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
            




            @include('admin.footer')
          </div>
        </div>
        
        
        
        
        <script type="text/javascript">
          function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');  
            console.log(urlToRedirect); 
            swal({
                title: "Are you sure to Delete this post",
                text: "You will not be able to revert this!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willCancel) => {
                if (willCancel) {


                     
                    window.location.href = urlToRedirect;
                   
                }  


            });

            
        }
      </script>
        @include('admin.js')
      </body>
    </html>
