  <div style=" margin-left:10px;padding:4px;">
        @foreach($slideItem1 as $item)
            <div class="Slides">
                   <?php $file_name = "widget-codes/".$item['file']; ?> 
                        {!!file_get_contents($file_name) !!}
            </div>

        @endforeach
    </div>

<script type="text/javascript">
var slideIndex1 = 0;
showSlides();

function showSlides() {
    var j;
    var slides = document.getElementsByClassName("Slides");
    for (j = 0; j < slides.length; j++) {
        slides[j].style.display = "none"; 
    }
    slideIndex1++;
    if (slideIndex1> slides.length) {slideIndex1 = 1}

    slides[slideIndex1-1].style.display = "initial"; 
    setTimeout(showSlides, {{$sliderTime1}}); // Change image every 20 seconds
}
</script>