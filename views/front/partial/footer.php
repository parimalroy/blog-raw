<footer class="bg-sky-800 text-white py-6">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 Blogify. All Rights Reserved.</p>
    </div>
</footer>

<!-- Script for Mobile Menu Toggle -->
<script>
const menuToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');

menuToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
?>
<script>
Swal.fire({
    position: "top-end",
    icon: "<?php echo $_SESSION['status_code'] ?>",
    title: "<?php echo $_SESSION['status'] ?>",
    showConfirmButton: false,
    timer: 1500
});
</script>
<?php
    unset($_SESSION['status']);
} else {
}

?>
</body>

</html>