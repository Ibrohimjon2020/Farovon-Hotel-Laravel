<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                "title" => [
                    "en" => "Rooms & Appartment",
                    "ru" => "Комнаты и апартаменты",
                    "uz" => "Хоналар Ва Квартира"
                ],
                "content" => [
                    "en" => "Welcome to Rooms & Apartments, where comfort meets convenience in the heart of Margilan. Whether you're traveling for business or leisure, our establishment offers a range of accommodations designed to cater to your every need.",
                    "ru" => "Добро пожаловать в Комнаты и апартаменты, где комфорт сочетается с удобством в самом центре Маргилана. Если вы путешествуете по делам или на отдых, наше заведение предлагает широкий выбор номеров, предназначенных для удовлетворения всех ваших потребностей.",
                    "uz" => "Марғилон шаҳрининг қоқ марказида қулайлик билан бирлашадиган Хоналар Ва Квартирага хуш келибсиз. Иш ёки дам олиш учун саёҳат қиляпсизми, бизнинг муассасамиз сизнинг барча еҳтиёжларингизни қондириш учун мўлжалланган турар жой мажмуаларини таклиф етади."
                ],
                "logo" => '<i class="fa fa-hotel fa-2x text-primary"></i>'
            ],
            [
                "title" => [
                    "en" => "Food & Restaurant",
                    "ru" => "Еда и ресторан",
                    "uz" => "Озиқ - Овқат Ва Ресторан"
                ],
                "content" => [
                    "en" => "Welcome to our restaurant, where delights and exceptional dining experiences await. Nestled within the vibrant atmosphere of Margilan, our culinary haven promises to tantalize your taste buds and leave you craving for more.",
                    "ru" => "Добро пожаловать в наш ресторан, где вас ждут удовольствия и исключительные гастрономические впечатления. Наш кулинарный рай, расположенный в оживленной атмосфере Маргилана, обещает возбудить ваши вкусовые рецепторы и заставить вас жаждать большего.",
                    "uz" => "Бизнинг ресторанимизга хуш келибсиз, у ерда лаззатланишлар ва ажойиб таомлар кутмоқда. Марғилоннинг жўшқин муҳитида жойлашган бизнинг пазандачилик маскани сизнинг таъмингизни ўзига тортади ва кўпроқ нарсага интиласиз."
                ],
                "logo" => '<i class="fa fa-utensils fa-2x text-primary"></i>'
            ],
            [
                "title" => [
                    "en" => "Spa & Fitness",
                    "ru" => "Спа и фитнес",
                    "uz" => "Спа - Фитнес"
                ],
                "content" => [
                    "en" => "Our Spa & Fitness Center, your sanctuary for wellness and relaxation in the heart of Margilan. Designed to rejuvenate your body, mind, and spirit, our state-of-the-art facilities and expertly curated treatments offer a holistic approach to wellness.",
                    "ru" => "Наш спа и фитнес-центр, ваш оазис здоровья и отдыха в самом сердце Маргилана. Наши современные удобства и профессионально подобранные процедуры, созданные для омоложения вашего тела, разума и духа, предлагают комплексный подход к оздоровлению.",
                    "uz" => "Марғилон шаҳрининг қоқ марказидаги соғломлаштириш ва дам олиш масканингиз бўлган Спа & Fitness Марказимиз. Сизнинг танангизни, онгингизни ва руҳингизни ёшартириш учун мўлжалланган, бизнинг замонавий жиҳозларимиз ва мутахассислар томонидан тайёрланган муолажаларимиз саломатликка яхлит ёндашувни таклиф етади."
                ],
                "logo" => '<i class="fa fa-spa fa-2x text-primary"></i>'
            ],
            [
                "title" => [
                    "en" => "Sports & Gaming",
                    "ru" => "Спорт и игры",
                    "uz" => "Спорт ва ўйин"
                ],
                "content" => [
                    "en" => "Our Sports & Gaming Hub, where excitement and adrenaline await players of all ages and skill levels. Situated in the heart of Margilan, our state-of-the-art facility offers a dynamic fusion of sports and gaming activities, creating an immersive experience like no other.",
                    "ru" => "Наш спортивный и игровой центр, где азарт и адреналин ждут игроков всех возрастов и уровней подготовки. Наш ультрасовременный комплекс, расположенный в самом сердце Маргилана, предлагает динамичное сочетание спортивных и игровых мероприятий, создавая неповторимые впечатления.",
                    "uz" => "Бизнинг Sport ва Ўйин марказимиз, бу ерда барча ёшдаги ва маҳорат даражасидаги ўйинчиларни ҳаяжон ва adrenalin кутмоқда. Марғилон шаҳрининг қоқ марказида жойлашган бизнинг замонавий иншоотимиз sport ва ўйин машғулотларининг динамик уйғунлигини таъминлаб, бошқа ҳеч кимга ўхшамайдиган ажойиб тажриба яратади."
                ],
                "logo" => '<i class="fa fa-swimmer fa-2x text-primary"></i>'
            ],
            [
                "title" => [
                    "en" => "Event & Party",
                    "ru" => "События и партии",
                    "uz" => "Тадбир ва партия"
                ],
                "content" => [
                    "en" => "Welcome to our premier event and banquet venue where unforgettable moments are created and cherished. Located in the heart of Margilan, our versatile venue provides the perfect backdrop for a variety of events, from intimate meetings to grand celebrations.",
                    "ru" => "Добро пожаловать в наше лучшее место для проведения мероприятий и банкетов, где создаются и лелеются незабываемые моменты. Наше универсальное заведение, расположенное в самом сердце Маргилана, станет идеальным фоном для проведения самых разных мероприятий: от камерных встреч до грандиозных торжеств.",
                    "uz" => "Унутилмас лаҳзалар яратиладиган ва қадрланадиган асосий тадбиримиз ва зиёфат масканимизга хуш келибсиз. Марғилон шаҳрининг қоқ марказида жойлашган кўп қиррали маконимиз самимий учрашувлардан тортиб, катта тантаналаргача бўлган турли тадбирлар учун мукаммал фонни тақдим етади."
                ],
                "logo" => '<i class="fa fa-glass-cheers fa-2x text-primary"></i>'
            ],
            [
                "title" => [
                    "en" => "GYM & Yoga",
                    "ru" => "Тренажерный зал и Йога",
                    "uz" => "Тренажер ва Йога"
                ],
                "content" => [
                    "en" => "Welcome to our Gym & Yoga Studio, where wellness meets empowerment in a nurturing environment designed to support your fitness journey. Our state-of-the-art facility offers a comprehensive range of fitness options to help you achieve your health and wellness goals.",
                    "ru" => "Добро пожаловать в нашу студию тренажерного зала и йоги, где хорошее самочувствие сочетается с расширением возможностей в благоприятной среде, созданной для поддержки вашего фитнес-путешествия. Наш современный комплекс предлагает широкий спектр возможностей фитнеса, которые помогут вам достичь ваших целей в области здоровья и хорошего самочувствия.",
                    "uz" => "Гимнастика ва ёга студиямизга хуш келибсиз, у ерда соғломлик сизнинг фитнес саёҳатингизни қўллаб-қувватлаш учун мўлжалланган озиқлантирувчи муҳитда кучга ега. Бизнинг замонавий муассасамиз сизнинг соғлиғингизга ва соғлом бўлиш мақсадларингизга еришишингизга ёрдам берадиган кенг қамровли фитнес вариантларини таклиф етади."
                ],
                "logo" => '<i class="fa fa-dumbbell fa-2x text-primary"></i>'
            ]
        ];

        foreach ($services as $service) {
            Service::create([
                "title" => $service['title'],
                "content" => $service['content'],
                "logo" => $service['logo']
            ]);
        }
    }
}
