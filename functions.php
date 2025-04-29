<?php
/**
 * Educational Course Landing Page functions and definitions
 */

// Регистрация стилей и скриптов
function educational_course_scripts() {
    wp_enqueue_style('educational-course-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;500;700&display=swap');
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');
    wp_enqueue_script('educational-course-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'educational_course_scripts');

// Регистрация меню
function educational_course_menus() {
    register_nav_menus(array(
        'primary' => __('Основное меню', 'educational-course'),
        'footer' => __('Меню в подвале', 'educational-course'),
    ));
}
add_action('init', 'educational_course_menus');

// Поддержка логотипа
function educational_course_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'height' => 60,
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true,
    ));
}
add_action('after_setup_theme', 'educational_course_theme_support');

// Виджеты
function educational_course_widgets_init() {
    register_sidebar(array(
        'name' => __('Область подвала', 'educational-course'),
        'id' => 'footer-widget',
        'description' => __('Виджеты в подвале сайта', 'educational-course'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'educational_course_widgets_init');

// Шорткод для программы обучения
function program_section_shortcode($atts) {
    ob_start();
    ?>
    <section id="program" class="program-section py-20">
        <div class="container mx-auto px-4">
            <h2 class="section-title">Программа обучения</h2>
            <div class="program-modules">
                <div class="program-module">
                    <div class="module-header">
                        <span class="module-number">Модуль 1</span>
                        <h3 class="module-title">Основы веб-разработки</h3>
                    </div>
                    <ul class="module-topics">
                        <li>HTML5 и семантическая верстка</li>
                        <li>CSS3 и современные стили</li>
                        <li>Основы JavaScript</li>
                        <li>Работа с Git и GitHub</li>
                    </ul>
                </div>
                <div class="program-module">
                    <div class="module-header">
                        <span class="module-number">Модуль 2</span>
                        <h3 class="module-title">Фреймворки и библиотеки</h3>
                    </div>
                    <ul class="module-topics">
                        <li>React.js основы</li>
                        <li>Компоненты и пропсы</li>
                        <li>Состояние и жизненный цикл</li>
                        <li>Хуки и функциональные компоненты</li>
                    </ul>
                </div>
                <div class="program-module">
                    <div class="module-header">
                        <span class="module-number">Модуль 3</span>
                        <h3 class="module-title">Продвинутая веб-разработка</h3>
                    </div>
                    <ul class="module-topics">
                        <li>TypeScript в React</li>
                        <li>Redux и управление состоянием</li>
                        <li>Оптимизация производительности</li>
                        <li>Тестирование и деплой</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('program_section', 'program_section_shortcode');

// Шорткод для отзывов
function testimonials_section_shortcode($atts) {
    ob_start();
    ?>
    <section id="testimonials" class="testimonials-section py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="section-title">Отзывы студентов</h2>
            <div class="testimonials-slider">
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <p>"Этот курс полностью изменил мою жизнь. Я начал с нуля и через 3 месяца нашел работу как junior-разработчик. Преподаватели объясняют все очень понятно и всегда готовы помочь."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="https://i.pravatar.cc/100?img=11" alt="Александр" class="author-image">
                        <div class="author-info">
                            <h4>Александр Петров</h4>
                            <p>Junior Frontend Developer</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <p>"Отличная структура обучения, актуальные технологии и постоянная поддержка наставника. Мне особенно понравились практические задания, которые можно добавить в портфолио."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="https://i.pravatar.cc/100?img=12" alt="Мария" class="author-image">
                        <div class="author-info">
                            <h4>Мария Иванова</h4>
                            <p>Frontend Developer</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <p>"Я учился в разных онлайн-школах, но именно здесь нашел баланс между теорией и практикой. Менторы реагируют на вопросы быстро, а курс регулярно обновляется согласно новым тенденциям."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="https://i.pravatar.cc/100?img=13" alt="Дмитрий" class="author-image">
                        <div class="author-info">
                            <h4>Дмитрий Сидоров</h4>
                            <p>Fullstack Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('testimonials_section', 'testimonials_section_shortcode');
