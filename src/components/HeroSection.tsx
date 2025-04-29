import { Button } from '@/components/ui/button';

const HeroSection = () => {
  return (
    <section 
      className="min-h-screen pt-24 pb-16 flex items-center relative"
      style={{
        background: "linear-gradient(135deg, #F2FCE2 0%, #9b87f5 100%)",
      }}
    >
      <div className="absolute inset-0 bg-grid-pattern opacity-10"></div>
      <div className="container mx-auto px-4">
        <div className="flex flex-col md:flex-row items-center">
          <div className="md:w-1/2 animate-fade-in">
            <h1 className="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-4">
              Онлайн-курс <span className="text-brand-primary">веб-разработки</span>
            </h1>
            <p className="text-xl md:text-2xl text-gray-700 mb-8 max-w-xl">
              Освойте современные технологии и станьте востребованным специалистом за 12 недель
            </p>
            <div className="flex flex-col sm:flex-row gap-4">
              <Button 
                size="lg" 
                className="bg-brand-primary hover:bg-brand-secondary transition-colors text-white font-semibold px-8 py-3 text-lg"
                onClick={() => document.getElementById('contact')?.scrollIntoView()}
              >
                Записаться на курс
              </Button>
              <Button 
                variant="outline" 
                size="lg"
                className="border-gray-300 hover:bg-gray-100 transition-colors text-gray-700 font-semibold px-8 py-3 text-lg"
                onClick={() => document.getElementById('program')?.scrollIntoView()}
              >
                Узнать программу
              </Button>
            </div>
            <div className="mt-8 text-gray-600 flex items-center gap-4">
              <div className="flex -space-x-2">
                {[1, 2, 3, 4].map((n) => (
                  <img 
                    key={n}
                    src={`https://i.pravatar.cc/100?img=${n+10}`} 
                    alt="Student" 
                    className="w-10 h-10 rounded-full border-2 border-white"
                  />
                ))}
              </div>
              <span>Более 1000 выпускников уже работают по специальности</span>
            </div>
          </div>
          <div className="md:w-1/2 mt-12 md:mt-0 flex justify-center">
            <img 
              src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
              alt="Web Development Course" 
              className="rounded-xl shadow-2xl w-full max-w-md"
            />
          </div>
        </div>
      </div>
    </section>
  );
};

export default HeroSection;
