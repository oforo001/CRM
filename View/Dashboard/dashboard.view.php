<?php require 'View/Partials/header.php'; ?>

<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center">
        <div class="shrink-0">
          <img class="size-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
        </div>
      </div>

      <div class="ml-auto flex items-baseline space-x-4">
        <a href="Controllers/Login/logout.php" class="<?php echo urlIS('/CRM/') ? 'bg-gray-900 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white'; ?> rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Log Out</a>
      </div>
    </div>
  </div>
</nav>

<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
 

  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">All reservations</h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
      <?php if(! empty($appointsment_data)): ?>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
           <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
               <tr>
                   <th scope="col" class="px-6 py-3">
                       Representant name
                    </th>
                    <th scope="col" class="px-6 py-3">
                       Representant Lastname
                    </th>
                   <th scope="col" class="px-6 py-3">
                        Representant E-Mail
                  </th>
                
                    <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                   </th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($appointsment_data as $appointment): ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              
                <td class=class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo htmlspecialchars($appointment['representant_name']); ?>
                </td>
                <td class=class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo htmlspecialchars($appointment['representant_lastname']); ?>
                </td>
                <td class=class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo htmlspecialchars($appointment['representant_email']); ?>
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Details</a>
                  </td>
            </tr>
            <?php endforeach; ?>
           
        </tbody>
    </table>
    <?php else: ?>
    <p>No appointments found for your business.</p>
    <?php endif; ?>

</div>
    </div>
  </main>
</div>
