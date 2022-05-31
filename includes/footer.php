<footer>
    &copy; <?php
            $fromYear = 2021;
            $thisYear = (int)date('Y');
            echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : ''); ?> MyMovies.
</footer>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="./scripts/script.js"></script>
</body>

</html>