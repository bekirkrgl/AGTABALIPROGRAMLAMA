 <?php get_header(); ?>

<header>
        <div class="bg-image"></div>
        <div class="content">
            <h1>S&S MOTORS</h1>
            <p>Lüksün zarafet ile buluşması</p>
            <a href="#section-a" class="btn">Daha Fazlası</a>
        </div>
    </header>

    <main>
        <section id="section-a">
            <div class="content">
                <h2>SHOWROOM</h2>
            </div>
            <div class="foto">
                <img class="foto1" src="<?php echo get_template_directory_uri(); ?>/images/2.png" width="300px" height="300px" alt="">
                <img class="foto2" src="<?php echo get_template_directory_uri(); ?>/images/3.png" width="300px" height="300px" alt="">
                <img class="foto3" src="<?php echo get_template_directory_uri(); ?>/images/1.png" width="300px" height="300px" alt="">
            </div>
        </section>

        <section id="section-b">
            <div class="hakkindafoto">
                <img class="hakkindafoto1" src="<?php echo get_template_directory_uri(); ?>/images/5.jpg" height="500rem" width="500rem" alt="">
            </div>
            <div class="hakkinda">
                <h2>Hakkımızda</h2>
                <p><b>Temelleri 1971 yılına, kurulumu 1994 yılına dayanan S&S Motors, halen Türkiye’nin En Büyük “Sadece Distribütör Çıkışlı” Premium Kullanılmış Otomobil alım-satım hizmeti veren şirketidir. S&S Motors, Etiler ve Fulya’da bulunan Showroom lokasyonları ile toplamda 3.000 m2’den fazla bir alanda, ortalama 500 araç portföyü ile hizmet vermektedir.</b></p>
                <p>Misyonumuz: kurumsal olarak Türkiye’deki Kullanılmış Premium Araç Pazarında alım-satım yaparak müşterilerimizin beklentilerini en üst düzeyde karşılamak.</p>
                <a href="https://bmwnibul.bmw.com.tr/test-surusu" class="btn" style="border-radius: 3%;">Test Sürüşü Talep Et</a>
            </div>
        </section>

        <section id="section-c">
            <section id="contact">
                <h2>Size Ulaşalım</h2>
                <form action="contact.php" method="POST">
                    <label for="name">Adınız:</label>
                    <input type="text" id="name" name="name" placeholder="Adınızı giriniz" required>

                    <label for="email">E-posta:</label>
                    <input type="email" id="email" name="email" placeholder="E-posta adresiniz" required>

                    <label for="message">Mesajınız:</label>
                    <textarea id="message" name="message" rows="4" placeholder="Mesajınızı yazınız" required></textarea>

                    <button type="submit" class="btn">Gönder</button>
                </form>
            </section>

            <div class="footer">
                <div class="kutu1">
                    <div class="adreskutu">
                        <h2>İletişim</h2>
                        <a href="https://www.google.com/maps/place/S%26S+motors/@41.0546789,28.9964283,17z/data=!3m1!4b1!4m6!3m5!1s0x14cab5becb1bb363:0x3176553494495d1!8m2!3d41.0546749!4d28.9990032!16s%2Fg%2F113fhdl39?entry=ttu&g_ep=EgoyMDI1MDExNC4wIKXMDSoASAFQAw%3D%3D">
                            <p>Teşvikiye, Hakkı Yeten Cd. No:9, 34100 Şişli/İstanbul</p>
                        </a>
                        <a href="https://www.instagram.com/ssmotors/"><img src="<?php echo get_template_directory_uri(); ?>/images/5811465 (1).png" alt=""></a>
                        <a href="tel: 444 3 477"><img src="<?php echo get_template_directory_uri(); ?>/images/icons8-phone-50.png" alt=""></a>
                    </div>
                </div>

                <div class="kutu2">
                    <table>
                        <tbody>
                            <tr class="acik">
                                <td class="gun">Pazartesi</td>
                                <td class="saat">08:30 - 18:30</td>
                            </tr>
                            <tr class="acik">
                                <td class="gun">Salı</td>
                                <td class="saat">08:30 - 18:30</td>
                            </tr>
                            <tr class="acik">
                                <td class="gun">Çarşamba</td>
                                <td class="saat">08:30 - 18:30</td>
                            </tr>
                            <tr class="acik">
                                <td class="gun">Perşembe</td>
                                <td class="saat">08:30 - 18:30</td>
                            </tr>
                            <tr class="acik">
                                <td class="gun">Cuma</td>
                                <td class="saat">08:30 - 18:30</td>
                            </tr>
                            <tr class="acik">
                                <td class="gun">Cumartesi</td>
                                <td class="saat">10:00 - 17:00</td>
                            </tr>
                            <tr class="acik">
                                <td class="gun">Pazar</td>
                                <td class="saat">10:00 - 17:00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>


<?php get_footer(); ?>


585