
<x-mainheader />
        <div class="custom-product">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    @foreach($data as $item)

                   

                    <div class="carousel-item {{$item->id==1?'active':''}} bg-secondary">
                    <a href="viewProduct/{{$item->id}}">
                        <img src="{{$item->gallery    }}" class="d-block  slider-img">
                        </a>
                        <div class="carousel-caption">
                            <h3>{{$item->name}}</h3>
                            <p>{{$item->description}}</p>

                        </div>
                    </div>
                  


                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>

            <div class="trending-wrapper mb-3">
                <h3>Trending products</h3>
                @foreach($data as $item)
                <div class="trending-item">
                <a href="viewProduct/{{$item->id}}">
                    <img src="{{$item->gallery    }}" class="d-block  trending-img">
                </a>
                    <div class="">


                    </div>
                </div>

                @endforeach


            </div>

        </div>



        <x-mainfooter />




