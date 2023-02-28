<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="" style="background-color:#212529;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                      <form id="formsubmit" method="POST"  action="javascript:void(0)" accept-charset="utf-8" >
                                        @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="password" name="password" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                             <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <!--<a class="small" href="password.html">Forgot Password?</a>-->
                                                <input type="submit" class="btn text-white" style="background-color:#212529;" class="form-control" id="submit" >
                                            </div> 
                                        </form>
                                    </div>
                                    <!-- <div class="card-footer text-center py-3">-->
                                    <!--    <div class="small"><a href="register.html">Need an account? Sign up!</a></div>-->
                                    <!--</div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!--<div id="layoutAuthentication_footer">-->
            <!--    <footer class="py-4 bg-light mt-auto">-->
            <!--        <div class="container-fluid px-4">-->
            <!--            <div class="d-flex align-items-center justify-content-between small">-->
            <!--                <div class="text-muted">Copyright &copy; Your Website 2022</div>-->
            <!--                <div>-->
            <!--                    <a href="#">Privacy Policy</a>-->
            <!--                    &middot;-->
            <!--                    <a href="#">Terms &amp; Conditions</a>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </footer>-->
            <!--</div>-->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('admin/js/scripts.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        
                <link rel="stylesheet" type="text/css" 
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


        <script>
              $(document).on("submit",'#formsubmit', function (e) {
        
              var formData = new FormData(this);
              console.log(formData);
        
              $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
              });
        
              $.ajax({
                  type: 'POST',
                  url: "{{ route('auth.attempt') }}",
                  data: formData,
                  cache: false,
                  contentType: false,
                  processData: false,
                  dataType: 'json',
                  success: (msg) => {
                    
                      if(msg == true){
                        toastr.options =
                        {
                          "closeButton" : true,
                          "progressBar" : true
                        }
          		          toastr.success("Done..");
          		        var url = "{{ route('dashboard.index') }}";
	                   location.href = url;
          		          
                      }else if(msg == 0){
                        toastr.options =
                        {
                          "closeButton" : true,
                          "progressBar" : true
                        }
          		          toastr.error("Invalid credentials");
                      }
                     
                  },
              });
        });
        </script>
    </body>
</html>
