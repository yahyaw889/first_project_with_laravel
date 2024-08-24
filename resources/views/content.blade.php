<x-layout>
    <x-slot:heading> Content Page</x-slot:heading>


<body class="bg-gray-100 text-gray-800">

    <!-- Header Section -->
    <header class="bg-green-600 text-white p-4 shadow-lg">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold">Content</h1>
        </div>
    </header>

    <!-- Main Content Section -->
    <main class="container mx-auto my-8 p-4 bg-white rounded-lg shadow-lg">
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Featured Articles</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <article class="p-4 bg-gray-50 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">How to Craft a Winning Resume</h3>
                    <p class="text-lg leading-relaxed">
                        Learn the secrets to creating a resume that stands out to potential employers. From
                        formatting tips to content suggestions, we've got you covered.
                    </p>
                    <a href="#" class="text-blue-600 hover:underline mt-2 inline-block">Read More</a>
                </article>
                <article class="p-4 bg-gray-50 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Mastering the Job Interview</h3>
                    <p class="text-lg leading-relaxed">
                        Get expert advice on how to prepare for and ace your next job interview. Understand common
                        questions and how to answer them with confidence.
                    </p>
                    <a href="#" class="text-blue-600 hover:underline mt-2 inline-block">Read More</a>
                </article>
                <article class="p-4 bg-gray-50 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Networking for Job Seekers</h3>
                    <p class="text-lg leading-relaxed">
                        Discover how to effectively network and connect with professionals in your industry. Learn
                        strategies for building meaningful relationships that can lead to job opportunities.
                    </p>
                    <a href="#" class="text-blue-600 hover:underline mt-2 inline-block">Read More</a>
                </article>
                <article class="p-4 bg-gray-50 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Optimizing Your LinkedIn Profile</h3>
                    <p class="text-lg leading-relaxed">
                        Your LinkedIn profile is your online resume. Learn how to optimize it to attract recruiters
                        and make a strong professional impression.
                    </p>
                    <a href="#" class="text-blue-600 hover:underline mt-2 inline-block">Read More</a>
                </article>
            </div>
        </section>

        <section>
            <h2 class="text-2xl font-semibold mb-4">Job Search Resources</h2>
            <p class="text-lg leading-relaxed mb-4">
                We offer a wide range of resources to help you in your job search journey. Whether you need help
                with resume writing, interview preparation, or networking, we have the tools you need to succeed.
            </p>
            <ul class="list-disc pl-5 space-y-2 text-lg leading-relaxed">
                <li><a href="/" class="text-blue-600 hover:underline">Resume Writing Guide</a></li>
                <li><a href="{{route('jobs')}}" class="text-blue-600 hover:underline">Job Search Engines</a></li>
                <li><a href="{{route('jobs')}}" class="text-blue-600 hover:underline">LinkedIn Optimization</a></li>
            </ul>
        </section>
    </main>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white p-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Job Search Platform. All rights reserved.</p>
        </div>
    </footer>



</x-layout>
