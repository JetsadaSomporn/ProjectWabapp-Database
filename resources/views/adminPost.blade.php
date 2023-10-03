@extends('layouts.adminpage')
<link href="http://127.0.0.1:8000/css/admin.css" rel="stylesheet">
@section('content')

<style>
    .menu ul li a#post {
    background-color: #4869D9;
    color: #fff;
}
td{
    margin-right: 1em
}
</style>
<div class="container">
    
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Job Title
                </th>
                <th scope="col" class="px-6 py-3">
                    UserName
                </th>
                <th scope="col" class="px-6 py-3">
                    DateTime
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Software    
                </th>
                <td class="px-6 py-4">
                   Joy
                </td>
                <td class="px-6 py-4">
                    3/10/2023 23:33
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Full-time
                </th>
                <td class="px-6 py-4">
                    Ploy
                </td>
                <td class="px-6 py-4">
                    6/1/2023 03:53
                </td>
            </tr>
            
        </tbody>
    </table>
</div>

      
</div>
@endsection
