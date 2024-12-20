<?php
$title = "Edit Profile";
include('partials/header.php')
?>

<!-- Dashboard Layout -->
<div class="flex min-h-screen">
    <!-- Sidebar -->
    <?php
    $users = "Users";
    $editProfile = "Edit Profile";
    include('partials/sidebar.php')
    ?>

    <!-- Main Content -->
    <main class="flex-grow bg-white">
        <!-- Header -->
        <?php
        $heads = "Edit Profile";
        include('partials/title.php')
        ?>

        <!-- Profile Edit Form -->
        <section class="p-8">
            <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-8">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <!-- Profile Picture Section -->
                    <div class="flex items-center justify-center mb-8">
                        <div class="relative">
                            <img id="profile-image-preview" src="https://via.placeholder.com/120" alt="Profile Picture"
                                class="w-32 h-32 rounded-full object-cover shadow">
                            <label for="profile_picture"
                                class="absolute bottom-0 right-0 bg-blue-600 text-white p-2 rounded-full cursor-pointer hover:bg-blue-500 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </label>
                            <input type="file" id="profile_picture" name="profile_picture" class="hidden"
                                accept="image/*" onchange="previewProfileImage(event)">
                        </div>
                    </div>

                    <!-- Full Name -->
                    <div class="mb-6">
                        <label for="name" class="block text-slate-700 font-medium mb-2">Full Name</label>
                        <input type="text" id="name" name="name" value="John Doe"
                            class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400"
                            required>
                    </div>

                    <!-- Email -->
                    <div class="mb-6">
                        <label for="email" class="block text-slate-700 font-medium mb-2">Email</label>
                        <input type="email" id="email" name="email" value="johndoe@example.com"
                            class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400"
                            required>
                    </div>

                    <!-- Password -->
                    <div class="mb-6">
                        <label for="password" class="block text-slate-700 font-medium mb-2">New Password</label>
                        <input type="password" id="password" name="password"
                            class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400"
                            placeholder="Enter new password (optional)">
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-6">
                        <label for="confirm_password" class="block text-slate-700 font-medium mb-2">Confirm
                            Password</label>
                        <input type="password" id="confirm_password" name="confirm_password"
                            class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400"
                            placeholder="Confirm new password">
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