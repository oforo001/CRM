<?php require 'View/Partials/header.php'; ?>
<?php require 'View/Partials/navbar.php'; ?>

<div class="text-center py-12 px-6 bg-gray-200">
  <h2 class="text-3xl font-semibold text-gray-900 mb-4">Please Register Your Visit</h2>
  <p class="mb-5 text-lg text-gray-600">Fill the form below to register your visit.</p>
  <div class="min-h-screen flex items-center justify-center">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <form method="POST" id="visit-form" class="space-y-12 bg-white p-8 rounded-md shadow-md">
      <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="reason" class="block text-sm/6 font-medium text-gray-900 text-left">Reason*</label>
            <div class="mt-3">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input 
                type="text" 
                name="reason" 
                class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6" 
                placeholder="Short reason about your visit"
                required
                minlength="1"
                value="<?php echo isset($_POST['reason']) ? htmlspecialchars($_POST['reason']) : ''; ?>">
            </div>
            <?php if (isset($errors['reason'])): ?>
                  <p class="text-left text-red-500 text-sm/6">
                    <?= htmlspecialchars($errors['reason']); ?>
                  </p>
              <?php endif; ?>
            </div>
          </div>
          <div class="sm:col-span-4">
            <label for="NIP" class="block text-sm/6 font-medium text-gray-900 text-left">NIP*</label>
            <div class="mt-3">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="text"
                  name="NIP"
                  class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                  placeholder="You get company-NIP by organization [0-9]"
                  required
                  pattern="[0-9]+"
                  value="<?php echo isset($_POST['NIP']) ? htmlspecialchars($_POST['NIP']) : ''; ?>">
              </div>
              <?php if (isset($errors['NIP'])): ?>
                  <p class="text-left text-red-500 text-sm/6">
                    <?= htmlspecialchars($errors['NIP']); ?>
                  </p>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-span-full">
            <label for="about" class="block text-sm font-medium text-gray-900 text-left">About*</label>
            <div class="mt-2">
              <textarea 
                  id="about"
                  name="about"
                  rows="3"
                  class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                  placeholder="Provide some important information about your visit"><?php echo isset($_POST['about']) ? htmlspecialchars($_POST['about']) : ''; ?></textarea>
            </div>
            <?php if (isset($errors['about'])): ?>
                <p class="text-left text-red-500 text-sm">
                    <?= htmlspecialchars($errors['about']); ?>
                </p>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="border-b border-gray-900/10 pb-12 mt-5">
        <h1 class="text-xl font-semibold text-gray-900">Visitor Information</h1>
        <p class="mt-1 text-sm/10 text-gray-600">The target organisation will see this provided info </p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-2">
            <label for="first-name" class="text-left block text-sm/6 font-medium text-gray-900">Name*</label>
            <div class="mt-2">
              <input type="text"
               id="name"
               name="name"
               class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"
               value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>"
               required>     
            </div>
            <?php if (isset($errors['name'])): ?>
                <p class="text-left text-red-500 text-sm">
                    <?= htmlspecialchars($errors['name']); ?>
                </p>
            <?php endif; ?>
          </div>

          <div class="sm:col-span-2">
            <label for="last-name" class="text-left block text-sm/6 font-medium text-gray-900">Last Name*</label>
            <div class="mt-2">
              <input type="text"
               id="lastname"
               name="lastname"
               class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"
               value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : ''; ?>"
               required>
            </div>
            <?php if (isset($errors['lastname'])): ?>
                <p class="text-left text-red-500 text-sm">
                    <?= htmlspecialchars($errors['lastname']); ?>
                </p>
            <?php endif; ?>
          </div>

          <div class="sm:col-span-2">
            <label for="email" class="text-left block text-sm/6 font-medium text-gray-900">Email address*</label>
            <div class="mt-2">
            <input id="email"
              id="email"
              name="email"
              type="text"
              class="pl-2 block w-1/2 text-left rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"
              value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"
              required>
            </div>
            <?php if (isset($errors['email'])): ?>
                <p class="text-left text-red-500 text-sm">
                    <?= htmlspecialchars($errors['email']); ?>
                </p>
            <?php endif; ?>
          </div>

          <div class="sm:col-span-3">
            <label for="visitor_id" class="text-left block text-sm/6 font-medium text-gray-900">Visitor ID*</label>
            <div class="mt-2">
            <input
              id="visitor_id"
              name="visitor_id"
              type="number"
              min="1"
              placeholder="Provide your organisation ID"
              class="pl-2 block w-1/2 text-left rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
            </div>
            <?php if (isset($errors['visitor_id'])): ?>
                <p class="text-left text-red-500 text-sm">
                    <?= htmlspecialchars($errors['visitor_id']); ?>
                </p>
                <!--only for debugging purposes-->
            <?php elseif ($visitor && isset($visitor['first_name'])): ?>
                <p class="text-left text-gray-900 text-sm">
                    <?= htmlspecialchars($visitor['first_name']); ?>
                </p>
            <?php endif; ?>
          </div>

          <div class="sm:col-span-2 sm:col-start-1">
            <label for="visit-date" class="block text-sm/6 font-medium text-gray-900">Visit Date</label>
            <div class="mt-2">
              <input type="date"
               name="visit_date"
               id="visit_date"
               class="block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"
               value="<?php echo isset($_POST['visit_date']) ? htmlspecialchars($_POST['visit_date']) : ''; ?>">
               
            </div>
            <?php if (isset($errors['visit_date'])): ?>
                <p class="text-left text-red-500 text-sm">
                    <?= htmlspecialchars($errors['visit_date']); ?>
                </p>
            <?php endif; ?>
          </div>

          <div class="sm:col-span-4">
            <div class="flex items-center gap-4">
              <div class="flex-1">
                <label for="begins_at" class="text-sm/6 font-medium text-gray-900">Begins At:</label>
                <input id="begins_at"
                 name="begins_at"
                 type="time"
                 class="mt-2 block w-full rounded-md pl-2 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                 <?php if(isset($errors['begins_at'])): ?>
                    <p class="text-left text-red-500 text-sm">
                        <?= htmlspecialchars($errors['begins_at']); ?>
                    </p>
                <?php endif; ?>
              </div>
              

              <div class="flex-1">
                <label for="end_at" class="text-sm/6 font-medium text-gray-900">Ends At:</label>
                <input id="end_at"
                 name="end_at"
                 type="time"
                 class="mt-2 block w-full rounded-md pl-2 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-6 flex items-center justify-center gap-x-6">
        <button type="button" id="cancel-button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
        <button type="submit" id="submit-button" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
      </div>
    </form>
  </div>
</div>
</div>
<div id="confirmation-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-gray-900 bg-opacity-50">
  <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full">
    <h2 id="modal-title" class="text-xl font-semibold text-gray-900 mb-4">Confirmation</h2>
    <p id="modal-message" class="text-gray-700 mb-4">Are you sure you want to proceed?</p>
    <div class="flex justify-end gap-4">
      <button id="modal-cancel" class="px-4 py-2 bg-gray-300 text-gray-900 text-sm font-semibold rounded-md hover:bg-gray-400 focus:outline-none">No</button>
      <button id="modal-confirm" class="px-4 py-2 bg-indigo-600 text-white text-sm font-semibold rounded-md hover:bg-indigo-500 focus:outline-none">Yes</button>
    </div>
  </div>
</div>
<script src="View/js/form-submit.js"></script>

<?php require 'View/Partials/footer.php'; ?>
