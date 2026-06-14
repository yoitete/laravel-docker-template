<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編集</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">

    <div class="max-w-3xl mx-auto px-4 py-12">
        
        <div class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">コレクション編集</h1>
            </div>
            <a href="#" class="text-gray-500 hover:text-gray-800 font-medium transition duration-300">
                &larr; キャンセル
            </a>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="h-2 w-full bg-indigo-500"></div> <form action="#" method="POST" class="p-8">
                
                <div class="mb-8">
                    <label for="content" class="block text-sm font-semibold text-gray-700 mb-2"><span class="text-indigo-500">*</span></label>
                    <textarea name="content" id="content" rows="6" required
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:bg-white focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition duration-200 resize-none text-gray-800"></textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-8 rounded-lg transition duration-300 shadow-md shadow-indigo-200 w-full sm:w-auto">
                        更新する
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>