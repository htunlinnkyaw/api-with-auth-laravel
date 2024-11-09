<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>


    <form class="max-w-md mt-20 mx-auto space-y-3 shadow-md p-10 rounded-sm">
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Name
            </label>
            <input type="text" id="name" name="name"
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div>
            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Price
            </label>
            <input type="text" id="price" name="price"
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div>
            <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Stock
            </label>
            <input type="text" id="stock" name="stock"
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div>
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description
            </label>
            <textarea id="description" rows="4" name="description"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write your thoughts here..."></textarea>
        </div>

        <button type="submit"
            class="bg-blue-500 text-white rounded-md px-4 py-2 w-full hover:bg-blue-600 active:scale-95 duration-200">Submit</button>

    </form>


</body>

</html>
