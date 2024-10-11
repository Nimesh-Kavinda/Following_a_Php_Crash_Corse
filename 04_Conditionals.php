 <?php
 
//  <!-- Opartors -->
 
/*
    < Less than 
    > Greater than
    <= Less than or equal 
    >= greate than or equal 
    == equal to
    === Identical to 
    != not equal to 
    !== not Identical to  

*/

 $age = 18;

    // if($age >= 24){
    //     echo 'You are Old enough to vote';
    // } else {
    //     echo 'Your a not old enough to vote';
    // }

    $t = date("H");

    // if($t < 12){
    //     echo 'Good Morning';
    // }else {
    //     echo 'Godd Evening';
    // }

    $posts = ["First Post"];

    // if(!empty($posts)){
    //     echo $posts[0];
    // } else {
    //     echo 'no posts';
    // }

    // Ternary Oparators----

    // echo !empty($posts) ? $posts[0] : 'No posts';

                            //true         //else

    // $first_post = !empty($posts) ? $posts[0] : 'No posts';
    // echo $first_post;

    // In Ternary else part is nessary

    // Here is how to user Ternary without else part

    // $firstPost = $posts[0] ?? null;

    // echo $firstPost;



    // Swicthes ----------------

    $favColor = 'Green';

    switch($favColor){
        case 'Red':
        echo 'Your favorit colour is Red';
        break;

        case 'Blue':
        echo 'Your favourite color is Blue';
        break;

        case 'Green':
            echo 'Your colour is green';
            break;
        
        default:
        echo 'You do not have a colour ';    
    }



?>    