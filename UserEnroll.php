<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
</head>

<style>
        
        .bg { 
          /* The image used  */
          background-image: url("images/background.jpg");
        
          /* Full height */
          height: 100%; 
        
          /* Center and scale the image nicely */
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }
        </style>

<body>
<div class="bg">

                <div class="container">
                    <h1><span class="badge badge-secondary">Join the Book Exchange</span></h1>
                    <br>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                
                                    
                                    <form action="UserInsert.php" enctype="multipart/form-data" method="post">
                                        <div class="form-group">
											   <input type="text"  placeholder="Enter your username" name="name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text"  placeholder="Enter your email" name="email">
										</div>
										<div class="form-group">
											profile pic
											<input type="file" name="picture" />
										</div>
										<div class="form-group">
											<input type="text"  placeholder="Enter your bio" name="bio">
                                        </div>
                                        <input class="btn btn-outline-success" type="submit" value="submit"/>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
</body>


</html>