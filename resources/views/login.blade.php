<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduTrack - Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome for Eye Icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body,
        html {
            height: 100%;
        }

        .background {
            background: linear-gradient(45deg, #ff6ec7, #ff7b00, #42e695, #3bb2b8, #a1c4fd);
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: 400% 400%;
            animation: gradientAnimation 10s ease infinite;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-container h3 {
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
            color: #333;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 25px;
        }

        .form-control {
            margin-bottom: 10px;
            border-radius: 25px;
        }

        .forgot-password {
            text-align: center;
            font-size: 14px;
        }

        .forgot-password a {
            text-decoration: none;
            color: #007bff;
        }

        .input-group-append {
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="background">
        <div class="login-container">
            <h3>Login</h3>
            @if (Session::has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                    <strong>{{ Session::get('error') }}</strong>
                </div>
            @endif
            <form action="{{ route('login.store') }}" method="POST">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    @error('email')
                        <span class="text-danger mb-2">{{ $message }}</span>
                    @enderror
                </div>
                @csrf
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Password">
                        <div class="input-group-append">
                            <span class="input-group-text" id="togglePassword">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                    </div>
                    @error('password')
                        <span class="text-danger mb-2">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <div class="forgot-password">
                <a href="#" id="resetPassword">Forgot password?</a>
            </div>
        </div>


        {{-- Reset Password --}}

        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <form id="addForm" class="addForm">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Reset Form</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Row start -->
                                        <div class="row">

                                            <h3 class="text-center w-100" id="sessionHeading" style="line-height:20px;">
                                                Password Reset
                                            </h3>
                                        </div>

                                        <div class="row" style="border:0px solid #9698d6;padding:5px 5px 5px 15px;">
                                            <input type="hidden" name="id" id="subject_id">
                                            @csrf

                                            <div class="col-lg-12">
                                                <div class="m-div">
                                                    <label class="m-label bg-gradient-blue m-white">Email*</label>
                                                    <input type="email" class="form-control m-field" placeholder="Enter your email"
                                                        name="reset_email" id="reset_email">
                                                </div>
                                            </div>
                                            <span id="reset_email-error" class="text-danger error-message"></span>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                style="width:100px;padding:10px;border-radius:20px"
                                data-bs-dismiss="modal">Close</button>

                            <button type="submit" class="btn btn-warning"
                                style="width:150px;padding:10px;border-radius:20px" id="createBtn">Change Request</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Reset Password --}}
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordField = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            // Toggle password visibility
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;

            // Toggle eye icon
            this.querySelector('i').classList.toggle('fa-eye');
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });

        $(document).on("click","#resetPassword",function(){
            $("#formModal").modal("show");
        })

        $(document).off("submit","#addForm").on("submit","#addForm",function(e){
            e.preventDefault();
            let formdata=new FormData(this);
            console.log(formdata);
            $.ajax({
                url:"reset-password",
                type:"post",
                data:formdata,
                contentType:false,
                processData:false,
                success:function(response){
                    console.log(response);
                },
                error:function(xhr){
                    console.log(xhr);
                }

            })
        })
    </script>
</body>

</html>
