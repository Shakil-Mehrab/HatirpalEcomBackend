<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $asia = [
            "name" => "এশিয়া",
            "slug" => "Asia",
            "children" =>
            [
                [
                    'name' => 'বাংলাদেশ',
                    'slug' => 'Bangladesh',
                    "children" => [
                        [
                            "name" => "বরিশাল",
                            "slug" => "Barishal",
                            "value" => "220",
                            "children" =>
                            [
                                [
                                    "slug" => "Barguna",
                                    "name" => "বরগুনা",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Amtali",
                                            "name" => "আমতলী",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Bamna",
                                            "name" => "বামনা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Barguna Sadar",
                                            "name" => "বরগুনা সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Betagi",
                                            "name" => "বেতাগি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Patharghata",
                                            "name" => "পাথরঘাটা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Taltali",
                                            "name" => "তালতলী",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Barishal",
                                    "name" => "বরিশাল",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Muladi",
                                            "name" => "মুলাদি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Babuganj",
                                            "name" => "বাবুগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Agailjhara",
                                            "name" => "আগাইলঝরা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Barisal Sadar",
                                            "name" => "বরিশাল সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Bakerganj",
                                            "name" => "বাকেরগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Banaripara",
                                            "name" => "বানাড়িপারা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Gaurnadi",
                                            "name" => "গৌরনদী",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Hizla",
                                            "name" => "হিজলা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Mehendiganj",
                                            "name" => "মেহেদিগঞ্জ ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Wazirpur",
                                            "name" => "ওয়াজিরপুর",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Bhola",
                                    "name" => "ভোলা",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Bhola Sadar",
                                            "name" => "ভোলা সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Burhanuddin",
                                            "name" => "বুরহানউদ্দিন",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Char Fasson",
                                            "name" => "চর ফ্যাশন",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Daulatkhan",
                                            "name" => "দৌলতখান",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Lalmohan",
                                            "name" => "লালমোহন",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Manpura",
                                            "name" => "মনপুরা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Tazumuddin",
                                            "name" => "তাজুমুদ্দিন",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Jhalokati",
                                    "name" => "ঝালকাঠি",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Jhalokati Sadar",
                                            "name" => "ঝালকাঠি সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kathalia",
                                            "name" => "কাঁঠালিয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Nalchity",
                                            "name" => "নালচিতি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Rajapur",
                                            "name" => "রাজাপুর",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Patuakhali",
                                    "name" => "পটুয়াখালী",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Bauphal",
                                            "name" => "বাউফল",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Dashmina",
                                            "name" => "দশমিনা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Galachipa",
                                            "name" => "গলাচিপা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kalapara",
                                            "name" => "কালাপারা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Mirzaganj",
                                            "name" => "মির্জাগঞ্জ ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Patuakhali Sadar",
                                            "name" => "পটুয়াখালী সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Dumki",
                                            "name" => "ডুমকি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Rangabali",
                                            "name" => "রাঙ্গাবালি",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Pirojpur",
                                    "name" => "পিরোজপুর",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Bhandaria",
                                            "name" => "ভ্যান্ডারিয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kaukhali",
                                            "name" => "কাউখালি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Mathbaria",
                                            "name" => "মাঠবাড়িয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Nazirpur",
                                            "name" => "নাজিরপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Nesarabad",
                                            "name" => "নেসারাবাদ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Pirojpur Sadar",
                                            "name" => "পিরোজপুর সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Zianagar",
                                            "name" => "জিয়ানগর",
                                            "children" => []
                                        ]
                                    ]
                                ]
                            ]

                        ],
                        [
                            "name" => "চট্টগ্রাম",
                            "slug" => "Chattogram",
                            "value" => "220",
                            "children" =>
                            [
                                [
                                    "slug" => "Bandarban",
                                    "name" => "বান্দরবান",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Bandarban Sadar",
                                            "name" => "বান্দরবন সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Thanchi",
                                            "name" => "থানচি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Lama",
                                            "name" => "লামা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Naikhongchhari",
                                            "name" => "নাইখংছড়ি ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Ali kadam",
                                            "name" => "আলী কদম",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Rowangchhari",
                                            "name" => "রউয়াংছড়ি ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Ruma",
                                            "name" => "রুমা",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Brahmanbaria",
                                    "name" => "ব্রাহ্মণবাড়িয়া",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Brahmanbaria Sadar",
                                            "name" => "ব্রাহ্মণবাড়িয়া সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Ashuganj",
                                            "name" => "আশুগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Nasirnagar",
                                            "name" => "নাসির নগর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Nabinagar",
                                            "name" => "নবীনগর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sarail",
                                            "name" => "সরাইল",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Shahbazpur Town",
                                            "name" => "শাহবাজপুর টাউন",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kasba",
                                            "name" => "কসবা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Akhaura",
                                            "name" => "আখাউরা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Bancharampur",
                                            "name" => "বাঞ্ছারামপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Bijoynagar",
                                            "name" => "বিজয় নগর",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Chandpur",
                                    "name" => "চাঁদপুর",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Chandpur Sadar",
                                            "name" => "চাঁদপুর সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Faridganj",
                                            "name" => "ফরিদগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Haimchar",
                                            "name" => "হাইমচর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Haziganj",
                                            "name" => "হাজীগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kachua",
                                            "name" => "কচুয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Matlab Uttar",
                                            "name" => "মতলব উত্তর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Matlab Dakkhin",
                                            "name" => "মতলব দক্ষিণ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Shahrasti",
                                            "name" => "শাহরাস্তি",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Chattogram",
                                    "name" => "চট্টগ্রাম",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Anwara",
                                            "name" => "আনোয়ারা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Banshkhali",
                                            "name" => "বাশখালি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Boalkhali",
                                            "name" => "বোয়ালখালি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Chandanaish",
                                            "name" => "চন্দনাইশ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Fatikchhari",
                                            "name" => "ফটিকছড়ি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Hathazari",
                                            "name" => "হাঠহাজারী",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Lohagara",
                                            "name" => "লোহাগারা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Mirsharai",
                                            "name" => "মিরসরাই",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Patiya",
                                            "name" => "পটিয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Rangunia",
                                            "name" => "রাঙ্গুনিয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Raozan",
                                            "name" => "রাউজান",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sandwip",
                                            "name" => "সন্দ্বীপ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Satkania",
                                            "name" => "সাতকানিয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sitakunda",
                                            "name" => "সীতাকুণ্ড",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Cumilla",
                                    "name" => "কুমিল্লা",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Barura",
                                            "name" => "বড়ুরা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Brahmanpara",
                                            "name" => "ব্রাহ্মণপাড়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Burichong",
                                            "name" => "বুড়িচং",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Chandina",
                                            "name" => "চান্দিনা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Chauddagram",
                                            "name" => "চৌদ্দগ্রাম",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Daudkandi",
                                            "name" => "দাউদকান্দি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Debidwar",
                                            "name" => "দেবীদ্বার",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Homna",
                                            "name" => "হোমনা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Comilla Sadar",
                                            "name" => "কুমিল্লা সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Laksam",
                                            "name" => "লাকসাম",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Monohorgonj",
                                            "name" => "মনোহরগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Meghna",
                                            "name" => "মেঘনা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Muradnagar",
                                            "name" => "মুরাদনগর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Nangalkot",
                                            "name" => "নাঙ্গালকোট",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Comilla Sadar South",
                                            "name" => "কুমিল্লা সদর দক্ষিণ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Titas",
                                            "name" => "তিতাস",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Cox's Bazar",
                                    "name" => "কক্স বাজার",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Chakaria",
                                            "name" => "চকরিয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Cox's Bazar Sadar",
                                            "name" => "কক্স বাজার সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kutubdia",
                                            "name" => "কুতুবদিয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Maheshkhali",
                                            "name" => "মহেশখালী",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Ramu",
                                            "name" => "রামু",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Teknaf",
                                            "name" => "টেকনাফ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Ukhia",
                                            "name" => "উখিয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Pekua",
                                            "name" => "পেকুয়া",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Feni",
                                    "name" => "ফেনী",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Feni Sadar",
                                            "name" => "ফেনী সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Chagalnaiya",
                                            "name" => "ছাগল নাইয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Daganbhyan",
                                            "name" => "দাগানভিয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Parshuram",
                                            "name" => "পরশুরাম",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Fhulgazi",
                                            "name" => "ফুলগাজি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sonagazi",
                                            "name" => "সোনাগাজি",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Khagrachhari",
                                    "name" => "খাগড়াছড়ি",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Dighinala",
                                            "name" => "দিঘিনালা ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Khagrachhari",
                                            "name" => "খাগড়াছড়ি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Lakshmichhari",
                                            "name" => "লক্ষ্মীছড়ি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Mahalchhari",
                                            "name" => "মহলছড়ি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Manikchhari",
                                            "name" => "মানিকছড়ি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Matiranga",
                                            "name" => "মাটিরাঙ্গা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Panchhari",
                                            "name" => "পানছড়ি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Ramgarh",
                                            "name" => "রামগড়",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Lakshmipur",
                                    "name" => "লক্ষ্মীপুর",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Lakshmipur Sadar",
                                            "name" => "লক্ষ্মীপুর সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Raipur",
                                            "name" => "রায়পুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Ramganj",
                                            "name" => "রামগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Ramgati",
                                            "name" => "রামগতি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Komol Nagar",
                                            "name" => "কমল নগর",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Noakhali",
                                    "name" => "নোয়াখালী",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Noakhali Sadar",
                                            "name" => "নোয়াখালী সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Begumganj",
                                            "name" => "বেগমগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Chatkhil",
                                            "name" => "চাটখিল",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Companyganj",
                                            "name" => "কোম্পানীগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Shenbag",
                                            "name" => "শেনবাগ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Hatia",
                                            "name" => "হাতিয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kobirhat",
                                            "name" => "কবিরহাট ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sonaimuri",
                                            "name" => "সোনাইমুরি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Suborno Char",
                                            "name" => "সুবর্ণ চর ",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Rangamati",
                                    "name" => "রাঙ্গামাটি",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Rangamati Sadar",
                                            "name" => "রাঙ্গামাটি সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Belaichhari",
                                            "name" => "বেলাইছড়ি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Bagaichhari",
                                            "name" => "বাঘাইছড়ি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Barkal",
                                            "name" => "বরকল",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Juraichhari",
                                            "name" => "জুরাইছড়ি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Rajasthali",
                                            "name" => "রাজাস্থলি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kaptai",
                                            "name" => "কাপ্তাই",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Langadu",
                                            "name" => "লাঙ্গাডু",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Nannerchar",
                                            "name" => "নান্নেরচর ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kaukhali",
                                            "name" => "কাউখালি",
                                            "children" => []
                                        ]
                                    ]
                                ]
                            ]

                        ],
                        [
                            "name" => "ঢাকা",
                            "slug" => "Dhaka",
                            "value" => "50",
                            "children" =>
                            [
                                [
                                    "slug" => "Dhaka",
                                    "name" => "ঢাকা",
                                    "value" => "50",
                                    "children" => [
                                        [
                                            "slug" => "Dhamrai",
                                            "name" => "ধামরাই",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Dohar",
                                            "name" => "দোহার",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Keraniganj",
                                            "name" => "কেরানীগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Nawabganj",
                                            "name" => "নবাবগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Savar",
                                            "name" => "সাভার",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Faridpur",
                                    "name" => "ফরিদপুর",
                                    "value" => "190",
                                    "children" => [
                                        [
                                            "slug" => "Faridpur Sadar",
                                            "name" => "ফরিদপুর সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Boalmari",
                                            "name" => "বোয়ালমারী",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Alfadanga",
                                            "name" => "আলফাডাঙ্গা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Madhukhali",
                                            "name" => "মধুখালি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Bhanga",
                                            "name" => "ভাঙ্গা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Nagarkanda",
                                            "name" => "নগরকান্ড",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Charbhadrasan",
                                            "name" => "চরভদ্রাসন ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sadarpur",
                                            "name" => "সদরপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Shaltha",
                                            "name" => "শালথা",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Gazipur",
                                    "name" => "গাজীপুর",
                                    "value" => "90",
                                    "children" => [
                                        [
                                            "slug" => "Gazipur Sadar-Joydebpur",
                                            "name" => "গাজীপুর সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kaliakior",
                                            "name" => "কালিয়াকৈর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kapasia",
                                            "name" => "কাপাসিয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sripur",
                                            "name" => "শ্রীপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kaliganj",
                                            "name" => "কালীগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Tongi",
                                            "name" => "টঙ্গি",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Gopalganj",
                                    "name" => "গোপালগঞ্জ",
                                    "value" => "190",
                                    "children" => [
                                        [
                                            "slug" => "Gopalganj Sadar",
                                            "name" => "গোপালগঞ্জ সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kashiani",
                                            "name" => "কাশিয়ানি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kotalipara",
                                            "name" => "কোটালিপাড়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Muksudpur",
                                            "name" => "মুকসুদপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Tungipara",
                                            "name" => "টুঙ্গিপাড়া",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Kishoreganj",
                                    "name" => "কিশোরগঞ্জ",
                                    "value" => "120",
                                    "children" => [
                                        [
                                            "slug" => "Astagram",
                                            "name" => "অষ্টগ্রাম",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Bajitpur",
                                            "name" => "বাজিতপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Bhairab",
                                            "name" => "ভৈরব",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Hossainpur",
                                            "name" => "হোসেনপুর ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Itna",
                                            "name" => "ইটনা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Karimganj",
                                            "name" => "করিমগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Katiadi",
                                            "name" => "কতিয়াদি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kishoreganj Sadar",
                                            "name" => "কিশোরগঞ্জ সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kuliarchar",
                                            "name" => "কুলিয়ারচর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Mithamain",
                                            "name" => "মিঠামাইন",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Nikli",
                                            "name" => "নিকলি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Pakundia",
                                            "name" => "পাকুন্ডা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Tarail",
                                            "name" => "তাড়াইল",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Madaripur",
                                    "name" => "মাদারীপুর",
                                    "value" => "190",
                                    "children" => [
                                        [
                                            "slug" => "Madaripur Sadar",
                                            "name" => "মাদারীপুর সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kalkini",
                                            "name" => "কালকিনি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Rajoir",
                                            "name" => "রাজইর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Shibchar",
                                            "name" => "শিবচর",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Manikganj",
                                    "name" => "মানিকগঞ্জ",
                                    "value" => "120",
                                    "children" => [
                                        [
                                            "slug" => "Manikganj Sadar",
                                            "name" => "মানিকগঞ্জ সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Singair",
                                            "name" => "সিঙ্গাইর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Shibalaya",
                                            "name" => "শিবালয়",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Saturia",
                                            "name" => "সাঠুরিয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Harirampur",
                                            "name" => "হরিরামপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Ghior",
                                            "name" => "ঘিওর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Daulatpur",
                                            "name" => "দৌলতপুর",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Munshiganj",
                                    "name" => "মুন্সিগঞ্জ",
                                    "value" => "120",
                                    "children" => [
                                        [
                                            "slug" => "Lohajang",
                                            "name" => "লোহাজং",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sreenagar",
                                            "name" => "শ্রীনগর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Munshiganj Sadar",
                                            "name" => "মুন্সিগঞ্জ সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sirajdikhan",
                                            "name" => "সিরাজদিখান",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Tongibari",
                                            "name" => "টঙ্গিবাড়ি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Gazaria",
                                            "name" => "গজারিয়া",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Narayanganj",
                                    "name" => "নারায়াণগঞ্জ",
                                    "value" => "90",
                                    "children" => [
                                        [
                                            "slug" => "Araihazar",
                                            "name" => "আড়াইহাজার",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sonargaon",
                                            "name" => "সোনারগাঁও",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Bandar",
                                            "name" => "বান্দার",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Naryanganj Sadar",
                                            "name" => "নারায়ানগঞ্জ সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Rupganj",
                                            "name" => "রূপগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Siddirgonj",
                                            "name" => "সিদ্ধিরগঞ্জ",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Narsingdi",
                                    "name" => "নরসিংদী",
                                    "value" => "120",
                                    "children" => [
                                        [
                                            "slug" => "Belabo",
                                            "name" => "বেলাবো",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Monohardi",
                                            "name" => "মনোহরদি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Narsingdi Sadar",
                                            "name" => "নরসিংদী সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Palash",
                                            "name" => "পলাশ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Raipura, Narsingdi",
                                            "name" => "রায়পুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Shibpur",
                                            "name" => "শিবপুর",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Rajbari",
                                    "name" => "রাজবাড়ি",
                                    "value" => "190",
                                    "children" => [
                                        [
                                            "slug" => "Baliakandi",
                                            "name" => "বালিয়াকান্দি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Goalandaghat",
                                            "name" => "গোয়ালন্দ ঘাট",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Pangsha",
                                            "name" => "পাংশা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kalukhali",
                                            "name" => "কালুখালি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Rajbari Sadar",
                                            "name" => "রাজবাড়ি সদর",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Shariatpur",
                                    "name" => "শরীয়তপুর",
                                    "value" => "190",
                                    "children" => [
                                        [
                                            "slug" => "Shariatpur Sadar -Palong",
                                            "name" => "শরীয়তপুর সদর ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Damudya",
                                            "name" => "দামুদিয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Naria",
                                            "name" => "নড়িয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Jajira",
                                            "name" => "জাজিরা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Bhedarganj",
                                            "name" => "ভেদারগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Gosairhat",
                                            "name" => "গোসাইর হাট ",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Tangail",
                                    "name" => "টাঙ্গাইল",
                                    "value" => "120",
                                    "children" => [
                                        [
                                            "slug" => "Tangail Sadar",
                                            "name" => "টাঙ্গাইল সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sakhipur",
                                            "name" => "সখিপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Basail",
                                            "name" => "বসাইল",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Madhupur",
                                            "name" => "মধুপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Ghatail",
                                            "name" => "ঘাটাইল",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kalihati",
                                            "name" => "কালিহাতি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Nagarpur",
                                            "name" => "নগরপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Mirzapur",
                                            "name" => "মির্জাপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Gopalpur",
                                            "name" => "গোপালপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Delduar",
                                            "name" => "দেলদুয়ার",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Bhuapur",
                                            "name" => "ভুয়াপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Dhanbari",
                                            "name" => "ধানবাড়ি",
                                            "children" => []
                                        ]
                                    ]
                                ]
                            ]

                        ],
                        [
                            "name" => "খুলনা",
                            "slug" => "Khulna",
                            "value" => "220",
                            "children" =>
                            [
                                [
                                    "slug" => "Bagerhat",
                                    "name" => "বাগেরহাট",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Bagerhat Sadar",
                                            "name" => "বাগেরহাট সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Chitalmari",
                                            "name" => "চিতলমাড়ি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Fakirhat",
                                            "name" => "ফকিরহাট",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kachua",
                                            "name" => "কচুয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Mollahat",
                                            "name" => "মোল্লাহাট ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Mongla",
                                            "name" => "মংলা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Morrelganj",
                                            "name" => "মরেলগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Rampal",
                                            "name" => "রামপাল",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sarankhola",
                                            "name" => "স্মরণখোলা",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Chuadanga",
                                    "name" => "চুয়াডাঙ্গা",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Damurhuda",
                                            "name" => "দামুরহুদা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Chuadanga-S",
                                            "name" => "চুয়াডাঙ্গা সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Jibannagar",
                                            "name" => "জীবন নগর ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Alamdanga",
                                            "name" => "আলমডাঙ্গা",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Jashore",
                                    "name" => "যশোর",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Abhaynagar",
                                            "name" => "অভয়নগর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Keshabpur",
                                            "name" => "কেশবপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Bagherpara",
                                            "name" => "বাঘের পাড়া ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Jessore Sadar",
                                            "name" => "যশোর সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Chaugachha",
                                            "name" => "চৌগাছা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Manirampur",
                                            "name" => "মনিরামপুর ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Jhikargachha",
                                            "name" => "ঝিকরগাছা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sharsha",
                                            "name" => "সারশা",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Jhenaidah",
                                    "name" => "ঝিনাইদহ",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Jhenaidah Sadar",
                                            "name" => "ঝিনাইদহ সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Maheshpur",
                                            "name" => "মহেশপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kaliganj",
                                            "name" => "কালীগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kotchandpur",
                                            "name" => "কোট চাঁদপুর ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Shailkupa",
                                            "name" => "শৈলকুপা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Harinakunda",
                                            "name" => "হাড়িনাকুন্দা",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Khulna",
                                    "name" => "খুলনা",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Terokhada",
                                            "name" => "তেরোখাদা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Batiaghata",
                                            "name" => "বাটিয়াঘাটা ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Dacope",
                                            "name" => "ডাকপে",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Dumuria",
                                            "name" => "ডুমুরিয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Dighalia",
                                            "name" => "দিঘলিয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Koyra",
                                            "name" => "কয়ড়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Paikgachha",
                                            "name" => "পাইকগাছা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Phultala",
                                            "name" => "ফুলতলা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Rupsa",
                                            "name" => "রূপসা",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Kushtia",
                                    "name" => "কুষ্টিয়া",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Kushtia Sadar",
                                            "name" => "কুষ্টিয়া সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kumarkhali",
                                            "name" => "কুমারখালি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Daulatpur",
                                            "name" => "দৌলতপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Mirpur",
                                            "name" => "মিরপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Bheramara",
                                            "name" => "ভেরামারা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Khoksa",
                                            "name" => "খোকসা",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Magura",
                                    "name" => "মাগুরা",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Magura Sadar",
                                            "name" => "মাগুরা সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Mohammadpur",
                                            "name" => "মোহাম্মাদপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Shalikha",
                                            "name" => "শালিখা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sreepur",
                                            "name" => "শ্রীপুর",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Meherpur",
                                    "name" => "মেহেরপুর",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "angni",
                                            "name" => "আংনি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Mujib Nagar",
                                            "name" => "মুজিব নগর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Meherpur-S",
                                            "name" => "মেহেরপুর সদর",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Narail",
                                    "name" => "নড়াইল",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Narail-S Upazilla",
                                            "name" => "নড়াইল সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Lohagara Upazilla",
                                            "name" => "লোহাগাড়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kalia Upazilla",
                                            "name" => "কালিয়া",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Satkhira",
                                    "name" => "সাতক্ষীরা",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Satkhira Sadar",
                                            "name" => "সাতক্ষীরা সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Assasuni",
                                            "name" => "আসসাশুনি ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Debhata",
                                            "name" => "দেভাটা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Tala",
                                            "name" => "তালা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kalaroa",
                                            "name" => "কলরোয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kaliganj",
                                            "name" => "কালীগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Shyamnagar",
                                            "name" => "শ্যামনগর",
                                            "children" => []
                                        ]
                                    ]
                                ]
                            ]

                        ],
                        [
                            "name" => "রাজশাহী",
                            "slug" => "Rajshahi",
                            "value" => "220",
                            "children" =>
                            [
                                [
                                    "slug" => "Bogura",
                                    "name" => "বগুড়া",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Adamdighi",
                                            "name" => "আদমদিঘী",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Bogra Sadar",
                                            "name" => "বগুড়া সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sherpur",
                                            "name" => "শেরপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Dhunat",
                                            "name" => "ধুনট",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Dhupchanchia",
                                            "name" => "দুপচাচিয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Gabtali",
                                            "name" => "গাবতলি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kahaloo",
                                            "name" => "কাহালু",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Nandigram",
                                            "name" => "নন্দিগ্রাম",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sahajanpur",
                                            "name" => "শাহজাহানপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sariakandi",
                                            "name" => "সারিয়াকান্দি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Shibganj",
                                            "name" => "শিবগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sonatala",
                                            "name" => "সোনাতলা",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Joypurhat",
                                    "name" => "জয়পুরহাট",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Joypurhat S",
                                            "name" => "জয়পুরহাট সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Akkelpur",
                                            "name" => "আক্কেলপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kalai",
                                            "name" => "কালাই",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Khetlal",
                                            "name" => "খেতলাল",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Panchbibi",
                                            "name" => "পাঁচবিবি",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Naogaon",
                                    "name" => "নওগাঁ",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Naogaon Sadar",
                                            "name" => "নওগাঁ সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Mohadevpur",
                                            "name" => "মহাদেবপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Manda",
                                            "name" => "মান্দা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Niamatpur",
                                            "name" => "নিয়ামতপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Atrai",
                                            "name" => "আত্রাই",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Raninagar",
                                            "name" => "রাণীনগর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Patnitala",
                                            "name" => "পত্নীতলা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Dhamoirhat",
                                            "name" => "ধামইরহাট ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sapahar",
                                            "name" => "সাপাহার",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Porsha",
                                            "name" => "পোরশা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Badalgachhi",
                                            "name" => "বদলগাছি",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Natore",
                                    "name" => "নাটোর",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Natore Sadar",
                                            "name" => "নাটোর সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Baraigram",
                                            "name" => "বড়াইগ্রাম",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Bagatipara",
                                            "name" => "বাগাতিপাড়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Lalpur",
                                            "name" => "লালপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Natore Sadar",
                                            "name" => "নাটোর সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Baraigram",
                                            "name" => "বড়াই গ্রাম",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Chapainawabganj",
                                    "name" => "চাঁপাইনবাবগঞ্জ",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Bholahat",
                                            "name" => "ভোলাহাট",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Gomastapur",
                                            "name" => "গোমস্তাপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Nachole",
                                            "name" => "নাচোল",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Nawabganj Sadar",
                                            "name" => "নবাবগঞ্জ সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Shibganj",
                                            "name" => "শিবগঞ্জ",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Pabna",
                                    "name" => "পাবনা",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Atgharia",
                                            "name" => "আটঘরিয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Bera",
                                            "name" => "বেড়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Bhangura",
                                            "name" => "ভাঙ্গুরা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Chatmohar",
                                            "name" => "চাটমোহর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Faridpur",
                                            "name" => "ফরিদপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Ishwardi",
                                            "name" => "ঈশ্বরদী",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Pabna Sadar",
                                            "name" => "পাবনা সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Santhia",
                                            "name" => "সাথিয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sujanagar",
                                            "name" => "সুজানগর",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Rajshahi",
                                    "name" => "রাজশাহী",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Bagha",
                                            "name" => "বাঘা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Bagmara",
                                            "name" => "বাগমারা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Charghat",
                                            "name" => "চারঘাট",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Durgapur",
                                            "name" => "দুর্গাপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Godagari",
                                            "name" => "গোদাগারি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Mohanpur",
                                            "name" => "মোহনপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Paba",
                                            "name" => "পবা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Puthia",
                                            "name" => "পুঠিয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Tanore",
                                            "name" => "তানোর",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Sirajgonj",
                                    "name" => "সিরাজগঞ্জ",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Sirajganj Sadar",
                                            "name" => "সিরাজগঞ্জ সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Belkuchi",
                                            "name" => "বেলকুচি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Chauhali",
                                            "name" => "চৌহালি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kamarkhanda",
                                            "name" => "কামারখান্দা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kazipur",
                                            "name" => "কাজীপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Raiganj",
                                            "name" => "রায়গঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Shahjadpur",
                                            "name" => "শাহজাদপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Tarash",
                                            "name" => "তারাশ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Ullahpara",
                                            "name" => "উল্লাপাড়া",
                                            "children" => []
                                        ]
                                    ]
                                ]
                            ]

                        ],
                        [
                            "name" => "রংপুর",
                            "slug" => "Rangpur",
                            "value" => "220",
                            "children" =>
                            [
                                [
                                    "slug" => "Dinajpur",
                                    "name" => "দিনাজপুর",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Birampur",
                                            "name" => "বিরামপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Birganj",
                                            "name" => "বীরগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Biral",
                                            "name" => "বিড়াল",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Bochaganj",
                                            "name" => "বোচাগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Chirirbandar",
                                            "name" => "চিরিরবন্দর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Phulbari",
                                            "name" => "ফুলবাড়ি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Ghoraghat",
                                            "name" => "ঘোড়াঘাট",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Hakimpur",
                                            "name" => "হাকিমপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kaharole",
                                            "name" => "কাহারোল",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Khansama",
                                            "name" => "খানসামা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Dinajpur Sadar",
                                            "name" => "দিনাজপুর সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Nawabganj",
                                            "name" => "নবাবগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Parbatipur",
                                            "name" => "পার্বতীপুর",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Gaibandha",
                                    "name" => "গাইবান্ধা",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Fulchhari",
                                            "name" => "ফুলছড়ি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Gaibandha sadar",
                                            "name" => "গাইবান্ধা সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Gobindaganj",
                                            "name" => "গোবিন্দগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Palashbari",
                                            "name" => "পলাশবাড়ী",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sadullapur",
                                            "name" => "সাদুল্যাপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Saghata",
                                            "name" => "সাঘাটা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sundarganj",
                                            "name" => "সুন্দরগঞ্জ",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Kurigram",
                                    "name" => "কুড়িগ্রাম",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Kurigram Sadar",
                                            "name" => "কুড়িগ্রাম সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Nageshwari",
                                            "name" => "নাগেশ্বরী",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Bhurungamari",
                                            "name" => "ভুরুঙ্গামারি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Phulbari",
                                            "name" => "ফুলবাড়ি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Rajarhat",
                                            "name" => "রাজারহাট",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Ulipur",
                                            "name" => "উলিপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Chilmari",
                                            "name" => "চিলমারি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Rowmari",
                                            "name" => "রউমারি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Char Rajibpur",
                                            "name" => "চর রাজিবপুর",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Lalmonirhat",
                                    "name" => "লালমনিরহাট",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Lalmanirhat Sadar",
                                            "name" => "লালমনিরহাট সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Aditmari",
                                            "name" => "আদিতমারি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kaliganj",
                                            "name" => "কালীগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Hatibandha",
                                            "name" => "হাতিবান্ধা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Patgram",
                                            "name" => "পাটগ্রাম",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Nilphamari",
                                    "name" => "নীলফামারী",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Nilphamari Sadar",
                                            "name" => "নীলফামারী সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Saidpur",
                                            "name" => "সৈয়দপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Jaldhaka",
                                            "name" => "জলঢাকা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kishoreganj",
                                            "name" => "কিশোরগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Domar",
                                            "name" => "ডোমার",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Dimla",
                                            "name" => "ডিমলা",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Panchagarh",
                                    "name" => "পঞ্চগড়",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Panchagarh Sadar",
                                            "name" => "পঞ্চগড় সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Debiganj",
                                            "name" => "দেবীগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Boda",
                                            "name" => "বোদা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Atwari",
                                            "name" => "আটোয়ারি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Tetulia",
                                            "name" => "তেতুলিয়া",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Rangpur",
                                    "name" => "রংপুর",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Badarganj",
                                            "name" => "বদরগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Mithapukur",
                                            "name" => "মিঠাপুকুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Gangachara",
                                            "name" => "গঙ্গাচরা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kaunia",
                                            "name" => "কাউনিয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Rangpur Sadar",
                                            "name" => "রংপুর সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Pirgachha",
                                            "name" => "পীরগাছা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Pirganj",
                                            "name" => "পীরগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Taraganj",
                                            "name" => "তারাগঞ্জ",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Thakurgaon",
                                    "name" => "ঠাকুরগাঁও",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Thakurgaon Sadar",
                                            "name" => "ঠাকুরগাঁও সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Pirganj",
                                            "name" => "পীরগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Baliadangi",
                                            "name" => "বালিয়াডাঙ্গি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Haripur",
                                            "name" => "হরিপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Ranisankail",
                                            "name" => "রাণীসংকইল",
                                            "children" => []
                                        ]
                                    ]
                                ]
                            ]

                        ],
                        [
                            "name" => "সিলেট",
                            "slug" => "Sylhet",
                            "value" => "220",
                            "children" =>
                            [
                                [
                                    "slug" => "Habiganj",
                                    "name" => "হবিগঞ্জ",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Ajmiriganj",
                                            "name" => "আজমিরিগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Baniachang",
                                            "name" => "বানিয়াচং",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Bahubal",
                                            "name" => "বাহুবল",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Chunarughat",
                                            "name" => "চুনারুঘাট",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Habiganj Sadar",
                                            "name" => "হবিগঞ্জ সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Lakhai",
                                            "name" => "লাক্ষাই",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Madhabpur",
                                            "name" => "মাধবপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Nabiganj",
                                            "name" => "নবীগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Shaistagonj",
                                            "name" => "শায়েস্তাগঞ্জ",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Moulvibazar",
                                    "name" => "মৌলভীবাজার",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Moulvibazar Sadar",
                                            "name" => "মৌলভীবাজার",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Barlekha",
                                            "name" => "বড়লেখা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Juri",
                                            "name" => "জুড়ি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kamalganj",
                                            "name" => "কামালগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kulaura",
                                            "name" => "কুলাউরা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Rajnagar",
                                            "name" => "রাজনগর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sreemangal",
                                            "name" => "শ্রীমঙ্গল",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Sunamganj",
                                    "name" => "সুনামগঞ্জ",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Bishwamvarpur",
                                            "name" => "বিসশম্ভারপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Chhatak",
                                            "name" => "ছাতক",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Derai",
                                            "name" => "দেড়াই",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Dharampasha",
                                            "name" => "ধরমপাশা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Dowarabazar",
                                            "name" => "দোয়ারাবাজার",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Jagannathpur",
                                            "name" => "জগন্নাথপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Jamalganj",
                                            "name" => "জামালগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sulla",
                                            "name" => "সুল্লা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sunamganj Sadar",
                                            "name" => "সুনামগঞ্জ সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Shanthiganj",
                                            "name" => "শান্তিগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Tahirpur",
                                            "name" => "তাহিরপুর",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Sylhet",
                                    "name" => "সিলেট",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Sylhet Sadar",
                                            "name" => "সিলেট সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Beanibazar",
                                            "name" => "বেয়ানিবাজার",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Bishwanath",
                                            "name" => "বিশ্বনাথ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Dakshin Surma",
                                            "name" => "দক্ষিণ সুরমা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Balaganj",
                                            "name" => "বালাগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Companiganj",
                                            "name" => "কোম্পানিগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Fenchuganj",
                                            "name" => "ফেঞ্চুগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Golapganj",
                                            "name" => "গোলাপগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Gowainghat",
                                            "name" => "গোয়াইনঘাট",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Jaintiapur",
                                            "name" => "জয়ন্তপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kanaighat",
                                            "name" => "কানাইঘাট",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Zakiganj",
                                            "name" => "জাকিগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Nobigonj",
                                            "name" => "নবীগঞ্জ",
                                            "children" => []
                                        ]
                                    ]
                                ]
                            ]

                        ],
                        [
                            "name" => "ময়মনসিংহ",
                            "slug" => "Mymensingh",
                            "value" => "220",
                            "children" =>
                            [
                                [
                                    "slug" => "Jamalpur",
                                    "name" => "জামালপুর",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Dewanganj",
                                            "name" => "দেওয়ানগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Baksiganj",
                                            "name" => "বকসিগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Islampur",
                                            "name" => "ইসলামপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Jamalpur Sadar",
                                            "name" => "জামালপুর সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Madarganj",
                                            "name" => "মাদারগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Melandaha",
                                            "name" => "মেলানদাহা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sarishabari",
                                            "name" => "সরিষাবাড়ি ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Narundi Police I.C",
                                            "name" => "নারুন্দি",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Mymensingh",
                                    "name" => "ময়মনসিংহ",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Bhaluka",
                                            "name" => "ভালুকা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Trishal",
                                            "name" => "ত্রিশাল",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Haluaghat",
                                            "name" => "হালুয়াঘাট",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Muktagachha",
                                            "name" => "মুক্তাগাছা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Dhobaura",
                                            "name" => "ধবারুয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Fulbaria",
                                            "name" => "ফুলবাড়িয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Gaffargaon",
                                            "name" => "গফরগাঁও",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Gauripur",
                                            "name" => "গৌরিপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Ishwarganj",
                                            "name" => "ঈশ্বরগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Mymensingh Sadar",
                                            "name" => "ময়মনসিং সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Nandail",
                                            "name" => "নন্দাইল",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Phulpur",
                                            "name" => "ফুলপুর",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Netrokona",
                                    "name" => "নেত্রকোণা",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Kendua Upazilla",
                                            "name" => "কেন্দুয়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Atpara Upazilla",
                                            "name" => "আটপাড়া",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Barhatta Upazilla",
                                            "name" => "বরহাট্টা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Durgapur Upazilla",
                                            "name" => "দুর্গাপুর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Kalmakanda Upazilla",
                                            "name" => "কলমাকান্দা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Madan Upazilla",
                                            "name" => "মদন",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Mohanganj Upazilla",
                                            "name" => "মোহনগঞ্জ",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Netrakona-S Upazilla",
                                            "name" => "নেত্রকোনা সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Purbadhala Upazilla",
                                            "name" => "পূর্বধলা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Khaliajuri Upazilla",
                                            "name" => "খালিয়াজুরি",
                                            "children" => []
                                        ]
                                    ]
                                ],
                                [
                                    "slug" => "Sherpur",
                                    "name" => "শেরপুর",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Jhenaigati",
                                            "name" => "ঝিনাইগাতি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Nakla",
                                            "name" => "নাকলা",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Nalitabari",
                                            "name" => "নালিতাবাড়ি",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sherpur Sadar",
                                            "name" => "শেরপুর সদর",
                                            "children" => []
                                        ],
                                        [
                                            "slug" => "Sreebardi",
                                            "name" => "শ্রীবরদি",
                                            "children" => []
                                        ]
                                    ]
                                ]
                            ]

                        ]
                    ]
                ],
                [
                    'name' => 'ভারত',
                    'slug' => 'India',
                    "children" => []
                ],
                [
                    'name' => 'পাকিস্তান',
                    'slug' => 'Pakistan',
                    "children" => []
                ],
                [
                    'name' => 'চীন',
                    'slug' => 'China',
                    "children" => []
                ],
            ]
        ];
        Region::create($asia);

        // $northAmerica = [
        //     "name" => "উত্তর আমেরিকা",
        //     "slug" => "North America",
        //     "children" =>
        //         [
        //             [
        //                 'name' => 'আমেরিকা',
        //                 'slug' => 'USA',
        //             ],
        //             [
        //                 'name' => 'কানাডা',
        //                 'slug' => 'Canada',
        //             ],
        //         ]
        // ];

        // Region::create($northAmerica);
    }
}