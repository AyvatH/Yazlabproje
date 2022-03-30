<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Contact Form</title>
  </head>
  <body>
    <div class="container mt-4">
        <h2>Contact Us</h2>
        <form action="{{route('send.email')}}" method="post">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">Your name:</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name">
              </div>
            </div>

            <div class="col-md-6">
              <label for="email">Email address:</label>
              <input type="email" name="email" class="form-control" placeholder="Enter your email">
            </div>

            <div class="form-group my-2">
              <label for="message">Your message</label>
              <textarea name="message" rows="5" cols="30" placeholder="Enter your message"></textarea>
            </div>
            <input type="submit" value="Send Message" class="btn btn-primary">
          </div>
        </form>
    </div>
  </body>
</html>
