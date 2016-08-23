
   }
       $imageUrl = CFS()->get( 'about_banner_image' );

       if(!$imageUrl){
         return;
       }

       $custom_css = "
               .about-hero-image{
                 background: linear-gradient(180deg,rgba(0,0,0,.4) 0,rgba(0,0,0,.4)),#969696 url({$imageUrl}) no-repeat bottom;
                 background-size: cover;
                 height: 100vh;
               }";
       wp_add_inline_style( 'inhabitent-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'inhabitent_inline_styles_method' );
