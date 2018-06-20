<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T & R</title>
</head>
<body>
    
</body>
</html>

<main class="container">  
  <div id="login_card" class="card text-center">
    <div class="card-header">
      <h4>Inloggen</h4>
    </div>
    <div class="card-body">
      <form action="./index.php?action=login" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
          <div class="form-group">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>        
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Onthoud mijn inloggegevens</label>
        </div>
        <button type="submit" class="btn btn-primary">Verstuur!</button>
      </form>
    </div>
  </div>
</main>