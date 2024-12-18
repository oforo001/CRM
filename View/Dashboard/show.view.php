<?php require 'View/Partials/header.php'; ?>

<!-- Navigation Bar -->
<nav class="bg-gray-800 shadow">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <!-- Logo -->
      <div class="flex items-center">
        <div class="shrink-0">
          <img class="size-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
        </div>
      </div>

      <div class="ml-auto flex items-baseline space-x-4">
        <a href="/CRM/Controllers/Dashboard/back.php" class="<?php echo urlIS('/CRM/') ? 'bg-gray-900 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white'; ?> rounded-md px-3 py-2 text-sm font-medium" aria-current="page">
          Back
        </a>
        <a href="/CRM/Controllers/Login/logout.php" class="<?php echo urlIS('/CRM/') ? 'bg-gray-900 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white'; ?> rounded-md px-3 py-2 text-sm font-medium" aria-current="page">
          Log Out
        </a>
        
      </div>
    </div>
  </div>
</nav>

<!-- Main Content -->
<div class="container mx-auto mt-10 px-6">
  <h2 class="text-3xl font-bold mb-6 text-gray-800 dark:text-white">Visit Details</h2>

  <!-- Visit Details Card -->
  <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
    <ul class="space-y-4 text-gray-700 dark:text-gray-300">
      <li class="border-b pb-4">
        <span class="font-semibold text-gray-900 dark:text-gray-100">Reason:</span>
        <p class="mt-1 text-gray-600 dark:text-gray-400"><?= htmlspecialchars($fetchedResult['reason'] ?? 'No details available'); ?></p>
      </li>
      <li class="border-b pb-4">
        <span class="font-semibold text-gray-900 dark:text-gray-100">About:</span>
        <p class="mt-1 text-gray-600 dark:text-gray-400"><?= htmlspecialchars($fetchedResult['about'] ?? 'No details available'); ?></p>
      </li>
      <li class="border-b pb-4">
        <span class="font-semibold text-gray-900 dark:text-gray-100">Visit Date:</span>
        <p class="mt-1 text-gray-600 dark:text-gray-400"><?= htmlspecialchars($fetchedResult['visit_date'] ?? 'N/A'); ?></p>
      </li>
      <li class="border-b pb-4">
        <span class="font-semibold text-gray-900 dark:text-gray-100">Begin Time:</span>
        <p class="mt-1 text-gray-600 dark:text-gray-400"><?= htmlspecialchars($fetchedResult['begin_time'] ?? 'N/A'); ?></p>
      </li>
      <li class="border-b pb-4">
        <span class="font-semibold text-gray-900 dark:text-gray-100">End Time:</span>
        <p class="mt-1 text-gray-600 dark:text-gray-400"><?= htmlspecialchars($fetchedResult['end_time'] ?? 'N/A'); ?></p>
      </li>
      <li>
        <span class="font-semibold text-gray-900 dark:text-gray-100">Created At:</span>
        <p class="mt-1 text-gray-600 dark:text-gray-400"><?= htmlspecialchars($fetchedResult['created_at'] ?? 'N/A'); ?></p>
      </li>
    </ul>
  </div>

    <div class="mt-6 mb-6 flex justify-center space-x-4">
        <a href="#" class="text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-lg px-5 py-2.5 text-sm text-center transition duration-300">
            Confirm
        </a>
        <a href="/CRM/Controllers/Dashboard/delete.php" class="text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-lg px-5 py-2.5 text-sm text-center transition duration-300">
            Delete
        </a>
    </div>
</div>

