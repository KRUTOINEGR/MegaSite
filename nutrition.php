<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тренувальні програми - FITZONE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #FFD700;
            --primary-dark: #FFC107;
            --dark: #111111;
            --dark-light: #1a1a1a;
            --gray: #cccccc;
            --light: #ffffff;
            --border-radius: 16px;
            --transition: all 0.3s ease;
        }

 

      html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            max-width: 100%;
            height: 100%;
            font-family: 'Montserrat', sans-serif;
            scroll-behavior: smooth;
        }

        body {
            background-color: #111111;
            color: #fff;
            overflow-x: hidden;
            padding-top: 70px;
        }

        .header {
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            background-color: rgba(0, 0, 0, 0.95);
        }

        .top-bar {
            display: flex;
            background-color: #000000;
            width: 100%;
            height: 40px;
            justify-content: space-between;
            align-items: center;
            color: orange;
            font-family: 'Montserrat', sans-serif;
            border-bottom: 1px solid #333;
            padding: 0 8%;
            font-size: 14px;
        }

        .top-contact {
            display: flex;
            align-items: center;
            gap: 20px;
        }


        .navbar {
            width: 100%;
            padding: 0;
            margin: 0;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 8%;
            height: 70px;
            position: relative;
        }

        .logo {
            flex-shrink: 0;
        }

        .logo a {
            font-size: 28px;
            font-weight: 900;
            color: #fff;
            text-decoration: none;
            letter-spacing: 2px;
            display: flex;
            align-items: center;
        }

        .logo span {
            color: #FFD700;
        }

        .logo-icon {
            font-size: 32px;
            color: #FFD700;
            margin-right: 10px;
        }

        .menu {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
            align-items: center;
        }

        .menu li {
            margin: 0;
            padding: 0;
        }

        .menu li a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 24px 18px;
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
        }

        .menu li a:hover {
            color: #FFD700;
        }

        .menu li a.active {
            color: #FFD700;
        }

        .menu li a.active::after {
            content: '';
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 70%;
            height: 2px;
            background-color: #FFD700;
        }

        .menu li a::after {
            content: '';
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background-color: #FFD700;
            transition: width 0.3s;
        }

        .menu li a:hover::after {
            width: 70%;
        }
        .auth-buttons {
            display: flex;
            gap: 15px;
        }

        .btn {
            padding: 12px 28px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            display: inline-block;
            font-size: 15px;
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background: var(--primary);
            color: #000;
            border: 2px solid var(--primary);
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            border-color: var(--primary-dark);
            transform: translateY(-3px);
        }

        .btn-outline {
            background: transparent;
            color: var(--light);
            border: 2px solid var(--light);
        }

        .btn-outline:hover {
            background: var(--light);
            color: #000;
            transform: translateY(-3px);
        }

        .btn-small {
            padding: 8px 20px;
            font-size: 14px;
        }

        .btn-filter {
            display: inline-block;
            margin: 5px;
            padding: 8px 16px;
            background: var(--dark-light);
            color: var(--light);
            border: 1px solid #333;
            border-radius: 20px;
            text-decoration: none;
            transition: var(--transition);
        }

        .btn-filter:hover, .btn-filter.active {
            background: var(--primary);
            color: #000;
            border-color: var(--primary);
        }

        /* Hero Section */
        .hero {
            padding: 160px 0 100px;
            text-align: center;
            background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
        }

        .hero h1 {
            font-size: 64px;
            font-weight: 900;
            text-transform: uppercase;
            line-height: 1.1;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: var(--primary);
        }

        .hero p {
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto 40px;
            color: var(--gray);
        }

        /* Filters Section */
        .filters-section {
            padding: 60px 0 30px;
            background-color: var(--dark);
        }

        .filters-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
            margin-bottom: 40px;
        }

        .filter-group {
            flex: 1;
            min-width: 250px;
        }

        .filter-group h3 {
            font-size: 18px;
            margin-bottom: 15px;
            color: var(--primary);
        }

        .filter-tabs {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .filter-form {
            background: var(--dark-light);
            padding: 20px;
            border-radius: var(--border-radius);
            margin-bottom: 30px;
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-bottom: 20px;
        }

        .form-group {
            flex: 1;
            min-width: 200px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            color: var(--primary);
            font-weight: 600;
        }

        .checkbox-group {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .checkbox-item input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: var(--primary);
        }

        .radio-group {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .radio-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .radio-item input[type="radio"] {
            width: 18px;
            height: 18px;
            accent-color: var(--primary);
        }

        .form-actions {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        /* Programs Grid */
        .programs-section {
            padding: 60px 0 100px;
        }

        .programs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }

        .program-card {
            background: var(--dark-light);
            border-radius: var(--border-radius);
            overflow: hidden;
            transition: var(--transition);
            border: 1px solid transparent;
        }

        .program-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            box-shadow: 0 20px 40px rgba(255, 215, 0, 0.1);
        }

        .program-header {
            padding: 25px 25px 15px;
        }

        .program-type {
            display: inline-block;
            padding: 5px 15px;
            background: rgba(255, 215, 0, 0.1);
            color: var(--primary);
            border-radius: 30px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .program-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--light);
        }

        .program-price {
            font-size: 28px;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .program-price.free {
            color: #4CAF50;
        }

        .program-price .period {
            font-size: 14px;
            color: var(--gray);
            font-weight: 400;
        }

        .program-body {
            padding: 0 25px 25px;
        }

        .program-description {
            color: var(--gray);
            line-height: 1.6;
            margin-bottom: 25px;
            min-height: 120px;
        }

        .program-features {
            list-style: none;
            margin-bottom: 25px;
        }

        .program-features li {
            padding: 8px 0;
            border-bottom: 1px solid rgba(255,255,255,0.05);
            color: var(--light);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .program-features li i {
            color: var(--primary);
        }

        .program-footer {
            padding: 0 25px 25px;
            display: flex;
            gap: 10px;
        }

   .footer {
            background: #0f0f0f;
            color: #fff;
            padding-top: 60px;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.6);
        }

        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 8% 40px;
            display: flex;
            justify-content: space-between;
            gap: 40px;
            flex-wrap: wrap;
        }

        .footer-logo h2 {
            font-size: 32px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .footer-logo span {
            color: #FFD700;
        }

        .footer-logo p {
            margin-top: 10px;
            opacity: 0.8;
            max-width: 300px;
        }

        .footer-links h3,
        .footer-contacts h3 {
            margin-bottom: 20px;
            font-size: 20px;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #fff;
            text-decoration: none;
            opacity: 0.8;
            transition: 0.3s;
        }

        .footer-links a:hover {
            opacity: 1;
            color: #FFD700;
        }

        .footer-contacts p {
            margin-bottom: 10px;
            opacity: 0.8;
            display: flex;
            align-items: center;
        }


/* ===== PREMIUM FILTER BLOCK FITZONE ===== */

.filter-form {
    background: linear-gradient(145deg, #181818, #111);
    padding: 40px;
    border-radius: 24px;
    border: 1px solid rgba(255, 215, 0, 0.15);
    box-shadow: 
        0 25px 60px rgba(0,0,0,0.7),
        inset 0 0 40px rgba(255,215,0,0.03);
    position: relative;
    overflow: hidden;
    backdrop-filter: blur(8px);
}

.filter-form::before {
    content: "";
    position: absolute;
    top: -40%;
    right: -40%;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(255,215,0,0.12), transparent 70%);
    pointer-events: none;
}

/* ===== GRID ===== */

.form-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 40px;
}

