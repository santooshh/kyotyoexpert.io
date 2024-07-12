
<?php include("../assets/php/header-nav.html");?>


<section>
    <div class="slideshow-container">

    <div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img class=".slideshow-container img" src="../img/sorasak.jpg">
  <!-- <div class="slide-text">Caption Text</div> -->
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img class=".slideshow-container img" src="../img/Kyotyo.jpg">
  <div class="slide-text">Kiyomizu-dera</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img class=".slideshow-container img" src="../img/bamboo-forest.jpg">
  <div class="slide-text">Bamboo-Forest</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

        <h2>Learn About Kyoto</h2>
        <div class="image-text-section">
            <img src="../img/sorasak.jpg" style="object-fit: contain;" alt="Natural Wonder">
            <div class="text">
                <h3>Know About Kyoto City</h3>
                <p>Kyoto, Japan's former imperial capital, is a city renowned for its rich cultural heritage and historical significance. It boasts over 1,600 temples, including the iconic Kinkaku-ji (Golden Pavilion) and Fushimi Inari-taisha with its thousands of torii gates. Kyoto's ancient streets, traditional wooden houses, and serene gardens reflect its past glory. The city is a UNESCO World Heritage site, showcasing landmarks like the Kiyomizu-dera and Nijo Castle. Celebrated festivals such as Gion Matsuri and Aoi Matsuri highlight its cultural vibrancy. Kyoto's blend of classical arts, tea ceremonies, and Geisha districts makes it a cornerstone of Japanese tradition and history.</p>
            </div>
        </div>

       <h1>What you need to know</h1>
    <div class="grid-container">



           <a href="how-to-manage-garbage.php" class="grid-item">
            <img src="../img/garbage-1.jpg" alt="Sample Image">
            <h1>How to manage garbage</h1>
            <div class="grid-text">Kyoto's garbage management system requires residents to segregate waste into burnable, non-burnable, and recyclable categories. Detailed guidelines and collection schedules ensure efficient disposal, promoting recycling and waste reduction. Non-compliance results in penalties, encouraging environmental sustainability.</div>
        </a>


        <a href="how-to-use-train.php" class="grid-item">
            <img src="../img/train-1.jpg" alt="Sample Image">
            <h1>How to use public train</h1>
            <div class="grid-text">
            Using public trains in Kyoto is efficient and convenient, with an extensive network covering major attractions. Trains are punctual and clean. Purchase an IC card for easy travel and transfer between lines. Schedules and signs are available in multiple languages.</div>
        </a>



           <a href="how-to-use-bus.php" class="grid-item">
            <img src="../img/slider-bus-1.jpg" alt="Sample Image">
            <h1>How to use public bus</h1>
            <div class="grid-text">In Kyoto, using public buses is easy and convenient. Board from the rear, pay with exact change, an IC card, or a day pass upon exiting at the front, and use the stop button before your destination. Multilingual route maps and announcements aid navigation.</div>
        </a>



            <a href="initial-office-work.php" class="grid-item">
            <img src="../img/government-1.jpg" alt="Sample Image">
            <h1>Administrative works</h1>
            <div class="grid-text">International students typically need to register at the local ward office, obtain an insurance card, and open a bank account upon arrival. They also require a passport, visa, admission letter, proof of financial support, and possibly a residence permit.</div>
            </a>



            <a href="japanese-culture.php" class="grid-item">
            <img src="../img/japanese-culture-1.jpg" alt="Sample Image">
            <h1>Japanese Culture</h1>
            <div class="grid-text">
            Japanese culture is intricate and unique, blending ancient traditions with modern innovation. This guide, part of our series, will introduce you to its key aspects, helping you understand and adapt to the distinctive lifestyle and customs in Japan.</div>
             </a>



            <a href=" affordable-living.php" class="grid-item">
            <img src="../img/affordable-1.jpg" alt="Sample Image">
            <h1>Affordable Living</h1>
            <div class="grid-text">
            The living costs in Kyoto city vary based on personal choices, yet students can cut expenses by making wise decisions in transportation, food purchases, and choosing affordable accommodation options.
            </div>
            </a> 

    </div>

<div class="click-here-container">
        <a href="your-guide.php" class="click-here">View More...</a>
    </div>
       
</section>
<?php include("../assets/php/footer.html");?>




<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

// Auto move slides
function autoSlides() {
  slideIndex++;
  showSlides(slideIndex);
  setTimeout(autoSlides, 8000); // Change image every 5 seconds
}

autoSlides(); // Call autoSlides to start the slideshow
</script>


 <script>
        document.addEventListener('DOMContentLoaded', function() {
            const textElements = document.querySelectorAll('.grid-item .grid-text');

            textElements.forEach(el => {
                const originalText = el.innerText;
                const words = originalText.split(' ');

                if (words.length > 50) {
                    const truncatedText = words.slice(0, 40).join(' ') + '...';
                    el.innerText = truncatedText;
                    el.title = originalText; // Show the full text on hover
                }
            });
        });
    </script>

</body>
</html>