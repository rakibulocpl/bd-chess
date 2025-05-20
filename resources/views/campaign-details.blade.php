
@extends('layouts.public')
@section('content')
    <div class="flex flex-col gap-4">
        <!-- Page Header -->

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <div class="overflow-x-auto mt-6">
            <h1 class="text-center text-2xl md:text-3xl mb-2 mt-5">নিন্মোক্ত স্কুলে ক্যাম্পেইন  অনুষ্ঠিত হবে</h1>
            <table class="min-w-full divide-y divide-gray-300 text-sm text-left  border border-gray-400 ">
                <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-4 py-2 border border-gray-400  font-semibold  border border-gray-400 ">ক্রমিক</th>
                    <th class="px-4 py-2 border border-gray-400  font-semibold  border border-gray-400 ">অঞ্চল</th>
                    <th class="px-4 py-2 border border-gray-400  font-semibold  border border-gray-400 ">জেলা</th>
                    <th class="px-4 py-2 border border-gray-400  font-semibold  border border-gray-400 ">উপজেলা</th>
                    <th class="px-4 py-2 border border-gray-400  font-semibold  border border-gray-400 ">ইআইআইএন</th>
                    <th class="px-4 py-2 border border-gray-400  font-semibold  border border-gray-400 ">বিদ্যালয়ের নাম</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-gray-800 bg-white">

                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১</td>
                    <td rowspan="8">কুমিল্লা</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >কুমিল্লা</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >কুমিল্লা
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">105770</td>
                    <td class="px-4 py-2 border border-gray-400 ">কুমিল্লা
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">২</td>
                    <td class="px-4 py-2 border border-gray-400 ">105762</td>
                    <td class="px-4 py-2 border border-gray-400 ">নবাব
                        ফয়জুন্নেছা
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৩</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >চাঁদপুর</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >চাঁদপুর
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">103490</td>
                    <td class="px-4 py-2 border border-gray-400 ">মাতৃপীঠ
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৪</td>
                    <td class="px-4 py-2 border border-gray-400 ">103496</td>
                    <td class="px-4 py-2 border border-gray-400 ">হাসান
                        আলী সরকারি
                        উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৫</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >ব্রাহ্মণবাড়িয়া</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >ব্রাহ্মণবাড়িয়া
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">103210</td>
                    <td class="px-4 py-2 border border-gray-400 ">অন্নদা
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৬</td>
                    <td class="px-4 py-2 border border-gray-400 ">103216</td>
                    <td class="px-4 py-2 border border-gray-400 ">সাবেরা
                        সোবহান
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৭</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >লক্ষ্মীপুর</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >লক্ষ্মীপুর
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">106897</td>
                    <td class="px-4 py-2 border border-gray-400 ">লক্ষ্মীপুর
                        আদর্শ সামাদ
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৮</td>
                    <td class="px-4 py-2 border border-gray-400 ">106899</td>
                    <td class="px-4 py-2 border border-gray-400 ">লক্ষ্মীপুর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৯</td>
                    <td rowspan="20">খুলনা</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >কুষ্টিয়া</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >কুষ্টিয়া
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">117743</td>
                    <td class="px-4 py-2 border border-gray-400 ">কুষ্টিয়া
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১০</td>
                    <td class="px-4 py-2 border border-gray-400 ">117759</td>
                    <td class="px-4 py-2 border border-gray-400 ">কুষ্টিয়া
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়,
                        কুষ্টিয়া।</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১১</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >খুলনা</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >খুলনা
                        মহানগরী</td>
                    <td class="px-4 py-2 border border-gray-400 ">117135</td>
                    <td class="px-4 py-2 border border-gray-400 ">খুলনা
                        জিলা স্কুল,
                        খুলনা।</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১২</td>
                    <td class="px-4 py-2 border border-gray-400 ">117138</td>
                    <td class="px-4 py-2 border border-gray-400 ">সরকারি
                        করোনেশন
                        মাধ্যমিক
                        বালিকা
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১৩</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >চুয়াডাঙ্গা</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >চুয়াডাঙ্গা
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">115348</td>
                    <td class="px-4 py-2 border border-gray-400 ">চুয়াডাঙ্গা
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়<span style="mso-spacerun:yes">&nbsp;</span></td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১৪</td>
                    <td class="px-4 py-2 border border-gray-400 ">115349</td>
                    <td class="px-4 py-2 border border-gray-400 ">ভিক্টোরিয়া
                        জুবিলি
                        সরকারি উচ্চ
                        বিদ্যালয়, চুয়াডাঙ্গা।</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১৫</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >ঝিনাইদহ</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >ঝিনাইদহ
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">116464</td>
                    <td class="px-4 py-2 border border-gray-400 ">ঝিনাইদহ
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১৬</td>
                    <td class="px-4 py-2 border border-gray-400 ">116450</td>
                    <td class="px-4 py-2 border border-gray-400 ">ঝিনাইদহ
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১৭</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >নড়াইল</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >নড়াইল
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">118449</td>
                    <td class="px-4 py-2 border border-gray-400 ">নড়াইল
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১৮</td>
                    <td class="px-4 py-2 border border-gray-400 ">118450</td>
                    <td class="px-4 py-2 border border-gray-400 ">নড়াইল
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১৯</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >বাগেরহাট</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >বাগেরহাট
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">114761</td>
                    <td class="px-4 py-2 border border-gray-400 ">বাগেরহাট
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">২০</td>
                    <td class="px-4 py-2 border border-gray-400 ">114766</td>
                    <td class="px-4 py-2 border border-gray-400 ">বাগেরহাট
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">২১</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >মাগুরা</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >মাগুরা
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">117904</td>
                    <td class="px-4 py-2 border border-gray-400 ">মাগুরা
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">২২</td>
                    <td class="px-4 py-2 border border-gray-400 ">117906</td>
                    <td class="px-4 py-2 border border-gray-400 ">মাগুরা
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">২৩</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >মেহেরপুর</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >মেহেরপুর
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">118298</td>
                    <td class="px-4 py-2 border border-gray-400 ">মেহেরপুর
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">২৪</td>
                    <td class="px-4 py-2 border border-gray-400 ">118301</td>
                    <td class="px-4 py-2 border border-gray-400 ">মেহেরপুর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">২৫</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >যশোর</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >যশোর
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">115958</td>
                    <td class="px-4 py-2 border border-gray-400 ">যশোর
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">২৬</td>
                    <td class="px-4 py-2 border border-gray-400 ">115962</td>
                    <td class="px-4 py-2 border border-gray-400 ">যশোর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">২৭</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >সাতক্ষীরা</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >সাতক্ষীরা
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">118813</td>
                    <td class="px-4 py-2 border border-gray-400 ">সাতক্ষীরা
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">২৮</td>
                    <td class="px-4 py-2 border border-gray-400 ">118808</td>
                    <td class="px-4 py-2 border border-gray-400 ">সাতক্ষীরা
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">২৯</td>
                    <td rowspan="14">চট্টগ্রাম</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >কক্সবাজার</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >কক্সবাজার
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">106263</td>
                    <td class="px-4 py-2 border border-gray-400 ">কক্সবাজার
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৩০</td>
                    <td class="px-4 py-2 border border-gray-400 ">131396</td>
                    <td class="px-4 py-2 border border-gray-400 ">কক্সবাজার
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৩১</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400"  >খাগড়াছড়ি</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400"  >খাগড়াছড়ি
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">106772</td>
                    <td class="px-4 py-2 border border-gray-400 ">খাগড়াছড়ি
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৩২</td>
                    <td class="px-4 py-2 border border-gray-400 ">106770</td>
                    <td class="px-4 py-2 border border-gray-400 ">খাগড়াছড়ি
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৩৩</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400"  >চট্টগ্রাম</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400"  >চট্টগ্রাম
                        মহানগরী</td>
                    <td class="px-4 py-2 border border-gray-400 ">104275</td>
                    <td class="px-4 py-2 border border-gray-400 ">চট্টগ্রাম
                        কলেজিয়েট
                        স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৩৪</td>
                    <td class="px-4 py-2 border border-gray-400 ">104496</td>
                    <td class="px-4 py-2 border border-gray-400 ">ডাঃ
                        খাস্তগীর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৩৫</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400"  >নোয়াখালী</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >নোয়াখালী
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">107540</td>
                    <td class="px-4 py-2 border border-gray-400 ">নোয়াখালী
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৩৬</td>
                    <td class="px-4 py-2 border border-gray-400 ">107542</td>
                    <td class="px-4 py-2 border border-gray-400 ">নোয়াখালী
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৩৭</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >ফেনী</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >ফেনী
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">106577</td>
                    <td class="px-4 py-2 border border-gray-400 ">ফেনী
                        সরকারি
                        পাইলট উচ্চ
                        বিদ্যালয়,
                        ফেনী।</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৩৮</td>
                    <td class="px-4 py-2 border border-gray-400 ">106582</td>
                    <td class="px-4 py-2 border border-gray-400 ">ফেনী
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৩৯</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >বান্দরবান</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >বান্দরবান
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">103092</td>
                    <td class="px-4 py-2 border border-gray-400 ">বান্দরবান
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৪০</td>
                    <td class="px-4 py-2 border border-gray-400 ">103093</td>
                    <td class="px-4 py-2 border border-gray-400 ">বান্দরবান
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৪১</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >রাঙ্গামাটি</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >রাঙ্গামাটি
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">107795</td>
                    <td class="px-4 py-2 border border-gray-400 ">রাঙ্গামাটি
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৪২</td>
                    <td class="px-4 py-2 border border-gray-400 ">107797</td>
                    <td class="px-4 py-2 border border-gray-400 ">রাঙ্গামাটি
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৪৩</td>
                    <td rowspan="22">ঢাকা</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >গাজীপুর</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >গাজীপুর
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">108954</td>
                    <td class="px-4 py-2 border border-gray-400 ">জয়দেবপুর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৪৪</td>
                    <td class="px-4 py-2 border border-gray-400 ">108955</td>
                    <td class="px-4 py-2 border border-gray-400 ">রাণী
                        বিলাসমণি
                        সরকারি বালক
                        উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৪৫</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >গোপালগঞ্জ</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >গোপালগঞ্জ
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">109448</td>
                    <td class="px-4 py-2 border border-gray-400 ">বীণাপাণি
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৪৬</td>
                    <td class="px-4 py-2 border border-gray-400 ">109447</td>
                    <td class="px-4 py-2 border border-gray-400 ">সীতানাথ
                        মথুরানাথ
                        মডেল সরকারি
                        উচ্চ বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৪৭</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >ঢাকা</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >ঢাকা
                        মহানগরী</td>
                    <td class="px-4 py-2 border border-gray-400 ">107962</td>
                    <td class="px-4 py-2 border border-gray-400 ">গবর্নমেন্ট
                        ল্যাবরেটরি
                        হাই স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৪৮</td>
                    <td class="px-4 py-2 border border-gray-400 ">108580</td>
                    <td class="px-4 py-2 border border-gray-400 ">মতিঝিল
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৪৯</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >নরসিংদী</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >নরসিংদী
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">112673</td>
                    <td class="px-4 py-2 border border-gray-400 ">নরসিংদী
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৫০</td>
                    <td class="px-4 py-2 border border-gray-400 ">112674</td>
                    <td class="px-4 py-2 border border-gray-400 ">ব্রাহ্মন্দী
                        কামিনী
                        কিশোর মৌলিক
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৫১</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >নারায়ণগঞ্জ</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >নারায়নগঞ্জ
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">112416</td>
                    <td class="px-4 py-2 border border-gray-400 ">ইসলামিক
                        এডুকেশনাল
                        ট্রাষ্ট
                        (আই.ই.টি)
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৫২</td>
                    <td class="px-4 py-2 border border-gray-400 ">112425</td>
                    <td class="px-4 py-2 border border-gray-400 ">নারায়ণগঞ্জ
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৫৩</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >ফরিদপুর</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >ফরিদপুর
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">108732</td>
                    <td class="px-4 py-2 border border-gray-400 ">ফরিদপুর
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৫৪</td>
                    <td class="px-4 py-2 border border-gray-400 ">108745</td>
                    <td class="px-4 py-2 border border-gray-400 ">ফরিদপুর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৫৫</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >মাদারীপুর</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >মাদারীপুর
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">110730</td>
                    <td class="px-4 py-2 border border-gray-400 ">ইউনাইটেড
                        ইসলামিয়া
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৫৬</td>
                    <td class="px-4 py-2 border border-gray-400 ">131399</td>
                    <td class="px-4 py-2 border border-gray-400 ">ডনোভান
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৫৭</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >মানিকগঞ্জ</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >মানিকগঞ্জ
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">110957</td>
                    <td class="px-4 py-2 border border-gray-400 ">মানিকগঞ্জ
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৫৮</td>
                    <td class="px-4 py-2 border border-gray-400 ">110958</td>
                    <td class="px-4 py-2 border border-gray-400 ">মানিকগঞ্জ
                        সুরেন্দ্র
                        কুমার
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৫৯</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >মুন্সীগঞ্জ</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >মুন্সীগঞ্জ
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">111134</td>
                    <td class="px-4 py-2 border border-gray-400 ">আলবার্ট
                        ভিক্টোরিয়া
                        যতীন্দ্র
                        মোহন গভ. গার্লস
                        হাই স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৬০</td>
                    <td class="px-4 py-2 border border-gray-400 ">111138</td>
                    <td class="px-4 py-2 border border-gray-400 ">কাজী
                        কমরউদ্দিন
                        গভ:
                        ইনস্টিটিউশন</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৬১</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >রাজবাড়ী</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >রাজবাড়ী
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">113429</td>
                    <td class="px-4 py-2 border border-gray-400 ">রাজবাড়ী
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৬২</td>
                    <td class="px-4 py-2 border border-gray-400 ">113430</td>
                    <td class="px-4 py-2 border border-gray-400 ">রাজবাড়ী
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৬৩</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >শরীয়তপুর</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >শরীয়তপুর
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">113615</td>
                    <td class="px-4 py-2 border border-gray-400 ">পালং
                        তুলাসার
                        গুরুদাস
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৬৪</td>
                    <td class="px-4 py-2 border border-gray-400 ">113614</td>
                    <td class="px-4 py-2 border border-gray-400 ">শরীয়তপুর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৬৫</td>
                    <td rowspan="10">বরিশাল</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >ঝালকাঠি</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >ঝালকাঠি
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">101633</td>
                    <td class="px-4 py-2 border border-gray-400 ">ঝালকাঠি
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৬৬</td>
                    <td class="px-4 py-2 border border-gray-400 ">101631</td>
                    <td class="px-4 py-2 border border-gray-400 ">ঝালকাঠি
                        সরকারি
                        হরচন্দ্র
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৬৭</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >পটুয়াখালী</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >পটুয়াখালী
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">102477</td>
                    <td class="px-4 py-2 border border-gray-400 ">পটুয়াখালী
                        সরকারি
                        জুবিলী উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৬৮</td>
                    <td class="px-4 py-2 border border-gray-400 ">102478</td>
                    <td class="px-4 py-2 border border-gray-400 ">পটুয়াখালী
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৬৯</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >বরগুনা</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >বরগুনা
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">100154</td>
                    <td class="px-4 py-2 border border-gray-400 ">বরগুনা
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৭০</td>
                    <td class="px-4 py-2 border border-gray-400 ">100155</td>
                    <td class="px-4 py-2 border border-gray-400 ">বরগুনা
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৭১</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >বরিশাল</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >বরিশাল
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">100742</td>
                    <td class="px-4 py-2 border border-gray-400 ">বরিশাল
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৭২</td>
                    <td class="px-4 py-2 border border-gray-400 ">100757</td>
                    <td class="px-4 py-2 border border-gray-400 ">বরিশাল
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৭৩</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >ভোলা</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >ভোলা
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">101112</td>
                    <td class="px-4 py-2 border border-gray-400 ">ভোলা
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৭৪</td>
                    <td class="px-4 py-2 border border-gray-400 ">101110</td>
                    <td class="px-4 py-2 border border-gray-400 ">ভোলা
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৭৫</td>
                    <td rowspan="12">ময়মনসিংহ</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >কিশোরগঞ্জ</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >কিশোরগঞ্জ
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">110447</td>
                    <td class="px-4 py-2 border border-gray-400 ">কিশোরগঞ্জ
                        সরকারি বালক
                        উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৭৬</td>
                    <td class="px-4 py-2 border border-gray-400 ">110445</td>
                    <td class="px-4 py-2 border border-gray-400 ">সরযূ
                        বালা সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৭৭</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >জামালপুর</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >জামালপুর
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">109873</td>
                    <td class="px-4 py-2 border border-gray-400 ">জামালপুর
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৭৮</td>
                    <td class="px-4 py-2 border border-gray-400 ">109869</td>
                    <td class="px-4 py-2 border border-gray-400 ">জামালপুর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৭৯</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >টাঙ্গাইল</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >টাঙ্গাইল
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">114680</td>
                    <td class="px-4 py-2 border border-gray-400 ">বিন্দুবাসিনী
                        সরকারি বালক
                        উচ্চ
                        বিদ্যালয়, টাঙ্গাই্ল।</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৮০</td>
                    <td class="px-4 py-2 border border-gray-400 ">114681</td>
                    <td class="px-4 py-2 border border-gray-400 ">বিন্দুবাসিনী
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৮১</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >নেত্রকোনা</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >নেত্রকোনা
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">113134</td>
                    <td class="px-4 py-2 border border-gray-400 ">আঞ্জুমান
                        আদর্শ
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৮২</td>
                    <td class="px-4 py-2 border border-gray-400 ">113138</td>
                    <td class="px-4 py-2 border border-gray-400 ">নেত্রকোনা
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৮৩</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >ময়মনসিংহ</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >ময়মনসিংহ
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">111842</td>
                    <td class="px-4 py-2 border border-gray-400 ">বিদ্যাময়ী
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৮৪</td>
                    <td class="px-4 py-2 border border-gray-400 ">111829</td>
                    <td class="px-4 py-2 border border-gray-400 ">ময়মনসিংহ
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৮৫</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >শেরপুর</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >শেরপুর
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">131051</td>
                    <td class="px-4 py-2 border border-gray-400 ">শেরপুর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৮৬</td>
                    <td class="px-4 py-2 border border-gray-400 ">113835</td>
                    <td class="px-4 py-2 border border-gray-400 ">শেরপুর
                        সরকারি
                        ভিক্টোরিয়া
                        একাডেমী</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৮৭</td>
                    <td rowspan="16">রংপুর</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >কুড়িগ্রাম</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >কুড়িগ্রাম
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">122246</td>
                    <td class="px-4 py-2 border border-gray-400 ">কুড়িগ্রাম
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৮৮</td>
                    <td class="px-4 py-2 border border-gray-400 ">122248</td>
                    <td class="px-4 py-2 border border-gray-400 ">কুড়িগ্রাম
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৮৯</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >গাইবান্ধা</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >গাইবান্ধা
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">121101</td>
                    <td class="px-4 py-2 border border-gray-400 ">গাইবান্ধা
                        সরকারি উচ্চ
                        বালক
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৯০</td>
                    <td class="px-4 py-2 border border-gray-400 ">121102</td>
                    <td class="px-4 py-2 border border-gray-400 ">গাইবান্ধা
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৯১</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >ঠাকুরগাঁও</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >ঠাকুরগাঁও
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">129085</td>
                    <td class="px-4 py-2 border border-gray-400 ">ঠাকুরগাঁও
                        সরকারি বালক
                        উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৯২</td>
                    <td class="px-4 py-2 border border-gray-400 ">129082</td>
                    <td class="px-4 py-2 border border-gray-400 ">ঠাকুরগাঁও
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৯৩</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >দিনাজপুর</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >দিনাজপুর
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">120719</td>
                    <td class="px-4 py-2 border border-gray-400 ">দিনাজপুর
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৯৪</td>
                    <td class="px-4 py-2 border border-gray-400 ">120718</td>
                    <td class="px-4 py-2 border border-gray-400 ">দিনাজপুর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৯৫</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >নীলফামারী</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >নীলফামারী
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">125061</td>
                    <td class="px-4 py-2 border border-gray-400 ">নীলফামারী
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৯৬</td>
                    <td class="px-4 py-2 border border-gray-400 ">125062</td>
                    <td class="px-4 py-2 border border-gray-400 ">নীলফামারী
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৯৭</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >পঞ্চগড়</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >পঞ্চগড়
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">126054</td>
                    <td class="px-4 py-2 border border-gray-400 ">পঞ্চগড়
                        বিষ্ণু
                        প্রসাদ
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৯৮</td>
                    <td class="px-4 py-2 border border-gray-400 ">126055</td>
                    <td class="px-4 py-2 border border-gray-400 ">পঞ্চগড়
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">৯৯</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >রংপুর</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >রংপুর
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">127372</td>
                    <td class="px-4 py-2 border border-gray-400 ">রংপুর
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১০০</td>
                    <td class="px-4 py-2 border border-gray-400 ">127380</td>
                    <td class="px-4 py-2 border border-gray-400 ">রংপুর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১০১</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >লালমনিরহাট</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >লালমনিরহাট
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">122901</td>
                    <td class="px-4 py-2 border border-gray-400 ">লালমনিরহাট
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১০২</td>
                    <td class="px-4 py-2 border border-gray-400 ">122899</td>
                    <td class="px-4 py-2 border border-gray-400 ">লালমনিরহাট
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১০৩</td>
                    <td rowspan="16">রাজশাহী</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >চাঁপাইনবাবগঞ্জ</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >চাঁপাইনবাবগঞ্জ
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">124505</td>
                    <td class="px-4 py-2 border border-gray-400 ">নবাবগঞ্জ
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১০৪</td>
                    <td class="px-4 py-2 border border-gray-400 ">124506</td>
                    <td class="px-4 py-2 border border-gray-400 ">হরিমোহন
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১০৫</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >জয়পুরহাট</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >জয়পুরহাট
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">121808</td>
                    <td class="px-4 py-2 border border-gray-400 ">জয়পুরহাট
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১০৬</td>
                    <td class="px-4 py-2 border border-gray-400 ">121806</td>
                    <td class="px-4 py-2 border border-gray-400 ">রামদেও
                        বজলা সরকারি
                        উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১০৭</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >নওগাঁ</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >নওগাঁ
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">123413</td>
                    <td class="px-4 py-2 border border-gray-400 ">নওগাঁ
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১০৮</td>
                    <td class="px-4 py-2 border border-gray-400 ">123419</td>
                    <td class="px-4 py-2 border border-gray-400 ">নওগাঁ
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১০৯</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >নাটোর</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >নাটোর
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">124140</td>
                    <td class="px-4 py-2 border border-gray-400 ">নাটোর
                        সরকারি বালক
                        উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১১০</td>
                    <td class="px-4 py-2 border border-gray-400 ">124139</td>
                    <td class="px-4 py-2 border border-gray-400 ">নাটোর
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১১১</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >পাবনা</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >পাবনা
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">125564</td>
                    <td class="px-4 py-2 border border-gray-400 ">পাবনা
                        জিলা স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১১২</td>
                    <td class="px-4 py-2 border border-gray-400 ">125582</td>
                    <td class="px-4 py-2 border border-gray-400 ">পাবনা
                        সরকারি
                        বালিকা
                        উচ্চবিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১১৩</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >বগুড়া</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >বগুড়া
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">119176</td>
                    <td class="px-4 py-2 border border-gray-400 ">বগুড়া
                        জিলা স্কুল,
                        বগুড়া</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১১৪</td>
                    <td class="px-4 py-2 border border-gray-400 ">119177</td>
                    <td class="px-4 py-2 border border-gray-400 ">বগুড়া
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১১৫</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >রাজশাহী</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >রাজশাহী
                        মহানগরী</td>
                    <td class="px-4 py-2 border border-gray-400 ">126456</td>
                    <td class="px-4 py-2 border border-gray-400 ">রাজশাহী
                        কলেজিয়েট
                        স্কুল</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১১৬</td>
                    <td class="px-4 py-2 border border-gray-400 ">126455</td>
                    <td class="px-4 py-2 border border-gray-400 ">সরকারি
                        প্রমথনাথ
                        বালিকা উচ্চ
                        বিদ্যালয়,
                        রাজশাহী</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১১৭</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >সিরাজগঞ্জ</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >সিরাজগঞ্জ
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">128379</td>
                    <td class="px-4 py-2 border border-gray-400 ">বনোয়ারী
                        লাল সরকারি
                        উচ্চ
                        বিদ্যালয়,
                        সিরাজগঞ্জ।</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১১৮</td>
                    <td class="px-4 py-2 border border-gray-400 ">128374</td>
                    <td class="px-4 py-2 border border-gray-400 ">সালেহা
                        ইসহাক
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১১৯</td>
                    <td rowspan="8">সিলেট</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >মৌলভীবাজার</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >মৌলভীবাজার
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">129696</td>
                    <td class="px-4 py-2 border border-gray-400 ">আলী
                        আমজাদ
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১২০</td>
                    <td class="px-4 py-2 border border-gray-400 ">129695</td>
                    <td class="px-4 py-2 border border-gray-400 ">মৌলভীবাজার
                        সরকারি উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১২১</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >সিলেট</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >সিলেট
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">130399</td>
                    <td class="px-4 py-2 border border-gray-400 ">সরকারি
                        অগ্রগামী
                        বালিকা উচ্চ
                        বিদ্যালয় ও
                        কলেজ</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১২২</td>
                    <td class="px-4 py-2 border border-gray-400 ">130400</td>
                    <td class="px-4 py-2 border border-gray-400 ">সিলেট
                        সরকারি
                        পাইলট উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১২৩</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >সুনামগঞ্জ</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >সুনামগঞ্জ
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">130023</td>
                    <td class="px-4 py-2 border border-gray-400 ">সরকারি
                        জুবিলী উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১২৪</td>
                    <td class="px-4 py-2 border border-gray-400 ">130026</td>
                    <td class="px-4 py-2 border border-gray-400 ">সরকারি
                        সতীশ চন্দ্র
                        বালিকা উচ্চ
                        বিদ্যালয়, সুনামগঞ্জ</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১২৫</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >হবিগঞ্জ</td>
                    <td rowspan="2" class="px-4 py-2 border border-gray-400" >হবিগঞ্জ
                        সদর</td>
                    <td class="px-4 py-2 border border-gray-400 ">129418</td>
                    <td class="px-4 py-2 border border-gray-400 ">বসন্ত
                        কুমারী
                        গোপাল
                        চন্দ্র
                        সরকারি
                        বালিকা উচ্চ
                        বিদ্যালয়</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400 ">১২৬</td>
                    <td class="px-4 py-2 border border-gray-400 ">129417</td>
                    <td class="px-4 py-2 border border-gray-400 ">হবিগঞ্জ
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