/* ===== GROUP TITLE ===== */

.form-group label:first-child {
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    color: #FFD700;
    margin-bottom: 18px;
    display: block;
    font-weight: 700;
}

/* ===== RADIO + CHECKBOX STYLING ===== */

.radio-group,
.checkbox-group {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
}

.radio-item,
.checkbox-item {
    position: relative;
}

.radio-item input,
.checkbox-item input {
    display: none;
}

/* Кастомні кнопки */
.radio-item label,
.checkbox-item label {
    padding: 10px 18px;
    border-radius: 30px;
    border: 1px solid #333;
    background: #1f1f1f;
    color: #ccc;
    cursor: pointer;
    transition: 0.3s ease;
    font-size: 14px;
    font-weight: 500;
}

/* Hover */
.radio-item label:hover,
.checkbox-item label:hover {
    border-color: #FFD700;
    color: #FFD700;
}

/* Active state */
.radio-item input:checked + label,
.checkbox-item input:checked + label {
    background: linear-gradient(135deg, #FFD700, #FFC107);
    color: #000;
    border-color: #FFD700;
    box-shadow: 0 0 15px rgba(255,215,0,0.4);
}

/* ===== BUTTONS ===== */

.form-actions {
    margin-top: 30px;
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.form-actions .btn-primary {
    background: linear-gradient(135deg, #FFD700, #FFC107);
    box-shadow: 0 10px 25px rgba(255,215,0,0.35);
}

.form-actions .btn-primary:hover {
    transform: translateY(-4px);
    box-shadow: 0 15px 35px rgba(255,215,0,0.5);
}

.form-actions .btn-outline {
    border: 2px solid #444;
}

.form-actions .btn-outline:hover {
    border-color: #FFD700;
    color: #FFD700;
}
        @media (max-width: 1200px) {
            .container {
                padding: 0 5%;
            }
            
            .hero h1 {
                font-size: 54px;
            }
        }

        @media (max-width: 992px) {
            .menu {
                display: none;
            }
            
            .hero h1 {
                font-size: 48px;
            }
            
            .filters-container {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .hero {
                padding: 140px 0 60px;
            }
            
            .hero h1 {
                font-size: 36px;
            }
            
            .hero p {
                font-size: 16px;
            }
            
            .programs-grid {
                grid-template-columns: 1fr;
            }
            
            .auth-buttons {
                display: none;
            }
            
            .form-row {
                flex-direction: column;
                gap: 15px;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 32px;
            }
            
            .top-bar {
                flex-direction: column;
                height: auto;
                padding: 10px;
                text-align: center;
            }
            
            .top-contact {
                flex-direction: column;
                gap: 5px;
            }
            
            .program-footer {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
                text-align: center;
            }
        }

        .reveal {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.9s cubic-bezier(.16,1,.3,1),
                transform 0.9s cubic-bezier(.16,1,.3,1);
}

.reveal.active {
    opacity: 1;
    transform: translateY(0);
}

/* Stagger effect for cards */
.program-card {
    opacity: 0;
    transform: translateY(50px) scale(0.98);
    transition: all 0.8s cubic-bezier(.16,1,.3,1);
}

.program-card.active {
    opacity: 1;
    transform: translateY(0) scale(1);
}

/* Hero animation */
.hero .container {
    opacity: 0;
    transform: translateY(30px);
    animation: heroFadeUp 1.2s ease forwards;
    animation-delay: 0.3s;
}

@keyframes heroFadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Filter glow on appear */
.filter-form.reveal.active {
    box-shadow: 
        0 30px 70px rgba(0,0,0,0.8),
        0 0 40px rgba(255,215,0,0.15);
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
    <div class="container">
        <h1>ПЛАНИ <span>ХАРЧУВАННЯ</span></h1>
        <p>Правильне харчування — основа вашого результату. Оберіть план відповідно до ваших цілей.</p>
        <a href="#plans" class="btn btn-primary">Переглянути плани</a>
    </div>
</section>

    <!-- PHP Data and Filtering -->
    <?php
   $plans = [
    [
        'id' => 1,
        'type' => 'weight-loss',
        'title' => 'Легке схуднення',
        'description' => 'Збалансований дефіцит калорій без шкоди для здоров’я.',
        'calories' => 1600,
        'price' => 0,
        'is_free' => true,
        'features' => [
            '7-денний раціон',
            'Підрахунок калорій',
            'Баланс БЖВ',
            'Список продуктів'
        ]
    ],
    [
        'id' => 2,
        'type' => 'mass-gain',
        'title' => 'Набір маси PRO',
        'description' => 'Висококалорійний раціон для росту м’язової маси.',
        'calories' => 3200,
        'price' => 599,
        'is_free' => false,
        'features' => [
            '4-5 прийомів їжі',
            'Високий білок',
            'Розрахунок макро',
            'PDF-план'
        ]
    ],
    [
        'id' => 3,
        'type' => 'maintenance',
        'title' => 'Фітнес баланс',
        'description' => 'Підтримка стабільної форми та енергії.',
        'calories' => 2200,
        'price' => 299,
        'is_free' => false,
        'features' => [
            'Збалансований раціон',
            'Контроль ваги',
            'Поради по водному режиму'
        ]
    ],
    [
        'id' => 4,
        'type' => 'vegetarian',
        'title' => 'Вегетаріанський план',
        'description' => 'Повноцінний рослинний раціон.',
        'calories' => 2000,
        'price' => 0,
        'is_free' => true,
        'features' => [
            'Рослинний білок',
            'Джерела омега-3',
            'План на 5 днів'
        ]
    ],
     [
        'id' => 4,
        'type' => 'balanced',
        'title' => 'Збалансований план',
        'description' => 'Повноцінний рослинний раціон.',
        'calories' => 2000,
        'price' => 22,
        'is_free' => false,
        'features' => [
            'Рослинний білок',
            'Джерела омега-3',
            'План на 5 днів'
        ]
    ]
];

  // Отримання параметрів
$filter_type = isset($_GET['type']) ? $_GET['type'] : 'all';
$sort_by = isset($_GET['sort']) ? $_GET['sort'] : 'default';
$show_free = isset($_GET['free']) ? true : false;
$show_paid = isset($_GET['paid']) ? true : false;

if (!$show_free && !$show_paid) {
    $show_free = true;
    $show_paid = true;
}

$filtered_programs = [];

foreach ($plans as $plan) {
    if ($filter_type == 'all' || $plan['type'] == $filter_type) {
        $filtered_programs[] = $plan;
    }
}

$final_programs = [];

foreach ($filtered_programs as $plan) {
    if (($plan['is_free'] && $show_free) || (!$plan['is_free'] && $show_paid)) {
        $final_programs[] = $plan;
    
}
if ($sort_by == 'price-asc') {
    usort($final_programs, 'sort_programs_price_asc');
} elseif ($sort_by == 'price-desc') {
    usort($final_programs, 'sort_programs_price_desc');
}
    }
// Оголошення функції сортування
function sort_programs_price_asc($a, $b) {
    if ($a['price'] == $b['price']) {
        return 0;
    }
    return ($a['price'] < $b['price']) ? -1 : 1;
}

function sort_programs_price_desc($a, $b) {
    if ($a['price'] == $b['price']) {
        return 0;
    }
    return ($a['price'] > $b['price']) ? -1 : 1;
}

function get_type_name($type) {
    $types = [
        'weight-loss' => 'Для схуднення',
        'mass-gain' => 'Для набору маси',
        'maintenance' => 'Підтримка форми',
        'vegetarian' => 'Вегетаріанський',
        'drying'=>'Cушка',
        'balanced'=>'Збалансований'
    ];
    return isset($types[$type]) ? $types[$type] : $type;
}
    ?>


    <section class="filters-section" id="filters">
        <div class="container">
            <div class="filter-form">

                <form method="GET" action="">
                    <div class="form-row">
                        <div class="form-group">
                            <label>Тип плану:</label>
                            <div class="radio-group">
                                <div class="radio-item">
                                    <input type="radio" id="type-all" name="type" value="all" <?php echo ($filter_type == 'all') ? 'checked' : ''; ?>>
                                    <label for="type-all">Всі</label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" id="type-vegetarian" name="type" value="vegetarian" <?php echo ($filter_type == 'vegetarian') ? 'checked' : ''; ?>>
                                    <label for="type-vegetarian">Для вегегетаріанців</label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" id="type-weight-loss" name="type" value="weight-loss" <?php echo ($filter_type == 'weight-loss') ? 'checked' : ''; ?>>
                                    <label for="type-weight-loss">Для схуднення</label>
                                </div>
                                 <div class="radio-item">
                                    <input type="radio" id="type-drying" name="type" value="drying" <?php echo ($filter_type == 'drying') ? 'checked' : ''; ?>>
                                    <label for="type-drying">Сушка</label>
                                </div>
                                 <div class="radio-item">
                                    <input type="radio" id="type-balanced" name="type" value="balanced" <?php echo ($filter_type == 'balanced') ? 'checked' : ''; ?>>
                                    <label for="type-balanced">Збалансований</label>
                                </div>
                               
                                <div class="radio-item">
                                    <input type="radio" id="type-mass-gain" name="type" value="mass-gain" <?php echo ($filter_type == 'mass-gain') ? 'checked' : ''; ?>>
                                    <label for="type-mass-gain">Для набору маси</label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" id="type-maintenance" name="type" value="maintenance" <?php echo ($filter_type == 'maintenance') ? 'checked' : ''; ?>>
                                    <label for="type-maintenance">Для підтримки форми</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Тип програми:</label>
                            <div class="checkbox-group">
                                <div class="checkbox-item">
                                    <input type="checkbox" id="free" name="free" value="1" <?php echo $show_free ? 'checked' : ''; ?>>
                                    <label for="free">Безкоштовні програми</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="paid" name="paid" value="1" <?php echo $show_paid ? 'checked' : ''; ?>>
                                    <label for="paid">Платні програми</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Сортування за ціною:</label>
                            <div class="radio-group">
                                <div class="radio-item">
                                    <input type="radio" id="sort-default" name="sort" value="default" <?php echo ($sort_by == 'default') ? 'checked' : ''; ?>>
                                    <label for="sort-default">За замовчуванням</label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" id="sort-price-asc" name="sort" value="price-asc" <?php echo ($sort_by == 'price-asc') ? 'checked' : ''; ?>>
                                    <label for="sort-price-asc">Від дешевих</label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" id="sort-price-desc" name="sort" value="price-desc" <?php echo ($sort_by == 'price-desc') ? 'checked' : ''; ?>>
                                    <label for="sort-price-desc">Від дорогих</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-filter"></i> Застосувати фільтри
                        </button>
                        <a href="?" class="btn btn-outline">Скинути фільтри</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="programs-section" id="programs">
        <div class="container">
            <?php if (count($final_programs) > 0): ?>
                <div class="programs-grid">
                    <?php foreach ($final_programs as $program): ?>
                        <div class="program-card">
                            <div class="program-header">
                                 <div class="program-type"> <?php echo get_type_name($program['type']); ?></div>
                            <h3 class="program-title"><?php echo $program['title']; ?></h3>
                                <?php if ($program['is_free']): ?>
                                    <div class="program-price free">Безкоштовно</div>
                                <?php else: ?>
                                    <div class="program-price"><?php echo $program['price']; ?> <span class="period">грн/міс</span></div>
                                <?php endif; ?>
                            </div>
                            <div class="program-body">
                                  <p class="program-description"><?php echo $program['description']; ?></p>
                                <ul class="program-features">
                                    <?php foreach ($program['features'] as $feature): ?>
                                          <li><i class="fas fa-check"></i> <?php echo $feature; ?></li>
                                           <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="program-footer">
                                <a href="buy.php?id=<?php echo $program['id']; ?>" class="btn btn-primary btn-small">Купити</a>
                                <a href="cart.php?add=<?php echo $program['id']; ?>" class="btn btn-outline btn-small">В кошик</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div style="text-align: center; padding: 60px 20px;">
                    <h3 style="color: #FFD700; margin-bottom: 20px; font-size: 24px;">
                    <i class="fas fa-search"></i> Програм за обраними критеріями не знайдено</h3>
                    <p style="color: #ccc; margin-bottom: 30px;">Спробуйте змінити параметри фільтрації</p>
                    <a href="?" class="btn btn-primary">Показати всі програми</a>
                </div>
            <?php endif; ?>
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

    const elements = document.querySelectorAll(
        ".filter-form, .program-card"
    );

    elements.forEach(el => {
        el.classList.add("reveal");
    });

    const observer = new IntersectionObserver((entries, observer) => {
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