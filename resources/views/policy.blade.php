@extends('layouts.app') {{-- If you're using a layout, else remove this --}}

@section('content')
<div class="bg-gray-100 min-h-screen py-10 px-4">
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-2xl p-8">
        <div class="flex justify-center mb-6">
            <x-authentication-card-logo />
        </div>

        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Privacy Policy</h1>

        <article class="prose lg:prose-xl max-w-none text-gray-700">
            <p>
                This Privacy Policy governs the manner in which <strong>Viral Marketing Tools</strong> collects, uses, maintains, and discloses information collected from users (each, a "User") of the Viral Marketing Tools SaaS platform ("Service"). The Service is hosted on the website <a href="https://app.viralmarketingtools.in" class="text-blue-600 underline">https://app.viralmarketingtools.in</a>.
            </p>

            <h2>Information Collection and Use</h2>
            <p>
                We may collect personal identification information from Users in various ways including when Users visit the website, register on the Service, subscribe to the newsletter, and engage with other features. Information is collected only if voluntarily submitted. Users can choose not to provide this information, but it may prevent participation in some activities.
            </p>

            <h2>Information Sharing</h2>
            <p>
                We may use third-party service providers to help operate our business or administer activities on our behalf (e.g., newsletters or surveys). These providers will receive access only to information necessary for these tasks and only with your permission.
            </p>

            <h2>Data Security</h2>
            <p>
                We implement industry-standard security practices to safeguard your data. However, no method of transmission over the Internet or electronic storage is 100% secure, and we cannot guarantee absolute security.
            </p>

            <h2>Changes to this Privacy Policy</h2>
            <p>
                We may update this Privacy Policy at any time. Users are encouraged to check this page frequently for updates. Continued use of the Service signifies acceptance of any changes.
            </p>

            <h2>Your Acceptance of These Terms</h2>
            <p>
                By using the Service, you signify your acceptance of this Privacy Policy. If you do not agree, please do not use the Service. Continued use following any posted changes will be deemed acceptance of those changes.
            </p>
        </article>
    </div>
</div>
@endsection
