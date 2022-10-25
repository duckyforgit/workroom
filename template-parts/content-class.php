 <?php $class_posts = get_sub_field('add_class');

            if( $class_posts ):  
            echo  '<table class="table"> ';
            foreach( $class_posts as $class_post ): 
              $permalink = get_permalink( $class_post->ID );
              $permalink = esc_url($permalink);
             
              $title = get_the_title( $class_post->ID );
              $title = esc_html($title);

              $strClassStart = substr($title, 0, 8);
              $strClassEnd = substr($title, 8 );
                          
                     


                 // $custom_field = get_field( 'field_name', $class_post->ID );
              echo  '<tr><td>'. $strClassStart .'</td>';
              echo '<td>'.$strClassEnd .'</td></tr>';
            endforeach; 
            echo '</table>';
            endif;