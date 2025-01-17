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
                <form action="/admin/category/store-category" method="POST">
                    <!-- Profile Picture Section -->
                    <h1 class="mb-12 text-lg text-sky-800">Categories</h1>
                    <?php foreach ($categories as $category) : ?>

                    <b class="text-sky-800 border-2 border-red-300 p-2 mr-4"><span
                            class=" m-4 mb-4"><?php echo $category['category_name'] ?? false ?></span></b>


                    <?php endforeach ?>

                    <!-- Full Name -->
                    <div class="mb-6 mt-10">
                        <label for="name" class="block text-slate-700 font-medium mb-2">Categorie Name</label>
                        <input type="text" id="name" name="categories_name"
                            class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400">
                        <?php if (isset($errors['categories_name'])): ?>
                        <p class="text-red-500 text-xl mt-2"><?= $errors['categories_name'] ?></p>
                        <?php endif ?>
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-end space-x-4">
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