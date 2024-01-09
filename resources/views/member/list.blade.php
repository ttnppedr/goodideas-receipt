<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="p-5">
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
        @foreach($members as $member)
            <div class="relative flex items-center space-x-3 rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:border-gray-400">
                <div class="flex-shrink-0">
                    @if($member->hasImages)
                        <img class="h-10 w-10 rounded-full" src="https://i.pravatar.cc/50?u={{rand(1000, 9999)}}" alt="">
                    @endif
                </div>
                <div class="min-w-0 flex-1">
                    <a href="{{$member->link}}" class="focus:outline-none">
                        <span class="absolute inset-0" aria-hidden="true"></span>
                        <p class="font-medium text-gray-900">{{$member->name}}</p>
                        <p class="truncate text-gray-500">{{$member->real_name}}</p>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>

