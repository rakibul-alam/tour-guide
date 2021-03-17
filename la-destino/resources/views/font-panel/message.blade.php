@extends('.font-panel.common.style')
<form action="{{route('new-message')}}" method="POST">
    @csrf
    <div class="container">
        <div class="row m-3">
            <div class="col-md-2"></div>
            <label class="col-md-2 col-form-label font-weight-bold">Your Name:</label>
            <div class="col-md-6">
                <input type="text" name="full_name" placeholder="Enter your Name" class="form-control" required>
            </div>
            <div class="col-md-2"></div>
        </div>



        <div class="row m-3">
            <div class="col-md-2"></div>
            <label class="col-md-2 col-form-label font-weight-bold">Your Email:</label>
            <div class="col-md-6">
                <input type="email" name="email" placeholder="Enter your Email" class="form-control" required>
            </div>
            <div class="col-md-2"></div>
        </div>


        <div class="row m-3">
            <div class="col-md-2"></div>
            <label class="col-md-2 col-form-label font-weight-bold">Your Number:</label>
            <div class="col-md-6">
                <input type="number" name="contact" placeholder="Enter your Number" class="form-control" required>
            </div>
            <div class="col-md-2"></div>
        </div>


        <div class="row m-3">
            <div class="col-md-2"></div>
            <label class="col-md-2 col-form-label font-weight-bold">Your Subject:</label>
            <div class="col-md-6">
                <input type="text" name="subject" placeholder="Enter your Subject" class="form-control" required>
            </div>
            <div class="col-md-2"></div>
        </div>


        <div class="row m-3">
            <div class="col-md-2"></div>
            <label class="col-md-2 col-form-label font-weight-bold">Body:</label>
            <div class="col-md-6">
                <textarea rows="5" class="form-control" name="body" placeholder="Message" required></textarea>
            </div>
            <div class="col-md-2"></div>
        </div>


        {{--<div class="row m-3">--}}
            {{--<div class="col-md-2"></div>--}}
            {{--<label class="col-md-2 col-form-label font-weight-bold">Status:</label>--}}
            {{--<div class="col-md-6">--}}
                {{--<label><input type="radio" name="status"> &nbsp;Published</label>--}}
                {{--<label><input type="radio" name="status"> &nbsp; Unublished</label>--}}
            {{--</div>--}}
            {{--<div class="col-md-2"></div>--}}
        {{--</div>--}}

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <input type="submit" name="btn" class="btn btn-success" value="Submit">
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</form>
@extends('.font-panel.common.script')