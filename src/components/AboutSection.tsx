import { Code, Monitor, Users, Clock } from 'lucide-react';

const AboutSection = () => {
  const features = [
    {
      icon: <Monitor className="w-12 h-12 text-brand-primary" />,
      title: 'Практические навыки',
      description: 'Более 80% времени курса посвящено реальным проектам и решению практических задач'
    },
    {
      icon: <Users className="w-12 h-12 text-brand-primary" />,
      title: 'Персональный наставник',
      description: 'Каждому студенту выделяется опытный ментор, который всегда поможет и даст обратную связь'
    },
    {
      icon: <Code className="w-12 h-12 text-brand-primary" />,
      title: 'Актуальные технологии',
      description: 'Учим только современным и востребованным на рынке технологиям и инструментам'
    },
    {
      icon: <Clock className="w-12 h-12 text-brand-primary" />,
      title: 'Гибкий график',
      description: 'Учитесь в удобное для вас время. Видеоуроки и материалы доступны 24/7'
    }
  ];

  return (
    <section id="about" className="py-20 bg-brand-accent">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-3xl md:text-4xl font-bold mb-4">О нашем курсе</h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            Мы создали курс, который поможет вам получить необходимые знания и навыки для начала карьеры в веб-разработке
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          {features.map((feature, index) => (
            <div 
              key={index} 
              className="bg-white rounded-lg p-8 shadow-md hover:shadow-lg transition-shadow duration-300"
            >
              <div className="mb-4">{feature.icon}</div>
              <h3 className="text-xl font-semibold mb-2">{feature.title}</h3>
              <p className="text-gray-600">{feature.description}</p>
            </div>
          ))}
        </div>

        <div className="mt-16 text-center">
          <div className="bg-white rounded-lg p-8 shadow-md inline-block">
            <div className="flex flex-col md:flex-row gap-8 justify-center">
              <div className="text-center px-6">
                <div className="text-4xl font-bold text-brand-primary">12</div>
                <div className="text-gray-600">недель обучения</div>
              </div>
              <div className="text-center px-6">
                <div className="text-4xl font-bold text-brand-primary">24</div>
                <div className="text-gray-600">практических задания</div>
              </div>
              <div className="text-center px-6">
                <div className="text-4xl font-bold text-brand-primary">100%</div>
                <div className="text-gray-600">трудоустройство</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default AboutSection;
