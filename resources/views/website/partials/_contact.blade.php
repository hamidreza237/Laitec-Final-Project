<section class="contact">
    <section class="row ml-0 mr-0">
        <section class="col-10 offset-1">
            <h1 class="text-center text-capitalize">contact us</h1>
            <section class="borderContact mb-5"></section>
            <section class="row ml-0 mr-0">
                <section class="col-8 offset-2">
                    <form action="{{route('insert.contact')}}" method="post">
                        @csrf
                        <section class="form-group">
                            <label for="fullname">fullname</label>
                            <input type="text" name="fullname" placeholder="please enter fullName?"
                                   class="form-control" id="fullname">
                        </section>
                        <section class="form-group">
                            <label for="email">email</label>
                            <input type="text" name="email" placeholder="please enter email?" class="form-control"
                                   id="email">
                        </section>
                        <section class="form-group">
                            <label for="comment">comment</label>
                            <textarea name="comment" id="comment" class="form-control"
                                      placeholder="please enter your comment? "></textarea>
                        </section>
                        <section class="form-group">
                            <input type="submit" value="submit" class="btn btn-success btn-block">
                        </section>
                        @if (session('save'))
                            <section class="alert-success col-4 offset-4">
                                <h5 class="text-center">{{session('save')}}</h5>
                            </section>
                        @endif
                    </form>
                </section>
            </section>

        </section>
    </section>
</section>
