<?php
session_start();
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Контакти - FITZONE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style/header.css">
        <link rel="stylesheet" href="style/phone_op.css">
        <link rel="stylesheet" href="style/footer.css">
            <link rel="stylesheet" href="style/contacts.css">

      
</head>
<body>
    <?php 
      $Page = 'contacts'; 
    include "header.php"; ?>
<section class="contacts-hero reveal">
    <h2>КОНТАКТНА <span>ІНФОРМАЦІЯ</span></h2>
    <p>Ми завжди на звʼязку та готові допомогти</p>
</section>

<section class="contacts-section">
    <div class="contacts-container" id="contacts-container">
        <div class="contact-box reveal">
            <h2>Звʼязок</h2>
            <p><i class="fas fa-phone"></i> +38 (096) 123-45-67</p>
            <p><i class="fas fa-envelope"></i> support@fitzone.ua</p>
            <p><i class="fas fa-map-marker-alt"></i> Онлайн-платформа FITZONE</p>
            <p>
    <i class="fas fa-map-marker-alt"></i>
    м. Одеса, вул. Потужна, 67
</p>
 </div>

        <div class="contact-box reveal">
            <h2>Графік роботи</h2>
            <p><i class="fas fa-clock"></i> Понеділок – Неділя</p>
            <p> 09:00 – 23:00</p>
            <p class="note">Підтримка працює щоденно</p>
        </div>
    
    </div>
</section>
<section class="contact-form-section reveal">
    <div class="contact-form-container">
        <h2 id="contacts">Зворотний звʼязок</h2>
        <p>Залиште свої дані — ми з вами звʼяжемося</p>
        <form action="contactsobrabotchik.php" method="POST" id="contact-form" class="contact-form">
            <input type="text" name="name" placeholder="Імʼя">
              <div class="error"><?php
              if(isset($_SESSION['errors']['name'])) 
              echo $_SESSION['errors']['name']?></div>
            <input type="text" name="surname" placeholder="Прізвище">
             <div class="error"><?php
              if(isset($_SESSION['errors']['surname'])) 
              echo $_SESSION['errors']['surname']?></div>
            <input type="tel" name="phone" placeholder="Номер телефону">
              <div class="error"><?php
              if(isset($_SESSION['errors']['phone'])) 
              echo $_SESSION['errors']['phone']?></div>
            <textarea type="text" name="zaputannya" class="zaputannya" placeholder="Ваше запитання"></textarea>
              <div class="error"><?php
              if(isset($_SESSION['errors']['zaputannya'])) 
              echo $_SESSION['errors']['zaputannya']?></div>
            <button type="submit">Надіслати</button>
              <div class="sucess"><?php
              if(isset($_SESSION['data_contact_sucess'])) 
              echo $_SESSION['data_contact_sucess'];?></div>
<?php unset($_SESSION['data_contact_sucess']);
unset($_SESSION['errors']) ?>
        </form>
    </div>
</section>

<section class="map-section">
<iframe
  src="https://www.google.com/maps?q=Odesa,Ukraine&output=embed"
  width="100%"
  height="420"
  style="border:0;"
  allowfullscreen=""
  loading="lazy"
></iframe>
</section>
    <?php include "footer.php"; ?>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const revealElements = document.querySelectorAll(
        ".reveal, .contact-box"
    );

    revealElements.forEach(el => el.classList.add("reveal"));

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("active");
                observer.unobserve(entry.target); 
            }
        });
    }, { threshold: 0.15 });

    revealElements.forEach(el => observer.observe(el));
});
</script>
<script>
const burger = document.querySelector(".burger");
const menu = document.querySelector(".menu");

burger.addEventListener("click", () => {
    menu.classList.toggle("active");
});
</script>
</body>
</html>
