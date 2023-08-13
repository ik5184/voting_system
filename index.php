<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>

    .btn{
        border:2px solid red;
        display:inline-block;
        /* margin:0px auto; */
       
    }
</style>
</head>
<body class="bg-dark">
    <h1 class="text-info text-center">Voting System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Login</h2>
        <div class="container text-center">
            <form action="./actions/login.php" method='POST'>
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="username" placeholder="Enter your username" require="required">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="mobile" placeholder="Enter your mobile no." require="required">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name="password" placeholder="Enter your password" require="required">
                </div>
                <div class="mb-3 ">
                    <select  class="form-select w-50 m-auto" name="std">
                        <option value="group">Group</option>
                      <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4">Login</button>
                <p>Dont have the account?  <a href="./partial/registration.php" target="_blank">Register</a></p>
                
            </form>
    </div>
    </div>
</body>
</html>