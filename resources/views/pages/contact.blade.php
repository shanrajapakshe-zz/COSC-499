@extends('main')
@section('title', 'Contact')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <h1>Contact</h1>
                <p>If you are in need of assistance, please enter your name and email below and we will contact you as soon as possible to provide help</p>
                <hr>
                <form>
                    <div class="form-group">
                        <label name="email">Email:</label>
                        <input id="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="subject">Subject:</label>
                        <input id="subject" name="subject" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="message">Message:</label>
                        <textarea id="message" name="message" class="form-control">Type your question here!</textarea>
                    </div>

                    <input type="submit" value="Send Message" class="btn btn-primary">
                </form>
            </div>
        </div>
@endsection