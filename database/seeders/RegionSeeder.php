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
                            "children" =>
                            [
                                [
                                    "slug" => "Barguna",
                                    "name" => "বরগুনা",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Amtali",
                                            "name" => "আমতলী"
                                        ],
                                        [
                                            "slug" => "Bamna",
                                            "name" => "বামনা"
                                        ],
                                        [
                                            "slug" => "Barguna Sadar",
                                            "name" => "বরগুনা সদর"
                                        ],
                                        [
                                            "slug" => "Betagi",
                                            "name" => "বেতাগি"
                                        ],
                                        [
                                            "slug" => "Patharghata",
                                            "name" => "পাথরঘাটা"
                                        ],
                                        [
                                            "slug" => "Taltali",
                                            "name" => "তালতলী"
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
                                            "name" => "মুলাদি"
                                        ],
                                        [
                                            "slug" => "Babuganj",
                                            "name" => "বাবুগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Agailjhara",
                                            "name" => "আগাইলঝরা"
                                        ],
                                        [
                                            "slug" => "Barisal Sadar",
                                            "name" => "বরিশাল সদর"
                                        ],
                                        [
                                            "slug" => "Bakerganj",
                                            "name" => "বাকেরগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Banaripara",
                                            "name" => "বানাড়িপারা"
                                        ],
                                        [
                                            "slug" => "Gaurnadi",
                                            "name" => "গৌরনদী"
                                        ],
                                        [
                                            "slug" => "Hizla",
                                            "name" => "হিজলা"
                                        ],
                                        [
                                            "slug" => "Mehendiganj",
                                            "name" => "মেহেদিগঞ্জ "
                                        ],
                                        [
                                            "slug" => "Wazirpur",
                                            "name" => "ওয়াজিরপুর"
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
                                            "name" => "ভোলা সদর"
                                        ],
                                        [
                                            "slug" => "Burhanuddin",
                                            "name" => "বুরহানউদ্দিন"
                                        ],
                                        [
                                            "slug" => "Char Fasson",
                                            "name" => "চর ফ্যাশন"
                                        ],
                                        [
                                            "slug" => "Daulatkhan",
                                            "name" => "দৌলতখান"
                                        ],
                                        [
                                            "slug" => "Lalmohan",
                                            "name" => "লালমোহন"
                                        ],
                                        [
                                            "slug" => "Manpura",
                                            "name" => "মনপুরা"
                                        ],
                                        [
                                            "slug" => "Tazumuddin",
                                            "name" => "তাজুমুদ্দিন"
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
                                            "name" => "ঝালকাঠি সদর"
                                        ],
                                        [
                                            "slug" => "Kathalia",
                                            "name" => "কাঁঠালিয়া"
                                        ],
                                        [
                                            "slug" => "Nalchity",
                                            "name" => "নালচিতি"
                                        ],
                                        [
                                            "slug" => "Rajapur",
                                            "name" => "রাজাপুর"
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
                                            "name" => "বাউফল"
                                        ],
                                        [
                                            "slug" => "Dashmina",
                                            "name" => "দশমিনা"
                                        ],
                                        [
                                            "slug" => "Galachipa",
                                            "name" => "গলাচিপা"
                                        ],
                                        [
                                            "slug" => "Kalapara",
                                            "name" => "কালাপারা"
                                        ],
                                        [
                                            "slug" => "Mirzaganj",
                                            "name" => "মির্জাগঞ্জ "
                                        ],
                                        [
                                            "slug" => "Patuakhali Sadar",
                                            "name" => "পটুয়াখালী সদর"
                                        ],
                                        [
                                            "slug" => "Dumki",
                                            "name" => "ডুমকি"
                                        ],
                                        [
                                            "slug" => "Rangabali",
                                            "name" => "রাঙ্গাবালি"
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
                                            "name" => "ভ্যান্ডারিয়া"
                                        ],
                                        [
                                            "slug" => "Kaukhali",
                                            "name" => "কাউখালি"
                                        ],
                                        [
                                            "slug" => "Mathbaria",
                                            "name" => "মাঠবাড়িয়া"
                                        ],
                                        [
                                            "slug" => "Nazirpur",
                                            "name" => "নাজিরপুর"
                                        ],
                                        [
                                            "slug" => "Nesarabad",
                                            "name" => "নেসারাবাদ"
                                        ],
                                        [
                                            "slug" => "Pirojpur Sadar",
                                            "name" => "পিরোজপুর সদর"
                                        ],
                                        [
                                            "slug" => "Zianagar",
                                            "name" => "জিয়ানগর"
                                        ]
                                    ]
                                ]
                            ]

                        ],
                        [
                            "name" => "চট্টগ্রাম",
                            "slug" => "Chattogram",
                            "children" =>
                            [
                                [
                                    "slug" => "Bandarban",
                                    "name" => "বান্দরবান",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Bandarban Sadar",
                                            "name" => "বান্দরবন সদর"
                                        ],
                                        [
                                            "slug" => "Thanchi",
                                            "name" => "থানচি"
                                        ],
                                        [
                                            "slug" => "Lama",
                                            "name" => "লামা"
                                        ],
                                        [
                                            "slug" => "Naikhongchhari",
                                            "name" => "নাইখংছড়ি "
                                        ],
                                        [
                                            "slug" => "Ali kadam",
                                            "name" => "আলী কদম"
                                        ],
                                        [
                                            "slug" => "Rowangchhari",
                                            "name" => "রউয়াংছড়ি "
                                        ],
                                        [
                                            "slug" => "Ruma",
                                            "name" => "রুমা"
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
                                            "name" => "ব্রাহ্মণবাড়িয়া সদর"
                                        ],
                                        [
                                            "slug" => "Ashuganj",
                                            "name" => "আশুগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Nasirnagar",
                                            "name" => "নাসির নগর"
                                        ],
                                        [
                                            "slug" => "Nabinagar",
                                            "name" => "নবীনগর"
                                        ],
                                        [
                                            "slug" => "Sarail",
                                            "name" => "সরাইল"
                                        ],
                                        [
                                            "slug" => "Shahbazpur Town",
                                            "name" => "শাহবাজপুর টাউন"
                                        ],
                                        [
                                            "slug" => "Kasba",
                                            "name" => "কসবা"
                                        ],
                                        [
                                            "slug" => "Akhaura",
                                            "name" => "আখাউরা"
                                        ],
                                        [
                                            "slug" => "Bancharampur",
                                            "name" => "বাঞ্ছারামপুর"
                                        ],
                                        [
                                            "slug" => "Bijoynagar",
                                            "name" => "বিজয় নগর"
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
                                            "name" => "চাঁদপুর সদর"
                                        ],
                                        [
                                            "slug" => "Faridganj",
                                            "name" => "ফরিদগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Haimchar",
                                            "name" => "হাইমচর"
                                        ],
                                        [
                                            "slug" => "Haziganj",
                                            "name" => "হাজীগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Kachua",
                                            "name" => "কচুয়া"
                                        ],
                                        [
                                            "slug" => "Matlab Uttar",
                                            "name" => "মতলব উত্তর"
                                        ],
                                        [
                                            "slug" => "Matlab Dakkhin",
                                            "name" => "মতলব দক্ষিণ"
                                        ],
                                        [
                                            "slug" => "Shahrasti",
                                            "name" => "শাহরাস্তি"
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
                                            "name" => "আনোয়ারা"
                                        ],
                                        [
                                            "slug" => "Banshkhali",
                                            "name" => "বাশখালি"
                                        ],
                                        [
                                            "slug" => "Boalkhali",
                                            "name" => "বোয়ালখালি"
                                        ],
                                        [
                                            "slug" => "Chandanaish",
                                            "name" => "চন্দনাইশ"
                                        ],
                                        [
                                            "slug" => "Fatikchhari",
                                            "name" => "ফটিকছড়ি"
                                        ],
                                        [
                                            "slug" => "Hathazari",
                                            "name" => "হাঠহাজারী"
                                        ],
                                        [
                                            "slug" => "Lohagara",
                                            "name" => "লোহাগারা"
                                        ],
                                        [
                                            "slug" => "Mirsharai",
                                            "name" => "মিরসরাই"
                                        ],
                                        [
                                            "slug" => "Patiya",
                                            "name" => "পটিয়া"
                                        ],
                                        [
                                            "slug" => "Rangunia",
                                            "name" => "রাঙ্গুনিয়া"
                                        ],
                                        [
                                            "slug" => "Raozan",
                                            "name" => "রাউজান"
                                        ],
                                        [
                                            "slug" => "Sandwip",
                                            "name" => "সন্দ্বীপ"
                                        ],
                                        [
                                            "slug" => "Satkania",
                                            "name" => "সাতকানিয়া"
                                        ],
                                        [
                                            "slug" => "Sitakunda",
                                            "name" => "সীতাকুণ্ড"
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
                                            "name" => "বড়ুরা"
                                        ],
                                        [
                                            "slug" => "Brahmanpara",
                                            "name" => "ব্রাহ্মণপাড়া"
                                        ],
                                        [
                                            "slug" => "Burichong",
                                            "name" => "বুড়িচং"
                                        ],
                                        [
                                            "slug" => "Chandina",
                                            "name" => "চান্দিনা"
                                        ],
                                        [
                                            "slug" => "Chauddagram",
                                            "name" => "চৌদ্দগ্রাম"
                                        ],
                                        [
                                            "slug" => "Daudkandi",
                                            "name" => "দাউদকান্দি"
                                        ],
                                        [
                                            "slug" => "Debidwar",
                                            "name" => "দেবীদ্বার"
                                        ],
                                        [
                                            "slug" => "Homna",
                                            "name" => "হোমনা"
                                        ],
                                        [
                                            "slug" => "Comilla Sadar",
                                            "name" => "কুমিল্লা সদর"
                                        ],
                                        [
                                            "slug" => "Laksam",
                                            "name" => "লাকসাম"
                                        ],
                                        [
                                            "slug" => "Monohorgonj",
                                            "name" => "মনোহরগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Meghna",
                                            "name" => "মেঘনা"
                                        ],
                                        [
                                            "slug" => "Muradnagar",
                                            "name" => "মুরাদনগর"
                                        ],
                                        [
                                            "slug" => "Nangalkot",
                                            "name" => "নাঙ্গালকোট"
                                        ],
                                        [
                                            "slug" => "Comilla Sadar South",
                                            "name" => "কুমিল্লা সদর দক্ষিণ"
                                        ],
                                        [
                                            "slug" => "Titas",
                                            "name" => "তিতাস"
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
                                            "name" => "চকরিয়া"
                                        ],
                                        [
                                            "slug" => "Cox's Bazar Sadar",
                                            "name" => "কক্স বাজার সদর"
                                        ],
                                        [
                                            "slug" => "Kutubdia",
                                            "name" => "কুতুবদিয়া"
                                        ],
                                        [
                                            "slug" => "Maheshkhali",
                                            "name" => "মহেশখালী"
                                        ],
                                        [
                                            "slug" => "Ramu",
                                            "name" => "রামু"
                                        ],
                                        [
                                            "slug" => "Teknaf",
                                            "name" => "টেকনাফ"
                                        ],
                                        [
                                            "slug" => "Ukhia",
                                            "name" => "উখিয়া"
                                        ],
                                        [
                                            "slug" => "Pekua",
                                            "name" => "পেকুয়া"
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
                                            "name" => "ফেনী সদর"
                                        ],
                                        [
                                            "slug" => "Chagalnaiya",
                                            "name" => "ছাগল নাইয়া"
                                        ],
                                        [
                                            "slug" => "Daganbhyan",
                                            "name" => "দাগানভিয়া"
                                        ],
                                        [
                                            "slug" => "Parshuram",
                                            "name" => "পরশুরাম"
                                        ],
                                        [
                                            "slug" => "Fhulgazi",
                                            "name" => "ফুলগাজি"
                                        ],
                                        [
                                            "slug" => "Sonagazi",
                                            "name" => "সোনাগাজি"
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
                                            "name" => "দিঘিনালা "
                                        ],
                                        [
                                            "slug" => "Khagrachhari",
                                            "name" => "খাগড়াছড়ি"
                                        ],
                                        [
                                            "slug" => "Lakshmichhari",
                                            "name" => "লক্ষ্মীছড়ি"
                                        ],
                                        [
                                            "slug" => "Mahalchhari",
                                            "name" => "মহলছড়ি"
                                        ],
                                        [
                                            "slug" => "Manikchhari",
                                            "name" => "মানিকছড়ি"
                                        ],
                                        [
                                            "slug" => "Matiranga",
                                            "name" => "মাটিরাঙ্গা"
                                        ],
                                        [
                                            "slug" => "Panchhari",
                                            "name" => "পানছড়ি"
                                        ],
                                        [
                                            "slug" => "Ramgarh",
                                            "name" => "রামগড়"
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
                                            "name" => "লক্ষ্মীপুর সদর"
                                        ],
                                        [
                                            "slug" => "Raipur",
                                            "name" => "রায়পুর"
                                        ],
                                        [
                                            "slug" => "Ramganj",
                                            "name" => "রামগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Ramgati",
                                            "name" => "রামগতি"
                                        ],
                                        [
                                            "slug" => "Komol Nagar",
                                            "name" => "কমল নগর"
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
                                            "name" => "নোয়াখালী সদর"
                                        ],
                                        [
                                            "slug" => "Begumganj",
                                            "name" => "বেগমগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Chatkhil",
                                            "name" => "চাটখিল"
                                        ],
                                        [
                                            "slug" => "Companyganj",
                                            "name" => "কোম্পানীগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Shenbag",
                                            "name" => "শেনবাগ"
                                        ],
                                        [
                                            "slug" => "Hatia",
                                            "name" => "হাতিয়া"
                                        ],
                                        [
                                            "slug" => "Kobirhat",
                                            "name" => "কবিরহাট "
                                        ],
                                        [
                                            "slug" => "Sonaimuri",
                                            "name" => "সোনাইমুরি"
                                        ],
                                        [
                                            "slug" => "Suborno Char",
                                            "name" => "সুবর্ণ চর "
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
                                            "name" => "রাঙ্গামাটি সদর"
                                        ],
                                        [
                                            "slug" => "Belaichhari",
                                            "name" => "বেলাইছড়ি"
                                        ],
                                        [
                                            "slug" => "Bagaichhari",
                                            "name" => "বাঘাইছড়ি"
                                        ],
                                        [
                                            "slug" => "Barkal",
                                            "name" => "বরকল"
                                        ],
                                        [
                                            "slug" => "Juraichhari",
                                            "name" => "জুরাইছড়ি"
                                        ],
                                        [
                                            "slug" => "Rajasthali",
                                            "name" => "রাজাস্থলি"
                                        ],
                                        [
                                            "slug" => "Kaptai",
                                            "name" => "কাপ্তাই"
                                        ],
                                        [
                                            "slug" => "Langadu",
                                            "name" => "লাঙ্গাডু"
                                        ],
                                        [
                                            "slug" => "Nannerchar",
                                            "name" => "নান্নেরচর "
                                        ],
                                        [
                                            "slug" => "Kaukhali",
                                            "name" => "কাউখালি"
                                        ]
                                    ]
                                ]
                            ]

                        ],
                        [
                            "name" => "ঢাকা",
                            "slug" => "Dhaka",
                            "children" =>
                            [
                                [
                                    "slug" => "Dhaka",
                                    "name" => "ঢাকা",
                                    "value" => "50",
                                    "children" => [
                                        [
                                            "slug" => "Dhamrai",
                                            "name" => "ধামরাই"
                                        ],
                                        [
                                            "slug" => "Dohar",
                                            "name" => "দোহার"
                                        ],
                                        [
                                            "slug" => "Keraniganj",
                                            "name" => "কেরানীগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Nawabganj",
                                            "name" => "নবাবগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Savar",
                                            "name" => "সাভার"
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
                                            "name" => "ফরিদপুর সদর"
                                        ],
                                        [
                                            "slug" => "Boalmari",
                                            "name" => "বোয়ালমারী"
                                        ],
                                        [
                                            "slug" => "Alfadanga",
                                            "name" => "আলফাডাঙ্গা"
                                        ],
                                        [
                                            "slug" => "Madhukhali",
                                            "name" => "মধুখালি"
                                        ],
                                        [
                                            "slug" => "Bhanga",
                                            "name" => "ভাঙ্গা"
                                        ],
                                        [
                                            "slug" => "Nagarkanda",
                                            "name" => "নগরকান্ড"
                                        ],
                                        [
                                            "slug" => "Charbhadrasan",
                                            "name" => "চরভদ্রাসন "
                                        ],
                                        [
                                            "slug" => "Sadarpur",
                                            "name" => "সদরপুর"
                                        ],
                                        [
                                            "slug" => "Shaltha",
                                            "name" => "শালথা"
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
                                            "name" => "গাজীপুর সদর"
                                        ],
                                        [
                                            "slug" => "Kaliakior",
                                            "name" => "কালিয়াকৈর"
                                        ],
                                        [
                                            "slug" => "Kapasia",
                                            "name" => "কাপাসিয়া"
                                        ],
                                        [
                                            "slug" => "Sripur",
                                            "name" => "শ্রীপুর"
                                        ],
                                        [
                                            "slug" => "Kaliganj",
                                            "name" => "কালীগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Tongi",
                                            "name" => "টঙ্গি"
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
                                            "name" => "গোপালগঞ্জ সদর"
                                        ],
                                        [
                                            "slug" => "Kashiani",
                                            "name" => "কাশিয়ানি"
                                        ],
                                        [
                                            "slug" => "Kotalipara",
                                            "name" => "কোটালিপাড়া"
                                        ],
                                        [
                                            "slug" => "Muksudpur",
                                            "name" => "মুকসুদপুর"
                                        ],
                                        [
                                            "slug" => "Tungipara",
                                            "name" => "টুঙ্গিপাড়া"
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
                                            "name" => "অষ্টগ্রাম"
                                        ],
                                        [
                                            "slug" => "Bajitpur",
                                            "name" => "বাজিতপুর"
                                        ],
                                        [
                                            "slug" => "Bhairab",
                                            "name" => "ভৈরব"
                                        ],
                                        [
                                            "slug" => "Hossainpur",
                                            "name" => "হোসেনপুর "
                                        ],
                                        [
                                            "slug" => "Itna",
                                            "name" => "ইটনা"
                                        ],
                                        [
                                            "slug" => "Karimganj",
                                            "name" => "করিমগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Katiadi",
                                            "name" => "কতিয়াদি"
                                        ],
                                        [
                                            "slug" => "Kishoreganj Sadar",
                                            "name" => "কিশোরগঞ্জ সদর"
                                        ],
                                        [
                                            "slug" => "Kuliarchar",
                                            "name" => "কুলিয়ারচর"
                                        ],
                                        [
                                            "slug" => "Mithamain",
                                            "name" => "মিঠামাইন"
                                        ],
                                        [
                                            "slug" => "Nikli",
                                            "name" => "নিকলি"
                                        ],
                                        [
                                            "slug" => "Pakundia",
                                            "name" => "পাকুন্ডা"
                                        ],
                                        [
                                            "slug" => "Tarail",
                                            "name" => "তাড়াইল"
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
                                            "name" => "মাদারীপুর সদর"
                                        ],
                                        [
                                            "slug" => "Kalkini",
                                            "name" => "কালকিনি"
                                        ],
                                        [
                                            "slug" => "Rajoir",
                                            "name" => "রাজইর"
                                        ],
                                        [
                                            "slug" => "Shibchar",
                                            "name" => "শিবচর"
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
                                            "name" => "মানিকগঞ্জ সদর"
                                        ],
                                        [
                                            "slug" => "Singair",
                                            "name" => "সিঙ্গাইর"
                                        ],
                                        [
                                            "slug" => "Shibalaya",
                                            "name" => "শিবালয়"
                                        ],
                                        [
                                            "slug" => "Saturia",
                                            "name" => "সাঠুরিয়া"
                                        ],
                                        [
                                            "slug" => "Harirampur",
                                            "name" => "হরিরামপুর"
                                        ],
                                        [
                                            "slug" => "Ghior",
                                            "name" => "ঘিওর"
                                        ],
                                        [
                                            "slug" => "Daulatpur",
                                            "name" => "দৌলতপুর"
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
                                            "name" => "লোহাজং"
                                        ],
                                        [
                                            "slug" => "Sreenagar",
                                            "name" => "শ্রীনগর"
                                        ],
                                        [
                                            "slug" => "Munshiganj Sadar",
                                            "name" => "মুন্সিগঞ্জ সদর"
                                        ],
                                        [
                                            "slug" => "Sirajdikhan",
                                            "name" => "সিরাজদিখান"
                                        ],
                                        [
                                            "slug" => "Tongibari",
                                            "name" => "টঙ্গিবাড়ি"
                                        ],
                                        [
                                            "slug" => "Gazaria",
                                            "name" => "গজারিয়া"
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
                                            "name" => "আড়াইহাজার"
                                        ],
                                        [
                                            "slug" => "Sonargaon",
                                            "name" => "সোনারগাঁও"
                                        ],
                                        [
                                            "slug" => "Bandar",
                                            "name" => "বান্দার"
                                        ],
                                        [
                                            "slug" => "Naryanganj Sadar",
                                            "name" => "নারায়ানগঞ্জ সদর"
                                        ],
                                        [
                                            "slug" => "Rupganj",
                                            "name" => "রূপগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Siddirgonj",
                                            "name" => "সিদ্ধিরগঞ্জ"
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
                                            "name" => "বেলাবো"
                                        ],
                                        [
                                            "slug" => "Monohardi",
                                            "name" => "মনোহরদি"
                                        ],
                                        [
                                            "slug" => "Narsingdi Sadar",
                                            "name" => "নরসিংদী সদর"
                                        ],
                                        [
                                            "slug" => "Palash",
                                            "name" => "পলাশ"
                                        ],
                                        [
                                            "slug" => "Raipura, Narsingdi",
                                            "name" => "রায়পুর"
                                        ],
                                        [
                                            "slug" => "Shibpur",
                                            "name" => "শিবপুর"
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
                                            "name" => "বালিয়াকান্দি"
                                        ],
                                        [
                                            "slug" => "Goalandaghat",
                                            "name" => "গোয়ালন্দ ঘাট"
                                        ],
                                        [
                                            "slug" => "Pangsha",
                                            "name" => "পাংশা"
                                        ],
                                        [
                                            "slug" => "Kalukhali",
                                            "name" => "কালুখালি"
                                        ],
                                        [
                                            "slug" => "Rajbari Sadar",
                                            "name" => "রাজবাড়ি সদর"
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
                                            "name" => "শরীয়তপুর সদর "
                                        ],
                                        [
                                            "slug" => "Damudya",
                                            "name" => "দামুদিয়া"
                                        ],
                                        [
                                            "slug" => "Naria",
                                            "name" => "নড়িয়া"
                                        ],
                                        [
                                            "slug" => "Jajira",
                                            "name" => "জাজিরা"
                                        ],
                                        [
                                            "slug" => "Bhedarganj",
                                            "name" => "ভেদারগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Gosairhat",
                                            "name" => "গোসাইর হাট "
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
                                            "name" => "টাঙ্গাইল সদর"
                                        ],
                                        [
                                            "slug" => "Sakhipur",
                                            "name" => "সখিপুর"
                                        ],
                                        [
                                            "slug" => "Basail",
                                            "name" => "বসাইল"
                                        ],
                                        [
                                            "slug" => "Madhupur",
                                            "name" => "মধুপুর"
                                        ],
                                        [
                                            "slug" => "Ghatail",
                                            "name" => "ঘাটাইল"
                                        ],
                                        [
                                            "slug" => "Kalihati",
                                            "name" => "কালিহাতি"
                                        ],
                                        [
                                            "slug" => "Nagarpur",
                                            "name" => "নগরপুর"
                                        ],
                                        [
                                            "slug" => "Mirzapur",
                                            "name" => "মির্জাপুর"
                                        ],
                                        [
                                            "slug" => "Gopalpur",
                                            "name" => "গোপালপুর"
                                        ],
                                        [
                                            "slug" => "Delduar",
                                            "name" => "দেলদুয়ার"
                                        ],
                                        [
                                            "slug" => "Bhuapur",
                                            "name" => "ভুয়াপুর"
                                        ],
                                        [
                                            "slug" => "Dhanbari",
                                            "name" => "ধানবাড়ি"
                                        ]
                                    ]
                                ]
                            ]

                        ],
                        [
                            "name" => "খুলনা",
                            "slug" => "Khulna",
                            "children" =>
                            [
                                [
                                    "slug" => "Bagerhat",
                                    "name" => "বাগেরহাট",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Bagerhat Sadar",
                                            "name" => "বাগেরহাট সদর"
                                        ],
                                        [
                                            "slug" => "Chitalmari",
                                            "name" => "চিতলমাড়ি"
                                        ],
                                        [
                                            "slug" => "Fakirhat",
                                            "name" => "ফকিরহাট"
                                        ],
                                        [
                                            "slug" => "Kachua",
                                            "name" => "কচুয়া"
                                        ],
                                        [
                                            "slug" => "Mollahat",
                                            "name" => "মোল্লাহাট "
                                        ],
                                        [
                                            "slug" => "Mongla",
                                            "name" => "মংলা"
                                        ],
                                        [
                                            "slug" => "Morrelganj",
                                            "name" => "মরেলগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Rampal",
                                            "name" => "রামপাল"
                                        ],
                                        [
                                            "slug" => "Sarankhola",
                                            "name" => "স্মরণখোলা"
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
                                            "name" => "দামুরহুদা"
                                        ],
                                        [
                                            "slug" => "Chuadanga-S",
                                            "name" => "চুয়াডাঙ্গা সদর"
                                        ],
                                        [
                                            "slug" => "Jibannagar",
                                            "name" => "জীবন নগর "
                                        ],
                                        [
                                            "slug" => "Alamdanga",
                                            "name" => "আলমডাঙ্গা"
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
                                            "name" => "অভয়নগর"
                                        ],
                                        [
                                            "slug" => "Keshabpur",
                                            "name" => "কেশবপুর"
                                        ],
                                        [
                                            "slug" => "Bagherpara",
                                            "name" => "বাঘের পাড়া "
                                        ],
                                        [
                                            "slug" => "Jessore Sadar",
                                            "name" => "যশোর সদর"
                                        ],
                                        [
                                            "slug" => "Chaugachha",
                                            "name" => "চৌগাছা"
                                        ],
                                        [
                                            "slug" => "Manirampur",
                                            "name" => "মনিরামপুর "
                                        ],
                                        [
                                            "slug" => "Jhikargachha",
                                            "name" => "ঝিকরগাছা"
                                        ],
                                        [
                                            "slug" => "Sharsha",
                                            "name" => "সারশা"
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
                                            "name" => "ঝিনাইদহ সদর"
                                        ],
                                        [
                                            "slug" => "Maheshpur",
                                            "name" => "মহেশপুর"
                                        ],
                                        [
                                            "slug" => "Kaliganj",
                                            "name" => "কালীগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Kotchandpur",
                                            "name" => "কোট চাঁদপুর "
                                        ],
                                        [
                                            "slug" => "Shailkupa",
                                            "name" => "শৈলকুপা"
                                        ],
                                        [
                                            "slug" => "Harinakunda",
                                            "name" => "হাড়িনাকুন্দা"
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
                                            "name" => "তেরোখাদা"
                                        ],
                                        [
                                            "slug" => "Batiaghata",
                                            "name" => "বাটিয়াঘাটা "
                                        ],
                                        [
                                            "slug" => "Dacope",
                                            "name" => "ডাকপে"
                                        ],
                                        [
                                            "slug" => "Dumuria",
                                            "name" => "ডুমুরিয়া"
                                        ],
                                        [
                                            "slug" => "Dighalia",
                                            "name" => "দিঘলিয়া"
                                        ],
                                        [
                                            "slug" => "Koyra",
                                            "name" => "কয়ড়া"
                                        ],
                                        [
                                            "slug" => "Paikgachha",
                                            "name" => "পাইকগাছা"
                                        ],
                                        [
                                            "slug" => "Phultala",
                                            "name" => "ফুলতলা"
                                        ],
                                        [
                                            "slug" => "Rupsa",
                                            "name" => "রূপসা"
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
                                            "name" => "কুষ্টিয়া সদর"
                                        ],
                                        [
                                            "slug" => "Kumarkhali",
                                            "name" => "কুমারখালি"
                                        ],
                                        [
                                            "slug" => "Daulatpur",
                                            "name" => "দৌলতপুর"
                                        ],
                                        [
                                            "slug" => "Mirpur",
                                            "name" => "মিরপুর"
                                        ],
                                        [
                                            "slug" => "Bheramara",
                                            "name" => "ভেরামারা"
                                        ],
                                        [
                                            "slug" => "Khoksa",
                                            "name" => "খোকসা"
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
                                            "name" => "মাগুরা সদর"
                                        ],
                                        [
                                            "slug" => "Mohammadpur",
                                            "name" => "মোহাম্মাদপুর"
                                        ],
                                        [
                                            "slug" => "Shalikha",
                                            "name" => "শালিখা"
                                        ],
                                        [
                                            "slug" => "Sreepur",
                                            "name" => "শ্রীপুর"
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
                                            "name" => "আংনি"
                                        ],
                                        [
                                            "slug" => "Mujib Nagar",
                                            "name" => "মুজিব নগর"
                                        ],
                                        [
                                            "slug" => "Meherpur-S",
                                            "name" => "মেহেরপুর সদর"
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
                                            "name" => "নড়াইল সদর"
                                        ],
                                        [
                                            "slug" => "Lohagara Upazilla",
                                            "name" => "লোহাগাড়া"
                                        ],
                                        [
                                            "slug" => "Kalia Upazilla",
                                            "name" => "কালিয়া"
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
                                            "name" => "সাতক্ষীরা সদর"
                                        ],
                                        [
                                            "slug" => "Assasuni",
                                            "name" => "আসসাশুনি "
                                        ],
                                        [
                                            "slug" => "Debhata",
                                            "name" => "দেভাটা"
                                        ],
                                        [
                                            "slug" => "Tala",
                                            "name" => "তালা"
                                        ],
                                        [
                                            "slug" => "Kalaroa",
                                            "name" => "কলরোয়া"
                                        ],
                                        [
                                            "slug" => "Kaliganj",
                                            "name" => "কালীগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Shyamnagar",
                                            "name" => "শ্যামনগর"
                                        ]
                                    ]
                                ]
                            ]

                        ],
                        [
                            "name" => "রাজশাহী",
                            "slug" => "Rajshahi",
                            "children" =>
                            [
                                [
                                    "slug" => "Bogura",
                                    "name" => "বগুড়া",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Adamdighi",
                                            "name" => "আদমদিঘী"
                                        ],
                                        [
                                            "slug" => "Bogra Sadar",
                                            "name" => "বগুড়া সদর"
                                        ],
                                        [
                                            "slug" => "Sherpur",
                                            "name" => "শেরপুর"
                                        ],
                                        [
                                            "slug" => "Dhunat",
                                            "name" => "ধুনট"
                                        ],
                                        [
                                            "slug" => "Dhupchanchia",
                                            "name" => "দুপচাচিয়া"
                                        ],
                                        [
                                            "slug" => "Gabtali",
                                            "name" => "গাবতলি"
                                        ],
                                        [
                                            "slug" => "Kahaloo",
                                            "name" => "কাহালু"
                                        ],
                                        [
                                            "slug" => "Nandigram",
                                            "name" => "নন্দিগ্রাম"
                                        ],
                                        [
                                            "slug" => "Sahajanpur",
                                            "name" => "শাহজাহানপুর"
                                        ],
                                        [
                                            "slug" => "Sariakandi",
                                            "name" => "সারিয়াকান্দি"
                                        ],
                                        [
                                            "slug" => "Shibganj",
                                            "name" => "শিবগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Sonatala",
                                            "name" => "সোনাতলা"
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
                                            "name" => "জয়পুরহাট সদর"
                                        ],
                                        [
                                            "slug" => "Akkelpur",
                                            "name" => "আক্কেলপুর"
                                        ],
                                        [
                                            "slug" => "Kalai",
                                            "name" => "কালাই"
                                        ],
                                        [
                                            "slug" => "Khetlal",
                                            "name" => "খেতলাল"
                                        ],
                                        [
                                            "slug" => "Panchbibi",
                                            "name" => "পাঁচবিবি"
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
                                            "name" => "নওগাঁ সদর"
                                        ],
                                        [
                                            "slug" => "Mohadevpur",
                                            "name" => "মহাদেবপুর"
                                        ],
                                        [
                                            "slug" => "Manda",
                                            "name" => "মান্দা"
                                        ],
                                        [
                                            "slug" => "Niamatpur",
                                            "name" => "নিয়ামতপুর"
                                        ],
                                        [
                                            "slug" => "Atrai",
                                            "name" => "আত্রাই"
                                        ],
                                        [
                                            "slug" => "Raninagar",
                                            "name" => "রাণীনগর"
                                        ],
                                        [
                                            "slug" => "Patnitala",
                                            "name" => "পত্নীতলা"
                                        ],
                                        [
                                            "slug" => "Dhamoirhat",
                                            "name" => "ধামইরহাট "
                                        ],
                                        [
                                            "slug" => "Sapahar",
                                            "name" => "সাপাহার"
                                        ],
                                        [
                                            "slug" => "Porsha",
                                            "name" => "পোরশা"
                                        ],
                                        [
                                            "slug" => "Badalgachhi",
                                            "name" => "বদলগাছি"
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
                                            "name" => "নাটোর সদর"
                                        ],
                                        [
                                            "slug" => "Baraigram",
                                            "name" => "বড়াইগ্রাম"
                                        ],
                                        [
                                            "slug" => "Bagatipara",
                                            "name" => "বাগাতিপাড়া"
                                        ],
                                        [
                                            "slug" => "Lalpur",
                                            "name" => "লালপুর"
                                        ],
                                        [
                                            "slug" => "Natore Sadar",
                                            "name" => "নাটোর সদর"
                                        ],
                                        [
                                            "slug" => "Baraigram",
                                            "name" => "বড়াই গ্রাম"
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
                                            "name" => "ভোলাহাট"
                                        ],
                                        [
                                            "slug" => "Gomastapur",
                                            "name" => "গোমস্তাপুর"
                                        ],
                                        [
                                            "slug" => "Nachole",
                                            "name" => "নাচোল"
                                        ],
                                        [
                                            "slug" => "Nawabganj Sadar",
                                            "name" => "নবাবগঞ্জ সদর"
                                        ],
                                        [
                                            "slug" => "Shibganj",
                                            "name" => "শিবগঞ্জ"
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
                                            "name" => "আটঘরিয়া"
                                        ],
                                        [
                                            "slug" => "Bera",
                                            "name" => "বেড়া"
                                        ],
                                        [
                                            "slug" => "Bhangura",
                                            "name" => "ভাঙ্গুরা"
                                        ],
                                        [
                                            "slug" => "Chatmohar",
                                            "name" => "চাটমোহর"
                                        ],
                                        [
                                            "slug" => "Faridpur",
                                            "name" => "ফরিদপুর"
                                        ],
                                        [
                                            "slug" => "Ishwardi",
                                            "name" => "ঈশ্বরদী"
                                        ],
                                        [
                                            "slug" => "Pabna Sadar",
                                            "name" => "পাবনা সদর"
                                        ],
                                        [
                                            "slug" => "Santhia",
                                            "name" => "সাথিয়া"
                                        ],
                                        [
                                            "slug" => "Sujanagar",
                                            "name" => "সুজানগর"
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
                                            "name" => "বাঘা"
                                        ],
                                        [
                                            "slug" => "Bagmara",
                                            "name" => "বাগমারা"
                                        ],
                                        [
                                            "slug" => "Charghat",
                                            "name" => "চারঘাট"
                                        ],
                                        [
                                            "slug" => "Durgapur",
                                            "name" => "দুর্গাপুর"
                                        ],
                                        [
                                            "slug" => "Godagari",
                                            "name" => "গোদাগারি"
                                        ],
                                        [
                                            "slug" => "Mohanpur",
                                            "name" => "মোহনপুর"
                                        ],
                                        [
                                            "slug" => "Paba",
                                            "name" => "পবা"
                                        ],
                                        [
                                            "slug" => "Puthia",
                                            "name" => "পুঠিয়া"
                                        ],
                                        [
                                            "slug" => "Tanore",
                                            "name" => "তানোর"
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
                                            "name" => "সিরাজগঞ্জ সদর"
                                        ],
                                        [
                                            "slug" => "Belkuchi",
                                            "name" => "বেলকুচি"
                                        ],
                                        [
                                            "slug" => "Chauhali",
                                            "name" => "চৌহালি"
                                        ],
                                        [
                                            "slug" => "Kamarkhanda",
                                            "name" => "কামারখান্দা"
                                        ],
                                        [
                                            "slug" => "Kazipur",
                                            "name" => "কাজীপুর"
                                        ],
                                        [
                                            "slug" => "Raiganj",
                                            "name" => "রায়গঞ্জ"
                                        ],
                                        [
                                            "slug" => "Shahjadpur",
                                            "name" => "শাহজাদপুর"
                                        ],
                                        [
                                            "slug" => "Tarash",
                                            "name" => "তারাশ"
                                        ],
                                        [
                                            "slug" => "Ullahpara",
                                            "name" => "উল্লাপাড়া"
                                        ]
                                    ]
                                ]
                            ]

                        ],
                        [
                            "name" => "রংপুর",
                            "slug" => "Rangpur",
                            "children" =>
                            [
                                [
                                    "slug" => "Dinajpur",
                                    "name" => "দিনাজপুর",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Birampur",
                                            "name" => "বিরামপুর"
                                        ],
                                        [
                                            "slug" => "Birganj",
                                            "name" => "বীরগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Biral",
                                            "name" => "বিড়াল"
                                        ],
                                        [
                                            "slug" => "Bochaganj",
                                            "name" => "বোচাগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Chirirbandar",
                                            "name" => "চিরিরবন্দর"
                                        ],
                                        [
                                            "slug" => "Phulbari",
                                            "name" => "ফুলবাড়ি"
                                        ],
                                        [
                                            "slug" => "Ghoraghat",
                                            "name" => "ঘোড়াঘাট"
                                        ],
                                        [
                                            "slug" => "Hakimpur",
                                            "name" => "হাকিমপুর"
                                        ],
                                        [
                                            "slug" => "Kaharole",
                                            "name" => "কাহারোল"
                                        ],
                                        [
                                            "slug" => "Khansama",
                                            "name" => "খানসামা"
                                        ],
                                        [
                                            "slug" => "Dinajpur Sadar",
                                            "name" => "দিনাজপুর সদর"
                                        ],
                                        [
                                            "slug" => "Nawabganj",
                                            "name" => "নবাবগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Parbatipur",
                                            "name" => "পার্বতীপুর"
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
                                            "name" => "ফুলছড়ি"
                                        ],
                                        [
                                            "slug" => "Gaibandha sadar",
                                            "name" => "গাইবান্ধা সদর"
                                        ],
                                        [
                                            "slug" => "Gobindaganj",
                                            "name" => "গোবিন্দগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Palashbari",
                                            "name" => "পলাশবাড়ী"
                                        ],
                                        [
                                            "slug" => "Sadullapur",
                                            "name" => "সাদুল্যাপুর"
                                        ],
                                        [
                                            "slug" => "Saghata",
                                            "name" => "সাঘাটা"
                                        ],
                                        [
                                            "slug" => "Sundarganj",
                                            "name" => "সুন্দরগঞ্জ"
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
                                            "name" => "কুড়িগ্রাম সদর"
                                        ],
                                        [
                                            "slug" => "Nageshwari",
                                            "name" => "নাগেশ্বরী"
                                        ],
                                        [
                                            "slug" => "Bhurungamari",
                                            "name" => "ভুরুঙ্গামারি"
                                        ],
                                        [
                                            "slug" => "Phulbari",
                                            "name" => "ফুলবাড়ি"
                                        ],
                                        [
                                            "slug" => "Rajarhat",
                                            "name" => "রাজারহাট"
                                        ],
                                        [
                                            "slug" => "Ulipur",
                                            "name" => "উলিপুর"
                                        ],
                                        [
                                            "slug" => "Chilmari",
                                            "name" => "চিলমারি"
                                        ],
                                        [
                                            "slug" => "Rowmari",
                                            "name" => "রউমারি"
                                        ],
                                        [
                                            "slug" => "Char Rajibpur",
                                            "name" => "চর রাজিবপুর"
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
                                            "name" => "লালমনিরহাট সদর"
                                        ],
                                        [
                                            "slug" => "Aditmari",
                                            "name" => "আদিতমারি"
                                        ],
                                        [
                                            "slug" => "Kaliganj",
                                            "name" => "কালীগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Hatibandha",
                                            "name" => "হাতিবান্ধা"
                                        ],
                                        [
                                            "slug" => "Patgram",
                                            "name" => "পাটগ্রাম"
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
                                            "name" => "নীলফামারী সদর"
                                        ],
                                        [
                                            "slug" => "Saidpur",
                                            "name" => "সৈয়দপুর"
                                        ],
                                        [
                                            "slug" => "Jaldhaka",
                                            "name" => "জলঢাকা"
                                        ],
                                        [
                                            "slug" => "Kishoreganj",
                                            "name" => "কিশোরগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Domar",
                                            "name" => "ডোমার"
                                        ],
                                        [
                                            "slug" => "Dimla",
                                            "name" => "ডিমলা"
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
                                            "name" => "পঞ্চগড় সদর"
                                        ],
                                        [
                                            "slug" => "Debiganj",
                                            "name" => "দেবীগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Boda",
                                            "name" => "বোদা"
                                        ],
                                        [
                                            "slug" => "Atwari",
                                            "name" => "আটোয়ারি"
                                        ],
                                        [
                                            "slug" => "Tetulia",
                                            "name" => "তেতুলিয়া"
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
                                            "name" => "বদরগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Mithapukur",
                                            "name" => "মিঠাপুকুর"
                                        ],
                                        [
                                            "slug" => "Gangachara",
                                            "name" => "গঙ্গাচরা"
                                        ],
                                        [
                                            "slug" => "Kaunia",
                                            "name" => "কাউনিয়া"
                                        ],
                                        [
                                            "slug" => "Rangpur Sadar",
                                            "name" => "রংপুর সদর"
                                        ],
                                        [
                                            "slug" => "Pirgachha",
                                            "name" => "পীরগাছা"
                                        ],
                                        [
                                            "slug" => "Pirganj",
                                            "name" => "পীরগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Taraganj",
                                            "name" => "তারাগঞ্জ"
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
                                            "name" => "ঠাকুরগাঁও সদর"
                                        ],
                                        [
                                            "slug" => "Pirganj",
                                            "name" => "পীরগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Baliadangi",
                                            "name" => "বালিয়াডাঙ্গি"
                                        ],
                                        [
                                            "slug" => "Haripur",
                                            "name" => "হরিপুর"
                                        ],
                                        [
                                            "slug" => "Ranisankail",
                                            "name" => "রাণীসংকইল"
                                        ]
                                    ]
                                ]
                            ]

                        ],
                        [
                            "name" => "সিলেট",
                            "slug" => "Sylhet",
                            "children" =>
                            [
                                [
                                    "slug" => "Habiganj",
                                    "name" => "হবিগঞ্জ",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Ajmiriganj",
                                            "name" => "আজমিরিগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Baniachang",
                                            "name" => "বানিয়াচং"
                                        ],
                                        [
                                            "slug" => "Bahubal",
                                            "name" => "বাহুবল"
                                        ],
                                        [
                                            "slug" => "Chunarughat",
                                            "name" => "চুনারুঘাট"
                                        ],
                                        [
                                            "slug" => "Habiganj Sadar",
                                            "name" => "হবিগঞ্জ সদর"
                                        ],
                                        [
                                            "slug" => "Lakhai",
                                            "name" => "লাক্ষাই"
                                        ],
                                        [
                                            "slug" => "Madhabpur",
                                            "name" => "মাধবপুর"
                                        ],
                                        [
                                            "slug" => "Nabiganj",
                                            "name" => "নবীগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Shaistagonj",
                                            "name" => "শায়েস্তাগঞ্জ"
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
                                            "name" => "মৌলভীবাজার"
                                        ],
                                        [
                                            "slug" => "Barlekha",
                                            "name" => "বড়লেখা"
                                        ],
                                        [
                                            "slug" => "Juri",
                                            "name" => "জুড়ি"
                                        ],
                                        [
                                            "slug" => "Kamalganj",
                                            "name" => "কামালগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Kulaura",
                                            "name" => "কুলাউরা"
                                        ],
                                        [
                                            "slug" => "Rajnagar",
                                            "name" => "রাজনগর"
                                        ],
                                        [
                                            "slug" => "Sreemangal",
                                            "name" => "শ্রীমঙ্গল"
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
                                            "name" => "বিসশম্ভারপুর"
                                        ],
                                        [
                                            "slug" => "Chhatak",
                                            "name" => "ছাতক"
                                        ],
                                        [
                                            "slug" => "Derai",
                                            "name" => "দেড়াই"
                                        ],
                                        [
                                            "slug" => "Dharampasha",
                                            "name" => "ধরমপাশা"
                                        ],
                                        [
                                            "slug" => "Dowarabazar",
                                            "name" => "দোয়ারাবাজার"
                                        ],
                                        [
                                            "slug" => "Jagannathpur",
                                            "name" => "জগন্নাথপুর"
                                        ],
                                        [
                                            "slug" => "Jamalganj",
                                            "name" => "জামালগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Sulla",
                                            "name" => "সুল্লা"
                                        ],
                                        [
                                            "slug" => "Sunamganj Sadar",
                                            "name" => "সুনামগঞ্জ সদর"
                                        ],
                                        [
                                            "slug" => "Shanthiganj",
                                            "name" => "শান্তিগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Tahirpur",
                                            "name" => "তাহিরপুর"
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
                                            "name" => "সিলেট সদর"
                                        ],
                                        [
                                            "slug" => "Beanibazar",
                                            "name" => "বেয়ানিবাজার"
                                        ],
                                        [
                                            "slug" => "Bishwanath",
                                            "name" => "বিশ্বনাথ"
                                        ],
                                        [
                                            "slug" => "Dakshin Surma",
                                            "name" => "দক্ষিণ সুরমা"
                                        ],
                                        [
                                            "slug" => "Balaganj",
                                            "name" => "বালাগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Companiganj",
                                            "name" => "কোম্পানিগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Fenchuganj",
                                            "name" => "ফেঞ্চুগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Golapganj",
                                            "name" => "গোলাপগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Gowainghat",
                                            "name" => "গোয়াইনঘাট"
                                        ],
                                        [
                                            "slug" => "Jaintiapur",
                                            "name" => "জয়ন্তপুর"
                                        ],
                                        [
                                            "slug" => "Kanaighat",
                                            "name" => "কানাইঘাট"
                                        ],
                                        [
                                            "slug" => "Zakiganj",
                                            "name" => "জাকিগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Nobigonj",
                                            "name" => "নবীগঞ্জ"
                                        ]
                                    ]
                                ]
                            ]

                        ],
                        [
                            "name" => "ময়মনসিংহ",
                            "slug" => "Mymensingh",
                            "children" =>
                            [
                                [
                                    "slug" => "Jamalpur",
                                    "name" => "জামালপুর",
                                    "value" => "220",
                                    "children" => [
                                        [
                                            "slug" => "Dewanganj",
                                            "name" => "দেওয়ানগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Baksiganj",
                                            "name" => "বকসিগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Islampur",
                                            "name" => "ইসলামপুর"
                                        ],
                                        [
                                            "slug" => "Jamalpur Sadar",
                                            "name" => "জামালপুর সদর"
                                        ],
                                        [
                                            "slug" => "Madarganj",
                                            "name" => "মাদারগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Melandaha",
                                            "name" => "মেলানদাহা"
                                        ],
                                        [
                                            "slug" => "Sarishabari",
                                            "name" => "সরিষাবাড়ি "
                                        ],
                                        [
                                            "slug" => "Narundi Police I.C",
                                            "name" => "নারুন্দি"
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
                                            "name" => "ভালুকা"
                                        ],
                                        [
                                            "slug" => "Trishal",
                                            "name" => "ত্রিশাল"
                                        ],
                                        [
                                            "slug" => "Haluaghat",
                                            "name" => "হালুয়াঘাট"
                                        ],
                                        [
                                            "slug" => "Muktagachha",
                                            "name" => "মুক্তাগাছা"
                                        ],
                                        [
                                            "slug" => "Dhobaura",
                                            "name" => "ধবারুয়া"
                                        ],
                                        [
                                            "slug" => "Fulbaria",
                                            "name" => "ফুলবাড়িয়া"
                                        ],
                                        [
                                            "slug" => "Gaffargaon",
                                            "name" => "গফরগাঁও"
                                        ],
                                        [
                                            "slug" => "Gauripur",
                                            "name" => "গৌরিপুর"
                                        ],
                                        [
                                            "slug" => "Ishwarganj",
                                            "name" => "ঈশ্বরগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Mymensingh Sadar",
                                            "name" => "ময়মনসিং সদর"
                                        ],
                                        [
                                            "slug" => "Nandail",
                                            "name" => "নন্দাইল"
                                        ],
                                        [
                                            "slug" => "Phulpur",
                                            "name" => "ফুলপুর"
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
                                            "name" => "কেন্দুয়া"
                                        ],
                                        [
                                            "slug" => "Atpara Upazilla",
                                            "name" => "আটপাড়া"
                                        ],
                                        [
                                            "slug" => "Barhatta Upazilla",
                                            "name" => "বরহাট্টা"
                                        ],
                                        [
                                            "slug" => "Durgapur Upazilla",
                                            "name" => "দুর্গাপুর"
                                        ],
                                        [
                                            "slug" => "Kalmakanda Upazilla",
                                            "name" => "কলমাকান্দা"
                                        ],
                                        [
                                            "slug" => "Madan Upazilla",
                                            "name" => "মদন"
                                        ],
                                        [
                                            "slug" => "Mohanganj Upazilla",
                                            "name" => "মোহনগঞ্জ"
                                        ],
                                        [
                                            "slug" => "Netrakona-S Upazilla",
                                            "name" => "নেত্রকোনা সদর"
                                        ],
                                        [
                                            "slug" => "Purbadhala Upazilla",
                                            "name" => "পূর্বধলা"
                                        ],
                                        [
                                            "slug" => "Khaliajuri Upazilla",
                                            "name" => "খালিয়াজুরি"
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
                                            "name" => "ঝিনাইগাতি"
                                        ],
                                        [
                                            "slug" => "Nakla",
                                            "name" => "নাকলা"
                                        ],
                                        [
                                            "slug" => "Nalitabari",
                                            "name" => "নালিতাবাড়ি"
                                        ],
                                        [
                                            "slug" => "Sherpur Sadar",
                                            "name" => "শেরপুর সদর"
                                        ],
                                        [
                                            "slug" => "Sreebardi",
                                            "name" => "শ্রীবরদি"
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
        $division_id = 6;
        $district_id = 14;
        Region::create([
            'name' => $asia['slug'],
            'slug' => $asia['slug']
        ]);
        foreach ($asia['children'] as $country) {
            Region::create([
                'name' => $country['slug'],
                'slug' => $country['slug'],
                'parent_id' => 1
            ]);
        }
        foreach ($asia['children'] as $country) {
            foreach ($country['children'] as $division) {
                Region::create([
                    'name' => $division['slug'],
                    'slug' => $division['slug'],
                    'parent_id' => 2
                ]);
            }
        }
        foreach ($asia['children'] as $country) {
            foreach ($country['children'] as $division) {
                foreach ($division['children'] as $district) {
                    Region::create([
                        'name' => $district['slug'],
                        'slug' => $district['slug'],
                        'expense' => $district['value'],
                        'parent_id' => $division_id
                    ]);
                }
                $division_id = $division_id + 1;
            }
        }
        foreach ($asia['children'] as $country) {
            foreach ($country['children'] as $division) {
                foreach ($division['children'] as $district) {
                    foreach ($district['children'] as $upazilla) {
                        Region::create([
                            'name' => $upazilla['slug'],
                            'slug' => $upazilla['slug'],
                            'parent_id' => $district_id
                        ]);
                    }
                    $district_id = $district_id + 1;
                }
            }
        }
        // Region::create($asia);
        // Region::create($northAmerica);
    }
}
