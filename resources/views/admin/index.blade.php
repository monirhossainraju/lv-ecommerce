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


                  @include('admin.content')

                  
                </div>
              </div>
            </section>
            




            @include('admin.footer')
          </div>
        </div>

        @include('admin.js')
      </body>
    </html>
