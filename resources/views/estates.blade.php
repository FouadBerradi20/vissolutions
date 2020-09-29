<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">




    </head>
    <body>




<div class="container my-5">
    <div class="row">
        <div class="col-6 offset-3">


    <form method="post" action="/updateestate">

        @csrf
        <div class="form-group">
            <label for="username">username</label>
            <input type="text"   value="{{$data['user']->name}}" class="form-control" id="username" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="officename">officename</label>
            <input type="text"  value="{{$data['user']->officeName}}" class="form-control" id="officename" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="estateid">estateid </label>
            <input type="text" value="{{$data['estate']->id}}" class="form-control" id="estateid" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">estatename </label>
            <input type="text" value="{{$data['estate']->name}}" class="form-control" id="estatename" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">estateadress </label>
            <input type="text" value="{{$data['estate']->address}}" class="form-control" id="estateadress" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">estatezip   </label>
            <input type="text" value="{{$data['estate']->zip}}" class="form-control" id="estatezip" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">estatecity  </label>
            <input type="text" value="{{$data['estate']->city}}" class="form-control" id="estatecity" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">epc</label>
            <input type="number" name="epc" class="form-control" id="epc" aria-describedby="emailHelp">
        </div>

        <div class="form-group">

            <input hidden type="text" name="token" value="{{$data['token']}}" class="form-control"  aria-describedby="emailHelp">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
