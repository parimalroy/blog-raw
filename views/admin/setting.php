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
        $heads = "Setting";
        include('partials/title.php')
        ?>

        <!-- Settings Form -->
        <section class="p-8">
            <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-8">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <!-- Site Title -->
                    <div class="mb-6">
                        <label for="site_title" class="block text-slate-700 font-medium mb-2">Site Title</label>
                        <input type="text" id="site_title" name="site_title" value="My Awesome Website"
                            class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400"
                            required>
                    </div>

                    <!-- Site Description -->
                    <div class="mb-6">
                        <label for="site_description" class="block text-slate-700 font-medium mb-2">Site
                            Description</label>
                        <textarea id="site_description" name="site_description"
                            class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400"
                            rows="4" required>Your website description here.</textarea>
                    </div>

                    <!-- Favicon Upload -->
                    <div class="mb-6">
                        <label class="block text-slate-700 font-medium mb-2">Favicon</label>
                        <div class="flex items-center">
                            <img id="favicon-preview" src="https://via.placeholder.com/32" alt="Favicon Preview"
                                class="w-8 h-8 rounded mr-4">
                            <label
                                class="cursor-pointer bg-blue-600 text-white px-4 py-2 rounded-md font-medium hover:bg-blue-500 transition">
                                Upload Favicon
                                <input type="file" name="favicon" id="favicon" class="hidden"
                                    accept="image/x-icon,image/png" onchange="previewFavicon(event)">
                            </label>
                        </div>
                    </div>

                    <!-- Contact Email -->
                    <div class="mb-6">
                        <label for="contact_email" class="block text-slate-700 font-medium mb-2">Contact Email</label>
                        <input type="email" id="contact_email" name="contact_email" value="admin@example.com"
                            class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400"
                            required>
                    </div>

                    <!-- Site Maintenance Mode -->
                    <div class="mb-6">
                        <label for="maintenance_mode" class="block text-slate-700 font-medium mb-2">Maintenance
                            Mode</label>
                        <select id="maintenance_mode" name="maintenance_mode"
                            class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400">
                            <option value="0">Disabled</option>
                            <option value="1">Enabled</option>
                        </select>
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-end space-x-4">
                        <a href="#"
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