
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Головна - FITZONE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index2.css">
    <style>
.dropdown {
    position: relative;
}


.dropdown-toggle {
    position: relative;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    padding: 24px 18px;
    display: block;
    font-weight: 500;
    letter-spacing: 0.3px;
}


.dropdown:hover .dropdown-toggle {
    color: #FFD700;
}


.dropdown-toggle::after {
    content: '';
    position: absolute;
    bottom: 18px;
    left: 50%;
    transform: translateX(-50%) scaleX(0);
    width: 60%;
    height: 2px;

    opacity: 0;
    transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    border-radius: 1px;
}

.dropdown:hover .dropdown-toggle::after {
    transform: translateX(-50%) scaleX(1);
    opacity: 1;
    box-shadow: 0 0 15px rgba(255, 215, 0, 0.4);
}


.dropdown-menu {
    position: absolute;
    top: calc(100% - 5px);
    left: 50%;
    transform: translateX(-50%) translateY(-10px) scale(0.95);
    min-width: 700px;
    background: rgba(13, 13, 13, 0.98);

    border: 1px solid rgba(255, 215, 0, 0.1);
    border-radius: 16px;
    opacity: 0;
    visibility: hidden;
    transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    z-index: 1000;
    padding: 30px;
    overflow: hidden;
    pointer-events: none;
}


.dropdown:hover .dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateX(-50%) translateY(0) scale(1);
    pointer-events: auto;
}


.dropdown-menu::before {
    content: '';
    position: absolute;
    top: 0;
    left: 20%;
    right: 20%;
    height: 1px;
   
}


.dropdown-content {
    display: flex;
    gap: 35px;
    justify-content: space-between;
}

.dropdown-section {
    flex: 1;
    min-width: 0;
}


.section-header {

    margin-bottom: 20px;
    padding-bottom: 12px;
    border-bottom: 1px solid rgba(255, 215, 0, 0.15);
}

