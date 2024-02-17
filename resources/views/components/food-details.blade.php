<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
    <div class="flex">
        <p>{{$slot}}</p>
        <div class="card-body">
            <h5 class="card-title">{{$name}}</h5>
            <p class="card-text">
            <strong>Price:</strong> {{$price}}<br>
                <strong>Description:</strong><br>
                {{$foodDesc}}
            <h4><b>Reviews</b></h4>
            <h4><b>Available Location</b></h4>
            </p>
            <p class="card-text">
                <!-- <div class="btn-group"> -->
                    {{$addTocart}}
                    {{$buyNow}}
                <!-- </div> -->
            </p>
        </div>
    </div>
</div>