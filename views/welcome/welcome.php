<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['user_id'])) :
 ?>
<div class="container">
    <h1 style= "color: white;"> Welcome team</h1>
</div>
<?php 
else: 
    $this->redirect("/users/login"); 
endif;   
?>
