<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>コレクション詳細</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">

    <div class="max-w-4xl mx-auto px-4 py-12">
        
        <div class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-3xl font-bold text-gray-800"></h1>
            </div>
            <a href="" class="text-gray-500 hover:text-gray-800 font-medium transition duration-300">
                &larr; 一覧へ戻る
            </a>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="h-2 w-full bg-indigo-500"></div> <div class="p-8">
                <div class="flex items-center text-sm text-gray-400 mb-6 space-x-4">
                    <span></span>
                    <span></span>
                </div>

                <div class="text-gray-800 text-lg leading-relaxed whitespace-pre-wrap"></div>
            </div>

            <div class="px-8 py-6 bg-gray-50/50 border-t border-gray-50 flex justify-end space-x-4">
                <form action="#" method="POST" onsubmit="return confirm('本当に削除しますか？');">
                    <button type="submit" class="text-red-500 hover:text-red-700 font-semibold py-2 px-4 rounded-lg transition duration-300">削除する</button>
                </form>
                <a href="" class="bg-indigo-50 hover:bg-indigo-100 text-indigo-700 font-semibold py-2 px-6 rounded-lg transition duration-300">
                    編集する
                </a>
            </div>
        </div>
    </div>

</body>
</html>