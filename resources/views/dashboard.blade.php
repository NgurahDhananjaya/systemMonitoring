<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex justify-center mx-16">
        <div class="flex flex-col p-2 mt-10">
            <h1 class="text-6xl font-bold">System Monitoring</h1>
            <div class="flex flex-col mt-6">
                <p class="m-auto">Anak Agung Ngurah Gede Dhananjaya</p>
                <p class="m-auto ">2105551109</p>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-3 mt-10 gap-4 mx-16">
        <div class="flex border-2 rounded-md">
            <div class="flex flex-col m-auto space-y-2 py-28 ">
                <div class="flex">
                    <h1 id="cpu_usage" class="text-6xl font-semibold">100.0</h1>
                    <h2 class="text-4 content-end">%</h2>
                </div>
                <p class="m-auto text-xl">CPU</p>
            </div>
        </div>
        
        <div class="flex border-2 rounded-md">
            <div class="flex flex-col m-auto space-y-2">
                <div class="flex">
                    <h1 id="mem_avail" class="text-6xl font-semibold">100.0</h1>
                    <h2 class="text-4 content-end">Mb</h2>
                </div>
                <p class="m-auto text-xl">Memory Available</p>
            </div>
        </div>

        <div class="flex border-2 rounded-md">
            <div class="flex flex-col m-auto space-y-2">
                <div class="flex">
                    <h1 id="mem_used" class="text-6xl font-semibold">100.0</h1>
                    <h2 class="text-4 content-end">Mb</h2>
                </div>
                <p class="m-auto text-xl">Memory used</p>
            </div>
        </div>
    </div>
</body>
</html>