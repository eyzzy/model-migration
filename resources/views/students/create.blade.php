<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div class= "container my-5">
            <div class = "row">
                <div class= "col-md-6 mx-auto d-grip gap 2">
                    <div>
                    <label class= "form-label"> address ></label>
        <input type="text" name="address" class="form-control">
        <div class="form-group mb-3">
        <label class= "form-label"> phone></label>
        <input type="text" name="phone" class="form-control">
        </div>
        <div class="form-group mb-3" >
        <label class= "form-label"> province ></label>
        <input type="text" name="province" class="form-control">
        </div>
        <div class="form-group mb-3">
        <label class= "form-label"> birthday ></label>
        <input type="text" name="birthday" class="form-control">
        </div>
        <div class="form-group mb-3">
        <label class= "form-label"> zip code ></label>
        <input type="text" name="zipcode" class="form-control">
        </div>
        <div class="form-group mb-3">
            <button> class ="btn btn-primary" > Saves changes </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <form action="{{ url('students')}}" method="POST">
        @csrf
        <div class="form-group mb-3">
        <label class= "form-label"> first Name></label>
        <input type="text" name="fname" class="form-control">
</div>
<div>
<label class= "form-label"> address ></label>
        <input type="text" name="address" class="form-control">
        <div class="form-group mb-3">
        <label class= "form-label"> phone></label>
        <input type="text" name="phone" class="form-control">
        </div>
        <div class="form-group mb-3" >
        <label class= "form-label"> province ></label>
        <input type="text" name="province" class="form-control">
        </div>
        <div class="form-group mb-3">
        <label class= "form-label"> birthday ></label>
        <input type="text" name="birthday" class="form-control">
        </div>
        <div class="form-group mb-3">
        <label class= "form-label"> zip code ></label>
        <input type="text" name="zipcode" class="form-control">
        </div>
        <div class="form-group mb-3">
            <button> Saves Changes</button>
        </div>
</div>
</form>
</body>
</html>