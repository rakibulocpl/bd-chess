
@extends('layouts.public')
@section('content')
    <div class="flex flex-col gap-4">
        <!-- Page Header -->

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <div class="overflow-x-auto mt-6">
            <h1 class="text-center text-2xl md:text-3xl mb-2 mt-5">নিন্মোক্ত স্কুলে ক্যাম্পেইন  অনুষ্ঠিত হবে</h1>
            <table class="min-w-full divide-y divide-gray-300 text-sm text-left">
                <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-4 py-2 font-semibold">ক্রমিক</th>
                    <th class="px-4 py-2 font-semibold">বঅঞ্চল</th>
                    <th class="px-4 py-2 font-semibold">জেলা</th>
                    <th class="px-4 py-2 font-semibold">উপজেলা</th>
                    <th class="px-4 py-2 font-semibold">ইআইআইএন</th>
                    <th class="px-4 py-2 font-semibold">বিদ্যালয়ের নাম</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-gray-800 bg-white">

                <tr>
                    <td class="px-4 py-2">১</td>
                    <td rowspan="8">কুমিল্লা</td>
                    <td rowspan="2">কুমিল্লা</td>
                    <td rowspan="2">কুমিল্লা
                        সদর</td>
                    <td class="px-4 py-2">105770</td>
                    <td class="px-4 py-2">কুমিল্লা
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">২</td>
                    <td class="px-4 py-2">105762</td>
                    <td class="px-4 py-2">নবাব
                        ফয়জুন্নেছা
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৩</td>
                    <td rowspan="2">চাঁদপুর</td>
                    <td rowspan="2">চাঁদপুর
                        সদর</td>
                    <td class="px-4 py-2">103490</td>
                    <td class="px-4 py-2">মাতৃপীঠ
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৪</td>
                    <td class="px-4 py-2">103496</td>
                    <td class="px-4 py-2">হাসান
                        আলী সরকারি
                        উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৫</td>
                    <td rowspan="2">ব্রাহ্মণবাড়িয়া</td>
                    <td rowspan="2">ব্রাহ্মণবাড়িয়া
                        সদর</td>
                    <td class="px-4 py-2">103210</td>
                    <td class="px-4 py-2">অন্নদা
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৬</td>
                    <td class="px-4 py-2">103216</td>
                    <td class="px-4 py-2">সাবেরা
                        সোবহান
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৭</td>
                    <td rowspan="2">লক্ষ্মীপুর</td>
                    <td rowspan="2">লক্ষ্মীপুর
                        সদর</td>
                    <td class="px-4 py-2">106897</td>
                    <td class="px-4 py-2">লক্ষ্মীপুর
                        আদর্শ সামাদ
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৮</td>
                    <td class="px-4 py-2">106899</td>
                    <td class="px-4 py-2">লক্ষ্মীপুর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৯</td>
                    <td rowspan="20">খুলনা</td>
                    <td rowspan="2">কুষ্টিয়া</td>
                    <td rowspan="2">কুষ্টিয়া
                        সদর</td>
                    <td class="px-4 py-2">117743</td>
                    <td class="px-4 py-2">কুষ্টিয়া
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১০</td>
                    <td class="px-4 py-2">117759</td>
                    <td class="px-4 py-2">কুষ্টিয়া
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়,
                        কুষ্টিয়া।</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১১</td>
                    <td rowspan="2">খুলনা</td>
                    <td rowspan="2">খুলনা
                        মহানগরী</td>
                    <td class="px-4 py-2">117135</td>
                    <td class="px-4 py-2">খুলনা
                        জিলা স্কুল,
                        খুলনা।</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১২</td>
                    <td class="px-4 py-2">117138</td>
                    <td class="px-4 py-2">সরকারি
                        করোনেশন
                        মাধ্যমিক
                        বালিকা
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১৩</td>
                    <td rowspan="2">চুয়াডাঙ্গা</td>
                    <td rowspan="2">চুয়াডাঙ্গা
                        সদর</td>
                    <td class="px-4 py-2">115348</td>
                    <td class="px-4 py-2">চুয়াডাঙ্গা
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়<span style="mso-spacerun:yes">&nbsp;</span></td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১৪</td>
                    <td class="px-4 py-2">115349</td>
                    <td class="px-4 py-2">ভিক্টোরিয়া
                        জুবিলি
                        সরকারি উচ্চ
                        বিদ্যালয়, চুয়াডাঙ্গা।</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১৫</td>
                    <td rowspan="2">ঝিনাইদহ</td>
                    <td rowspan="2">ঝিনাইদহ
                        সদর</td>
                    <td class="px-4 py-2">116464</td>
                    <td class="px-4 py-2">ঝিনাইদহ
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১৬</td>
                    <td class="px-4 py-2">116450</td>
                    <td class="px-4 py-2">ঝিনাইদহ
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১৭</td>
                    <td rowspan="2">নড়াইল</td>
                    <td rowspan="2">নড়াইল
                        সদর</td>
                    <td class="px-4 py-2">118449</td>
                    <td class="px-4 py-2">নড়াইল
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১৮</td>
                    <td class="px-4 py-2">118450</td>
                    <td class="px-4 py-2">নড়াইল
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১৯</td>
                    <td rowspan="2">বাগেরহাট</td>
                    <td rowspan="2">বাগেরহাট
                        সদর</td>
                    <td class="px-4 py-2">114761</td>
                    <td class="px-4 py-2">বাগেরহাট
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">২০</td>
                    <td class="px-4 py-2">114766</td>
                    <td class="px-4 py-2">বাগেরহাট
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">২১</td>
                    <td rowspan="2">মাগুরা</td>
                    <td rowspan="2">মাগুরা
                        সদর</td>
                    <td class="px-4 py-2">117904</td>
                    <td class="px-4 py-2">মাগুরা
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">২২</td>
                    <td class="px-4 py-2">117906</td>
                    <td class="px-4 py-2">মাগুরা
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">২৩</td>
                    <td rowspan="2">মেহেরপুর</td>
                    <td rowspan="2">মেহেরপুর
                        সদর</td>
                    <td class="px-4 py-2">118298</td>
                    <td class="px-4 py-2">মেহেরপুর
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">২৪</td>
                    <td class="px-4 py-2">118301</td>
                    <td class="px-4 py-2">মেহেরপুর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">২৫</td>
                    <td rowspan="2">যশোর</td>
                    <td rowspan="2">যশোর
                        সদর</td>
                    <td class="px-4 py-2">115958</td>
                    <td class="px-4 py-2">যশোর
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">২৬</td>
                    <td class="px-4 py-2">115962</td>
                    <td class="px-4 py-2">যশোর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">২৭</td>
                    <td rowspan="2">সাতক্ষীরা</td>
                    <td rowspan="2">সাতক্ষীরা
                        সদর</td>
                    <td class="px-4 py-2">118813</td>
                    <td class="px-4 py-2">সাতক্ষীরা
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">২৮</td>
                    <td class="px-4 py-2">118808</td>
                    <td class="px-4 py-2">সাতক্ষীরা
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">২৯</td>
                    <td rowspan="14">চট্টগ্রাম</td>
                    <td rowspan="2">কক্সবাজার</td>
                    <td rowspan="2">কক্সবাজার
                        সদর</td>
                    <td class="px-4 py-2">106263</td>
                    <td class="px-4 py-2">কক্সবাজার
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৩০</td>
                    <td class="px-4 py-2">131396</td>
                    <td class="px-4 py-2">কক্সবাজার
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৩১</td>
                    <td rowspan="2">খাগড়াছড়ি</td>
                    <td rowspan="2">খাগড়াছড়ি
                        সদর</td>
                    <td class="px-4 py-2">106772</td>
                    <td class="px-4 py-2">খাগড়াছড়ি
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৩২</td>
                    <td class="px-4 py-2">106770</td>
                    <td class="px-4 py-2">খাগড়াছড়ি
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৩৩</td>
                    <td rowspan="2">চট্টগ্রাম</td>
                    <td rowspan="2">চট্টগ্রাম
                        মহানগরী</td>
                    <td class="px-4 py-2">104275</td>
                    <td class="px-4 py-2">চট্টগ্রাম
                        কলেজিয়েট
                        স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৩৪</td>
                    <td class="px-4 py-2">104496</td>
                    <td class="px-4 py-2">ডাঃ
                        খাস্তগীর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৩৫</td>
                    <td rowspan="2">নোয়াখালী</td>
                    <td rowspan="2">নোয়াখালী
                        সদর</td>
                    <td class="px-4 py-2">107540</td>
                    <td class="px-4 py-2">নোয়াখালী
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৩৬</td>
                    <td class="px-4 py-2">107542</td>
                    <td class="px-4 py-2">নোয়াখালী
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৩৭</td>
                    <td rowspan="2">ফেনী</td>
                    <td rowspan="2">ফেনী
                        সদর</td>
                    <td class="px-4 py-2">106577</td>
                    <td class="px-4 py-2">ফেনী
                        সরকারি
                        পাইলট উচ্চ
                        বিদ্যালয়,
                        ফেনী।</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৩৮</td>
                    <td class="px-4 py-2">106582</td>
                    <td class="px-4 py-2">ফেনী
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৩৯</td>
                    <td rowspan="2">বান্দরবান</td>
                    <td rowspan="2">বান্দরবান
                        সদর</td>
                    <td class="px-4 py-2">103092</td>
                    <td class="px-4 py-2">বান্দরবান
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৪০</td>
                    <td class="px-4 py-2">103093</td>
                    <td class="px-4 py-2">বান্দরবান
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৪১</td>
                    <td rowspan="2">রাঙ্গামাটি</td>
                    <td rowspan="2">রাঙ্গামাটি
                        সদর</td>
                    <td class="px-4 py-2">107795</td>
                    <td class="px-4 py-2">রাঙ্গামাটি
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৪২</td>
                    <td class="px-4 py-2">107797</td>
                    <td class="px-4 py-2">রাঙ্গামাটি
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৪৩</td>
                    <td rowspan="22">ঢাকা</td>
                    <td rowspan="2">গাজীপুর</td>
                    <td rowspan="2">গাজীপুর
                        সদর</td>
                    <td class="px-4 py-2">108954</td>
                    <td class="px-4 py-2">জয়দেবপুর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৪৪</td>
                    <td class="px-4 py-2">108955</td>
                    <td class="px-4 py-2">রাণী
                        বিলাসমণি
                        সরকারি বালক
                        উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৪৫</td>
                    <td rowspan="2">গোপালগঞ্জ</td>
                    <td rowspan="2">গোপালগঞ্জ
                        সদর</td>
                    <td class="px-4 py-2">109448</td>
                    <td class="px-4 py-2">বীণাপাণি
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৪৬</td>
                    <td class="px-4 py-2">109447</td>
                    <td class="px-4 py-2">সীতানাথ
                        মথুরানাথ
                        মডেল সরকারি
                        উচ্চ বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৪৭</td>
                    <td rowspan="2">ঢাকা</td>
                    <td rowspan="2">ঢাকা
                        মহানগরী</td>
                    <td class="px-4 py-2">107962</td>
                    <td class="px-4 py-2">গবর্নমেন্ট
                        ল্যাবরেটরি
                        হাই স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৪৮</td>
                    <td class="px-4 py-2">108580</td>
                    <td class="px-4 py-2">মতিঝিল
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৪৯</td>
                    <td rowspan="2">নরসিংদী</td>
                    <td rowspan="2">নরসিংদী
                        সদর</td>
                    <td class="px-4 py-2">112673</td>
                    <td class="px-4 py-2">নরসিংদী
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৫০</td>
                    <td class="px-4 py-2">112674</td>
                    <td class="px-4 py-2">ব্রাহ্মন্দী
                        কামিনী
                        কিশোর মৌলিক
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৫১</td>
                    <td rowspan="2">নারায়ণগঞ্জ</td>
                    <td rowspan="2">নারায়নগঞ্জ
                        সদর</td>
                    <td class="px-4 py-2">112416</td>
                    <td class="px-4 py-2">ইসলামিক
                        এডুকেশনাল
                        ট্রাষ্ট
                        (আই.ই.টি)
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৫২</td>
                    <td class="px-4 py-2">112425</td>
                    <td class="px-4 py-2">নারায়ণগঞ্জ
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৫৩</td>
                    <td rowspan="2">ফরিদপুর</td>
                    <td rowspan="2">ফরিদপুর
                        সদর</td>
                    <td class="px-4 py-2">108732</td>
                    <td class="px-4 py-2">ফরিদপুর
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৫৪</td>
                    <td class="px-4 py-2">108745</td>
                    <td class="px-4 py-2">ফরিদপুর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৫৫</td>
                    <td rowspan="2">মাদারীপুর</td>
                    <td rowspan="2">মাদারীপুর
                        সদর</td>
                    <td class="px-4 py-2">110730</td>
                    <td class="px-4 py-2">ইউনাইটেড
                        ইসলামিয়া
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৫৬</td>
                    <td class="px-4 py-2">131399</td>
                    <td class="px-4 py-2">ডনোভান
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৫৭</td>
                    <td rowspan="2">মানিকগঞ্জ</td>
                    <td rowspan="2">মানিকগঞ্জ
                        সদর</td>
                    <td class="px-4 py-2">110957</td>
                    <td class="px-4 py-2">মানিকগঞ্জ
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৫৮</td>
                    <td class="px-4 py-2">110958</td>
                    <td class="px-4 py-2">মানিকগঞ্জ
                        সুরেন্দ্র
                        কুমার
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৫৯</td>
                    <td rowspan="2">মুন্সীগঞ্জ</td>
                    <td rowspan="2">মুন্সীগঞ্জ
                        সদর</td>
                    <td class="px-4 py-2">111134</td>
                    <td class="px-4 py-2">আলবার্ট
                        ভিক্টোরিয়া
                        যতীন্দ্র
                        মোহন গভ. গার্লস
                        হাই স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৬০</td>
                    <td class="px-4 py-2">111138</td>
                    <td class="px-4 py-2">কাজী
                        কমরউদ্দিন
                        গভ:
                        ইনস্টিটিউশন</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৬১</td>
                    <td rowspan="2">রাজবাড়ী</td>
                    <td rowspan="2">রাজবাড়ী
                        সদর</td>
                    <td class="px-4 py-2">113429</td>
                    <td class="px-4 py-2">রাজবাড়ী
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৬২</td>
                    <td class="px-4 py-2">113430</td>
                    <td class="px-4 py-2">রাজবাড়ী
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৬৩</td>
                    <td rowspan="2">শরীয়তপুর</td>
                    <td rowspan="2">শরীয়তপুর
                        সদর</td>
                    <td class="px-4 py-2">113615</td>
                    <td class="px-4 py-2">পালং
                        তুলাসার
                        গুরুদাস
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৬৪</td>
                    <td class="px-4 py-2">113614</td>
                    <td class="px-4 py-2">শরীয়তপুর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৬৫</td>
                    <td rowspan="10">বরিশাল</td>
                    <td rowspan="2">ঝালকাঠি</td>
                    <td rowspan="2">ঝালকাঠি
                        সদর</td>
                    <td class="px-4 py-2">101633</td>
                    <td class="px-4 py-2">ঝালকাঠি
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৬৬</td>
                    <td class="px-4 py-2">101631</td>
                    <td class="px-4 py-2">ঝালকাঠি
                        সরকারি
                        হরচন্দ্র
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৬৭</td>
                    <td rowspan="2">পটুয়াখালী</td>
                    <td rowspan="2">পটুয়াখালী
                        সদর</td>
                    <td class="px-4 py-2">102477</td>
                    <td class="px-4 py-2">পটুয়াখালী
                        সরকারি
                        জুবিলী উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৬৮</td>
                    <td class="px-4 py-2">102478</td>
                    <td class="px-4 py-2">পটুয়াখালী
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৬৯</td>
                    <td rowspan="2">বরগুনা</td>
                    <td rowspan="2">বরগুনা
                        সদর</td>
                    <td class="px-4 py-2">100154</td>
                    <td class="px-4 py-2">বরগুনা
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৭০</td>
                    <td class="px-4 py-2">100155</td>
                    <td class="px-4 py-2">বরগুনা
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৭১</td>
                    <td rowspan="2">বরিশাল</td>
                    <td rowspan="2">বরিশাল
                        সদর</td>
                    <td class="px-4 py-2">100742</td>
                    <td class="px-4 py-2">বরিশাল
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৭২</td>
                    <td class="px-4 py-2">100757</td>
                    <td class="px-4 py-2">বরিশাল
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৭৩</td>
                    <td rowspan="2">ভোলা</td>
                    <td rowspan="2">ভোলা
                        সদর</td>
                    <td class="px-4 py-2">101112</td>
                    <td class="px-4 py-2">ভোলা
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৭৪</td>
                    <td class="px-4 py-2">101110</td>
                    <td class="px-4 py-2">ভোলা
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৭৫</td>
                    <td rowspan="12">ময়মনসিংহ</td>
                    <td rowspan="2">কিশোরগঞ্জ</td>
                    <td rowspan="2">কিশোরগঞ্জ
                        সদর</td>
                    <td class="px-4 py-2">110447</td>
                    <td class="px-4 py-2">কিশোরগঞ্জ
                        সরকারি বালক
                        উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৭৬</td>
                    <td class="px-4 py-2">110445</td>
                    <td class="px-4 py-2">সরযূ
                        বালা সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৭৭</td>
                    <td rowspan="2">জামালপুর</td>
                    <td rowspan="2">জামালপুর
                        সদর</td>
                    <td class="px-4 py-2">109873</td>
                    <td class="px-4 py-2">জামালপুর
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৭৮</td>
                    <td class="px-4 py-2">109869</td>
                    <td class="px-4 py-2">জামালপুর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৭৯</td>
                    <td rowspan="2">টাঙ্গাইল</td>
                    <td rowspan="2">টাঙ্গাইল
                        সদর</td>
                    <td class="px-4 py-2">114680</td>
                    <td class="px-4 py-2">বিন্দুবাসিনী
                        সরকারি বালক
                        উচ্চ
                        বিদ্যালয়, টাঙ্গাই্ল।</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৮০</td>
                    <td class="px-4 py-2">114681</td>
                    <td class="px-4 py-2">বিন্দুবাসিনী
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৮১</td>
                    <td rowspan="2">নেত্রকোনা</td>
                    <td rowspan="2">নেত্রকোনা
                        সদর</td>
                    <td class="px-4 py-2">113134</td>
                    <td class="px-4 py-2">আঞ্জুমান
                        আদর্শ
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৮২</td>
                    <td class="px-4 py-2">113138</td>
                    <td class="px-4 py-2">নেত্রকোনা
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৮৩</td>
                    <td rowspan="2">ময়মনসিংহ</td>
                    <td rowspan="2">ময়মনসিংহ
                        সদর</td>
                    <td class="px-4 py-2">111842</td>
                    <td class="px-4 py-2">বিদ্যাময়ী
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৮৪</td>
                    <td class="px-4 py-2">111829</td>
                    <td class="px-4 py-2">ময়মনসিংহ
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৮৫</td>
                    <td rowspan="2">শেরপুর</td>
                    <td rowspan="2">শেরপুর
                        সদর</td>
                    <td class="px-4 py-2">131051</td>
                    <td class="px-4 py-2">শেরপুর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৮৬</td>
                    <td class="px-4 py-2">113835</td>
                    <td class="px-4 py-2">শেরপুর
                        সরকারি
                        ভিক্টোরিয়া
                        একাডেমী</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৮৭</td>
                    <td rowspan="16">রংপুর</td>
                    <td rowspan="2">কুড়িগ্রাম</td>
                    <td rowspan="2">কুড়িগ্রাম
                        সদর</td>
                    <td class="px-4 py-2">122246</td>
                    <td class="px-4 py-2">কুড়িগ্রাম
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৮৮</td>
                    <td class="px-4 py-2">122248</td>
                    <td class="px-4 py-2">কুড়িগ্রাম
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৮৯</td>
                    <td rowspan="2">গাইবান্ধা</td>
                    <td rowspan="2">গাইবান্ধা
                        সদর</td>
                    <td class="px-4 py-2">121101</td>
                    <td class="px-4 py-2">গাইবান্ধা
                        সরকারি উচ্চ
                        বালক
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৯০</td>
                    <td class="px-4 py-2">121102</td>
                    <td class="px-4 py-2">গাইবান্ধা
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৯১</td>
                    <td rowspan="2">ঠাকুরগাঁও</td>
                    <td rowspan="2">ঠাকুরগাঁও
                        সদর</td>
                    <td class="px-4 py-2">129085</td>
                    <td class="px-4 py-2">ঠাকুরগাঁও
                        সরকারি বালক
                        উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৯২</td>
                    <td class="px-4 py-2">129082</td>
                    <td class="px-4 py-2">ঠাকুরগাঁও
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৯৩</td>
                    <td rowspan="2">দিনাজপুর</td>
                    <td rowspan="2">দিনাজপুর
                        সদর</td>
                    <td class="px-4 py-2">120719</td>
                    <td class="px-4 py-2">দিনাজপুর
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৯৪</td>
                    <td class="px-4 py-2">120718</td>
                    <td class="px-4 py-2">দিনাজপুর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৯৫</td>
                    <td rowspan="2">নীলফামারী</td>
                    <td rowspan="2">নীলফামারী
                        সদর</td>
                    <td class="px-4 py-2">125061</td>
                    <td class="px-4 py-2">নীলফামারী
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৯৬</td>
                    <td class="px-4 py-2">125062</td>
                    <td class="px-4 py-2">নীলফামারী
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৯৭</td>
                    <td rowspan="2">পঞ্চগড়</td>
                    <td rowspan="2">পঞ্চগড়
                        সদর</td>
                    <td class="px-4 py-2">126054</td>
                    <td class="px-4 py-2">পঞ্চগড়
                        বিষ্ণু
                        প্রসাদ
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৯৮</td>
                    <td class="px-4 py-2">126055</td>
                    <td class="px-4 py-2">পঞ্চগড়
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">৯৯</td>
                    <td rowspan="2">রংপুর</td>
                    <td rowspan="2">রংপুর
                        সদর</td>
                    <td class="px-4 py-2">127372</td>
                    <td class="px-4 py-2">রংপুর
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১০০</td>
                    <td class="px-4 py-2">127380</td>
                    <td class="px-4 py-2">রংপুর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১০১</td>
                    <td rowspan="2">লালমনিরহাট</td>
                    <td rowspan="2">লালমনিরহাট
                        সদর</td>
                    <td class="px-4 py-2">122901</td>
                    <td class="px-4 py-2">লালমনিরহাট
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১০২</td>
                    <td class="px-4 py-2">122899</td>
                    <td class="px-4 py-2">লালমনিরহাট
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১০৩</td>
                    <td rowspan="16">রাজশাহী</td>
                    <td rowspan="2">চাঁপাইনবাবগঞ্জ</td>
                    <td rowspan="2">চাঁপাইনবাবগঞ্জ
                        সদর</td>
                    <td class="px-4 py-2">124505</td>
                    <td class="px-4 py-2">নবাবগঞ্জ
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১০৪</td>
                    <td class="px-4 py-2">124506</td>
                    <td class="px-4 py-2">হরিমোহন
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১০৫</td>
                    <td rowspan="2">জয়পুরহাট</td>
                    <td rowspan="2">জয়পুরহাট
                        সদর</td>
                    <td class="px-4 py-2">121808</td>
                    <td class="px-4 py-2">জয়পুরহাট
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১০৬</td>
                    <td class="px-4 py-2">121806</td>
                    <td class="px-4 py-2">রামদেও
                        বজলা সরকারি
                        উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১০৭</td>
                    <td rowspan="2">নওগাঁ</td>
                    <td rowspan="2">নওগাঁ
                        সদর</td>
                    <td class="px-4 py-2">123413</td>
                    <td class="px-4 py-2">নওগাঁ
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১০৮</td>
                    <td class="px-4 py-2">123419</td>
                    <td class="px-4 py-2">নওগাঁ
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১০৯</td>
                    <td rowspan="2">নাটোর</td>
                    <td rowspan="2">নাটোর
                        সদর</td>
                    <td class="px-4 py-2">124140</td>
                    <td class="px-4 py-2">নাটোর
                        সরকারি বালক
                        উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১১০</td>
                    <td class="px-4 py-2">124139</td>
                    <td class="px-4 py-2">নাটোর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১১১</td>
                    <td rowspan="2">পাবনা</td>
                    <td rowspan="2">পাবনা
                        সদর</td>
                    <td class="px-4 py-2">125564</td>
                    <td class="px-4 py-2">পাবনা
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১১২</td>
                    <td class="px-4 py-2">125582</td>
                    <td class="px-4 py-2">পাবনা
                        সরকারি
                        বালিকা
                        উচ্চবিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১১৩</td>
                    <td rowspan="2">বগুড়া</td>
                    <td rowspan="2">বগুড়া
                        সদর</td>
                    <td class="px-4 py-2">119176</td>
                    <td class="px-4 py-2">বগুড়া
                        জিলা স্কুল,
                        বগুড়া</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১১৪</td>
                    <td class="px-4 py-2">119177</td>
                    <td class="px-4 py-2">বগুড়া
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১১৫</td>
                    <td rowspan="2">রাজশাহী</td>
                    <td rowspan="2">রাজশাহী
                        মহানগরী</td>
                    <td class="px-4 py-2">126456</td>
                    <td class="px-4 py-2">রাজশাহী
                        কলেজিয়েট
                        স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১১৬</td>
                    <td class="px-4 py-2">126455</td>
                    <td class="px-4 py-2">সরকারি
                        প্রমথনাথ
                        বালিকা উচ্চ
                        বিদ্যালয়,
                        রাজশাহী</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১১৭</td>
                    <td rowspan="2">সিরাজগঞ্জ</td>
                    <td rowspan="2">সিরাজগঞ্জ
                        সদর</td>
                    <td class="px-4 py-2">128379</td>
                    <td class="px-4 py-2">বনোয়ারী
                        লাল সরকারি
                        উচ্চ
                        বিদ্যালয়,
                        সিরাজগঞ্জ।</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১১৮</td>
                    <td class="px-4 py-2">128374</td>
                    <td class="px-4 py-2">সালেহা
                        ইসহাক
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১১৯</td>
                    <td rowspan="8">সিলেট</td>
                    <td rowspan="2">মৌলভীবাজার</td>
                    <td rowspan="2">মৌলভীবাজার
                        সদর</td>
                    <td class="px-4 py-2">129696</td>
                    <td class="px-4 py-2">আলী
                        আমজাদ
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১২০</td>
                    <td class="px-4 py-2">129695</td>
                    <td class="px-4 py-2">মৌলভীবাজার
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১২১</td>
                    <td rowspan="2">সিলেট</td>
                    <td rowspan="2">সিলেট
                        সদর</td>
                    <td class="px-4 py-2">130399</td>
                    <td class="px-4 py-2">সরকারি
                        অগ্রগামী
                        বালিকা উচ্চ
                        বিদ্যালয় ও
                        কলেজ</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১২২</td>
                    <td class="px-4 py-2">130400</td>
                    <td class="px-4 py-2">সিলেট
                        সরকারি
                        পাইলট উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১২৩</td>
                    <td rowspan="2">সুনামগঞ্জ</td>
                    <td rowspan="2">সুনামগঞ্জ
                        সদর</td>
                    <td class="px-4 py-2">130023</td>
                    <td class="px-4 py-2">সরকারি
                        জুবিলী উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১২৪</td>
                    <td class="px-4 py-2">130026</td>
                    <td class="px-4 py-2">সরকারি
                        সতীশ চন্দ্র
                        বালিকা উচ্চ
                        বিদ্যালয়, সুনামগঞ্জ</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১২৫</td>
                    <td rowspan="2">হবিগঞ্জ</td>
                    <td rowspan="2">হবিগঞ্জ
                        সদর</td>
                    <td class="px-4 py-2">129418</td>
                    <td class="px-4 py-2">বসন্ত
                        কুমারী
                        গোপাল
                        চন্দ্র
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">১২৬</td>
                    <td class="px-4 py-2">129417</td>
                    <td class="px-4 py-2">হবিগঞ্জ
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                </tbody>
            </table>
        </div>




        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
            {{ __('You need to register as an individual before creating a team.') }}
            <a href="{{ route('application.applicantRegister') }}" class="text-indigo-600 hover:underline">
                {{ __('Register here.') }}
            </a>
        </div>
    </div>
@endsection
