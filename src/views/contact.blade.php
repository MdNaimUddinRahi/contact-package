<!doctype html>
<html lang="en">
    <head>
        <title>jobTask</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="title-bar mt-3">
                <h2>Job-Task form</h2>
            </div>
            <div class="col-8 mt-4 ">
                <form action="{{route('contact')}}" method="post">
                    @csrf 
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text"
                            class="form-control " name="name" id="name" aria-describedby="nameId" placeholder="name" required>
                        <small id="nameId" class="form-text text-muted">Enter your name</small>
                        
                    </div>
                    <div class="row">
                        <div class="col">
                            <h5>Hobby</h5>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-2">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="sports">
                                    Sports
                                </label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="reading">
                                    Reading Books
                                </label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="watching">
                                    Watching TV
                                </label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="other">
                                    Other
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <h5>Select Gender</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="gender" id="gender" value="male">
                                male
                                </label>
                            </div>
                        </div>
                        <div class="col-1">
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="gender" id="gender" value="female">
                                female
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="inputState">Location</label>
                        <select id="inputState" name="location" class="form-control" required>
                            <option selected>Select Division</option>
                            <option value="dhaka">Dhaka</option>
                            <option value="chattogram">Chattogram</option>
                            <option value="comilla">Comilla</option>
                            <option value="barisal">Barisal</option>
                            <option value="khulna">Khulna</option>
                            <option value="sylet">Sylet</option>
                            <option value="mymenshingh">Mymenshingh</option>
                        </select>
                    </div>
                    <div class="submiy-button mt-3">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>