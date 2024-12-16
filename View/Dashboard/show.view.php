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

<h2>Details:</h2>


<ul class="space-y-4 text-gray-500 list-disc list-inside dark:text-gray-400">
    <li>
        List item one
        <ul class="ps-5 mt-2 space-y-1 list-decimal list-inside">
            <li>You might feel like you are being really "organized" o</li>
            <li>Nested navigation in UIs is a bad idea too, keep things as flat as possible.</li>
            <li>Nesting tons of folders in your source code is also not helpful.</li>
        </ul>
    </li>
    
</ul>
