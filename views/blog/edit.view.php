<?php
$title = "Create New Blog";
include('partials/header.php')
?>

<!-- Sidebar and Main Content Container -->
<div class="flex min-h-screen">
    <!-- Sidebar -->
    <?php
    $users = "Users";
    $setting = "Setting";
    include('partials/sidebar.php');

    ?>

    <!-- Main Content -->
    <main class="flex-grow">
        <!-- Header -->
        <?php
        $heads = "Create New Blog";
        include('partials/title.php')
        ?>

        <!-- Blog Creation Form -->
        <section class="p-6">
            <form action="/admin/blog/update-blog" method="POST">
                <input type="hidden" value="<?= $cate['id'] ?>" name="pid">
                <div class="mb-6">
                    <label for="title" class="block text-slate-700 font-medium mb-2">Blog Title</label>
                    <input type="text" id="title" name="blog_title" value="<?= $post['blog_title'] ?>"
                        class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400"
                        placeholder="Enter the blog title">
                    <?php if (isset($errors['blog_title'])): ?>
                    <p class="text-red-500 text-xl mt-2"><?= $errors['blog_title'] ?></p>
                    <?php endif ?>
                </div>

                <!-- <div class="mb-6">
                    <label for="author" class="block text-slate-700 font-medium mb-2">Author</label>
                    <input type="text" id="author" name="author"
                        class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400"
                        placeholder="Enter the author name">
                    <?php if (isset($errors['author'])): ?>
                    <p class="text-red-500 text-xl mt-2"><?= $errors['author'] ?></p>
                    <?php endif ?>
                </div> -->

                <div class="mb-6">
                    <label for="publish_date" class="block text-slate-700 font-medium mb-2">Publish Date</label>
                    <input type="date" id="publish_date" name="publish_date" value="<?= $post['publish_date'] ?>"
                        class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400">
                    <?php if (isset($errors['publish_date'])): ?>
                    <p class="text-red-500 text-xl mt-2"><?= $errors['publish_date'] ?></p>
                    <?php endif ?>
                </div>

                <div class="mb-6">
                    <label for="content" class="block text-slate-700 font-medium mb-2">Content</label>
                    <textarea id="content" name="content"
                        class="w-full h-64 px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400"
                        placeholder="Write your blog content here..."><?php echo $post['content'] ?></textarea>
                    <?php if (isset($errors['content'])): ?>
                    <p class="text-red-500 text-xl mt-2"><?= $errors['content'] ?></p>
                    <?php endif ?>
                </div>

                <div class="mb-6">
                    <label for="category" class="block text-slate-700 font-medium mb-2">Category</label>
                    <select id="category" name="category_id"
                        class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400">
                        <!-- <option value="<?= $cate['id'] ?>"><?= $cate['category_name'] ?></option> -->
                        <?php foreach ($categores as $category) : ?>
                        <option value="<?= $category['id'] ?>"><?= $category['category_name'] ?>
                        </option>
                        <?php endforeach ?>

                    </select>
                </div>
                <!-- <div class="mb-6">
                    <label for="cover_photo" class="block text-slate-700 font-medium mb-2">Cover Photo</label>
                    <input type="file" id="cover_photo" name="cover_photo"
                        class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400">

                </div> -->

                <div class="flex justify-end">
                    <button type="submit"
                        class="px-6 py-3 mr-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-500 transition">Update
                        Blog</button>
                    <a href="/admin"
                        class="px-6 py-3 bg-red-600 text-white font-bold rounded-lg hover:bg-blue-500 transition">Cencle
                    </a>
                </div>
            </form>
        </section>
    </main>
</div>

<?php include('partials/footer.php') ?>