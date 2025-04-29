import {
  Carousel,
  CarouselContent,
  CarouselItem,
  CarouselNext,
  CarouselPrevious,
} from "@/components/ui/carousel";

const TestimonialsSection = () => {
  const testimonials = [
    {
      id: 1,
      name: "Алексей Петров",
      role: "Junior Frontend Developer",
      company: "Yandex",
      image: "https://i.pravatar.cc/150?img=11",
      content:
        "Прошел курс по веб-разработке и через месяц получил первое предложение о работе. Особенно полезными были практические задания и обратная связь от ментора. Рекомендую всем, кто хочет быстро войти в IT-сферу!",
    },
    {
      id: 2,
      name: "Мария Иванова",
      role: "Web Designer",
      company: "Freelance",
      image: "https://i.pravatar.cc/150?img=5",
      content:
        "Курс превзошел все мои ожидания! Структурированная информация, актуальные технологии и поддержка преподавателей помогли мне полностью изменить свою карьеру. Теперь работаю на фрилансе и зарабатываю в 2 раза больше.",
    },
    {
      id: 3,
      name: "Дмитрий Сидоров",
      role: "Full-stack Developer",
      company: "SberTech",
      image: "https://i.pravatar.cc/150?img=12",
      content:
        "Начинал с нуля, без опыта в программировании. Благодаря курсу и ежедневной практике смог освоить и фронтенд, и бэкенд разработку. Особенно ценно, что программа постоянно обновляется с учетом трендов индустрии.",
    },
  ];

  return (
    <section id="testimonials" className="py-20 bg-gray-50">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-3xl md:text-4xl font-bold mb-4">Отзывы наших выпускников</h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            Узнайте, что говорят о нашем курсе те, кто уже успешно его прошел и начал карьеру в IT
          </p>
        </div>

        <Carousel className="w-full max-w-4xl mx-auto">
          <CarouselContent>
            {testimonials.map((testimonial) => (
              <CarouselItem key={testimonial.id}>
                <div className="bg-white p-8 rounded-xl shadow-md">
                  <div className="flex flex-col md:flex-row gap-6">
                    <div className="md:w-1/4 flex flex-col items-center">
                      <img
                        src={testimonial.image}
                        alt={testimonial.name}
                        className="w-20 h-20 rounded-full mb-3"
                      />
                      <div className="text-center">
                        <h3 className="font-semibold text-lg">{testimonial.name}</h3>
                        <p className="text-sm text-gray-500">{testimonial.role}</p>
                        <p className="text-xs text-brand-primary">{testimonial.company}</p>
                      </div>
                    </div>
                    <div className="md:w-3/4">
                      <div className="relative">
                        <svg
                          className="absolute -top-6 -left-6 w-12 h-12 text-brand-primary opacity-20"
                          fill="currentColor"
                          viewBox="0 0 32 32"
                          aria-hidden="true"
                        >
                          <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                        </svg>
                        <p className="relative text-gray-700 leading-relaxed">
                          {testimonial.content}
                        </p>
                      </div>
                      <div className="mt-4 flex items-center">
                        <div className="flex text-yellow-400">
                          {[...Array(5)].map((_, i) => (
                            <svg
                              key={i}
                              className="w-5 h-5 fill-current"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 24 24"
                            >
                              <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                          ))}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </CarouselItem>
            ))}
          </CarouselContent>
          <div className="flex justify-center mt-8">
            <CarouselPrevious className="mx-2" />
            <CarouselNext className="mx-2" />
          </div>
        </Carousel>
      </div>
    </section>
  );
};

export default TestimonialsSection;
