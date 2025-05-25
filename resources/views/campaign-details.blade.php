
@extends('layouts.public')
@section('content')
    <div class="flex flex-col gap-4">
        <!-- Page Header -->

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <div class="overflow-x-auto mt-6">
            <h1 class="text-center text-2xl md:text-3xl mb-2 mt-5">নিন্মোক্ত বিশ্ববিদ্যালয়ে  ক্যাম্পেইন  অনুষ্ঠিত হবে</h1>
            <table class="min-w-full divide-y divide-gray-300 text-sm text-left  border border-gray-400 ">
                <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-4 py-2 border border-gray-400  font-semibold  border border-gray-400 ">ক্রমিক</th>
                    <th class="px-4 py-2 border border-gray-400  font-semibold  border border-gray-400 ">বিশ্ববিদ্যালয়ের নাম</th>
                    <th class="px-4 py-2 border border-gray-400  font-semibold  border border-gray-400 ">তারিখ</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-gray-800 bg-white">
                <tr>
                    <td class="px-4 py-2 border border-gray-400">১</td>
                    <td class="px-4 py-2 border border-gray-400">জাতীয় কবি কাজী নজরুল ইসলাম বিশ্ববিদ্যালয়</td>
                    <td class="px-4 py-2 border border-gray-400">২৮ মে ২০২৫</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400">২</td>
                    <td class="px-4 py-2 border border-gray-400">মাওলানা ভাসানী বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়</td>
                    <td class="px-4 py-2 border border-gray-400">২৮ মে ২০২৫</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400">৩</td>
                    <td class="px-4 py-2 border border-gray-400">বরিশাল বিশ্ববিদ্যালয়</td>
                    <td class="px-4 py-2 border border-gray-400">২৮ মে ২০২৫</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400">৪</td>
                    <td class="px-4 py-2 border border-gray-400">কুমিল্লা বিশ্ববিদ্যালয়</td>
                    <td class="px-4 py-2 border border-gray-400">২৯ মে ২০২৫</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400">৫</td>
                    <td class="px-4 py-2 border border-gray-400">তথ্য প্রযুক্তি ইনস্টিটিউট, ঢাকা বিশ্ববিদ্যালয়</td>
                    <td class="px-4 py-2 border border-gray-400">২ জুন ২০২৫</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400">৬</td>
                    <td class="px-4 py-2 border border-gray-400">বেগম রোকেয়া বিশ্ববিদ্যালয়</td>
                    <td class="px-4 py-2 border border-gray-400">১ জুন ২০২৫</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400">৭</td>
                    <td class="px-4 py-2 border border-gray-400">রাজশাহী বিশ্ববিদ্যালয়</td>
                    <td class="px-4 py-2 border border-gray-400">১৬ জুন ২০২৫<span class="text-yellow-400">(নট কনফার্মড)</span></td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400">৮</td>
                    <td class="px-4 py-2 border border-gray-400">নোয়াখালী বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়</td>
                    <td class="px-4 py-2 border border-gray-400">১৬ জুন ২০২৫<span class="text-yellow-400">(নট কনফার্মড)</span</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400">৯</td>
                    <td class="px-4 py-2 border border-gray-400">খুলনা বিশ্ববিদ্যালয়</td>
                    <td class="px-4 py-2 border border-gray-400">১৮ জুন ২০২৫<span class="text-yellow-400">(নট কনফার্মড)</span</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400">১০</td>
                    <td class="px-4 py-2 border border-gray-400">গোপালগঞ্জ বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয় (গোবিপ্রবি)</td>
                    <td class="px-4 py-2 border border-gray-400">১৮ জুন ২০২৫<span class="text-yellow-400">(নট কনফার্মড)</span</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400">১১</td>
                    <td class="px-4 py-2 border border-gray-400">পাবনা বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়</td>
                    <td class="px-4 py-2 border border-gray-400">১৮ জুন ২০২৫<span class="text-yellow-400">(নট কনফার্মড)</span</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border border-gray-400">১২</td>
                    <td class="px-4 py-2 border border-gray-400">যশোর বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়</td>
                    <td class="px-4 py-2 border border-gray-400">১৮ জুন ২০২৫<span class="text-yellow-400">(নট কনফার্মড)</span</td>
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
