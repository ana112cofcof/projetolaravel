@extends('layout.app')

@section('cabecalho')

<div class="nav_container">
  <div class="logo">
    <img src="logo.png"/>
    <div style="background: #3E7FC2; height: 40px; width: 2px; margin: 0px 10px"></div>
    <p class="pezin">BOOKLIST</p>
    
  </div>
  <div class="menu">
                <ul>
                    <li class="lis">
                        <img src="livrin.png"     class="imgLivro"/>
                        <a href="#">Minha<br> Lista</a>
                    </li>
                    <li class="lis">
                        <img src="lupa.png"       class="imgLupa"/>
                        <a href="#">Livros<br> em alta</a>
                    </li>
                    <li class="lis">
                        <img src="livrokk.png"    class="imgLivrokk"/>
                        <a href="#">Lista<br> de desejos</a>
                    </li>
                </ul>
  </div>
  <div class="search">
    <input type="text" placeholder="enter keyword">
  </div>
  
</div>

@endsection