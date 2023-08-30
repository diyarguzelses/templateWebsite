@extends('panel.layouts.app')
@section('content')


<form action="{{route('panel.createAbout')}}" method="POST" >
    @csrf

    <div class="row">

        <div class="col-md-6 form-group">
            <label> Image</label>
            <input type="file" name="image" class="form-control" id="image" placeholder="Your Image" required>
        </div>

        <div class="col-md-6 form-group mt-3 mt-md-0">
            <label> Job</label>
            <input type="string" class="form-control" name="job" id="job" placeholder="Your Job" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 form-group">
            <label> Date of Birth</label>
            <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Your date_of_birth" required>
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
            <label> Freelance</label>
            <input type="text" class="form-control" name="freelance" id="freelance" placeholder="Your freelance" required>
        </div>

    </div>

    <div class="row">

        <div class="col-md-6 form-group">
            <label> Phone Number</label>
            <input type="tel" name="phone" class="form-control" id="phone" placeholder="Your Phone Number" required>
        </div>



            <div class="col-md-6 form-group mt-3 mt-md-0">
                <label>City</label>
                <input type="text" name="city" class="form-control" id="city" placeholder="Your City" required>
            </div>
        </div>
            <div class="row">

                <div class="col-md-6 form-group">
                    <label> Age</label>
                    <input type="number" name="age" class="form-control" id="age" placeholder="Your Age" required>
                </div>



                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <label> Degree</label>
                        <input type="text" name="degree" class="form-control" id="degree" placeholder="Your Degree" required>
                    </div>
            </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <label> Content</label>
                <textarea class="form-control" name="content" rows="5" placeholder="content" required></textarea>
                <br>
            </div>


            <div class="col-md-6 form-group mt-3 mt-md-0">
                <label> Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
            </div>
        </div>


    <div class="row ">

        <button type="submit" class="btn btn-success">Submit</button>
    </div>

</form>
@endsection
