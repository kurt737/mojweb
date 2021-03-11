<?php include 'partials/header.php'; ?>

    <main class="contact">
        <article>

            <header class="post-header">
                <div class="container">
                    <h1 class="post-title">Kontakt</h1>
                </div>
            </header>

            <section class="container contact-float-handler"> <br><br>

                <form action=""> <br>
                    <div class="form-main">
                    <h1>Napíš nám správu</h1>
                    </div>
                    <br>
                    <div class="form-main">
                        <label for="name">Meno</label><br>
                        <input type="name" id="name" name="name" value=""> <br>
                    </div>

                    <div class="form-main">
                        <label for="email">E-Mail</label><br>
                        <input type="email" id="email" name="email" value=""> <br>
                    </div>

                    <div>
                        <label for="text">Správa</label><br>
                        <textarea id="message" name="message" rows="4" cols="50"></textarea> <br><br>
                        <input class="button" type="submit" value="Odoslať">
                    </div>

                </form>


                <ul class="menu personal">
                    <li><?= $meno ?> </li>
                    <li><?= $adresa ?></li>
                    <li><?= $psc ?></li>
                    <li><?= $krajina ?></li>
                    <li><i class="fa fa-phone"></i><a href="tel:<?= $phone_contact ?>"><?= $phone_contact ?></a></li>
                    <li><i class="fa fa-envelope"></i><a href="mailto:<?= $email_contact ?>"><?= $email_contact ?></a></li>
                <br>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.4870707916275!2d17.03201571579583!3d48.1829181559807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8c99d5d0a1fd%3A0xb3121fd859bc66d!2sChrob%C3%A1kova%2C%20841%2002%20Bratislava!5e1!3m2!1ssk!2ssk!4v1615495765465!5m2!1ssk!2ssk" class="iframe" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
                </ul>
                
            </section>

        </article>
    </main>

<?php include 'partials/footer.php'; ?>