<x-layouts::app :title="'Certificate'">

<div class="max-w-5xl mx-auto space-y-6">

    <div class="flex justify-end">

        <a href="{{ route('student.certificate.download', $certificate) }}"
           class="inline-block bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg shadow">

            Download PDF

        </a>

    </div>

    <div class="bg-white text-black rounded-xl shadow-lg p-16 border-4 border-gray-800">

        <div class="text-center">

            <h1 class="text-5xl font-bold tracking-wide">
                CERTIFICATE OF COMPLETION
            </h1>

            <p class="mt-6 text-lg font-semibold">
                PATHWISE
            </p>

            <p class="text-gray-600">
                AI-Powered E-Learning Platform
            </p>

            <div class="mt-12">

                <p class="text-xl">
                    This Certificate is Proudly Presented To
                </p>

                <h2 class="text-4xl font-bold mt-4">
                    {{ $certificate->student->name }}
                </h2>

            </div>

            <div class="mt-12">

                <p class="text-xl">
                    For Successfully Completing
                </p>

                <h3 class="text-3xl font-bold mt-4">
                    {{ $certificate->course->title }}
                </h3>

            </div>

            <div class="mt-12">

                <p class="text-gray-600">
                    Congratulations on successfully completing the course
                    and demonstrating the required competencies.
                </p>

            </div>

            <div class="grid grid-cols-2 gap-8 mt-16">

                <div>

                    <p class="text-gray-500">
                        Certificate Number
                    </p>

                    <p class="font-bold text-lg">
                        {{ $certificate->certificate_number }}
                    </p>

                </div>

                <div>

                    <p class="text-gray-500">
                        Date Issued
                    </p>

                    <p class="font-bold text-lg">
                        {{ \Carbon\Carbon::parse($certificate->issued_date)->format('F d, Y') }}
                    </p>

                </div>

            </div>

            <div class="mt-16">

                <p class="font-semibold">
                    PATHWISE Learning Management System
                </p>

                <p class="text-sm text-gray-500">
                    Official Certificate of Completion
                </p>

            </div>

        </div>

    </div>

</div>

</x-layouts::app>