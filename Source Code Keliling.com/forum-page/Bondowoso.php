<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KELILING.COM</title>
    
    <link rel = "icon" href =  "../image/skuy_travel.png"  type = "image/x-icon"> 
    <link rel="stylesheet" href="CSSforum.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

</head>
<body>
    <?php
    session_start();

    if(!isset($_SESSION['username'])){
        header("location:connect-login.php");
        exit();
    }

    
    $username = $_SESSION['username'];
    
    ?>


    <!-- Navbar Header -->
    <div id="navbar-container">
        <!-- Mavbar Logo -->
        <div class="navbar-left-container">
            <img src="./image/skuy_travel.png" alt="not found" height="50px" width="50px">
            <span class="navbar-text"><b>KELILING.COM</b></span>
        </div>
        <!-- Navbar Right -->
        <div class="navbar-right-outer">
          <div>
                <?php
                    $url = "../homepage/view/home.php?username=" . $username;
                    echo "<a class = 'home' href='$url'>Home</a>"
                ?>
              </div>
                
              <div>
                <?php
                    $url = "../about-us/main/AboutUs.php?username=" . $username;
                    echo "<a class = 'about' href='$url'>About Us</a>"
                ?>
              </div>
                
              <div>
                <?php
                    $url = "../ContactUs/contact.php?username=" . $username;
                    echo "<a class = 'contact' href='$url'>Contact</a>"
                ?>
          </div>
            
    </div>
        <div class="user">
                <?php
                  $url = "../profile/profile.php?username=" . $username;
                    echo "<a href='$url'>";
                    echo "<span>$username's Profile</span>";
                    echo "</a>";
                ?>
            </div>
      </div>

    
    
        <?php
            $url = "../itinenary/itinenary_listGalery.php?username=" . $username;
            echo "<div class='backbtn'>";
            echo "<a href='$url'>";
            echo "<span>Back</span>";
            echo "</a>";
            echo "</div>";
        ?>

        <div class="user-post">
        <span>By : </span>
        <span >bayufer1</span><br>
        <span id="demo"></span>
        </div>

    
    <div id="body-outer">
        <div id="body-upper">
    
            <div id="body-upper-container">
                <img id=jogja src="https://upload.wikimedia.org/wikipedia/commons/4/46/Monumen-gerbong-maut-bondowoso-31f73.jpg" alt="" style="width:100%;height:1000px">
                
            </div>

            <div class="text-block">
                <div class="text">
                    <h4 >2 DAYS <br>
                        TRIP <br>
                        IN<br>BONDOWOSO</h4>
                  </div>
            </div>
        </div>
            <!--  -->
        <div id="body-mid">
            <div class="mid-upper">
                <h1 class="text-mid">DAY</h1>
                <div class="number">
                    <button class="num-mid" onclick="showPanel(0,'#CACFD2')">1</button>
                    <button class="num-mid" onclick="showPanel(1,'#CACFD2')">2</button>
                </div>

                <div class="mid-content-view">
                    <div class= mid-mid>
                        <div class="mid-content">
                            <div class="list">
                            <h3 class= mid>Monumen Gerbong Maut</h3> 
                            </div>
                            <div class="list">  
                            <h3 class= mid>Jojo Resto n Coffee</h3>
                            </div>
                            <div class="list">
                            <h3 class= mid>Grand Padis Hotel</h3> 
                            </div>
                        </div>
                    </div>
        
                    <div class= mid-mid>
                        <div class="mid-content">
                            <div class="list">
                            <h3 class= mid>Museum Kereta Api Bondowoso</h3> 
                            </div>
                            <div class="list">  
                            <h3 class= mid>Taman Beringin Asri</h3>
                            </div>
                            <div class="list">
                            <h3 class= mid>Ijen View Hotel Resort & Restaurant</h3> 
                            </div>
                        </div>
                    </div>

                  
                </div>
                
                </div>
                
        </div>


        <div class = "description">
        <h3>My Experience</h3>
        <p>
            Haloww nama ku Bayu, disini aku mau sharing tentang pengalaman ku pergi ke Bondowoso buat berwisata. 
            Aku berwisata sama teman-teman kampusku kayak sekali-sekali lah kami berwisata. BTW kami ke sini naik kereta dan 
            seluruh perjalanan ke tempat wisata, kami menggunakan transportasi umum dan google maps wkwkwk. Hari Pertama, kami 
            pergi ke Monumen Gerbong Maut. Penasaran sih se maut apa monumen ini heheh. Lalu kami ke Jojo Resto n Coffee. Katanya ini terkenal sih 
            akan kopinya yang khas jadi ya nyobain aja. 
            Dan kami nginep di Grand Padis Hotel.  Di hari kedua, kami ke museum kereta api. Secara kami anak teknik mesin, 
            jadi penasaran akan museum kereta api dan gak bakal nyesel kesini dapet ilmu tambahan. 
            Lalu kami refreshing ke taman beringin asri, namanya taman ya banyak banget pepohonan nya dan bagus banget views nya. Dan terakhir, kami nginep di Hotel Ijen View. 
            Esok harinya kami langsung pulah deh ke kota kami di Jakarta. Pengalaman yang bermakna untuk kami sahabat teman se-kampus!
                    </p>
        </div> 

        <div id="body-bottom">
                <div class="container">
                <div class="mySlides">
                    <div class="numbertext">1 / 2</div>
                    <img class="img-bottom" src="https://upload.wikimedia.org/wikipedia/commons/4/46/Monumen-gerbong-maut-bondowoso-31f73.jpg" style="width:100%; height:1000px">
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 2</div>
                    <img class="img-bottom" src="data:image/jpeg;base64,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" style="width:100%; height:1000px">
                </div>

                    
                    
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                <div class="caption-container">
                    <p id="caption"></p>
                </div>

                <div class="row">
                    <div class="column">
                    <img class="demo cursor img-bottom" src="https://upload.wikimedia.org/wikipedia/commons/4/46/Monumen-gerbong-maut-bondowoso-31f73.jpg" style="width:100%; height:200px" onclick="currentSlide(1)" alt=" Monumen Gerbong Maut">
                    </div>
                    <div class="column">
                    <img class="demo cursor img-bottom" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUSEhIVFhUVFxUVFxUWFRUVFRUVFRUWFxcVFhUYHyggGB0lHRUVITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OFxAQGy0gHyUtLS0rLSsrLS0tKy0tKy0tLS0tLy0tLSstLS0tLS0tLSsrLS0tLS0tLS0tLS0tLS0tLf/AABEIAMIBAwMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAACAAEDBAUGB//EAEMQAAEDAgMDCgQCCAMJAAAAAAEAAhEDIQQSMQVBUQYTImFxgZGhscEyQtHwI1IUU2KCkpOi4TND0hUWJFRyg7LC8f/EABkBAQEBAQEBAAAAAAAAAAAAAAABAgMEBf/EACURAQACAgICAgICAwAAAAAAAAABEQISAyExUUFhE6FxgQQjQ//aAAwDAQACEQMRAD8A9CTp4ShfUfIMmTpKhk6SdAk4CUIgoGhKE6UKBoShFCUIBhDCNJUBCUIkkQEJijTIAQlHCYqgChKMhDC0gShhSEIYQAQhKkIQkKojIQkKQhCQqIyhKkIQkKgCEKkhNCIBJFCSDZhKEcJZV57daBCaFLCWVWxFCcBHCUJZQYTooShSwMJ0UJ8qWASRwmhLAwlCKE8JYjhCVKQhLUtKBCaFJlShWykZCEhSwhLUsRQmhSFqbKtWlIyEMKXKmLUspEQhhSkJiFbKREISFLCbKrZSEtTEKc0jwSNIpZSvlTZVZZQJPuhq0o0Mq7GqvlSUkJktKbWVLKpITwvNbtSLKllUkJQllIoSyqTKllS0oEJQihOAllAATwjyp8qWUjhKFLkT5FLKQ5U4apcifKlrSLKmyqcNSyKbFIMibIrGVNlTYpXLEJarJaoy1ajJKQZUJarBagLVbKQEJiFKWpi1atKQkJoUpamyq2UBjL3VnnABDR3nVRAJQsz2sdJaVUzc96irGU0JiEiO1vpHmIsFEQpi1MQtxLKDKnUkJK2lNWE8Iu5OvNbtQIShSAJQpZSOEoUmVLKraUiyog1HlT5UsoGVEGogEULNrQMqWVSQnhS1pHCUKSEoSzUEJQihKEtaAQhhSEISFbSgEIYT1ajWiXEAcSQB4lVdj1xUoU3yDLGzHEC4VSk5CEtUxCEtVtKQlqEhTZU2VatKQkJsqmyJsqtlIcqRapSEJSykRCEqUhAQrZSMoSFKQhIVtKQlJMcu8ie0JK2U1+Z4OI8x4JdIcD5K1zajeIXl2d5xU62MDXBrmmTGkGekBp96KfnW7zHbLfVcbtnlJTo44AwWtbkLjfK4xOU7huM750WmzlfhpINZgIMXDm/2Kq16dE2+h8Lp4WGzb2EdfnaJPHOwH6q5Rx1M/A+ex4f6yiay0U6rNxH2RfxB9kX6TxHgfrChSwEQVcYtu+R2g+okKanWa7RzT2EFSVpI1qlpsUaIOWZbioPUoqHNeLT9/VUdpbfw9AHnKokfKDJ7OrvXHYjlc413uw9LVjRL+MkZo3fCOOi1ESmVfDvKlSBII3HukSfNZe0+UuGo/FUDj+VkOP0HiuKrU69b/FrE2ADRoAN32AiZsqm24bfibnxKXCatLEcv5OWjRk/tO9Wt+qwsfyvxj3BmbJm3MAbH713eahwGz8mYkXLj4TZPi6Tac1dSBHcVq/ULrDPxgrPu5znHiSXHzTbN21WwrwWvyzq0glrupzd/bqkzbjSekwxxkHygKzU2eHvbU+WDHfEe6u8/K64u62Fyuo14a+KbzuJ6Dj+y72PmujXimMwTmvaKYJLpsATpfQLtuTpx1JzGZS6mYMVOiWtJAzAHpACeBCdSxONO0KEoyEJRgBCEhGUJVQBCEhGUJWkAQhIRlCVUAVXqHMS0WAsSNZ1gHdbf1hWCqmAJLASIJLjrPzG6onDQLAQmRQkqja55n5h4rmeXONeynT5nMXc4HHIC6AwaGJgEuHguJHLDHt1oeNCoPQp3cvcSPioN/gqt915oxp65m3M7We+pWd0cp3AyIGoHnZXtk4JpZle2SRJ4g7oKqcoduDEEOdRDXcQXQRusR7rO2Rji2o0DRxAI7VtmmwcDBOnZwTNwFz6LTcBE2VduIa74CDHAz6LMwsSgpUajSYe4DdDiPQq1RxuLaTFerG7puPqhDzw83fRT0Xk/f9lO1FR5QY4T+M+N0tafUKzS5WYyOnkd1OYD6QomN6/RM+rBiPAf3SbOmhS5a1w2XUKfY3O0+RVipy6JblqUHEG0CrPiC33WNzgPy/0ouaa6OiO8R7ItQtO27hJj9He135mwSO9xNu5ZL9o0+cc5tV0BrfjZEkF8glkgRxj5upWX0GC5EdhWeadMvcN2VnDXNUlLlKhfocpWCzp7bkHv1W1Q2mx4BaZlctUwbTBF47Fq4Owj3VibSYpoGr1FUa5zgtdJBJFuE9Wip4zazWPylk9YKqnalJxu1w67fVbiGew1tm0ZIzEfvfVvutzZ9QZQ3WABNtyxDjWTEv7zb1U9HaNNvE91vVYyzw8OuPByZRcRbpMNhqmYPokNe3ebw13RMddwui2BgnsqOqVHue97ACXWFiNBuXF4LlH+jkVKbGPPwkOzCxjQjfot3D8vGEhz8M4QC0hlQGZgzePynxXPbG/Lt+Pm0116n6dqUMrmGcvcIdWVm7tGkeIcpTyxwUlwe+YAjLwnjA3neukZPJPHMOhKErApcscI62dwPWx3/rK1qONY6IzX4se31C1EsTjKcoSnJTEhaZoJKEqvjogm/wAFSJa6CRBHVxVrEANBJIgXJmwTaF1lGVWwR6He8eD3BZO0+VdGkOjLid2g3G/iqOyuVjCQ0tygucS4nTO4uED95oWfy4+zSXVpKR1EhJa2hNZeQf73Ywf5v9FP/SlR5b4y8uYbn5G+y4+liXuklxndEDyhSbOxZJykAzN9DxXGnqp0m2OUtfEU+bqCmRIcCGkEEToZ6z4rCw884y3zD1VpzU2GYM7e0KxadOoqCWkcQR4rOdhm0adQhxu06xuB0jtV4ussza7/AMN3YfQrpTnDAGNd+sd/EV1mw8SHUm9LMR8V5M31XBtuug2Hieba7eSRA3ncsRlHy3lHTrmOsq216xbSc5tiIjvITUK0tHd3Krt2p+C7u/8AIK9SzDNw21ahe0OIgkTYWE3uutAFvvcuK2XTpG7yQdLRbg6N++1l15qjMG8ZM9Qj6rEZRMzDeWMxESmcyVy1TaVQVXfh8G/NoHOg+ZXRYgki0ffBZtJ34rpj4G6n9p+krdJC2QAFLh6g4qKq6yVKoAJMADqURjbbd0rCbGdbD7C58V4NiT5BdNtNt3yYlkXtfpLAcwZtwHE6arnlnES3SSq8iCJ0lV6eLdIkjwWsKYLC2YgRME7jEcdFlYzAub046BOt7X0PBc45Ium2gKrADOaxiw8Or7CsmpDd4kt67HNHAHtB7lDtIxTdb8l/3k+0JyMjTLT9XD6LrEQm0+2jRaGPAqVNbhtyL8Sjqn8VzfwgBEFxIGk6AG9+CztofFTP7FPzlVdsO/4h37h/paVqq8JMzl5dtsIBtRjn821rXDpNqNtB1gkO8F3+KcKrC2jiaQLh8WcSOwC4K8u2Z0hnHzDwuJCg2ZiXvqPa9oyjNBgT0XgX8/NZ2+0jGJemNwGIp3bUbU4jnM09z/ZWqWLrxfCz1jOPqvM8LjGseQ8Nc2T0S7KQJOhHuCuhwfKBlJk0qdSmSYkVGu3xoWaKX6XX3Da2vtM2D6TmwHiM9+kxw3ttvXK7b5Yl7S2mSwO32Lo4EiPRFtXlZXf+G6pI4OpsOoO8tN44LjMRSM3EGwkXiwjSy45Z3NRLU4V2ettHN8RBvwk77yhZjWibRLYETY26R9FTr0HizmQT0gT+Wd94iyirUKktytJsNAeKsREJrMvRMFy8DKbGuYSWtAkXmBrMpl5yXVBYmDwMz6JLe0+00FQwLY6LjB4tA8pSo4EU3Zs0js6o48SpH0yT8RE6QwAeqq1KzmEtnN2jTQ2Wu7WoXDiWnS8dRTYbENDgdwM6Klmc6SOriT8QChY93E+fWt7M6u82O6lXJBq5QNTkLjfg0fVVeVWEp02AMrZ88i9NzSDHC8hU+Rkl75GjBffc+lkfLN0ZGwDY9Izmbdvw3i8cFZykjCHLcwP1g8D7qWm7W+gJ1tKt0MJTIaXE3vYz2z4HxCkrYenHV1fF2+S45ZRbWqHBbSc1wOYxP0F+wBamP2lTqMLA43jceIWbg2MB3WNjANtxPFXqtCk4ENYZn5Rmcdd/b7JjnESTjbW2XsUGGvcGiCXVGRUJv8EZgOG9aG2mUqJY9tR7j8MODWTvJgOM7lh8l2ubXyuP+WTB1FwIMhafKTBvq5MjSQ0OJgEndGnYpjhNTbWU2jxG16bePl1fVc07KXTm3zpxKvt2BiagEUn79QRw49hRjkrigbsAiDd9MWn/AKurRddumIxaIxGbTfpfrW5sTD0y0mpmngA0wDxzSOK507Kr0mGpUhoFw4PbnaOEAzw8FtcmMSDScXPmSA2XSYaDMA3gLjO2XU+HTHGI7hmconUyXU2u6TN5scovESQ4wZ7ly9Shc5TImRMAxxIkwt/bOzX1Kz3NLYJm72CIAF5PUqp2MQbvp6RGduvcsxhquXcs+nmBF9+gsbER7LpsNsug+iecq1s+hIczJ1CCJ7brFdshw1fTH739lrbOLG0X0y5pMEiCT6jjCmkTKREq2Lwge0MzXdwkxl6RJPY0on7PpVA0GtApiCRaTJIElNskseyqHPylxa0WJIi82BA18lzVdzwSCdSR4Hgp/s8bfpcoxmIqHYbUwlFzW824dHK0yS55ANiRIAuTu3LIxuGFR5e11y1oiN4Ea93mr/J7ZJkPeKjg9v6moWiRmnOCLWF98rbZs8g2w1Wx15l+4zqXXUrl8bPRxTwRjWeEzP8ALlQ0sYOla868QbCetFha0VA7Ob6iLx32neuiGzjlObDvnrpBvrURswAywaERcAuot11N3WH0UjjymJuYtvfgjKJjCa/liVXscSHNBvEwAdIHaFdq49mWMr+O773K4zBMAu1lwSSamHuJ1FymqYOidTTEiZFWkbDqDT2KY8XJHjJvPm/x8v8An+3H7Rx785g7zEWOv0C1+TmOpmm8Pp5nMgtsD0dIMiTqrGJ2DhiLPaDrPOVHa9lOEOytmCi8lr2ukEEZaxECDuYF2xxiHhyi56VdpY4VHtOSCIa1vG5hZWLxhDi1wg7yDI8B9Vo8pKFXOKlNjokGWsqCDGvSE7ly9eo7Mc05pvIvPX1q6RPbWPLlhFQ0v0532Skso1TxKS1+OE/LLdxr8lUsAkSACTeDpMCJW+zYNE3Iqun9pvlDPdYWMFN1QuzlxJmS6TPWV1+zNs1hTHSrE75a5xPAyQVuYmItziYmVSnsKidMPVP8w+gUrOTjP+UqH+cFBWx20C6W8+RNjlLbHrgLQecW9pEV5I31HWO65duKzPXy1ceiwmyKlMnmsK5odYwXOJiY+Nx69FDtXkw+uA+oHMyyL5dDviZUeH2Zjvma49TqgPuYRP5PV3OaXCm0zMF28HNukGE2jxaV80qUOSTA0Nc9xI3iG+s+qtt5LUYiXbvyzbryyt+kAbyCeqI8lKVztunPjkxRIiDbgQPZW8HsZtIyx9Uf9xwHkVqZglzo4KdlQzcVRFNrnAuJj5nvf5OJVKriKbHfimqYA/wywTInQj3XQc51KOpTY74mNPa0H1Woy6pK7tlU8ZhnNJArGJs6owejVXo7QwtSfwSCI+KufGzQtpuEojSjT/gb9FIxrBoxo7AFbj0XPtytV7KzXMFIsiLtzvJg36uG5PsKpkBYcMXalrnU6lidbggD/wCrqsw+5TZk2+j+2HRdUIObCUgdx5seJzEo6RxGUgYai124ijRHDW11sZ/uUJIUv6L+2aW4wsy/htdNyG0xPgz7hNicJi6mWazQAILQJBnXcOC0i8Ji9SpLYLdh1mFxp1ywP1a2WtJ0mx+5WPW5IVyZ5ymbkyS6e09FdoaiE1FalLhiYbZ+JAaHEdEZbVXgQNIaWkBWf9i0yIdmN5u6b9q0MyUO4FWi1X/Z1K/R1sbm47ETcFTGjRpHG3DsViD1eIQkD8w8/oqloxh2DRrfAI2gDQAdwTOI4+X90BKupslNY8UBrHifFREoSU1hNpLFkPblcTHU4jTrBlcPtrY7uemm17muuei5xBOu6TxXbFRuCtUW492y8ODpif5Z/wBKS63IEkR0Yxw3Ux4x6BBUxrjoAPP1VDnEzqixq3ssnEunVSGu78xWe1xUmdXVNlhzidSU1lBmRBxSi0rYGifMow0nQH1Rc07eI7beqFizJB6YU+to7wfSUsg3u8AfeEB84mNRDDOLj3AfVLM38vifpCB+cTc4o0KCXnEs6iSUEhchzoZTFyAi4psxQl6E1FQZKUqM1UPOpZSfOeKEuUBqFRmollLJeEJqKqaiEuSylg1kJrKvKIFWykhqIC8ppTSllFmKRTSmzqWUWVJNzidSxoyibG/yUWZMXLRSzLODvED2S5xv5R3k/VVsyYvUFvnuAb/CD6pfpDuMdlvRVM4Tc6gtOqk7z4ocyrGqkKqCznT51W5xPmQT5ks6hCMKWDzJZ0JCjcSlqlNUIDVULgUGVBY5xCXqLKlClgy5DmSQFLEgSBUcBE08EBFMWpEoHIFlCaAhLU4AQPCFPKAuVBQo3PTOcoXOKglNRCaiizJiijNROoMqdBqc4hNQpAJ1UNnKQTpIGDU+UJdydAwCMBMnQElPUmlKUBg9SJR5k0oJS5A5yAoS4oDKY/dkMoVARKbvTSkgeyZCUkBQmtxQkoQgkzISetASgc5BIXpZ1EKgRASqHLkBPBPlQTeFA8fcpQgKYFAUJi5KUJQIkpJ0lVaBSKSSIEI0kkQIRN1SSRTuQpkkBBJiSSIJMkkgdqFySSAWISkkgScJkkDOKFOkoBCcJJIAKhd9+CSSoJnspRp98EkkULde4+yGqnSQQsHuiISSQMmcmSQASkkkiv/Z" style="width:100%; height:200px" onclick="currentSlide(2)" alt="Museum Kereta Api Bondowoso">
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="comment-container">
        <h1>Comments</h1>
        <?php
        echo "<h4>Post a Comment!</h4>";
        $url = "../itinenary/itinenary_listPHP.php?username=" . $username;

        ?>
         
        <?php
            date_default_timezone_set('Asia/Jakarta');
            include 'comment.inc.php';
            include 'connect.php';
        ?>
        
        <?php

            echo "<form method='POST' action='".set_comment($conn, $kota='Bondowoso')."'>
            <input type='hidden' name='username_forum' value='$username'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <textarea name='message' required></textarea><br>
            <button type='submit' name='comment_submit'>Comment</button>
            </form>";
        
        
            view_comment($conn, $kota = "bondowoso");
        
        ?>
    </div>





    <script>


        // day

    //    var dayIndex=1;
    //    showDays(dayIndex);

    //    function

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
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
        captionText.innerHTML = dots[slideIndex-1].alt;
        }
        </script>
      
      <script>
        var tabButtons=document.querySelectorAll(".mid-upper .number button");
        var tabPanels=document.querySelectorAll(".mid-upper  .mid-mid");
    
        function showPanel(panelIndex,colorCode) {
            tabButtons.forEach(function(node){
                node.style.backgroundColor="";
                node.style.color="";
            });
            tabButtons[panelIndex].style.backgroundColor=colorCode;
            tabPanels.forEach(function(node){
                node.style.display="none";
            });
            tabPanels[panelIndex].style.display="block";
        }
        showPanel(0,'#CACFD2');
    </script>


<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar-container");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

    var d = new Date(2020, 4, 9, 10, 33, 30, 0);
    document.getElementById("demo").innerHTML = d;


</script>

</body>
</html>