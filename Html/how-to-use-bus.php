<?php include("../assets/php/header-nav.html");?>




   
<section>
   <div class="your-guide-slider">
        <div class="slide">
            <img src="../img/bus-1.jpg" alt="Image 1" class="slider-image">
        </div>
        <div class="your-guide-slide">
            <img src="../img/bus-2.jpg" alt="Image 2" class="slider-image">
        </div>
        <div class="slide">
            <img src="../img/bus-3.jpg" alt="Image 3" class="slider-image">
        </div>

        <div class="slide">
            <img src="../img/bus-4.jpg" alt="Image 3" class="slider-image">
        </div>
        <button class="your-guide-prev" onclick="changeSlide(-1)">❮</button>
        <button class="your-guide-next" onclick="changeSlide(1)">❯</button>
    </div>

    <div id="modal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modal-img">
    </div>


<div class="bus-description">

    <h1> Pubic bus in Kyoto</h1>
<p>Navigating Kyoto's bus system can be overwhelming at first glance, but once you become accustomed to it, city buses are efficient and convenient vehicles to explore this historic city filled with myriad temples, shrines, and cultural landmarks. To ride the bus in Kyoto, it is highly recommended to use Google Maps. You may also get and use a bus map, available at most hotels, tourist information centers, and major bus stops. Understanding the route numbers, destinations, and schedules is key, as is ensuring you have the correct fare ready (exact change or IC card). Once on board, the clear signage and announcements in English and Japanese make it easy to follow your route, ensuring you arrive smoothly at your chosen destination.</p>
</div>

</section>

    <?php include("../assets/php/footer.html");?>
<script>
let slideIndex = 0;

document.addEventListener('DOMContentLoaded', function () {
    showSlides(slideIndex);

    const modal = document.getElementById("modal");
    const modalImg = document.getElementById("modal-img");
    const closeModal = document.getElementsByClassName("close")[0];

    document.querySelectorAll('.slider-image').forEach(item => {
        item.addEventListener('click', function () {
            modal.style.display = "flex";
            modalImg.src = this.src;
        });
    });

    closeModal.addEventListener('click', function () {
        modal.style.display = "none";
    });

    modal.addEventListener('click', function (e) {
        if (e.target !== modalImg) {
            modal.style.display = "none";
        }
    });
});

function changeSlide(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    let i;
    const slides = document.getElementsByClassName("slide");
    if (n >= slides.length) {
        slideIndex = 0;
    }
    if (n < 0) {
        slideIndex = slides.length - 1;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex].style.display = "block";
}
  


</script>

