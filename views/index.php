<?php 
$posts = [
  
    ['title' => 'Title 1', 'body' => 'some body 1',],
    ['title' => 'Title 2', 'body' => 'some body 2',],
    ['title' => 'Title 3', 'body' => 'some body 3',],
    ['title' => 'Title 4', 'body' => 'some body 4',]
]
?>

<?php include 'partials/header.php'; ?>

<main class="container">
  <?php include 'partials/hero.php' ?>

  <?php include 'partials/featured.php' ?>

  <div class="row g-5">
    <div class="col-md-8">
  <?php include 'partials/posts.php' ?>

    </div>

    <div class="col-md-4">
  <?php include 'partials/sidebar.php' ?>
    </div>
  </div>

</main>

<?php include 'partials/footer.php'; ?>
<script src="/assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
