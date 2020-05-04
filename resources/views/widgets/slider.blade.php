  <div style=" margin-left:10px;padding:4px;">
      <!--  <span class="page-title"><center>{{$sliderName}}</center></span> -->
        @foreach($slideItem as $item)
            <div class="Slides1">
                   <?php $file_name = "widget-codes/".$item['file']; ?> 
                        {!!file_get_contents($file_name) !!}
            </div>

        @endforeach
    </div>

<script type="text/javascript">
var slideIndex = 0;
showSlides1();

function showSlides1() {
    var i;
    var slides = document.getElementsByClassName("Slides1");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}

    slides[slideIndex-1].style.display = "initial"; 
    setTimeout(showSlides1, {{$sliderTime}});
}
</script>