<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA DE LIVROS</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Risque&display=swap');
* {
  margin: 0;
  padding: 0;
  text-decoration: none;
  list-style: none;
}

.nav_container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #313c46;
  color: #fff;
  padding: 10px;
}

ul {
    width: 600px;
  display: flex;
  align-items:center;
  justify-content: space-between;
  padding: 5px;
  font-size: 20px;
}

.imgLivro{
    width: 30px;
    height: 30px;
}

.imgLupa{
    width: 30px;
    height: 30px;
}

.imgLivrokk{
    width: 30px;
    height: 30px;
}

li a {
   text-decoration: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  transition: all 0.3s ease;
}
ul li a:hover{
  background: #fff;
  color: black;
  padding: 5px;
  border-radius:5px;
}

.lis{
    width: 200px;
    align-items: center;
}

.logo {
  display: flex;
  align-items: center;
}

.search {
  padding: 10px;
}

input {
  padding: 5px;
  outline: none;
}

img {
  width: auto;
  height: 50px;
}

.pezin{
    color: #3E7FC2;
    font-family: "Risque", serif;
}

</style>
<body>
    <header>
    <?php echo $__env->yieldContent('cabecalho'); ?>
    </header>



</body>
</html><?php /**PATH C:\Users\22200371\Documents\TrabalhoLaravel\projeto-modelo\resources\views/layout/app.blade.php ENDPATH**/ ?>