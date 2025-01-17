<?php
$title = "Your Blog";
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
        $heads = "Your Blog";
        include('partials/title.php')
        ?>

        <!-- Blog Creation Form -->
        <section class="p-6">

        </section>

        <section>
            <form action="/admin/blog/update-blog" method="POST">
                <input type="hidden" value="<?= $cate['id'] ?>" name="pid">
                <div class="overflow-x-auto bg-sky-100 rounded-lg shadow-lg p-4">
                    <table class="w-full border-collapse border border-sky-300">
                        <thead class="bg-sky-800 text-white">
                            <tr>
                                <th class="text-left py-3 px-4">Title</th>
                                <th class="text-left py-3 px-4">Author</th>
                                <th class="text-left py-3 px-4">Published</th>
                                <th class="text-left py-3 px-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($posts as $post) : ?>
                            <tr class="hover:bg-slate-50">
                                <td class="py-3 px-4"><?= $post['blog_title'] ?? false ?></td>
                                <td class="py-3 px-4"><?= $post['author'] ?? false ?></td>
                                <td class="py-3 px-4"><?= $post['publish_date'] ?? false ?></td>
                                <td class="py-3 px-4 flex space-x-4">
                                    <a href="/admin/blog/edit-blog?id=<?= $post['id'] ?>"
                                        class="text-blue-600 hover:underline">Edit</a>
                                    <form action="/admin/blog/delete-blog" method="POST">
                                        <input type="hidden" name="id" value="<?= $post['id'] ?>">
                                        <button class="text-sm text-red-500">Delete</button>
                                        <!-- <a href="#" class="text-red-600 hover:underline">Delete</a> -->
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach ?>
                            <!-- Repeat similar rows -->
                        </tbody>
                    </table>
                </div>
            </form>
        </section>

    </main>
</div>




<?php include('partials/footer.php') ?>