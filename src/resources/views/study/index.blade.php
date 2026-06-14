<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>モダンデータ一覧</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">

    <div class="max-w-6xl mx-auto px-4 py-12">
        
        <div class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-3xl font-bold text-gray-800"></h1>
                <p class="text-gray-500 mt-2"></p>
            </div>
            <a href= "{{ route('study.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-300 shadow-md shadow-indigo-200">
                新規作成
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- ここから foreach 等でループさせる想定のカード要素 --}}
            @foreach ($studys as $study)
              <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition duration-300 group">
                  <div class="h-2 w-full bg-indigo-500"></div>
                  <div class="p-6">{{$study->content}}</div>
              </div>
              @endforeach
        </div>
    </div>

</body>
</html>