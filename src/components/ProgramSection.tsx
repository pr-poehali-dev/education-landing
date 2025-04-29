import { Tabs, TabsContent, TabsList, TabsTrigger } from "@/components/ui/tabs";

const ProgramSection = () => {
  const modules = [
    {
      id: "module1",
      title: "Основы HTML и CSS",
      description: "Базовые принципы вёрстки и стилизации веб-страниц",
      lessons: [
        "Структура HTML-документа",
        "Семантические теги и их использование",
        "Основы CSS: селекторы, свойства, значения",
        "Модель блока в CSS: margin, padding, border",
        "Позиционирование элементов"
      ]
    },
    {
      id: "module2",
      title: "JavaScript основы",
      description: "Изучение базовых концепций JavaScript и работа с DOM",
      lessons: [
        "Основы JavaScript: типы данных, переменные, функции",
        "Работа с DOM: выборка и манипуляция элементами",
        "События и их обработчики",
        "Асинхронность в JavaScript",
        "Работа с API и AJAX-запросы"
      ]
    },
    {
      id: "module3",
      title: "React.js",
      description: "Разработка SPA-приложений с использованием React",
      lessons: [
        "Основы React: компоненты, props, state",
        "Хуки в React и их применение",
        "Управление состоянием приложения",
        "Маршрутизация в React",
        "Оптимизация и лучшие практики в React"
      ]
    },
    {
      id: "module4",
      title: "Бэкенд и базы данных",
      description: "Разработка серверной части приложения",
      lessons: [
        "Введение в Node.js",
        "Express.js: создание серверного приложения",
        "Работа с базами данных: MongoDB",
        "REST API: принципы и реализация",
        "Аутентификация и авторизация"
      ]
    }
  ];

  return (
    <section id="program" className="py-20">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-3xl md:text-4xl font-bold mb-4">Программа обучения</h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            Наша программа разработана практикующими специалистами с учетом актуальных требований рынка
          </p>
        </div>

        <Tabs defaultValue="module1" className="w-full">
          <TabsList className="grid grid-cols-2 md:grid-cols-4 mb-8">
            {modules.map((module) => (
              <TabsTrigger 
                key={module.id} 
                value={module.id}
                className="text-sm md:text-base py-3"
              >
                {module.title}
              </TabsTrigger>
            ))}
          </TabsList>
          
          {modules.map((module) => (
            <TabsContent 
              key={module.id} 
              value={module.id}
              className="border rounded-xl p-6 animate-fade-in"
            >
              <div className="mb-4">
                <h3 className="text-2xl font-bold">{module.title}</h3>
                <p className="text-gray-600 mt-2">{module.description}</p>
              </div>
              
              <div className="mt-6">
                <h4 className="text-lg font-semibold mb-3">Темы модуля:</h4>
                <ul className="space-y-3">
                  {module.lessons.map((lesson, index) => (
                    <li key={index} className="flex items-start">
                      <span className="inline-flex items-center justify-center bg-brand-primary text-white rounded-full w-6 h-6 mr-3 mt-0.5 flex-shrink-0 text-sm">
                        {index + 1}
                      </span>
                      <span>{lesson}</span>
                    </li>
                  ))}
                </ul>
              </div>
              
              <div className="mt-8 bg-brand-accent rounded-lg p-4">
                <p className="text-gray-700 flex items-center">
                  <span className="mr-2">⏰</span>
                  <span>Продолжительность: 3 недели, 6 уроков, 2 практических проекта</span>
                </p>
              </div>
            </TabsContent>
          ))}
        </Tabs>
      </div>
    </section>
  );
};

export default ProgramSection;
