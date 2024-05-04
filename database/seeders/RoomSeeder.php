<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;
class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            [
                "price" => [
                    "en" => "15 $",
                    "ru" => "650 rubl",
                    "uz" => "85.000 so'm",
                ],
                "title" => [
                    "en" => "For Foreign Guests",
                    "ru" => "Для гостей из других стран",
                    "uz" => "Маҳаллий Мехмонлар учун",
                ],
                "rate" => 5,
                "have" => [
                    "en" => ["Wifi", "TV", "Air Conditioning", "Breakfast", "Bath and Toilet not in room"],
                    "ru" => ["Wi-Fi", "Телевизор", "Кондиционер", "Завтрак", "Ванна и туалет не в номере"],
                    "uz" => ["Wi-Fi", "Телевизор", "Кондиционер", "Нонушта", "Хаммом ва Ҳожатхона хонада емас"]
                ],
                "short_content" => [
                    "en" => "Our room is for 4 people. This is the best decision for you and your children or friends. There, the city streets are clearly visible from your window. Wifi, TV, Air conditioner, (Bathroom and toilet not in the room) are waiting for you. And breakfast is included.",
                    "ru" => "Наша комната рассчитана на 4 человек. Это лучшее решение для вас и ваших детей или друзей. Там из вашего окна хорошо видны улицы города. Вас ждут Wi-Fi, ТВ, Кондиционер (Ванная и туалет не в номере). И завтрак включен.",
                    "uz" => "4 кишига мўлжалланган хонамиз. Бу сиз ва фарзандларингиз ёки дўстларингиз учун енг тоғри қарор. У ерда сизнинг деразангиздан шахар кўчалари яққол кўриниб туради. Wифи, Телевизор, Кондиционер, (Хаммом ва Ҳожатхона хонада емас)лар сизни куриб турибди. Ва қўшимчасига нонушта ҳам бор."
                ],
                "content" => [
                    "en" => "The rooms in our hotel are very beautiful and cozy. You can relax there. Our hotel has 24/7 surveillance cameras and our staff will make sure you have a pleasant stay. Our room is for 4 people. This is the best decision for you and your children or friends. There, the city streets are clearly visible from your window. Wifi, TV, Air conditioner, (Bathroom and toilet not in the room) are waiting for you. And breakfast is included.",
                    "ru" => "Номера в нашем отеле очень красивые и уютные. Вы можете расслабиться там. В нашем отеле установлены камеры наблюдения 24 часа в сутки, 7 дней в неделю, и наш персонал позаботится о том, чтобы ваше пребывание было приятным. Наша комната рассчитана на 4 человек. Это лучшее решение для вас и ваших детей или друзей. Там из вашего окна хорошо видны улицы города. Вас ждут Wi-Fi, ТВ, Кондиционер (Ванная и туалет не в номере). И завтрак включен.",
                    "uz" => "Бизнинг мехмонхонамиздаги хоналар жуда кўркам ва шинам. У ерда сиз бемалол ҳордиқ олишингиз мумкин. Мехмонхонамизда туну-кун кузатув камерасиз ва ҳодимларимиз сизнинг мароқли дам олишингиз учун ҳизмат қиладилар. 4 кишига мўлжалланган хонамиз. Бу сиз ва фарзандларингиз ёки дўстларингиз учун енг тоғри қарор. У ерда сизнинг деразангиздан шахар кўчалари яққол кўриниб туради. Wифи, Телевизор, Кондиционер, (Хаммом ва Ҳожатхона хонада емас)лар сизни куриб турибди. Ва қўшимчасига нонушта ҳам бор."
                ],
                "room_type_id" => 1,
                "images" => [
                    "room_image" => "rooms/4ta kravatli xona yaxshi.jpg",
                    "have" => "rooms/4ta kravatli xona jihozlar.jpg",
                    "bathroom" => "rooms/bathroom.jpg",
                    "breakfast" => "rooms/breakfast.jpg",
                    "kitchen" => "rooms/kitchen.jpg",
                ]
            ],
            [
                "price" => [
                    "en" => "17 $",
                    "ru" => "850 rubl",
                    "uz" => "85.000 so'm",
                ],
                "title" => [
                    "en" => "For Foreign Guests",
                    "ru" => "Для гостей из других стран",
                    "uz" => "Маҳаллий Мехмонлар учун",
                ],
                "rate" => 5,
                "have" => [
                    "en" => ["Wifi", "TV", "Air Conditioning", "Breakfast", "Bath and Toilet in room"],
                    "ru" => ["Wi-Fi", "Телевизор", "Кондиционер", "Завтрак", "Ванна и туалет в номере"],
                    "uz" => ["Wi-Fi", "Телевизор", "Кондиционер", "Нонушта", "Хаммом ва Ҳожатхона хонада"]
                ],
                "short_content" => [
                    "en" => "Our room is for 3 people. This is the best decision for you and your children or friends. There, the city streets are clearly visible from your window. Wifi, TV, Air conditioner, (Bathroom and toilet in the room) are waiting for you. And breakfast is included.",
                    "ru" => "Наша комната рассчитана на 3 человек. Это лучшее решение для вас и ваших детей или друзей. Там из вашего окна хорошо видны улицы города. Вас ждут Wi-Fi, ТВ, Кондиционер (Ванная и туалет в номере). И завтрак включен.",
                    "uz" => "3 кишига мўлжалланган хонамиз. Бу сиз ва фарзандларингиз ёки дўстларингиз учун енг тоғри қарор. У ерда сизнинг деразангиздан шахар кўчалари яққол кўриниб туради. Wифи, Телевизор, Кондиционер, (Хаммом ва Ҳожатхона хонада)лар сизни куриб турибди. Ва қўшимчасига нонушта ҳам бор."
                ],
                "content" => [
                    "en" => "The rooms in our hotel are very beautiful and cozy. You can relax there. Our hotel has 24/7 surveillance cameras and our staff will make sure you have a pleasant stay. Our room is for 3 people. This is the best decision for you and your children or friends. There, the city streets are clearly visible from your window. Wifi, TV, Air conditioner, (Bathroom and toilet in the room) are waiting for you. And breakfast is included.",
                    "ru" => "Номера в нашем отеле очень красивые и уютные. Вы можете расслабиться там. В нашем отеле установлены камеры наблюдения 24 часа в сутки, 7 дней в неделю, и наш персонал позаботится о том, чтобы ваше пребывание было приятным. Наша комната рассчитана на 3 человек. Это лучшее решение для вас и ваших детей или друзей. Там из вашего окна хорошо видны улицы города. Вас ждут Wi-Fi, ТВ, Кондиционер (Ванная и туалет в номере). И завтрак включен.",
                    "uz" => "Бизнинг мехмонхонамиздаги хоналар жуда кўркам ва шинам. У ерда сиз бемалол ҳордиқ олишингиз мумкин. Мехмонхонамизда туну-кун кузатув камерасиз ва ҳодимларимиз сизнинг мароқли дам олишингиз учун ҳизмат қиладилар. 3 кишига мўлжалланган хонамиз. Бу сиз ва фарзандларингиз ёки дўстларингиз учун енг тоғри қарор. У ерда сизнинг деразангиздан шахар кўчалари яққол кўриниб туради. Wифи, Телевизор, Кондиционер, (Хаммом ва Ҳожатхона хонада)лар сизни куриб турибди. Ва қўшимчасига нонушта ҳам бор."
                ],
                "room_type_id" => 2,
                "images" => [
                    "room_image" => "rooms/3ta kravatli xona.jpg",
                    "have" => "rooms/3ta kravatli xona jihozlar.jpg",
                    "bathroom" => "rooms/3ta kravatli xona sanuzel.jpg",
                    "breakfast" => "rooms/breakfast.jpg",
                    "kitchen" => "rooms/kitchen.jpg",
                ]
            ],
            [
                "price" => [
                    "en" => "17 $",
                    "ru" => "850 rubl",
                    "uz" => "85.000 so'm",
                ],
                "title" => [
                    "en" => "For Foreign Guests",
                    "ru" => "Для гостей из других стран",
                    "uz" => "Маҳаллий Мехмонлар учун",
                ],
                "rate" => 5,
                "have" => [
                    "en" => ["Wifi", "TV", "Air Conditioning", "Breakfast", "Bath and Toilet in room"],
                    "ru" => ["Wi-Fi", "Телевизор", "Кондиционер", "Завтрак", "Ванна и туалет в номере"],
                    "uz" => ["Wi-Fi", "Телевизор", "Кондиционер", "Нонушта", "Хаммом ва Ҳожатхона хонада"]
                ],
                "short_content" => [
                    "en" => "Our room is for 2 people. This is the best decision for you and your children or friends. There, the city streets are clearly visible from your window. Wifi, TV, Air conditioner, (Bathroom and toilet not in the room) are waiting for you. And breakfast is included.",
                    "ru" => "Наша комната рассчитана на 2 человек. Это лучшее решение для вас и ваших детей или друзей. Там из вашего окна хорошо видны улицы города. Вас ждут Wi-Fi, ТВ, Кондиционер (Ванная и туалет нет в номере). И завтрак включен.",
                    "uz" => "2 кишига мўлжалланган хонамиз. Бу сиз ва фарзандларингиз ёки дўстларингиз учун енг тоғри қарор. У ерда сизнинг деразангиздан шахар кўчалари яққол кўриниб туради. Wифи, Телевизор, Кондиционер, (Хаммом ва Ҳожатхона хонада эмас)лар сизни куриб турибди. Ва қўшимчасига нонушта ҳам бор."
                ],
                "content" => [
                    "en" => "The rooms in our hotel are very beautiful and cozy. You can relax there. Our hotel has 24/7 surveillance cameras and our staff will make sure you have a pleasant stay. Our room is for 2 people. This is the best decision for you and your children or friends. There, the city streets are clearly visible from your window. Wifi, TV, Air conditioner, (Bathroom and toilet not in the room) are waiting for you. And breakfast is included.",
                    "ru" => "Номера в нашем отеле очень красивые и уютные. Вы можете расслабиться там. В нашем отеле установлены камеры наблюдения 24 часа в сутки, 7 дней в неделю, и наш персонал позаботится о том, чтобы ваше пребывание было приятным. Наша комната рассчитана на 2 человек. Это лучшее решение для вас и ваших детей или друзей. Там из вашего окна хорошо видны улицы города. Вас ждут Wi-Fi, ТВ, Кондиционер (Ванная и туалет нет в номере). И завтрак включен.",
                    "uz" => "Бизнинг мехмонхонамиздаги хоналар жуда кўркам ва шинам. У ерда сиз бемалол ҳордиқ олишингиз мумкин. Мехмонхонамизда туну-кун кузатув камерасиз ва ҳодимларимиз сизнинг мароқли дам олишингиз учун ҳизмат қиладилар. 2 кишига мўлжалланган хонамиз. Бу сиз ва фарзандларингиз ёки дўстларингиз учун енг тоғри қарор. У ерда сизнинг деразангиздан шахар кўчалари яққол кўриниб туради. Wифи, Телевизор, Кондиционер, (Хаммом ва Ҳожатхона хонада эмас)лар сизни куриб турибди. Ва қўшимчасига нонушта ҳам бор."
                ],
                "room_type_id" => 3,
                "images" => [
                    "room_image" => "rooms/2 yotoqli xona.jpeg",
                    "have" => "rooms/2 yotoqli xona.jpeg",
                    "bathroom" => "rooms/bathroom.jpg",
                    "breakfast" => "rooms/breakfast.jpg",
                    "kitchen" => "rooms/kitchen.jpg",
                ]
            ],
            [
                "price" => [
                    "en" => "15 $",
                    "ru" => "650 rubl",
                    "uz" => "85.000 so'm",
                ],
                "title" => [
                    "en" => "For Foreign Guests",
                    "ru" => "Для гостей из других стран",
                    "uz" => "Маҳаллий Мехмонлар учун",
                ],
                "rate" => 5,
                "have" => [
                    "en" => ["Wifi", "TV", "Air Conditioning", "Breakfast", "Bath and Toilet not in room"],
                    "ru" => ["Wi-Fi", "Телевизор", "Кондиционер", "Завтрак", "Ванна и туалет не в номере"],
                    "uz" => ["Wi-Fi", "Телевизор", "Кондиционер", "Нонушта", "Хаммом ва Ҳожатхона хонада емас"]
                ],
                "short_content" => [
                    "en" => "Our room is for 4 people. This is the best decision for you and your children or friends. There, the city streets are clearly visible from your window. Wifi, TV, Air conditioner, (Bathroom and toilet not in the room) are waiting for you. And breakfast is included.",
                    "ru" => "Наша комната рассчитана на 4 человек. Это лучшее решение для вас и ваших детей или друзей. Там из вашего окна хорошо видны улицы города. Вас ждут Wi-Fi, ТВ, Кондиционер (Ванная и туалет не в номере). И завтрак включен.",
                    "uz" => "4 кишига мўлжалланган хонамиз. Бу сиз ва фарзандларингиз ёки дўстларингиз учун енг тоғри қарор. У ерда сизнинг деразангиздан шахар кўчалари яққол кўриниб туради. Wифи, Телевизор, Кондиционер, (Хаммом ва Ҳожатхона хонада емас)лар сизни куриб турибди. Ва қўшимчасига нонушта ҳам бор."
                ],
                "content" => [
                    "en" => "The rooms in our hotel are very beautiful and cozy. You can relax there. Our hotel has 24/7 surveillance cameras and our staff will make sure you have a pleasant stay. Our room is for 4 people. This is the best decision for you and your children or friends. There, the city streets are clearly visible from your window. Wifi, TV, Air conditioner, (Bathroom and toilet not in the room) are waiting for you. And breakfast is included.",
                    "ru" => "Номера в нашем отеле очень красивые и уютные. Вы можете расслабиться там. В нашем отеле установлены камеры наблюдения 24 часа в сутки, 7 дней в неделю, и наш персонал позаботится о том, чтобы ваше пребывание было приятным. Наша комната рассчитана на 4 человек. Это лучшее решение для вас и ваших детей или друзей. Там из вашего окна хорошо видны улицы города. Вас ждут Wi-Fi, ТВ, Кондиционер (Ванная и туалет не в номере). И завтрак включен.",
                    "uz" => "Бизнинг мехмонхонамиздаги хоналар жуда кўркам ва шинам. У ерда сиз бемалол ҳордиқ олишингиз мумкин. Мехмонхонамизда туну-кун кузатув камерасиз ва ҳодимларимиз сизнинг мароқли дам олишингиз учун ҳизмат қиладилар. 4 кишига мўлжалланган хонамиз. Бу сиз ва фарзандларингиз ёки дўстларингиз учун енг тоғри қарор. У ерда сизнинг деразангиздан шахар кўчалари яққол кўриниб туради. Wифи, Телевизор, Кондиционер, (Хаммом ва Ҳожатхона хонада емас)лар сизни куриб турибди. Ва қўшимчасига нонушта ҳам бор."
                ],
                "room_type_id" => 1,
                "images" => [
                    "room_image" => "4ta kravatli xona boshqachasi jihozlari.jpg",
                    "have" => "4ta kravatli xona boshqachasi.jpg",
                    "bathroom" => "bathroom.jpg",
                    "breakfast" => "rooms/breakfast.jpg",
                    "kitchen" => "rooms/kitchen.jpg",
                ]
            ],

        ];
        foreach ($rooms as $room) {
            Room::create($room);
        }
    }
}
