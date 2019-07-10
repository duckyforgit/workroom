<?php
/*
Template Name: Parallax
*/
  ?>
  <!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
    <style>
html, body {
    overflow: hidden;
    height: 100%; 
}
body { margin: 0; }
.MainContainer {
  perspective: 1px;
  transform-style: preserve-3d;
  height: 100vh;   
 overflow-x: hidden;
    overflow-y: scroll;
}

.ContentContainer {
  position: relative;
  display: block;
  background-color: white;
  z-index: 1;
}

.Content {
  max-width: 750px;
  margin: 0 auto;
  padding: 75px 0;
}
h1 {
  letter-spacing: -15px;
  font-family: Open Sans;
  color: white;
  text-align: center;
  font-size: 200px;
  font-weight: 800;
  line-height: 200px;

}
p {
  margin: 75px 0;
}

.ParallaxContainer {
  display: flex;
  flex: 1 0 auto;
  position: relative;
  z-index: -1;
  height: 100vh;
  width: 100%;
  justify-content: center;
  align-items: center;
  transform: translateZ(-1px) scale(2);
   transform: translateZ(-5px) scale(6);
  background:  url('http://localhost:3000/1128workroom/wp-content/themes/Prototype/dist/assets/images/header.jpg') center center no-repeat; 
  background-color: rgb(250,228, 216);
  background-size: cover;
}
 
 

</style>
  </head>
  <body>


<div class="MainContainer">

  <div class="ParallaxContainer">
    <h1>
      Aloha!
    </h1>
  </div>

  <div class="ContentContainer">
    <div class="Content">
      <p>ʻO Lorem Ipsum kahi haʻahaʻa wale nō o ka paʻi a me keʻano o nāʻoihana. ʻO Lorem Ipsum ka 'ōlelo papahana maʻamau o kaʻoihana o ka makahiki 1500, i ka wā i lawe ai kekahi mea paʻi kiʻiʻole i keʻano o ka type a scrambled iā ia e hana i kahi puke kiko'ī. ʻAʻole i ola wale i kaʻelima mau kenekulia, akā,ʻo ka leleʻana hoʻi i nāʻano o ka lolouila, e hoʻololiʻoleʻia ana. Ua hoʻolahaʻia i nā makahiki 1960 me ka hoʻokuʻuʻana i nā pepa Letraset i loko o nā moʻolelo Lorem Ipsum, a me nā mea hou aku me ka polokalamu hoʻopuka pākī e like me Aldus PageMaker me nā papa o Lorem Ipsum.
      </p>
      <p>ʻO Lorem Ipsum kahi haʻahaʻa wale nō o ka paʻi a me keʻano o nāʻoihana. ʻO Lorem Ipsum ka 'ōlelo papahana maʻamau o kaʻoihana o ka makahiki 1500, i ka wā i lawe ai kekahi mea paʻi kiʻiʻole i keʻano o ka type a scrambled iā ia e hana i kahi puke kiko'ī. ʻAʻole i ola wale i kaʻelima mau kenekulia, akā,ʻo ka leleʻana hoʻi i nāʻano o ka lolouila, e hoʻololiʻoleʻia ana. Ua hoʻolahaʻia i nā makahiki 1960 me ka hoʻokuʻuʻana i nā pepa Letraset i loko o nā moʻolelo Lorem Ipsum, a me nā mea hou aku me ka polokalamu hoʻopuka pākī e like me Aldus PageMaker me nā papa o Lorem Ipsum.
      </p>
      <p>ʻO Lorem Ipsum kahi haʻahaʻa wale nō o ka paʻi a me keʻano o nāʻoihana. ʻO Lorem Ipsum ka 'ōlelo papahana maʻamau o kaʻoihana o ka makahiki 1500, i ka wā i lawe ai kekahi mea paʻi kiʻiʻole i keʻano o ka type a scrambled iā ia e hana i kahi puke kiko'ī. ʻAʻole i ola wale i kaʻelima mau kenekulia, akā,ʻo ka leleʻana hoʻi i nāʻano o ka lolouila, e hoʻololiʻoleʻia ana. Ua hoʻolahaʻia i nā makahiki 1960 me ka hoʻokuʻuʻana i nā pepa Letraset i loko o nā moʻolelo Lorem Ipsum, a me nā mea hou aku me ka polokalamu hoʻopuka pākī e like me Aldus PageMaker me nā papa o Lorem Ipsum.
      </p>
     </div>
  </div>
</div>


<?php get_footer();
