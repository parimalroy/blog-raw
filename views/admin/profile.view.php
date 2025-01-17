<?php
$title = "Edit Setting";
include('partials/header.php')
?>

<!-- Dashboard Layout -->
<div class="flex min-h-screen">
    <!-- Sidebar -->
    <?php
    $users = "Users";
    $editProfile = "Edit Profile";
    $setting = "Setting";
    include('partials/sidebar.php')
    ?>

    <!-- Main Content -->
    <main class="flex-grow">
        <!-- Header -->
        <?php
        $heads = "Edit Profile";
        include('partials/title.php')
        ?>

        <!-- Settings Form -->
        <section class="p-8">
            <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-8">
                <form action="/admin/update" method="POST">
                    <!-- Site Title -->
                    <div class="mb-6">
                        <label for="name" class="block text-slate-700 font-medium mb-2">Name</label>
                        <input type="text" id="name" name="name" value="<?php echo $user['name'] ?>"
                            class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400"
                            required>
                        <?php if (isset($errors['name'])): ?>
                        <p class="text-red-500 text-xl mt-2"><?= $errors['name'] ?></p>
                        <?php endif ?>
                    </div>

                    <!-- Site Description -->
                    <div class="mb-6">
                        <label for="site_title" class="block text-slate-700 font-medium mb-2">Email</label>
                        <input type="email" id="site_title" name="email" value="<?php echo $user['email'] ?>"
                            class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400"
                            required>
                        <?php if (isset($errors['email'])): ?>
                        <p class="text-red-500 text-xl mt-2"><?= $errors['email'] ?></p>
                        <?php endif ?>
                    </div>

                    <!-- Favicon Upload -->


                    <!-- Contact Email -->
                    <!-- <div class="mb-6">
                        <label for="contact_email" class="block text-slate-700 font-medium mb-2">password</label>
                        <input type="email" id="contact_email" name="password" value="admin@example.com"
                            class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400"
                            required> -->
            </div>

            <!-- Site Maintenance Mode -->
            <!-- <div class="mb-6">
                        <label for="contact_email" class="block text-slate-700 font-medium mb-2">password</label>
                        <input type="email" id="contact_email" name="password" value="admin@example.com"
                            class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400"
                            required>
                    </div> -->

            <!-- Buttons -->
            <div class="flex justify-end space-x-4 mt-4">
                <a href="/admin"
                    class="px-6 py-3 bg-red-600 text-white font-bold rounded-lg hover:bg-red-500 transition">Cancel</a>
                <button type="submit"
                    class="px-6 py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-500 transition">Save
                    Changes</button>
            </div>
            </form>
</div>
</section>
</main>
</div>
<?php include('partials/footer.php') ?>