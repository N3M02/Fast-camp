<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast Camp - ค้นหากิจกรรม</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; background-color: #f0f7ff; }
    </style>
</head>
<body class="p-6">

    <nav class="flex justify-between items-center mb-10 px-10">
        <div class="flex items-center gap-2">
            <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">⛺</div>
            <span class="text-xl font-bold text-blue-900">FAST CAMP</span>
        </div>
        <div class="hidden md:flex gap-8 text-blue-800 font-medium">
            <a href="#" class="hover:underline">กิจกรรมของฉัน</a>
            <a href="#" class="hover:underline">การลงทะเบียน</a>
            <a href="#" class="hover:underline">โปรไฟล์</a>
        </div>
        <button class="bg-blue-200 text-blue-900 px-6 py-2 rounded-full flex items-center gap-2 font-medium hover:bg-blue-300 transition">
            เข้าสู่ระบบ 
            <span class="w-6 h-6 bg-blue-900 rounded-full flex items-center justify-center text-white text-xs">👤</span>
        </button>
    </nav>

    <div class="max-w-3xl mx-auto bg-blue-100 rounded-3xl p-4 shadow-sm mb-12 border border-blue-200">
        <div class="relative mb-3">
            <span class="absolute inset-y-0 left-3 flex items-center text-gray-500">☰</span>
            <input type="text" placeholder="ค้นหากิจกรรม" class="w-full pl-10 pr-10 py-2 rounded-xl border-none focus:ring-2 focus:ring-blue-400 outline-none">
            <span class="absolute inset-y-0 right-3 flex items-center text-gray-500">🔍</span>
        </div>
        <div class="flex flex-wrap justify-center gap-4 text-sm text-blue-900">
            <div class="flex items-center gap-2">
                วันที่เริ่มกิจกรรม : <input type="date" class="rounded-lg border-gray-300 px-2 py-1 outline-none">
            </div>
            <div class="flex items-center gap-2">
                วันที่สิ้นสุดกิจกรรม : <input type="date" class="rounded-lg border-gray-300 px-2 py-1 outline-none">
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-4">
        
        <div class="bg-white rounded-[2rem] shadow-lg overflow-hidden border border-gray-100 flex flex-col h-full transform hover:scale-105 transition">
            <div class="bg-blue-200 h-48 flex items-center justify-center">
                <svg class="w-20 h-20 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
            </div>
            <div class="p-5 flex flex-col flex-grow">
                <span class="bg-blue-100 text-blue-600 text-[10px] px-2 py-0.5 rounded w-fit mb-2">ไอที</span>
                <h3 class="font-bold text-blue-900 mb-2">ค่ายเขียนโปรแกรมพื้นฐาน</h3>
                <p class="text-xs text-gray-500 mb-4 leading-relaxed">
                    พื้นฐานสำคัญสำหรับนักพัฒนารุ่นใหม่ เรียนรู้ง่าย สนุกได้ความรู้
                </p>
                <div class="text-[10px] text-gray-400 flex items-center gap-1 mb-6">
                    📍 คณะ IT MSU
                </div>
                <button onclick="alert('ไปที่หน้ารายละเอียด')" class="mt-auto w-full bg-blue-100 text-blue-700 py-2 rounded-xl font-medium hover:bg-blue-500 hover:text-white transition">
                    รายละเอียด
                </button>
            </div>
        </div>

        </div>

</body>
</html>