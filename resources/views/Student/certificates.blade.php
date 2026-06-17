<x-layouts::app :title="'My Certificates'">

<div class="space-y-6">

    <div>
        <h1 class="text-3xl font-bold text-white">
            My Certificates
        </h1>

        <p class="text-gray-400">
            Certificates earned from completed courses.
        </p>
    </div>

    @forelse($certificates as $certificate)

        <div class="rounded-xl border bg-white p-6 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">

            <div class="flex justify-between items-start">

                <div>
                    <h2 class="text-xl font-bold">
                        {{ $certificate->course->title }}
                    </h2>

                    <p class="text-sm text-gray-500 mt-2">
                        Certificate Number:
                        <strong>{{ $certificate->certificate_number }}</strong>
                    </p>

                    <p class="text-sm text-gray-500">
                        Issued:
                        {{ \Carbon\Carbon::parse($certificate->issued_date)->format('F d, Y') }}
                    </p>

                    <p class="text-sm text-green-500 mt-2">
                        🏆 Certificate Earned
                    <div class="mt-4">
                    <a href="{{ route('student.certificate.view', $certificate) }}"
                      class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                 View Certificate
                </a>
                 </div>
                    </p>
                </div>

                <div>
                    <span class="bg-green-600 text-white px-3 py-1 rounded">
                        {{ ucfirst($certificate->status) }}
                    </span>
                </div>

            </div>

        </div>

    @empty

        <div class="rounded-xl border p-8 text-center dark:border-neutral-700">

            <h2 class="text-xl font-semibold">
                No Certificates Yet
            </h2>

            <p class="text-gray-500 mt-2">
                Complete courses to earn certificates.
            </p>

        </div>

    @endforelse

</div>

</x-layouts::app>