<?php get_header(); ?>

<main id="primary" class="site-main">
    <section id="hero" class="hero-section min-h-screen pt-24 pb-16 flex items-center relative" style="background: linear-gradient(135deg, #F2FCE2 0%, #9b87f5 100%);">
        <div class="absolute inset-0 bg-grid-pattern opacity-10"></div>
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 animate-fade-in">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-4">
                        Онлайн-курс <span class="text-primary">веб-разработки</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-700 mb-8 max-w-xl">
                        Освойте современные технологии и станьте востребованным специалистом за 12 недель
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="btn btn-primary px-8 py-3 text-lg">Записаться на курс</a>
                        <a href="#program" class="btn btn-outline px-8 py-3 text-lg">Узнать программу</a>
                    </div>
                    <div class="mt-8 text-gray-600 flex items-center gap-4">
                        <div class="flex -space-x-2">
                            <?php for ($i = 1; $i <= 4; $i++) : ?>
                                <img src="https://i.pravatar.cc/100?img=<?php echo $i + 10; ?>" alt="Student" class="w-10 h-10 rounded-full border-2 border-white">
                            <?php endfor; ?>
                        </div>
                        <span>Более 1000 выпускников уже работают по специальности</span>
                    </div>
                </div>
                <div class="md:w-1/2 mt-12 md:mt-0 flex justify-center">
                    <img src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Web Development Course" class="rounded-xl shadow-2xl w-full max-w-md">
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-section py-20 bg-light">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="section-title">О нашем курсе</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Мы создали курс, который поможет вам получить необходимые знания и навыки для начала карьеры в веб-разработке
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="feature-title">Практические навыки</h3>
                    <p class="feature-desc">Более 80% времени курса посвящено реальным проектам и решению практических задач</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="feature-title">Персональный наставник</h3>
                    <p class="feature-desc">Каждому студенту выделяется опытный ментор, который всегда поможет и даст обратную связь</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="feature-title">Актуальные технологии</h3>
                    <p class="feature-desc">Учим только современным и востребованным на рынке технологиям и инструментам</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="feature-title">Гибкий график</h3>
                    <p class="feature-desc">Учитесь в удобное для вас время. Видеоуроки и материалы доступны 24/7</p>
                </div>
            </div>

            <div class="mt-16 text-center">
                <div class="stats-container">
                    <div class="flex flex-col md:flex-row gap-8 justify-center">
                        <div class="stat-item">
                            <div class="stat-value">12</div>
                            <div class="stat-label">недель обучения</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">24</div>
                            <div class="stat-label">практических задания</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">100%</div>
                            <div class="stat-label">трудоустройство</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php echo do_shortcode('[program_section]'); ?>
    
    <?php echo do_shortcode('[testimonials_section]'); ?>

    <section id="contact" class="contact-section py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="section-title">Свяжитесь с нами</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Остались вопросы? Заполните форму, и мы свяжемся с вами в ближайшее время
                </p>
            </div>

            <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="contact-form-container">
                    <?php echo do_shortcode('[contact-form-7 id="contact-form" title="Contact Form"]'); ?>
                </div>

                <div class="contact-info">
                    <div class="contact-details mb-8">
                        <h3 class="contact-subtitle">Контактная информация</h3>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <p class="contact-text">+7 (999) 123-45-67</p>
                                <p class="contact-subtext">Пн-Пт, 10:00-19:00</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <p class="contact-text">info@profkurs.ru</p>
                                <p class="contact-subtext">Свяжитесь с нами по email</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <p class="contact-text">Москва, ул. Примерная, д. 123</p>
                                <p class="contact-subtext">Офис 456, 4 этаж</p>
                            </div>
                        </div>
                    </div>

                    <div class="social-media">
                        <h3 class="contact-subtitle">Мы в социальных сетях</h3>
                        <div class="social-links">
                            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i> Facebook</a>
                            <a href="#" class="social-link"><i class="fab fa-twitter"></i> Twitter</a>
                            <a href="#" class="social-link"><i class="fab fa-instagram"></i> Instagram</a>
                            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
