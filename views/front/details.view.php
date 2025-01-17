<!-- Header -->
<?php
$title = "Details Page";
include('partial/header.php')
?>


<!-- Blog Details -->
<section class="bg-sky-100">
    <div class="container mx-auto px-6 py-12">
        <!-- Blog Header -->
        <div class="text-center">
            <h1 class="text-4xl font-extrabold text-slate-900 mb-4"><?= $post['blog_title'] ?></h1>
            <p class="text-slate-500 text-lg">Published on :<span class="font-medium"><?= $post['publish_date'] ?>
            </p>
            <p class="text-slate-500 text-lg">Author: <span class="font-medium"><?= $post['author'] ?> | Category: <span
                        class="font-medium"><?= $post['category_name'] ?></span>
            </p>
        </div>
        <!-- Blog Image -->
        <div class="mt-8 text-center bg-sky">
            <img src="images/<?php echo $post['cover_photo'] ?>" alt="Blog Banner"
                class="w-full md:w-3/4 lg:w-2/3 mx-auto rounded-lg shadow-md">
        </div>
        <!-- Blog Content -->
        <div class="mt-12 mx-auto md:w-3/4 lg:w-2/3">
            <div class="bg-sky p-8 rounded-lg shadow-lg">
                <!-- <h2 class="text-3xl font-bold text-slate-900 mb-6">Introduction to Vue.js</h2> -->
                <p class="text-slate-700 text-lg leading-relaxed mb-6">
                    <!-- Vue.js is a progressive JavaScript framework used for building user interfaces. Unlike monolithic frameworks, Vue is designed from the ground up to be incrementally adoptable. -->
                    <?= htmlspecialchars($post['content'] ?? '') ?>
                </p>

            </div>
        </div>

    </div>
</section>

<!-- Related Blogs -->
<section class="bg-slate-50 py-16">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-slate-800 mb-8">Related Blogs</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Blog Card -->
            <?php foreach ($reletedPosts as $reletedPost) : ?>
            <?php if ($reletedPost['category_name'] === $post['category_name']): ?>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="images/<?php echo $reletedPost['cover_photo'] ?>" alt="Blog Post"
                    class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-2xl font-bold text-slate-800 mb-2"><?= $reletedPost['blog_title'] ?></h3>
                    <p class="text-gray-600 mb-4">
                        <?php echo htmlspecialchars(substr($reletedPost['content'], 0, 100)) ?></p>
                    <!-- <a href="/details?id=<?php echo $post['id'] ?>"
                        class="text-slate-800 font-medium hover:underline">Read More</a> -->
                </div>
            </div>
            <?php endif ?>
            <?php endforeach ?>
            <!-- Repeat similar cards for other related blogs -->

        </div>


    </div>
</section>

<!-- Footer -->
<?php include('partial/footer.php') ?>