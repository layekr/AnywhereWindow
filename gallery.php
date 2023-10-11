<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
    <title>AnywhereWindow</title>
    
  </head>
    <body>
        <nav class = "navbar">
        <div class = "container flex">
            <a href = "home.php" class = "site-brand">
                Anywhere<span>Window</span>
            </a>
                <ul class = "navbar-nav">
                    <li class = "nav-item">
                        <a href = "home.php" class = "nav-link">Home</a>
                    </li>
                    <li class = "nav-item">
                        <a href = "gallery.php" class = "nav-link">Gallery</a>
                    </li>
                    <li class = "nav-item">
                        <a href = "packages.php" class = "nav-link">Packages</a>
                    </li>
                    <li class = "nav-item">
                        <a href = "login.php" class = "nav-link">BookNow</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <header class="flex header-sm">
            <div class="container">
                <div class="header-title">
                    <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gallery</font></font></h1>
                    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">A captivating collection of travel moments, scenic wonders, and cultural snapshots, inviting visitors to explore the world through a lens.</font><font style="vertical-align: inherit;">Curate your adventure visually, one frame at a time.</font></font></p>
                </div>
            </div>
        </header>
        <div id = "gallery" class = "py-4">
            <div class = "container">
                <div class = "gallery-row">
                    <div class = "gallery-item shadow">
                        <img src = "images/gallery-1.jpg" alt = "gallery img">
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/gallery-2.jpg" alt = "gallery img">
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/gallery-3.jpg" alt = "gallery img">
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/gallery-4.jpg" alt = "gallery img">
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/gallery-5.jpg" alt = "gallery img">
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/gallery-6.jpg" alt = "gallery img">
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/gallery-7.jpg" alt = "gallery img">
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/gallery-8.jpg" alt = "gallery img">
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/gallery-9.jpg" alt = "gallery img">
                    </div>
                </div>
            </div>
        </div>

        <div id="img-modal-box">
            <div id="img-modal">
                <button type="button" id="modal-close-btn" class="flex">
                    <i class="fas fa-times"></i>
                </button>
                <button type="button" id="prev-btn" class="flex">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button type="button" id="next-btn" class="flex">
                    <i class="fas fa-chevron-right"></i>
                </button>
                <img src="images/gallery-1.jpg">
            </div>
        </div>

        <section id = "popular" class = "py-4">
            <div class = "title-wrap">
                <span class = "sm-title">know about some cool destination</span>
                <h2 class = "lg-title">Popular Places</h2>
            </div>

            <div class = "popular-row">
                <div class = "popular-item shadow">
                    <img src = "images/popular-1.jpg" alt = "">
                    <div>
                        <span>Sarangpur, Gujarat</span>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/popular-2.jpg" alt = "">
                    <div>
                        <span>Torna, Maharashtra</span>
                        
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/popular-3.jpg" alt = "">
                    <div>
                        <span>Hampi, Karnatak</span>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/popular-4.jpg" alt = "">
                    <div>
                        <span>Quepem, Goa</span>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/popular-5.jpg" alt = "">
                    <div>
                        <span>Thanjavur, Tamil Nadu</span>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/popular-6.jpg" alt = "">
                    <div>
                        <span>Munroe Island, Kerala</span>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/popular-7.jpg" alt = "">
                    <div>
                        <span>Nelliyampathy, Kerala</span>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/popular-8.jpg" alt = "">
                    <div>
                        <span>Dona Paula, Goa</span>
                    </div>
                </div>
            </div>
        </section>
        

        <footer class="py-4">
            <div class="container footer-row">
                <div class="footer-item">
                    <a href="home.php" class="site-brand"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        About </font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Us</font></font></span>
                    </a>
                    <p class="text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Welcome to our travel sanctuary! Created by Riya Layek and Himanshu Pandey, our site is your gateway to inspiring adventures.  </font><font style="vertical-align: inherit;">We share travel tips, captivating stories, and stunning photos to fuel your wanderlust. </font><font style="vertical-align: inherit;">Join us in exploring the world's wonders. Happy travels!</font></font></p>
                </div>

                <div class="footer-item">
                    <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Follow us on:</font></font></h2>
                    <ul class="social-links">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="footer-item">
                    <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Popular Places:</font></font></h2>
                    <ul>
                        <li><a href="packages.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Goa</font></font></a></li>
                        <li><a href="packages.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kerala</font></font></a></li>
                        <li><a href="packages.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Karnataka</font></font></a></li>
                        <li><a href="packages.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tamil Nadu</font></font></a></li>
                    </ul>
                </div>

                <div class="footer-item">
                    <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contact Us!</font></font></h2>
                    <p class="text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        +91 45678 12352
                        anywherewindow@gmail.com
                        </font></font>
                    </p>
                </div>
            </div>
        </footer>

        <script>
            // image modal
            const allGalleryItem = document.querySelectorAll('.gallery-item');
            const imgModalDiv = document.getElementById('img-modal-box');
            const modalCloseBtn = document.getElementById('modal-close-btn');
            const nextBtn = document.getElementById('next-btn');
            const prevBtn = document.getElementById('prev-btn');
            let imgIndex = 0;

            allGalleryItem.forEach((galleryItem) => {
                galleryItem.addEventListener('click', () => {
                    imgModalDiv.style.display = "block";
                    let imgSrc = galleryItem.querySelector('img').src;
                    imgIndex = parseInt(imgSrc.split("-")[1].substring(0, 1));
                    showImageContent(imgIndex);
                })
            });

            nextBtn.addEventListener('click', () => {
                imgIndex++;
                if(imgIndex > allGalleryItem.length){
                    imgIndex = 1;
                }
                showImageContent(imgIndex);
            });

            prevBtn.addEventListener('click', () => {
                imgIndex--;
                if(imgIndex <= 0){
                    imgIndex = allGalleryItem.length;
                }
                showImageContent(imgIndex);
            });

            function showImageContent(index){
                imgModalDiv.querySelector('#img-modal img').src = `images/gallery-${index}.jpg`;
            }

            modalCloseBtn.addEventListener('click', () => {
                imgModalDiv.style.display = "none";
            })
        </script>
        <script src = "script.js"></script>
        
    
</body></html>