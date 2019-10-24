<section class="gallery">
    <section class="row ml-0 mr-0">
        <section class="col-10 offset-1">
            <h1 class="text-center">Gallery</h1>
            <section class="borderGallery"></section>
            <section class="row ml-0 mr-0 mt-5">
                <section class="col-10 offset-1 mb-2">
                    <section class="row ml-0 mr-0">
                        @foreach($gallery as $item)
                            <section class="col-4 mb-2">
                                <a class="lumos-link" data-lumos="gallery1"
                                   href="{{asset('Images/gallery/'.$item->Image)}}">
                                    <img src="{{asset('Images/gallery/'.$item->Image)}}" class="img-fluid">
                                </a>
                            </section>
                        @endforeach
                    </section>
                </section>
            </section>
        </section>
    </section>
</section>
