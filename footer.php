<footer id="colophon" class="site-footer bg-dark text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <div class="footer-about">
                <div class="footer-logo mb-4">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <div class="text-2xl font-bold text-white flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                            </svg>
                            <span><?php bloginfo('name'); ?></span>
                        </div>
                    <?php endif; ?>
                </div>
                <p class="mb-4">Онлайн-курсы, которые помогают освоить востребованные навыки и начать карьеру в IT-сфере.</p>
                <div class="footer-social flex space-x-4">
                    <a href="#" class="text-white hover:text-primary transition-colors" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-white hover:text-primary transition-colors" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-white hover:text-primary transition-colors" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-white hover:text-primary transition-colors" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
            
            <div class="footer-links">
                <h3 class="footer-heading">Полезные ссылки</h3>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_id' => 'footer-menu',
                    'container' => false,
                    'menu_class' => 'footer-menu',
                    'link_before' => '<span class="text-gray-300 hover:text-white transition-colors">',
                    'link_after' => '</span>',
                ));
                ?>
            </div>
            
            <div class="footer-widgets">
                <?php dynamic_sidebar('footer-widget'); ?>
            </div>
        </div>
        
        <div class="border-t border-gray-700 pt-6 flex flex-col md:flex-row justify-between items-center">
            <div class="copyright mb-4 md:mb-0">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Все права защищены.</p>
            </div>
            <div class="legal-links">
                <a href="<?php echo esc_url(get_privacy_policy_url()); ?>" class="text-gray-300 hover:text-white transition-colors mr-4">Политика конфиденциальности</a>
                <a href="#" class="text-gray-300 hover:text-white transition-colors">Условия использования</a>
            </div>
        </div>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Мобильное меню
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', function() {
            menuToggle.classList.toggle('active');
            mobileMenu.classList.toggle('hidden');
        });
    }
    
    // Плавная прокрутка для якорных ссылок
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
                
                // Закрыть мобильное меню при клике на ссылку
                if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                    menuToggle.classList.remove('active');
                    mobileMenu.classList.add('hidden');
                }
            }
        });
    });
});
</script>

<?php wp_footer(); ?>
</body>
</html>