.section-header h4 {
    color: #FFD700;
    font-size: 15px;
    font-weight: 700;
    margin: 0;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.section-count {
    color: rgba(255, 215, 0, 0.5);
    font-size: 16px;
    font-weight: 500;
    background: rgba(255, 215, 0, 0.1);
    padding: 3px 8px;
    border-radius: 10px;
}


.section-links {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.section-links a {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 15px;
    color: #ddd;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    border-radius: 10px;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    border: 1px solid transparent;
}

.section-links a::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;

    transition: left 0.6s ease;
}

.section-links a:hover::before {
    left: 100%;
}


.section-links a i {
    color: rgba(255, 215, 0, 0.7);
    font-size: 16px;
    width: 24px;
    text-align: center;
    transition: all 0.3s ease;
}


.section-links a span {
    flex: 1;
    position: relative;
    transition: transform 0.3s ease;
}

.section-links a:hover {
    color: #FFD700;
    background: rgba(255, 215, 0, 0.05);
    border-color: rgba(255, 215, 0, 0.2);
    transform: translateX(5px);
}

.section-links a:hover i {
    color: #FFD700;
    transform: scale(1.2);
}

.section-links a:hover span {
    transform: translateX(5px);
}
/* Анімація появи */
.reveal {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}

.reveal.active {
    opacity: 1;
    transform: translateY(0);
}

/* Плавна поява hero */
.hero-content {
    opacity: 0;
    transform: translateY(30px);
    animation: heroFade 1.2s ease forwards;
    animation-delay: 0.3s;
}

@keyframes heroFade {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}


        </style>
</head>
<body>
 <header class="header">
        <div class="top-bar">
            <div class="top-contact">
                <span>+38 (096) 123-45-67</span>
                <span>info@fitzone.ua</span>
                <span>Пн-Нд: 9:00 - 23:00</span>
            </div>
        </div>
     <nav class="navbar">
    <div class="nav-container">
        <div class="logo">
            <a href="index2.php" class="active"><i class="logo-icon"></i> FIT<span>ZONE</span></a>
        </div>
        
        <ul class="menu">
            <li><a href="index2.php" class="active">Головна</a></li>
            <li class="dropdown">
                <a href="programs.php"> 
                    Тренування
                </a>
                <div class="dropdown-menu">
                    <div class="dropdown-content">
                        <div class="dropdown-section">
                            <div class="section-header">
                                <h4>Для початківців</h4>
                                <span class="section-count">3 програми</span>
                            </div>
                            <div class="section-links">
                                  <a href="#">
                                    <i class="fas fa-tachometer-alt"></i>
                                    <span>Витривалість</span>
                                </a>
                                <a href="#">
                                    <i class="fas fa-weight"></i>
                                    <span>Схуднення</span>
                                </a>
                                <a href="#">
                                    <i class="fas fa-dumbbell"></i>
                                    <span>Базова сила</span>
                                </a>
                            </div>
                        </div>
                        
                        <div class="dropdown-section">
                            <div class="section-header">
                                <h4>Для досвідчених</h4>
                                <span class="section-count">3 програми</span>
                            </div>
                            <div class="section-links">
                                <a href="#">
                                    <i class="fas fa-chart-line"></i>
                                    <span>Набір маси</span>
                                </a>
                                <a href="#">
                                    <i class="fas fa-fire"></i>
                                    <span>Сушка</span>
                                </a>
                                <a href="#">
                                    <i class="fas fa-bolt"></i>
                                    <span>Силові програми</span>
                                </a>
                             
                            </div>
                        </div>
                        
                        <div class="dropdown-section">
                            <div class="section-header">
                                <h4>Спеціальні</h4>
                                <span class="section-count">3 програми</span>
                            </div>
                            <div class="section-links">
                                <a href="#">
                                    <i class="fas fa-home"></i>
                                    <span>Домашні тренування</span>
                                </a>
                                <a href="#">
                                    <i class="fas fa-heartbeat"></i>
                                    <span>Кардіо</span>
                                </a>
                                <a href="#">
                                    <i class="fas fa-spa"></i>
                                    <span>Для підтримки форми</span>
                                </a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            

            <li class="dropdown">
                <a href="nutrition.php" class="dropdown-toggle">
                    Харчування
                </a>
                <div class="dropdown-menu">
                    <div class="dropdown-content">
                        <div class="dropdown-section">
                            <div class="section-header">
                                <h4>Плани Харчувань</h4>
                                <span class="section-count">3 плани</span>
                            </div>
                            <div class="section-links">
                                <a href="#">
                                    <i class="fas fa-apple-alt"></i>
                                    <span>Для схуднення</span>
                                </a>
                                <a href="#">
                                    <i class="fas fa-drumstick-bite"></i>
                                    <span>Для набору маси</span>
                                </a>
                                <a href="#">
                                    <i class="fas fa-balance-scale"></i>
                                    <span>Збалансоване</span>
                                </a>
                       
                            </div>
                        </div>
                        
                        <div class="dropdown-section">
                            <div class="section-header">
                                <h4>Спеціальні</h4>
                                <span class="section-count">3 плани</span>
                            </div>
                            <div class="section-links">
                               <a href="#">
                                    <i class="fas fa-fire"></i>
                                    <span>Сушка</span>
                                </a>
                                   <a href="#">
                                    <i class="fas fa-spa"></i>
                                    <span>Для підтримки форми</span>
                                </a>
                                  <a href="#">
                                    <i class="fas fa-leaf"></i>
                                    <span>Вегетаріанське</span>
                                </a>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            

            <li class="dropdown">
                <a href="equipment.php" class="dropdown-toggle">
                    Абонементи
                </a>
                <div class="dropdown-menu">
                    <div class="dropdown-content">
                        <div class="dropdown-section">
                            <div class="section-header">
                               
                                <span class="section-count">3 категорії</span>
                            </div>
                            <div class="section-links">
                                <a href="#">
                                    <i class="fas fa-box"></i>
                                    <span>Річний</span>
                                </a>
                                <a href="#">
                                    <i class="fas fa-box-open"></i>
                                    <span>Гостьовий</span>
                                </a>
                                <a href="#e">
                                    <i class="fas fa-biking"></i>
                                    <span>Базліміт</span>
                                </a>
                            </div>
                        </div>
                        
                        <div class="dropdown-section">
                            <div class="section-header">
                               
                                <span class="section-count">3 категорії</span>
                            </div>
                            <div class="section-links">
                                <a href="#">
                                    <i class="fas fa-tools"></i>
                                    <span>Студентський</span>
                                </a>
                                <a href="#">
                                    <i class="fas fa-weight-hanging"></i>
                                    <span>Ранковий</span>
                                </a>
                                <a href="#io">
                                    <i class="fas fa-running"></i>
                                    <span>Базовий</span>
                                </a>
                            </div>
                        </div> 
                    </div>
                </div>
            </li>
            
           <li><a href="blog.php">Блог</a></li>
            <li><a href="testplan.php">Про нас</a></li>
            <li><a href="reviews.php">Відгуки</a></li>
            <li><a href="contacts.php">Контакти</a></li>
        </ul>
        
        <div class="auth-buttons">
            <a href="form_logout.php" class="btn btn-outline">Вхід</a>
            <a href="form_singup.php" class="btn btn-primary">Реєстрація</a>
        </div>
    </div>
</nav>
    </header>



    <section class="hero">
        <img src="sitefoto.jpg" class="hero-bg">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>ПРОФЕСІЙНІ <span>ТРЕНУВАЛЬНІ</span> ПРОГРАМИ</h1>
            <p>Отримайте доступ до ефективних тренувальних програм, створених експертами. Покращуйте свою форму, здоров'я та самопочуття з нашими детальними планами тренувань та рекомендаціями.</p>
            <div class="hero-buttons">
                <a href="#programs" class="btn btn-primary">Почати тренування</a>
                <a href="#services" class="btn btn-outline">Дізнатися більше</a>
            </div>
        </div>
    </section>

    <section class="section" id="services">
        <div class="section-title">
            <h2>НАШІ <span>ПОСЛУГИ</span></h2>
            <p>Ми пропонуємо комплексний підхід до вашого фітнес-шляху через інформаційні ресурси та експертні рекомендації</p>
        </div>
        <div class="services-container">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-dumbbell"></i>
                </div>
                <div class="service-content">
                    <h3>Тренувальні програми</h3>
                    <p>Плани тренувань для різних цілей: схуднення, набір м'язової маси, покращення витривалості та здоров'я.</p>
                    <a href="programs.php" class="btn btn-outline">Переглянути програми</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-apple-alt"></i>
                </div>
                <div class="service-content">
                    <h3>Плани харчування</h3>
                    <p>Збалансовані раціони харчування з рецептами та рекомендаціями для досягнення ваших фітнес-цілей.</p>
                    <a href="nutrition.php" class="btn btn-outline">Переглянути харчування</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="service-content">
                    <h3>Навчальні матеріали</h3>
                    <p>Навчальні Статті та гайди з правильної техніки вправ, мотивації та створення здорового способу життя.</p>
                    <a href="blog.php" class="btn btn-outline">Читати блог</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section plans-section" id="programs">
        <div class="section-title">
            <h2>ТРЕНУВАЛЬНІ <span>ПРОГРАМИ</span></h2>
            <p>Обирай з різноманітних програм, розроблених для різних рівнів підготовки та цілей</p>
        </div>
        <div class="plans-container">
            <div class="plan-card">
                <img src="beginners.jpg" class="plan-img">
                <div class="plan-info">
                    <h3>Для початківців</h3>
                    <div class="level">Рівень: Початківець</div>
                    <p>Ідеальна програма для тих, хто тільки починає свій фітнес-шлях. Безпечні та ефективні вправи.</p>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> 8-тижневий план тренувань</li>
                        <li><i class="fas fa-check"></i> Детальна техніка вправ</li>
                        <li><i class="fas fa-check"></i> План харчування</li>
                        <li><i class="fas fa-check"></i> Відео-інструкції</li>
                    </ul>
                    <a href="programs.php" class="btn btn-primary">Обрати програму</a>
                </div>
            </div>

            <div class="plan-card">
                <img src="weightloss.jpg" alt="Для схуднення" class="plan-img">
                <div class="plan-info">
                    <h3>Для схуднення</h3>
                    <div class="level">Рівень: Будь-який</div>
                    <p>Спеціальна програма для ефективного спалювання жиру та формування стрункої фігури.</p>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> Кардіо та силові тренування</li>
                        <li><i class="fas fa-check"></i> Дефіцит калорій</li>
                        <li><i class="fas fa-check"></i> Прогрес тренувань</li>
                        <li><i class="fas fa-check"></i> Мотиваційні матеріали</li>
                    </ul>
                    <a href="programs.php" class="btn btn-primary">Обрати програму</a>
                </div>
            </div>

            <div class="plan-card">
                <img src="weightgain.jpg" alt="Набір маси" class="plan-img">
                <div class="plan-info">
                    <h3>Набір м'язової маси</h3>
                    <div class="level">Рівень: Досвідчений</div>
                    <p>Інтенсивна програма для набору якісної м'язової маси та підвищення силових показників.</p>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> Прогресивне навантаження</li>
                        <li><i class="fas fa-check"></i> План харчування для маси</li>
                        <li><i class="fas fa-check"></i> Відпочинок та відновлення</li>
                        <li><i class="fas fa-check"></i> Трекінг прогресу</li>
                    </ul>
                    <a href="programs.php" class="btn btn-primary">Обрати програму</a>
                </div>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="section-title">
            <h2>РЕКОМЕНДАЦІЇ <span>ПО ОБЛАДНАННЮ</span></h2>
            <p>Поради щодо вибору тренувального обладнання для домашніх занять</p>
        </div>
        <div class="equipment-container">
            <div class="equipment-card">
                <img src="homegym.jpg" alt="Домашні тренажери" class="equipment-img">
                <div class="equipment-overlay">
                    <h3>Домашні тренажери</h3>
                    <p>Огляд найкращих тренажерів для домашніх занять: бегові доріжки, еліпсоїди, велотренажери.</p>
                    <a href="equipment.php" class="btn btn-outline">Детальніше</a>
                </div>
            </div>
            <div class="equipment-card">
                <img src="freescales.jpg" alt="Вільні ваги" class="equipment-img">
                <div class="equipment-overlay">
                    <h3>Вільні ваги</h3>
                    <p>Поради щодо вибору гантелей, штанг, гир та аксесуарів для силових тренувань вдома.</p>
                    <a href="equipment.php" class="btn btn-outline">Детальніше</a>
                </div>
            </div>
            <div class="equipment-card">
                <img src="ioggym.jpg" alt="Йога та фітнес" class="equipment-img">
                <div class="equipment-overlay">
                    <h3>Йога та фітнес</h3>
                    <p>Обладнання для йоги, Pilates та функціонального тренінгу: килимки, ролики, резинки.</p>
                    <a href="equipment.php" class="btn btn-outline">Детальніше</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section benefits-section">
        <div class="section-title">
            <h2>ПЕРЕВАГИ <span>НАШОГО ПІДХОДУ</span></h2>
            <p>Чому обирають наші тренувальні програми та матеріали</p>
        </div>
        <div class="benefits-container">
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-user-check"></i>
                </div>
                <h3>Індивідуальний підхід</h3>
                <p>Програми адаптуються під ваш рівень підготовки, цілі та можливості. Можливість коригування плану.</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Доказова ефективність</h3>
                <p>Всі програми базуються на наукових дослідженнях та доказах ефективності певних методів тренувань.</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Безпека та здоров'я</h3>
                <p>Наголос на правильній техніці та безпеці тренувань для запобігання травмам та збереження здоров'я.</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <h3>Підтримка спільноти</h3>
                <p>Доступ до закритої спільноти, де можна обговорювати питання, ділитися результатами та отримувати підтримку.</p>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="cta-content">
            <h2>ПОЧНИ СВІЙ ШЛЯХ ДО ІДЕАЛЬНОЇ ФОРМИ</h2>
            <p>Приєднуйся до тисячі людей, які вже досягли своїх цілей за допомогою наших програм. Отримай доступ до професійних матеріалів вже сьогодні!</p>
            <div class="cta-buttons">
                <a href="form_singup.php" class="btn btn-primary">Зареєструватися безкоштовно</a>
                <a href="#services" class="btn btn-outline">Дізнатися більше</a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-logo">
                <h2>FIT<span>ZONE</span></h2>
                <p>Твій шлях до сили, здоров'я та впевненості в собі. Професійні тренувальні програми, плани харчування та експертні рекомендації.</p>
               <div class="footer-socials">
            <a href="#" class="youtube-link">
        <img src="youtube-icon.jpg">
          </a>
             <a href="#" class="facebook-link">
        <img src="facebook-icon.png">
       </a>
          <a href="#" class="telegram-link">
        <img src="telegram-icon.webp">
       </a>
          <a href="#" class="viber-link">
        <img src="viber-icon.png">
       </a>
          <a href="#" class="instagram-link">
        <img src="Instagram_icon.png">
       </a>
       </div>
            </div>
            <div class="footer-links">
                <h3>Навігація</h3>
                <ul>
                    <li><a href="index.html">Головна</a></li>
                    <li><a href="programs.html">Тренування</a></li>
                    <li><a href="nutrition.html">Харчування</a></li>
                    <li><a href="equipment.html">Обладнання</a></li>
                    <li><a href="blog.html">Блог</a></li>
                    <li><a href="reviews.html">Відгуки</a></li>
                </ul>
            </div>
            <div class="footer-contacts">
                <h3>Контакти</h3>
                <p><i class="fas fa-map-marker-alt"></i> Онлайн-платформа</p>
                <p><i class="fas fa-phone"></i> +38 (096) 123-45-67</p>
                <p><i class="fas fa-envelope"></i> support@fitzone.ua</p>
                <p><i class="fas fa-clock"></i> Підтримка: 9:00 - 21:00</p>
            </div>
        </div>
        <div class="footer-bottom">
            <?php
           echo" © ".date('Y')." FITZONE. Всі права захищені.";
            ?>
        </div>
        <a href="pidtrumka.php" class="support-chat">
    <img src="chat-icon.png" alt="Чат підтримки">
</a>
    </footer>

<script>
document.addEventListener("DOMContentLoaded", function () {

    // Додаємо клас reveal до всіх блоків
    const elements = document.querySelectorAll(
        ".section, .plan-card, .service-card, .equipment-card, .benefit-card, .cta-section"
    );

    elements.forEach(el => {
        el.classList.add("reveal");
    });

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("active");
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15
    });

    elements.forEach(el => {
        observer.observe(el);
    });

});
</script>
</body>
</html> 