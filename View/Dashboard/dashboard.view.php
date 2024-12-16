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

<div class="min-h-full">
 

  <header class="bg-white shadow">
  <div class="mx-auto w-full max-w-lg md:max-w-xl lg:max-w-3xl px-4 sm:px-6 mb-6">
  <?php if (isset($_SESSION['loginned_user'])): ?>
    <div class="p-6 bg-gray-100 border-l-4 border-green-500 text-gray-700 rounded-md shadow-md flex items-start space-x-4">
      <div class="flex-shrink-0">
        <!-- Icon (using a checkmark for success) -->
        <svg class="h-6 w-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
      </div>
      <div>
        <p class="text-lg font-semibold">You are loginned as:</p>
        <p class="mt-1 text-xl font-bold text-gray-800"><?= htmlspecialchars($_SESSION['loginned_user']['organisation_name']); ?></p>
      </div>
    </div>
  <?php endif; ?>
</div>
  </header>
  <main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <?php if (!empty($appointsment_data)): ?>
      <div class="mb-6 p-4 bg-blue-100 border-l-4 border-blue-500 text-blue-700 rounded-md shadow-md flex items-center space-x-4">
        <div class="flex-shrink-0">
          <svg class="h-6 w-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 4a8 8 0 110 16 8 8 0 010-16z" />
          </svg>
        </div>
        <div>
          <p class="text-lg font-semibold">All Reservations</p>
          <p class="text-sm">Total Reservations: <strong><?= count($appointsment_data); ?></strong></p>
        </div>
        <?php endif; ?>
      </div>
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
              
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo htmlspecialchars($appointment['representant_name']); ?>
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo htmlspecialchars($appointment['representant_lastname']); ?>
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo htmlspecialchars($appointment['representant_email']); ?>
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="/CRM/dashboard/appointment?id=<?php echo urldecode($appointment['visit_id']); ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Details</a>
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
