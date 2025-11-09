<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Hunter</title>
    @vite(['resources/css/app.css','resoursec/js/app.js'])
</head>
<body class="bg-black text-white font-serif">
    
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/30">
            <div class="bg-white w-32 h-10">
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" class="w-32 h-10" alt="">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            <div>
                <a href="#">Post a Job</a>
            </div>
        </nav>

        <main class="mt-10 max-w-[1000px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>
</html>